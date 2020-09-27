<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/src/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/style.css">
        <script src="/src/js/jquery.min.js"></script>
        <script src="/src/js/bootstrap.min.js"></script>
    </head>



    <body>
        @include('../layouts/header')

        @yield('content')

        @include('layouts.footer')
    </body>
</html>
