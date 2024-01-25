<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('images/logo.png')}}" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <title>شية - لوحة التحكم</title>

        <link rel="stylesheet" href="{{ asset('main/css/app.css')}}" />
        <link rel="stylesheet" href="{{ asset('main/css/custome.css')}}" />
        <link rel="stylesheet" href="{{ asset('main/css/designer.css?rnd='.\Str::random(30))}}" />
        <link rel="stylesheet" href="{{ asset('main/css/designer-rtl.css')}}" />
        

        @yield('js')

    </head>
