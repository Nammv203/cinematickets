<!DOCTYPE html>

<html lang="en">

<head>
    @include('website.partials.head')

    <style>
        body {
            background: #f5f5f5;
        }
        .ui-w-80 {
            width: 80px !important;
            height: auto;
        }
        label.btn {
            margin-bottom: 0;
        }
        .btn-outline-primary {
            border-color: #26B4FF;
            background: transparent;
            color: #26B4FF;
        }
        .btn {
            cursor: pointer;
        }

        .text-light {
            color: #babbbc !important;
        }

        .btn-facebook {
            border-color: rgba(0, 0, 0, 0);
            background: #3B5998;
            color: #fff;
        }

        .btn-instagram {
            border-color: rgba(0, 0, 0, 0);
            background: #000;
            color: #fff;
        }

        .card {
            background-clip: padding-box;
            box-shadow: 0 1px 4px rgba(24, 28, 33, 0.012);
        }

        .row-bordered {
            overflow: hidden;
        }

        .account-settings-fileinput {
            position: absolute;
            visibility: hidden;
            width: 1px;
            height: 1px;
            opacity: 0;
        }

        .account-settings-links .list-group-item.active {
            font-weight: bold !important;
        }

        html:not(.dark-style) .account-settings-links .list-group-item.active {
            background: transparent !important;
        }

        .account-settings-multiselect~.select2-container {
            width: 100% !important;
        }

        .light-style .account-settings-links .list-group-item {
            padding: 0.85rem 1.5rem;
            border-color: rgba(24, 28, 33, 0.03) !important;
        }

        .light-style .account-settings-links .list-group-item.active {
            color: #4e5155 !important;
        }

        .material-style .account-settings-links .list-group-item {
            padding: 0.85rem 1.5rem;
            border-color: rgba(24, 28, 33, 0.03) !important;
        }

        .material-style .account-settings-links .list-group-item.active {
            color: #4e5155 !important;
        }

        .dark-style .account-settings-links .list-group-item {
            padding: 0.85rem 1.5rem;
            border-color: rgba(255, 255, 255, 0.03) !important;
        }

        .dark-style .account-settings-links .list-group-item.active {
            color: #fff !important;
        }

        .light-style .account-settings-links .list-group-item.active {
            color: #4E5155 !important;
        }

        .light-style .account-settings-links .list-group-item {
            padding: 0.85rem 1.5rem;
            border-color: rgba(24, 28, 33, 0.03) !important;
        }

        /*  */
        .bg-secondary-soft {
            background-color: rgba(170, 176, 184, 0.1) !important;
        }

        .rounded {
            border-radius: 5px !important;
        }

        .py-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important;
        }

        .px-4 {
            padding-right: 1.5rem !important;
            padding-left: 1.5rem !important;
        }

        .file-upload .square {
            height: 250px;
            width: 250px;
            margin: auto;
            vertical-align: middle;
            border: 1px solid #e5dfe4;
            background-color: #fff;
            border-radius: 5px;
        }

        .text-secondary {
            --bs-text-opacity: 1;
            color: rgba(208, 212, 217, 0.5) !important;
        }

        .btn-success-soft {
            color: #28a745;
            background-color: rgba(40, 167, 69, 0.1);
        }

        .btn-danger-soft {
            color: #dc3545;
            background-color: rgba(220, 53, 69, 0.1);
        }

        .form-control {
            display: block;
            width: 100%;
            padding: 0.5rem 1rem;
            font-size: 0.9375rem;
            font-weight: 400;
            line-height: 1.6;
            color: #29292e;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #e5dfe4;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 5px;
            -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        }
        .container {
            margin-top: 150px;
        }
    </style>
</head>

