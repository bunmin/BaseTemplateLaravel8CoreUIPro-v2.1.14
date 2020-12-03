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
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/pace-progress/css/pace.min.css') }}" rel="stylesheet">
  </head>
  <body class="app flex-row align-items-center">
    @yield('content')

    <!-- CoreUI and necessary plugins-->
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('vendors/pace-progress/pace.min.js') }}"></script>
  </body>
</html>
