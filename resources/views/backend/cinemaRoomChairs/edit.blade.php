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
                            <a href="{{ route('admin.cinema.index') }}" class="btn btn-danger mb-2">
                                Danh sách rạp phim
                            </a>
                            <a href="{{route('admin.cinema-rooms.index',['cinema_id'=>$cinema->id])}}" class="btn btn-info mb-2">
                                Quản lý phòng phim
                                <i class="mdi mdi-pencil text-white"></i>
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
                        <form action="{{ route('admin.cinema.update', $cinema->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Tên rạp phim</label>
                                        <input type="text" class="form-control mb-1" name="name"
                                            value="{{ old('name', $cinema->name) }}">
                                        @error('name')
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="form-label">Mã rạp phim</label>
                                        <input type="text" class="form-control mb-1" name="cinema_code"
                                            value="{{ old('cinema_code', $cinema->cinema_code) }}">
                                        @error('cinema_code')
                                            <span class="text-danger">{{ $errors->first('cinema_code') }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="form-label">Chọn tỉnh</label>
                                        <select class="form-select" name="province" value="{{ old('province') }}"
                                            id="province">
                                            @foreach ($provinces as $province)
                                                <option value="{{ $province->id }}"
                                                    {{ $province->id == $cinema->location_district->province_id ? 'selected' : '' }}>
                                                    {{ $province->province_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('province')
                                            <span class="text-danger">{{ $errors->first('province') }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="form-label">Chọn huyện</label>
                                        <select class="form-select" name="location_id" value="{{ old('location_id') }}"
                                            id="district">

                                            @foreach ($districtWithCinema[0]->location_districts as $district)
                                                <option value="{{ $district->id }}"
                                                    {{ $cinema->location_id == $district->id ? 'selected' : '' }}>
                                                    {{ $district->district_name }}
                                                </option>
                                            @endforeach

                                        </select>
                                        @error('location_id')
                                            <span class="text-danger">{{ $errors->first('location_id') }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="form-label">Ảnh</label>
                                        <input type="file" class="form-control mb-1" name="picture" id="pictureInput">
                                        @error('picture')
                                            <span class="text-danger">{{ $errors->first('picture') }}</span>
                                        @enderror

                                        @if ($cinema->picture)
                                            <img src="{{ asset(config('filesystems.folder_storage_user.cinema') . $cinema->picture) }}"
                                                alt="Current Picture" class="img-thumbnail mt-3" alt="Vui lòng chọn ảnh"
                                                width="200" id="previewImage">
                                        @endif
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control mb-1" name="email"
                                            value="{{ old('email', $cinema->email) }}">
                                        @error('email')
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="form-label">Số điện thoại</label>
                                        <input type="text" class="form-control mb-1" name="phone"
                                            value="{{ old('phone', $cinema->phone) }}">
                                        @error('phone')
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="form-label">Địa chỉ</label>
                                        <input type="text" class="form-control mb-1" name="address"
                                            value="{{ old('address', $cinema->address) }}">
                                        @error('address')
                                            <span class="text-danger">{{ $errors->first('address') }}</span>
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
@push('script-stack')
    <script>
        $(document).ready(function() {
            $('#pictureInput').on('change', function(event) {
                const file = event.target.files[0];

                if (file) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        $('#previewImage').attr('src', e.target.result).show();
                    }

                    reader.readAsDataURL(file);
                }
            });

            function get_district() {
                $('#province').change(function() {
                    let provinceID = $(this).val();

                    $.ajax({
                        url: '/admin/get-district-with-province/' + provinceID,
                        type: 'GET',
                        success: function(data) {
                            $("#district").empty();

                            $.each(data.location_districts, function(key, value) {

                                $('#district').append('<option value="' + value.id +
                                    '">' + value.district_name + '  </option>')
                            })
                        },
                        error: function(error) {
                            console.log('error', error)
                        }
                    })
                })
            }

            // call function
            get_district();
        })
    </script>
@endpush
