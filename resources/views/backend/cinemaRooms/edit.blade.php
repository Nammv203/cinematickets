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
                <h4 class="page-title">Quản lý phòng phim</h4>
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
                            <a href="{{ url()->previous() ?? route('admin.cinema.index')  }}" class="btn btn-light mb-2">
                                Quay lại
                            </a>
                            <a href="{{ route('admin.cinema.index') }}" class="btn btn-danger mb-2">
                                Danh sách phòng phim
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
                        <form action="{{ route('admin.cinemas.rooms.update',['room_id'=>$cinemaRoom->id]) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Rạp phim</label>
                                        <select class="form-select" name="cinema_id" value="{{ old('cinema_id') }}"
                                                id="cinema_id">
                                            @foreach ($cinemas as $cinema)
                                                <option value="{{ $cinema->id }}" {{$cinema->id == $cinemaRoom->cinema_id ? 'selected' : ''}}>{{ $cinema->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('cinema_id')
                                        <span class="text-danger">{{ $errors->first('cinema_id') }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Mã phòng</label>
                                        <input type="text" class="form-control mb-1" name="room_code" value="{{$cinemaRoom->room_code}}">
                                        @error('room_code')
                                        <span class="text-danger">{{ $errors->first('room_code') }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Mô tả</label>
                                        <textarea class="form-control" name="description">{{$cinemaRoom->description}}</textarea>
                                        @error('description')
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
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
