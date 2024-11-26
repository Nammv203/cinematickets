<!DOCTYPE html>
<html lang="en">

<head>
    @include('website.partials.head')
    <link rel="stylesheet" href="{{ asset('assets/css/component/sidebar2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/layout/layout2.css') }}">

    @stack('css')
</head>

<body>
    <!-- preloader Start -->
    <div id="preloader">
        <div id="status">
            <img src="{{ asset('assets-website') }}/images/header/horoscope.gif" id="preloader_image" alt="loader">
        </div>
    </div>

    {{--  --}}
    @include('website.partials.header')

    <div class="container light-style flex-grow-1 container-p-y">

        <h4 class="mb-3">
            {{--  --}}
            @yield('title')
        </h4>

        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 mt-0">

                    {{--  --}}
                    @include('website.partials.sidebar2')

                </div>
                <div class="col-md-9">

                    {{--  --}}
                    @yield('page-content')

                </div>
            </div>
        </div>
    </div>

    @include('website.partials.script')
    @stack('script')
</body>

</html>