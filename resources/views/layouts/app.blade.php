<!doctype html>
<html class="no-js" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Emmys</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="Kofi - Coffee Shop Website Template">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('images/logo/Png/Asset 10@4x.png')}}">

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Fonts CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="{{ URL::asset('css/vendor/bootstrap.min.css') }}">
    

    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/plugins/simple-line-icons.min.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/plugins/ion.rangeSlider.min.css') }}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/website.css') }}">

   <script src="{{ URL::asset('js/menu.js') }}"></script>
   <script src="{{ URL::asset('js/branches.js') }}"></script>
 
   <style>
    .success-popup {
        display: none;
        position: fixed;
        top: 20px;
        right: 20px;
        background-color: #28a745; /* Green color, you can customize */
        color: #fff;
        padding: 10px;
        border-radius: 5px;
        z-index: 999;
}

   </style>
</head>

<body>


    @include('layouts.components.header')


    @include('layouts.components.cart')


        <main>
            @yield('content')
        </main>

    @include('layouts.components.footer')

    
    <button class="scroll-to-top"><i class="sli-arrow-up"></i></button>

    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Vendors JS -->
    <script src="{{URL::asset('js/vendor/modernizr-3.11.7.min.js')}}"></script>
    <script src="{{URL::asset('js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{URL::asset('js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
    <script src="{{URL::asset('js/vendor/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugins JS -->
    <script src="{{URL::asset('js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{URL::asset('js/plugins/jquery.countdown.min.js')}}"></script>
    <script src="{{URL::asset('js/plugins/svg-inject.min.js') }}"></script>
    <script src="{{URL::asset('js/plugins/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{URL::asset('js/plugins/ion.rangeSlider.min.js')}}"></script>
    <script src="{{URL::asset('js/plugins/jquery.zoom.min.js')}}"></script>
    <script src="{{URL::asset('js/plugins/resize-sensor.js')}}"></script>
    <script src="{{URL::asset('js/plugins/jquery.sticky-sidebar.min.js')}}"></script>

    <!-- Activation JS -->
    <script src="{{URL::asset('js/active.js')}}"></script>
</body>
</html>
