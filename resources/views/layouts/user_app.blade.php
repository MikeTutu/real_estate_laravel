<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/brands.min.css" integrity="sha512-DJLNx+VLY4aEiEQFjiawXaiceujj5GA7lIY8CHCIGQCBPfsEG0nGz1edb4Jvw1LR7q031zS5PpPqFuPA8ihlRA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="assets/plugins/aos/aos.css">

    <link rel="stylesheet" href="assets/css/feather.css">

    <link rel="stylesheet" href="assets/plugins/apex/apexcharts.css">

    <link rel="stylesheet" href="assets/css/style.css">

    @yield('css')
</head>

<body>

    <!-- BEGIN: Sidebar Group -->
        {{-- <x-admin.side_bar /> --}}
        @yield('header')
    <!-- END: Sidebar Group -->

    <!-- begin::main -->
    <div class="main-wrapper innerpagebg">
        <div class="dashboard-content mt-4">
        @yield('body')
        </div>
    </div>
    <!-- end::main -->

    <!-- Plugin scripts -->
    @yield('footer')
    @yield('scripts')

    <!-- App scripts -->
    <script data-cfasync="false"
        src="https://listee.dreamstechnologies.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.7.1.min.js" type="b572426e66322b4ec0b5dc18-text/javascript"></script>

    <script src="assets/js/bootstrap.bundle.min.js" type="b572426e66322b4ec0b5dc18-text/javascript"></script>

    <script src="assets/plugins/select2/js/select2.min.js" type="b572426e66322b4ec0b5dc18-text/javascript"></script>

    <script src="assets/plugins/aos/aos.js" type="b572426e66322b4ec0b5dc18-text/javascript"></script>

    <script src="assets/js/backToTop.js" type="b572426e66322b4ec0b5dc18-text/javascript"></script>

    <script src="assets/plugins/apex/apexcharts.min.js" type="b572426e66322b4ec0b5dc18-text/javascript"></script>
    <script src="assets/plugins/apex/chart-data.js" type="b572426e66322b4ec0b5dc18-text/javascript"></script>

    <script src="assets/js/feather.min.js" type="b572426e66322b4ec0b5dc18-text/javascript"></script>

    <script src="assets/js/script.js" type="b572426e66322b4ec0b5dc18-text/javascript"></script>
    <script src="https://listee.dreamstechnologies.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="b572426e66322b4ec0b5dc18-|49" defer></script>
    
</body>

</html>