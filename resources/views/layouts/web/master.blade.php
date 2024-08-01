<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Power Group System</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('cliente/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('cliente/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('cliente/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('cliente/css/mystyle.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('cliente/img/logos/logoicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('cliente/img/logos/logoicon.png') }}" type="image/x-icon">

</head>

<body>

        <!-- PageWrapper -->
        <div class="page-wrapper">

            <!-- Preloader -->
            <div class="preloader"></div>
            <!-- End Preloader -->

            <!-- End Preloader -->
            <div class="menu-desplegable  d-lg-none" onclick="desplegarMenu()">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                    class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                </svg>
            </div>

            {{-- header --}}
            @include('layouts.web.header')

            @yield('cuerpo')

            {{-- footer --}}
            @include('layouts.web.footer')

        </div>

        <!-- Scroll To Top -->
        <div class="scroll-to-top scroll-to-target" onclick="llevar('principal')"><span
                class="fa fa-angle-double-up"></span></div>

        <!-- chat-whatsapp -->
        <div id="chat-whatsapp">
            <a target="_blank"
                href="https://api.whatsapp.com/send?phone=+51901716475&text=Hola!%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus%20servicios.">
                <img src=" {{ asset('cliente/img/avatar/avatrChat.png') }} " alt="Whatsapp" class="img-fluid">
            </a>
        </div>
        @stack('scripts')

        <script src="{{ asset('cliente/js/jquery.js') }}" type='text/javascript'></script>
        <script src="{{ asset('cliente/js/appear.js') }}" type='text/javascript'></script>
        <script src="{{ asset('cliente/js/owl.js') }}" type='text/javascript'></script>
        <script src="{{ asset('cliente/js/wow.js') }}" type='text/javascript'></script>
        <script src="{{ asset('cliente/js/odometer.js') }}" type='text/javascript'></script>
        <script src="{{ asset('cliente/js/mixitup.js') }}" type='text/javascript'></script>
        <script src="{{ asset('cliente/js/popper.min.js') }}" type='text/javascript'></script>
        <script src="{{ asset('cliente/js/parallax.min.js') }}" type='text/javascript'></script>
        <script src="{{ asset('cliente/js/bootstrap.min.js') }}" type='text/javascript'></script>
        <script src="{{ asset('cliente/js/tilt.jquery.min.js') }}" type='text/javascript'></script>
        <script src="{{ asset('cliente/js/magnific-popup.min.js') }}" type='text/javascript'></script>
        <script src="{{ asset('cliente/js/script.js') }} " type='text/javascript'></script>

</body>

</html>
