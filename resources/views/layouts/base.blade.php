<!doctype html>
<!--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>

<div class="page-container">

    <x-header/>

    @yield('content')

    <x-footer/>

</div>

</body>

</html>