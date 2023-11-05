<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if (env('APP_ENV') !== 'local')
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    @endif

    <link href="{{ asset('/customer/css/jquery-ui.css')}}" rel="stylesheet">
    <link href="{{ asset('/customer/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('/customer/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ asset('/customer/css/elegant-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('/customer/css/superslides.css')}}" rel="stylesheet">
    <link href="{{ asset('/customer/css/animate.css')}}" rel="stylesheet">
    <link href="{{ asset('/customer/css/select2.css')}}" rel="stylesheet">
    <link href="{{ asset('/customer/css/style.css')}}" rel="stylesheet">
   


    @routes
    @vite('resources/js/app.js')
    @inertiaHead
</head>

<body class="front" data-spy="scroll" data-target="#top1" data-offset="96">
    @inertia
</body>
 <script src="{{ asset('/customer/js/jquery.js')}}"></script>
<script src="{{ asset('/customer/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('/customer/js/jquery-ui.js')}}"></script>
    <script src="{{ asset('/customer/js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{ asset('/customer/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{ asset('/customer/js/superfish.js')}}"></script>

    <script src="{{ asset('/customer/js/select2.js')}}"></script>

    <script src="{{ asset('/customer/js/jquery.superslides.js')}}"></script>

    <script src="{{ asset('/customer/js/jquery.sticky.js')}}"></script>

    <script src="{{ asset('/customer/js/jquery.appear.js')}}"></script>

    <script src="{{ asset('/customer/js/jquery.ui.totop.js')}}"></script>

    <script src="{{ asset('/customer/js/jquery.caroufredsel.js')}}"></script>
    <script src="{{ asset('/customer/js/jquery.touchSwipe.min.js')}}"></script>

    <script src="{{ asset('/customer/js/jquery.parallax-1.1.3.resize.js')}}"></script>

    <script src="{{ asset('/customer/js/SmoothScroll.js')}}"></script>

    <script src="{{ asset('/customer/js/scripts.js')}}"></script>
</html>
