<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets2/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>
    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets2/img/favicon/favicon.ico') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets2/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets2/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets2/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets2/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets2/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets2/vendor/libs/apex-charts/apex-charts.css') }}" />
    <script src="{{ asset('assets2/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('assets2/js/config.js') }}"></script>
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('dashboard.layouts.sidebar')
            <div class="layout-page">
                @include('dashboard.layouts.navbar')
                @yield('container')
                @include('dashboard.layouts.footer')
            </div>
            <script src="{{ asset('assets2/vendobs/jquery/jquery.js') }}"></script>
            <script src="{{ asset('assets2/vendor/libs/popper/popper.js') }}"></script>
            <script src="{{ asset('assets2/vendor/js/bootstrap.js') }}"></script>
            <script src="{{ asset('assets2/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
            <script src="{{ asset('assets2/vendor/js/menu.js') }}"></script>
            <script src="{{ asset('assets2/vendor/libs/apex-charts/apexcharts.js') }}"></script>
            <script src="{{ asset('assets2/js/main.js') }}"></script>
            <script src="{{ asset('assets2/js/dashboards-analytics.js') }}"></script>
            <script async defer src="https://buttons.github.io/buttons.js"></script>
        </div>
    </div>
</body>

</html>
