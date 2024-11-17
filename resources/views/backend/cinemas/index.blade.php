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
                <h4 class="page-title">Quản lý rạp phim</h4>
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
                            <a href="{{ route('admin.cinema.create') }}" class="btn btn-danger mb-2">
                                <i class="mdi mdi-plus-circle me-2"></i>
                                Thêm rạp phim
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
                        <table class="table table-striped table-centered mb-0">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên rạp phim</th>
                                    <th>Mã rạp phim</th>
                                    <th>Vị trí</th>
                                    <th>Địa chỉ</th>
{{--                                    <th>Email</th>--}}
{{--                                    <th>Số điện thoại</th>--}}
                                    <th class="text-center">Ảnh</th>
                                    <th class="text-center">

                                    </th>
                                    <th class="table-action">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cinemas as $key => $cinema)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $cinema->name }}</td>
                                        <td>{{ $cinema->cinema_code }}</td>
                                        <td>{{ $cinema->location_district->district_name }}</td>
                                        <td>{{ $cinema->address }}</td>
{{--                                        <td>{{ $cinema->email }}</td>--}}
{{--                                        <td>{{ $cinema->phone }}</td>--}}

                                        <td class="category-img">
                                            <img src="{{ asset(config('filesystems.folder_storage_user.cinema') . $cinema->picture) }}"
                                                alt="film-img" class="img-fluid" width="150"/>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.cinema-rooms.index',['cinema_id'=>$cinema->id])}}" class="btn btn-info mb-2">
                                                Quản lý phòng phim
                                                <i class="mdi mdi-pencil text-white"></i>
                                            </a>
                                        </td>

                                        <td class="table-action">
                                            <div class="d-flex justify-content-around">
                                                <a href="{{ route('admin.cinema.edit', $cinema->id) }}" class="action-icon">
                                                    <i class="mdi mdi-pencil text-primary"></i>
                                                </a>
                                                <form action="{{ route('admin.cinema.destroy', $cinema->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-bg-none m-0 p-0"
                                                        onclick="return confirm('Bạn có chắc chắn muốn xóa rạp phim này?')">
                                                        <i class="mdi mdi-delete icon-delete text-danger"></i>
                                                    </button>
                                                </form>
                                            </div>
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
