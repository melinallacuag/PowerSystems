@extends('layouts.web.master')
@section('cuerpo')
    <!-- Page Title -->
    <section class="page-title img-encabezado"
        style="background-image:url({{ asset('cliente/img/background/background_about.png') }});">
        <div class="auto-container">
            <h2>Servicios</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ asset('/') }}">Inicio</a></li>
                <li>Servicios</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Fluid Section One -->
    <section class="fluid-one">
        <div class="outer-container d-flex">

            <!-- Carousel Column -->
            <div class="fluid-one_carousel-column">
                <div class="fluid-one_carousel-inner">
                    <div class="single-item-carousel owl-carousel owl-theme">

                        <!-- Slide -->
                        <div class="slide">
                            <figure class="fluid-one_image img-tamañop"><img
                                    src="{{ asset('cliente/img/negocios/desarrollo.webp') }}"
                                    alt="Sistema para Estaciones de Servicios | Power Group System | desarrollo"></figure>
                            <div class="fluid-one_content">

                                <!-- Sec Title -->
                                <div class="sec-title light">
                                    <h2 class="sec-title_heading">Desarrollo de Software </h2>
                                    <div class="pt-4 d-flex justify-content-center">
                                        <a href="{{ asset('contactanos') }}"><button class="btn-detalle-servicio">
                                                <span>Contáctanos</span>
                                            </button></a>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide -->
                        <div class="slide">
                            <figure class="fluid-one_image img-tamañop"><img
                                    src="{{ asset('cliente/img/negocios/mesadeayuda_resultado.webp') }}"
                                    alt="Sistema para Estaciones de Servicios | Power Group System | ayuda"
                                    style="height: 100%"></figure>
                            <div class="fluid-one_content">

                                <!-- Sec Title -->
                                <div class="sec-title light">
                                    <h2 class="sec-title_heading">Mesa de Ayuda</h2>
                                    <div class="pt-4 d-flex justify-content-center">
                                        <a href="{{ asset('contactanos') }}"><button class="btn-detalle-servicio">
                                                <span>Contáctanos</span>
                                            </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide -->
                        <div class="slide">
                            <figure class="fluid-one_image img-tamañop"><img
                                    src="{{ asset('cliente/img/negocios/servicios-sunat.png') }}"
                                    alt="Sistema para Estaciones de Servicios | Power Group System | facturacion-resultado"
                                    style="height: 100%"></figure>
                            <div class="fluid-one_content">

                                <!-- Sec Title -->
                                <div class="sec-title light">
                                    <h2 class="sec-title_heading">Facturación Electrónica</h2>
                                    <div class="pt-4 d-flex justify-content-center">
                                        <a href="{{ asset('contactanos') }}"><button class="btn-detalle-servicio">
                                                <span>Contáctanos</span>
                                            </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide -->
                        <div class="slide">
                            <figure class="fluid-one_image img-tamañop"><img
                                    src="{{ asset('cliente/img/negocios/hardware.png') }}"
                                    alt="Sistema para Estaciones de Servicios | Power Group System | computadora"
                                    style="height: 100%"></figure>
                            <div class="fluid-one_content">

                                <!-- Sec Title -->
                                <div class="sec-title light">
                                    <h2 class="sec-title_heading">Hardware de Cómputo</h2>
                                    <div class="pt-4 d-flex justify-content-center">
                                        <a href="{{ asset('contactanos') }}"><button class="btn-detalle-servicio">
                                                <span>Contáctanos</span>
                                            </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide -->
                        <div class="slide">
                            <figure class="fluid-one_image img-tamañop"><img
                                    src="{{ asset('cliente/img/negocios/rt.webp') }}"
                                    alt="Sistema para Estaciones de Servicios | Power Group System | rt"
                                    style="height: 100%"></figure>
                            <div class="fluid-one_content">

                                <!-- Sec Title -->
                                <div class="sec-title light">
                                    <h2 class="sec-title_heading">Consultoría en TI</h2>
                                    <div class="pt-4 d-flex justify-content-center">
                                        <a href="{{ asset('contactanos') }}"><button class="btn-detalle-servicio">
                                                <span>Contáctanos</span>
                                            </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Column -->
            <div class="fluid-one_content-column" style="display: flex; align-items: center;">
                <div class="fluid-one_column-inner py-0 py-md-4">
                    <!-- Sec Title -->
                    <div class="sec-title">
                        <h2 class="sec-title_heading" style="opacity: 1;" id="nombre-servicio">Desarrollo de <span
                                class='theme_color'>Software</span></h2>
                        <div class="sec-title_text" style="opacity: 1;" id="descripcion-servicio">
                            <p>Transformamos ideas en soluciones de software para escritorio, web y móvil,
                                trabajamos con los mejores estándares y buenas practicas exigidas por el mercado.<br>
                                Contamos con un
                                equipo de desarrolladores en constante capacitación para poder atender las solicitudes y
                                desafíos más
                                exigentes.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Fluid Section One -->
@endsection
