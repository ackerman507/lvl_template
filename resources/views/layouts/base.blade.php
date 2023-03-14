<!doctype html>
<html lang="en">

<head>
    @routes
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('template_title')</title>
    
    {{-- Styles  --}}
    {{-- Bootstrap 5.2  --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.toast.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">

    {{-- Fonts  --}}
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    @stack('style')
    {{-- Scripts --}}
    {{-- Bootstrap 5.2  --}}
    <script defer src="{{ asset('js/app.js') }}"></script>
    <script defer src="{{ asset('js/jquery-3.6.4.js') }}"></script>
    <script defer src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script defer src="{{ asset('js/jquery.dataTables.spanish.js') }}"></script>
    <script defer src="{{ asset('js/responsive.bootstrap5.min.js') }}"></script>
    <script defer src="{{ asset('js/sweetalert2@11.js') }}"></script>
    <script defer src="{{ asset('js/chart.js') }}"></script>
    <script defer src="{{ asset('js/jquery.toast.min.js') }}"></script>
    <script defer src="{{ asset('js/autosize.js') }}"></script>
    <script defer src="{{ asset('js/fontawesome.js') }}"></script>
    
</head>

<body>
    @yield('navbar')
</body>

@stack('scripts')

</html>
