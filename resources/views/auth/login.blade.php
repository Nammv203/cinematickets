<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title> Đăng nhập </title>
    <link rel="stylesheet" href="<?= asset('assets/css/login.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container">
    @error('success')
    <span class="invalid-feedback ml-2" role="alert" style="color: yellow">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <form action="{{route('auth.postLogin')}}" method="POST">
        @csrf
        @method('POST')
        <div class="title">Đăng nhập</div>
        <div class="input-box underline">
            <input type="text" placeholder="Nhập email của bạn" name="email" >
            @error('email')
            <span class="text-danger">
                    {{$message}}
                </span>
            @enderror
            <div class="underline"></div>
        </div>
        <div class="input-box">
            <input type="password" placeholder="Nhập password của bạn" name="password" >
            @error('password')
            <span class="text-danger">
                    {{$message}}
                </span>
            @enderror
            <div class="underline"></div>
        </div>
        <div class="input-box">
            <a href="{{route('auth.showRegistrationForm')}}">Đăng kí tài khoản</a>
        </div>
        @error('message')
        <span class="invalid-feedback ml-2" role="alert" style="color: yellow">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <div class="input-box button">
            <input type="submit" name="" value="Gửi">
        </div>
    </form>
    {{--    <div class="option">or Connect With Social Media</div>--}}
    {{--    <div class="twitter">--}}
    {{--        <a href="#"><i class="fab fa-twitter"></i>Sign in With Twitter</a>--}}
    {{--    </div>--}}
    {{--    <div class="facebook">--}}
    {{--        <a href="#"><i class="fab fa-facebook-f"></i>Sign in With Facebook</a>--}}
    {{--    </div>--}}
</div>
</body>
</html>
