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
    {{-- <link href="{{ mix('/css/app.css') }}" rel="stylesheet" /> --}}
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet" />

    <link href="{{ asset('/app-assets/images/ico/apple-icon-120.png') }}" rel="apple-touch-icon" />
    <link href="{{ asset('/app-assets/images/ico/favicon.ico') }}" rel="shortcut icon" />
    <link href="{{ asset('/app-assets/css/forms/select/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/app-assets/vendors/css/vendors-rtl.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/app-assets/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('/app-assets/css/bootstrap-extended.css') }}" rel="stylesheet" />
    <link href="{{ asset('/app-assets/css/colors.css') }}" rel="stylesheet" />
    <link href="{{ asset('/app-assets/css/components.css') }}" rel="stylesheet" />
    <link href="{{ asset('/app-assets/css/themes/dark-layout.css') }}" rel="stylesheet" />
    <link href="{{ asset('/app-assets/css/themes/bordered-layout.css') }}" rel="stylesheet" />
    <link href="{{ asset('/app-assets/css/themes/semi-dark-layout.css') }}" rel="stylesheet" />
    <link href="{{ asset('/app-assets/css/core/menu/menu-types/vertical-menu.css') }}" rel="stylesheet" />
    <link href="{{ asset('/app-assets/css/pages/app-ecommerce.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet" />

    <script src="{{ asset('/app-assets/vendors/js/vendors.min.js') }}" defer></script>
    <script src="{{ asset('/app-assets/js/forms/select/select2.full.min.js') }}" defer></script>
    @routes
    @vite('resources/js/app.js')
    @inertiaHead
  </head>
 <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static menu-expanded">
    @inertia
</body>
</html>