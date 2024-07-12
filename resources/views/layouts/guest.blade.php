<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Power Group System') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{ asset('cliente/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('cliente/css/mystyle.css') }}">
        <link rel="shortcut icon" href="{{ asset('cliente/img/logos/logoicon.png') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('cliente/img/logos/logoicon.png') }}" type="image/x-icon">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 fondo-mg" style="  background-image:  linear-gradient(
        rgba(0, 0, 0, 0.5),
        rgba(0, 0, 0, 0.8)
      ),url({{ asset('cliente/img/background/grifo.jpg') }});">
            <div class="w-full sm:max-w-2xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg" style="margin-bottom: 1.5rem">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
