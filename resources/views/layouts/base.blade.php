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
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.dataTables.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.toast.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    

    {{-- Fonts  --}}
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    @stack('style')


</head>

<body>
    @yield('navbar')
    {{-- Scripts --}}
    {{-- Bootstrap 5.2  --}}
    <script defer src="{{ asset('js/jquery364.min.js') }}"></script>
    <script defer src="{{ asset('js/app.js') }}"></script>
    {{-- <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> --}}
    <script defer src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script defer src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script defer src="{{ asset('js/jquery.dataTables.spanish.js') }}"></script>
    <script defer src="{{ asset('js/responsive.dataTables.min.js') }}"></script>
    <script defer src="{{ asset('js/sweetalert2@11.js') }}"></script>
    <script defer src="{{ asset('js/chart.js') }}"></script>
    <script defer src="{{ asset('js/jquery.toast.min.js') }}"></script>
    <script defer src="{{ asset('js/autosize.js') }}"></script>
    <script defer src="{{ asset('js/fontawesome.js') }}"></script>

    
    @stack('scripts')
</body>


</html>
