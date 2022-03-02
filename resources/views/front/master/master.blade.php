<!doctype html>
<html class="no-js" lang="us">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>The HR Platform</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Cristiano Borges - cristianovieirati@gmail.com">
    <!-- Place favicon.ico in the root directory -->
    {{-- <link rel="apple-touch-icon" sizes="180x180" href="{{ url('assets/images/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('assets/images/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/images/favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{ url('assets/images/favicons/site.webmanifest')}}"> --}}
    <meta property="og:title" content="The HR Platform" />
    <meta property="og:description" content="." />

    {{-- {!! $head ?? '' !!} --}}
    {{-- <link rel="stylesheet" href="{{ URL::asset('')}}"> --}}
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/preloader.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/fontAwesome5Pro.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/elegantFont.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/default.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/style.css')}}">
</head>

<body>

    <!-- preloader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_four"></div>
                <div class="object" id="object_five"></div>
                <div class="object" id="object_six"></div>
                <div class="object" id="object_seven"></div>
                <div class="object" id="object_eight"></div>
            </div>
        </div>

    </div>

    <div class="scroll-up" id="scroll" style="display: none;">
        <a href="javascript:void(0);"><i class="fas fa-level-up-alt"></i></a>
    </div>

    @include('front.includes.header')

    <div class="body-overlay"></div>

    <main>

        @yield('content')

    </main>

    @include('front.includes.footer')

    <!-- JS here -->
    {{-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
    <script src="{{ URL::asset('/assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/vendor/waypoints.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/jquery.meanmenu.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/slick.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/ajax-form.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/wow.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/main.js')}}"></script>
</body>

</html>
