<!DOCTYPE html>
<!--
* CoreUI Pro - Bootstrap Admin Template
* @version v2.1.14
* @link https://coreui.io/pro/
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* License (https://coreui.io/pro/license)
-->

<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="{{ config('app.name', '') }} - ...">
    <meta name="keyword" content="{{ config('app.name', '') }}">
    <title>{{ config('app.name', '') }} | @yield('title')</title>
    <!-- Icons-->
    <link rel="icon" type="image/ico" href="./images/favicon.ico" sizes="any" />
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/pace-progress/css/pace.min.css') }}" rel="stylesheet">
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">

    @include('layouts.headerbar')

    <div class="app-body">

        @include('layouts.sidebar')

        <main class="main">
            <!-- Breadcrumb-->
            @include('layouts.breadcrumbbar')

            <div class="container-fluid">
                <div class="animated fadeIn">
                    @yield('content')

                </div>
            </div>
        </main>

        @include('layouts.asidemenu')
    </div>

    @include('layouts.footer')

    <!-- CoreUI and necessary plugins-->
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('vendors/pace-progress/pace.min.js') }}"></script>
    <!-- Plugins and scripts required by this view-->
    {{-- <script src="{{ asset('vendors/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('vendors/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/main.js') }}"></script> --}}
</body>

</html>
