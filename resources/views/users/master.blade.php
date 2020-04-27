<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.png">
        <!-- all css here -->
        <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="{{ asset('/frontend/css/bootstrap.min.css') }}">
        <!-- animate css -->
        <link rel="stylesheet" href="{{ asset('/frontend/css/animate.css') }}">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="{{ asset('/frontend/css/meanmenu.min.css') }}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="{{ asset('/frontend/css/owl.carousel.css') }}">
        <!-- font-awesome css -->
        <link rel="stylesheet" href="{{ asset('/frontend/css/font-awesome.min.css') }}">
        <!-- flexslider.css-->
        <link rel="stylesheet" href="{{ asset('/frontend/css/flexslider.css') }}">
        <!-- chosen.min.css-->
        <link rel="stylesheet" href="{{ asset('/frontend/css/chosen.min.css') }}">
        <!-- style css -->
        <link rel="stylesheet" href="{{ asset('/frontend/style.css') }}">
        <!-- responsive css -->
        <link rel="stylesheet" href="{{ asset('/frontend/css/responsive.css') }}">
        <!-- modernizr css -->
        <script src="{{ asset('/frontend/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>
    <body>
        <!-- header-area-start -->
        @include('users.shared.header')
        <!-- header-area-end -->
        <!-- banner-area-start -->
        @yield('content')
        <!-- banner-static-area-end -->
                <!-- testimonial-area-start -->
        @include('users.shared.footer')
        <!-- testimonial-area-end -->
        <script src="{{ asset('/frontend/js/vendor/jquery-1.12.0.min.js') }}"></script>
        <!-- bootstrap js -->
        <script src="{{ asset('/frontend/js/bootstrap.min.js') }}"></script>
        <!-- owl.carousel js -->
        <script src="{{ asset('/frontend/js/owl.carousel.min.js') }}"></script>
        <!-- meanmenu js -->
        <script src="{{ asset('/frontend/js/jquery.meanmenu.js') }}"></script>
        <!-- wow js -->
        <script src="{{ asset('/frontend/js/wow.min.js') }}"></script>
        <!-- jquery.parallax-1.1.3.js -->
        <script src="{{ asset('/frontend/js/jquery.parallax-1.1.3.js') }}"></script>
        <!-- jquery.countdown.min.js -->
        <script src="{{ asset('/frontend/js/jquery.countdown.min.js') }}"></script>
        <!-- jquery.flexslider.js -->
        <script src="{{ asset('/frontend/js/jquery.flexslider.js') }}"></script>
        <!-- chosen.jquery.min.js -->
        <script src="{{ asset('/frontend/js/chosen.jquery.min.js') }}"></script>
        <!-- jquery.counterup.min.js -->
        <script src="{{ asset('/frontend/js/jquery.counterup.min.js') }}"></script>
        <!-- waypoints.min.js -->
        <script src="{{ asset('/frontend/js/waypoints.min.js') }}"></script>
        <!-- plugins js -->
        <script src="{{ asset('/frontend/js/plugins.js') }}"></script>
        <!-- main js -->
        <script src="{{ asset('/frontend/js/main.js') }}"></script>
    </body>
</html>

