@extends('backend.layouts.app')
@push('css-stack')
    <style>
        .category-img {
            max-width: 200px;
            max-height: 100px
        }

        .icon-delete {
            font-size: 20px;
        }
    </style>
@endpush

@section('content-page')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                {{-- <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                        <li class="breadcrumb-item active">Products</li>
                    </ol>
                </div> --}}
                <h4 class="page-title">Quản lý tài khoản</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="row mb-3">
                        <div class="col-sm-5">
                            <a href="{{ route('admin.user.create') }}" class="btn btn-danger mb-2">
                                <i class="mdi mdi-plus-circle me-2"></i>
                                Thêm tài khoản
                            </a>
                        </div>
                        <div class="col-sm-7">
                            <div class="text-sm-end">
                                <button type="button" class="btn btn-success mb-2 me-1"><i
                                        class="mdi mdi-cog-outline"></i></button>
                                <button type="button" class="btn btn-light mb-2 me-1">Import</button>
                                <button type="button" class="btn btn-light mb-2">Export</button>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group mt-3">
                                <select class="form-select" name="role" value="{{ old('role') }}" id="select-role">
                                    @foreach (config('constant.ROLES') as $key => $val)
                                        <option value="{{ $val }}">{{ $key }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <table class="table table-striped table-centered mb-0">
                            <thead>
                                <tr>
                                    <th>Họ tên</th>
                                    <th>Email</th>
                                    <th>SDT</th>
                                    <th>Ngày sinh</th>
                                    <th>Vai trò</th>
                                    <th>Trạng thái</th>
                                    <th class="table-action"></th>
                                </tr>
                            </thead>
                            <tbody id="user-table">
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->birthday }}</td>

                                        @foreach (config('constant.ROLES') as $key => $val)
                                            @if ($val == $user->role_id)
                                                <td>{{ $key }}</td>
                                            @endif
                                        @endforeach

                                        <td>{{ $user->is_active == 0 ? 'Chưa kích hoạt' : 'Đã kích hoạt' }}</td>

                                        <td class="table-action">
                                            @if (auth()->check() && auth()->user()->role_id == config('constant.ROLES.SUPER_ADMIN'))
                                                <div class="d-flex justify-content-around">
                                                    <a href="{{ route('admin.user.edit', $user->id) }}"
                                                        class="action-icon">
                                                        <i class="mdi mdi-pencil text-primary"></i>
                                                    </a>

                                                    <form action="{{ route('admin.user.destroy', $user->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" class="btn btn-bg-none m-0 p-0"
                                                            onclick="return confirm('Bạn có chắc chắn muốn xóa tài khoản này?')">
                                                            <i class="mdi mdi-delete icon-delete text-danger"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            @endif

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script-stack')
    <script>
        $(document).ready(function() {
            const configRoles = @json(config('constant.ROLES'));
            let authUserId = {{ auth()->user()->id }};
            let authRoleId = {{ auth()->user()->role_id }};

            function get_user_with_role() {
                $('#select-role').change(function() {
                    let role_id = $(this).val();

                    $.ajax({
                        url: '/admin/user/' + role_id,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {

                            if (Array.isArray(data.users) && data.users.length) {
                                let users = data.users;
                                let tbody = $("#user-table");
                                tbody.empty();

                                users.forEach(user => {
                                    let roleName = '';

                                    $.each(configRoles, function(key, val) {
                                        if (val === user.role_id) {
                                            roleName = key;
                                            return false;
                                        }
                                    });

                                    let deleteButton = '';
                                    if (authUserId !== user.id && authRoleId == configRoles.SUPER_ADMIN) {
                                        deleteButton = `
                                            <form action="{{ route('admin.user.destroy', '') }}/${user.id}"
                                                method="POST"
                                                onsubmit="return confirm('Bạn có chắc chắn muốn xóa tài khoản này?')">

                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                                <button type="submit" class="btn btn-bg-none m-0 p-0">
                                                    <i class="mdi mdi-delete icon-delete text-danger"></i>
                                                </button>
                                            </form>
                                        `;
                                    }

                                    let userRow = `
                                        <tr>
                                            <td>${user.name}</td>
                                            <td>${user.email}</td>
                                            <td>${user.phone}</td>
                                            <td>${user.birthday || ''}</td>
                                            <td>${roleName}</td>
                                            <td>${user.is_active == 0 ? 'Chưa kích hoạt' : 'Đã kích hoạt'}</td>
                                            <td class="table-action">

                                                @if (auth()->check() && auth()->user()->role_id == config('constant.ROLES.SUPER_ADMIN'))

                                                    <div class="d-flex justify-content-around">
                                                        <a href="/admin/user/edit/${user.id}" class="action-icon">
                                                            <i class="mdi mdi-pencil text-primary"></i>
                                                        </a>
                                                        ${deleteButton}
                                                    </div>

                                                @endif
                                            </td>
                                        </tr>
                                    `;

                                    tbody.append(userRow);
                                });
                            } else {
                                $("#user-table").empty();
                            }
                        },
                        error: function(error) {
                            console.log('error', error);
                        }
                    });
                });
            }

            // call function
            get_user_with_role();
        })
    </script>
@endpush
