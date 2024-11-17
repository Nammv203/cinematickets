@extends('backend.layouts.app')
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
                            <a href="{{ route('admin.user.index') }}" class="btn btn-danger mb-2">
                                Danh sách tài khoản
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
                    </div>

                    <div class="row">
                        <form action="{{ route('admin.user.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')

                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Họ tên</label>
                                        <input type="text" class="form-control mb-1" name="name"
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="form-label">SDT</label>
                                        <input type="text" class="form-control mb-1" name="phone"
                                            value="{{ old('phone') }}">
                                        @error('phone')
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="form-label">Ngày sinh</label>
                                        <input type="date" class="form-control mb-1" name="birthday"
                                            value="{{ old('birthday') }}">
                                        @error('birthday')
                                            <span class="text-danger">{{ $errors->first('birthday') }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="form-label">Trạng thái kích hoạt</label> <br>
                                        <input type="checkbox" id="switch3" checked data-switch="success"
                                            name="is_active" />
                                        <label for="switch3" data-on-label="On" data-off-label="Off"></label>

                                        @error('is_active')
                                            <span class="text-danger">{{ $errors->first('is_active') }}</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control mb-1" name="email"
                                            value="{{ old('email') }}">
                                        @error('email')
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="form-label">Mật khẩu</label>
                                        <input type="password" class="form-control mb-1" name="password"
                                            value="{{ old('password') }}">
                                        @error('password')
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="form-label">Vai trò</label>
                                        <select class="form-select" name="role_id" value="{{ old('role_id') }}">
                                            @foreach (config('constant.ROLES') as $key => $val)

                                                @if ($val == config('constant.ROLES.SUPER_ADMIN'))
                                                    @continue
                                                @endif

                                                    <option value="{{ $val }}">{{ $key }}</option>
                                                @endforeach

                                        </select>
                                        @error('role_id')
                                            <span class="text-danger">{{ $errors->first('role_id') }}</span>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Xác nhận</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
