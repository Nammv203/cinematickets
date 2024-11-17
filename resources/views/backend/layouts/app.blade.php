<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.layouts.header')

    @stack('css-stack')
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        @include('backend.layouts.top-bar')

        @include('backend.layouts.left-side-bar')

        <div class="content-page">

            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    @yield('content-page')

                </div> <!-- container -->

            </div> <!-- content -->

            @include('backend.layouts.footer')

        </div>
        <!-- End Page content -->

    </div>
    <!-- END wrapper -->

    @include('backend.layouts.theme-setting')

    @include('backend.layouts.script-link')

    @stack('script-stack')

</body>

</html>
