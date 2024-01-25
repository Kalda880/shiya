<!DOCTYPE html>

<html lang="ar" class="theme-2" dir="rtl" class="light">

    <head>
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <title> Dashboard </title>
        <link rel="stylesheet" href="{{ asset('main/css/app.css')}}" />
        <link rel="stylesheet" href="{{ asset('main/css/custom.css')}}" />
        <link rel="stylesheet" href="{{ asset('main/css/rtl.css')}}" />
        @stack('css')
    </head>

    <body class="main">
        <div class="flex">


            <!-- BEGIN: Side Menu -->

            @include('admin.inc.sidebar')

            @include('admin.inc.topbar')

            @yield('content')

            </div>

        </div>


        <script src="{{ asset('main/js/app.js')}}"></script>
        <script src="{{ asset('main/js/script.js')}}"></script>
        <script src="{{ asset('front/js/script.js?rnd='.\Str::random(30))}}"></script>
     
        @include('inc.messages')

        @stack('js')

    </body>
</html>