<body>
    @include('website.partials.header')

    <div class="container light-style flex-grow-1 container-p-y">

        <h4 class="mb-3">
            Tài khoản của tôi
        </h4>

        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 mt-0">

                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="{{ route('auth.profile') }}">
                            Tài khoản</a>

                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">
                            Đơn mua</a>

                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">
                            Lịch sử mua
                        </a>
                    </div>
                </div>
                <div class="col-md-9">

                    <div class="row">
                        <div class="col-12">
                            <!-- Form START -->
                            <div class="row mb-5 gx-5">
                                <!-- Contact detail -->
                                <div class="col-xxl-8 mb-xxl-0">
                                    <div class="bg-secondary-soft px-4 py-3 rounded">
                                        <div class="row g-3">

                                            <form action="{{ route('auth.profile.update') }}" method="post">
                                                @csrf
                                                @method('PATCH')

                                                <!-- -->
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Email</label>
                                                    <input type="email" class="form-control" name="email"
                                                        aria-label="Email" value="{{ $user->email }}" readonly
                                                        disabled>
                                                </div>

                                                <!-- -->
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Họ tên
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" name="name"
                                                        aria-label="Họ tên" value="{{ $user->name }}">

                                                    @error('name')
                                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                                    @enderror
                                                </div>

                                                <!-- -->
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">SDT
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" name="phone"
                                                        aria-label="SDT" value="{{ $user->phone }}">

                                                    @error('phone')
                                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                                    @enderror
                                                </div>

                                                <!-- -->
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Ngày sinh
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <input type="date" class="form-control" name="birthday"
                                                        aria-label="Ngày sinh" value="{{ $user->birthday }}">

                                                    @error('birthday')
                                                        <span class="text-danger">{{ $errors->first('birthday') }}</span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-12 text-right mt-3 mr-3">
                                                    <button type="submit" class="btn btn-primary">Lưu</button>&nbsp;
                                                </div>
                                            </form>
                                        </div> <!-- Row END -->
                                    </div>
                                </div>
                            </div> <!-- Row END -->

                            <!-- Social media detail -->
                            <div class="row mb-5 gx-5">
                                <!-- change password -->
                                <div class="col-xxl-6">
                                    <div class="bg-secondary-soft px-4 pb-3 rounded">
                                        <div class="row g-3">
                                            <label class="my-4 pl-3">Đổi mật khẩu</label>

                                            <form action="{{ route('auth.profile.change-password') }}" method="post">
                                                @csrf
                                                @method('PATCH')

                                                <!-- Old password -->
                                                <div class="col-md-12 mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">
                                                        Mật khẩu cũ
                                                    </label>
                                                    <input type="password" class="form-control"
                                                        id="exampleInputPassword1" name="current_password">

                                                    @error('current_password')
                                                        <span
                                                            class="text-danger">{{ $errors->first('current_password') }}</span>
                                                    @enderror
                                                </div>

                                                <!-- New password -->
                                                <div class="col-md-12 mb-3">
                                                    <label for="exampleInputPassword2" class="form-label">
                                                        Mật khẩu mới
                                                    </label>
                                                    <input type="password" class="form-control"
                                                        id="exampleInputPassword2" name="new_password">

                                                    @error('new_password')
                                                        <span
                                                            class="text-danger">{{ $errors->first('new_password') }}</span>
                                                    @enderror
                                                </div>

                                                <!-- Confirm password -->
                                                <div class="col-md-12 mb-3">
                                                    <label for="exampleInputPassword3" class="form-label">
                                                        Xác nhận mật khẩu
                                                    </label>
                                                    <input type="password" class="form-control"
                                                        id="exampleInputPassword3" name="new_password_confirmation">

                                                    @error('new_password_confirmation')
                                                        <span
                                                            class="text-danger">{{ $errors->first('new_password_confirmation') }}</span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-12 text-right mt-3 mr-3">
                                                    <button type="submit" class="btn btn-primary">Lưu</button>&nbsp;
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Row END -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- prs theater Slider End -->
    @include('website.partials.script')

</body>

</html>