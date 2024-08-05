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

     <section class="testimonial-section" id="desarrollo-software">

        <div class="auto-container margin-botton" >
            <div class="row clearfix">

                <!-- Title Column -->
                <div class="title-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">

                        <!-- Sec Title -->
                        <div class="sec-title_two">
                            <img src="{{ asset('cliente/img/negocios/desarrollo.webp') }}" alt="Desarrollo" class="img-servce">
                            <h2 class="sec-title_two-heading text-size-frase">Nos enorgullece ofrecer <br> <span>productos y servicios </span>de la más alta calidad.
                            </h2>
                            <a class="btn-style-three btn-mm theme-btn btn-item" href="{{ asset('contactanos') }}">
                                <div class="btn-wrap">
                                    <span class="text-one">Contáctanos <i
                                            class="fa-solid fa-arrow-right fa-fw"></i></span>
                                    <span class="text-two">Contáctanos <i
                                            class="fa-solid fa-arrow-right fa-fw"></i></span>
                                </div>
                            </a>
                        </div>

                        <!-- Button Box -->
                    </div>
                </div>

                <!-- Carousel Column -->
                <div class="carousel-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="authors-outer">
                            <div class="author-one">
                                <img src=" {{ asset('cliente/img/clients/dispensador_resultado.webp') }}"
                                    alt="Sistema para Estaciones de Servicios | Power Group System | grifo" />
                            </div>
                            <div class="author-two">
                                <img src=" {{ asset('cliente/img/clients/tanquevacio_resultado.webp') }}"
                                    alt="Sistema para Estaciones de Servicios | Power Group System | grifo" />
                            </div>
                            <div class="author-three">
                                <img src=" {{ asset('cliente/img/clients/tanqueado_resultado.webp') }}"
                                    alt="Sistema para Estaciones de Servicios | Power Group System | grifo" />
                            </div>
                            <div class="author-four">
                                <img src=" {{ asset('cliente/img/clients/author-5.jpg') }}"
                                    alt="Sistema para Estaciones de Servicios | Power Group System | grifo" />
                            </div>

                        </div>
                        <div class="single-item-carousels owl-carousel owl-theme">

                               <!-- Testimonial Block -->
                               <div class="testimonial-block">
                                <div class="author-box">
                                    <div class="box-inner">
                                        <span class="author-image">
                                            <img src="{{ asset('cliente/img/icons/icons8-desarrollo-de-software-100.png') }}"
                                                alt="Sistema para Estaciones de Servicios | Power Group System | Testimonios" />
                                        </span>
                                        <h3>Desarrollo de Software</h3>
                                    </div>
                                </div>
                                <div class="inner-box">

                                    <div class="text">“Transformamos ideas en soluciones de software para escritorio, web y móvil, trabajamos con los mejores estándares y buenas practicas exigidas por el mercado.
                                        Contamos con un equipo de desarrolladores en constante capacitación para poder atender las solicitudes y desafíos más exigentes.”</div>
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="testimonial-section" id="mesa-ayuda">

        <div class="auto-container margin-botton">
            <div class="row clearfix">

                <!-- Carousel Column -->
                <div class="carousel-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column"
                        style="background-image: url({{ asset('cliente/img/main-slider/pattern-26.png') }} )">
                        <div class="authors-outer">
                            <div class="author-one">
                                <img src=" {{ asset('cliente/img/clients/dispensador_resultado.webp') }}"
                                    alt="Sistema para Estaciones de Servicios | Power Group System | grifo" />
                            </div>
                            <div class="author-two">
                                <img src=" {{ asset('cliente/img/clients/tanquevacio_resultado.webp') }}"
                                    alt="Sistema para Estaciones de Servicios | Power Group System | grifo" />
                            </div>

                        </div>
                        <div class="single-item-carousels owl-carousel owl-theme">

                            <!-- Testimonial Block -->
                            <div class="testimonial-block">
                                <div class="author-box">
                                    <div class="box-inner">
                                        <span class="author-image">
                                            <img src="{{ asset('cliente/img/icons/icons8-online-support-100.png') }}"
                                                alt="Sistema para Estaciones de Servicios | Power Group System | Testimonios" />
                                        </span>
                                        <h3>Mesa de Ayuda</h3>
                                    </div>
                                </div>
                                <div class="inner-box">

                                    <div class="text">“Brindamos asistencia 24/7 en las soluciones implementadas, nuestro trabajo exige modalidades presencial y remota según los tipos y escalados de Incidentes reportados. Contamos con personal altamente capacitado que sabrá brindar las respuestas en los tiempos exigidos por el negocio.”</div>
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <!-- Title Column -->
                <div class="title-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">

                        <!-- Sec Title -->
                        <div class="sec-title_two">
                            <img src="{{ asset('cliente/img/negocios/mesadeayuda_resultado.webp') }}" alt="Desarrollo" class="img-servce">
                            <h2 class="sec-title_two-heading text-size-frase">Nos enorgullece ofrecer <br> <span>productos y servicios </span>de la más alta calidad.
                            </h2>
                            <a class="btn-style-three btn-mm theme-btn btn-item" href="{{ asset('contactanos') }}">
                                <div class="btn-wrap">
                                    <span class="text-one">Contáctanos <i
                                            class="fa-solid fa-arrow-right fa-fw"></i></span>
                                    <span class="text-two">Contáctanos <i
                                            class="fa-solid fa-arrow-right fa-fw"></i></span>
                                </div>
                            </a>
                        </div>

                        <!-- Button Box -->
                    </div>
                </div>


            </div>
        </div>

    </section>

    <section class="testimonial-section" id="facturacion-electronica">

        <div class="auto-container margin-botton">
            <div class="row clearfix">

                <!-- Title Column -->
                <div class="title-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">

                        <!-- Sec Title -->
                        <div class="sec-title_two">
                            <img src="{{ asset('cliente/img/negocios/servicios-sunat.png') }}" alt="Desarrollo" class="img-servce" style="height: 350px  !important">
                            <h2 class="sec-title_two-heading text-size-frase">Nos enorgullece ofrecer <br> <span>productos y servicios </span>de la más alta calidad.
                            </h2>
                            <a class="btn-style-three btn-mm theme-btn btn-item" href="{{ asset('contactanos') }}">
                                <div class="btn-wrap">
                                    <span class="text-one">Contáctanos <i
                                            class="fa-solid fa-arrow-right fa-fw"></i></span>
                                    <span class="text-two">Contáctanos <i
                                            class="fa-solid fa-arrow-right fa-fw"></i></span>
                                </div>
                            </a>
                        </div>

                        <!-- Button Box -->
                    </div>
                </div>

                <!-- Carousel Column -->
                <div class="carousel-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column"
                        style="background-image: url({{ asset('cliente/img/main-slider/pattern-26.png') }} )">
                        <div class="authors-outer">
                            <div class="author-one">
                                <img src=" {{ asset('cliente/img/clients/dispensador_resultado.webp') }}"
                                    alt="Sistema para Estaciones de Servicios | Power Group System | grifo" />
                            </div>
                            <div class="author-two">
                                <img src=" {{ asset('cliente/img/clients/tanquevacio_resultado.webp') }}"
                                    alt="Sistema para Estaciones de Servicios | Power Group System | grifo" />
                            </div>

                            <div class="author-three">
                                <img src=" {{ asset('cliente/img/clients/tanqueado_resultado.webp') }}"
                                    alt="Sistema para Estaciones de Servicios | Power Group System | grifo" />
                            </div>
                            <div class="author-four">
                                <img src=" {{ asset('cliente/img/clients/author-5.jpg') }}"
                                    alt="Sistema para Estaciones de Servicios | Power Group System | grifo" />
                            </div>

                        </div>
                        <div class="single-item-carousels owl-carousel owl-theme">

                               <!-- Testimonial Block -->
                               <div class="testimonial-block">
                                <div class="author-box">
                                    <div class="box-inner">
                                        <span class="author-image">
                                            <img src="{{ asset('cliente/img/icons/icons8-cuenta-100.png') }}"
                                                alt="Sistema para Estaciones de Servicios | Power Group System | Testimonios" />
                                        </span>
                                        <h3>Facturación Electrónica</h3>
                                    </div>
                                </div>
                                <div class="inner-box">

                                    <div class="text">“Brindamos el servicio de transporte y validación de comprobantes electrónicos con las mejores tarifas del mercado. Nuestro servicio diferencia de otros por la validación e informe de los sucesos (control de estados de comprobantes electrónicos) en los tiempos establecidos por SUNAT.
                                        Trabajamos con nuestro aliado estratégico NUBEFACT para servicios OSE / PSE. También hacemos el envío directo de los comprobantes a través del FACTURADOR SUNAT, para cualquiera de los dos servicios nuestro personal hace la validación e informa de los sucesos para las acciones correctivas.”</div>
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="testimonial-section" id="hardware-computo">

        <div class="auto-container margin-botton">
            <div class="row clearfix">

                <!-- Carousel Column -->
                <div class="carousel-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column"
                        style="background-image: url({{ asset('cliente/img/main-slider/pattern-26.png') }} )">
                        <div class="authors-outer">
                            <div class="author-one">
                                <img src=" {{ asset('cliente/img/clients/dispensador_resultado.webp') }}"
                                    alt="Sistema para Estaciones de Servicios | Power Group System | grifo" />
                            </div>
                            <div class="author-two">
                                <img src=" {{ asset('cliente/img/clients/tanquevacio_resultado.webp') }}"
                                    alt="Sistema para Estaciones de Servicios | Power Group System | grifo" />
                            </div>

                        </div>
                        <div class="single-item-carousels owl-carousel owl-theme">

                            <!-- Testimonial Block -->
                            <div class="testimonial-block">
                                <div class="author-box">
                                    <div class="box-inner">
                                        <span class="author-image">
                                            <img src="{{ asset('cliente/img/icons/icons8-computadora-100.png') }}"
                                                alt="Sistema para Estaciones de Servicios | Power Group System | Testimonios" />
                                        </span>
                                        <h3>Hardware de Cómputo</h3>
                                    </div>
                                </div>
                                <div class="inner-box">

                                    <div class="text">“Vendemos equipos de computo como; Pc para puntos de ventas, Pc para oficina (trabajos administrativos), servidores de datos, equipos AIO, equipos GAMER, impresoras para oficina, impresoras térmicas para punto de venta, monitores, mouse, teclados, cargadores, UPS, estabilizadores, router, switch, cámaras de seguridad, según las características y necesidades exigidas.”</div>
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <!-- Title Column -->
                <div class="title-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">

                        <!-- Sec Title -->
                        <div class="sec-title_two">
                            <img src="{{ asset('cliente/img/negocios/hardware.png') }}" alt="Desarrollo" class="img-servce" style="height: 300px  !important">
                            <h2 class="sec-title_two-heading text-size-frase">Nos enorgullece ofrecer <br> <span>productos y servicios </span>de la más alta calidad.
                            </h2>
                            <a class="btn-style-three btn-mm theme-btn btn-item" href="{{ asset('contactanos') }}">
                                <div class="btn-wrap">
                                    <span class="text-one">Contáctanos <i
                                            class="fa-solid fa-arrow-right fa-fw"></i></span>
                                    <span class="text-two">Contáctanos <i
                                            class="fa-solid fa-arrow-right fa-fw"></i></span>
                                </div>
                            </a>
                        </div>

                        <!-- Button Box -->
                    </div>
                </div>


            </div>
        </div>

    </section>

    <section class="testimonial-section" id="consultoria-ti">

        <div class="auto-container margin-botton">
            <div class="row clearfix">

                <!-- Title Column -->
                <div class="title-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">

                        <!-- Sec Title -->
                        <div class="sec-title_two">
                            <img src="{{ asset('cliente/img/negocios/rt.webp') }}" alt="Desarrollo" class="img-servce">
                            <h2 class="sec-title_two-heading text-size-frase">Nos enorgullece ofrecer <br> <span>productos y servicios </span>de la más alta calidad.
                            </h2>
                            <a class="btn-style-three btn-mm theme-btn btn-item" href="{{ asset('contactanos') }}">
                                <div class="btn-wrap">
                                    <span class="text-one">Contáctanos <i
                                            class="fa-solid fa-arrow-right fa-fw"></i></span>
                                    <span class="text-two">Contáctanos <i
                                            class="fa-solid fa-arrow-right fa-fw"></i></span>
                                </div>
                            </a>
                        </div>

                        <!-- Button Box -->
                    </div>
                </div>

                <!-- Carousel Column -->
                <div class="carousel-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column"
                        style="background-image: url({{ asset('cliente/img/main-slider/pattern-26.png') }} )">
                        <div class="authors-outer">
                            <div class="author-one">
                                <img src=" {{ asset('cliente/img/clients/dispensador_resultado.webp') }}"
                                    alt="Sistema para Estaciones de Servicios | Power Group System | grifo" />
                            </div>
                            <div class="author-two">
                                <img src=" {{ asset('cliente/img/clients/tanquevacio_resultado.webp') }}"
                                    alt="Sistema para Estaciones de Servicios | Power Group System | grifo" />
                            </div>

                            <div class="author-three">
                                <img src=" {{ asset('cliente/img/clients/tanqueado_resultado.webp') }}"
                                    alt="Sistema para Estaciones de Servicios | Power Group System | grifo" />
                            </div>
                            <div class="author-four">
                                <img src=" {{ asset('cliente/img/clients/author-5.jpg') }}"
                                    alt="Sistema para Estaciones de Servicios | Power Group System | grifo" />
                            </div>

                        </div>
                        <div class="single-item-carousels owl-carousel owl-theme">

                               <!-- Testimonial Block -->
                               <div class="testimonial-block">
                                <div class="author-box">
                                    <div class="box-inner">
                                        <span class="author-image">
                                            <img src="{{ asset('cliente/img/icons/icons8-meeting-room-100.png') }}"
                                                alt="Sistema para Estaciones de Servicios | Power Group System | Testimonios" />
                                        </span>
                                        <h3>Consultoría en TI</h3>
                                    </div>
                                </div>
                                <div class="inner-box">

                                    <div class="text">“Brindamos asesoría en innovación de herramientas y recursos tecnológicos como, sistemas de control de inventarios, sistemas contables, control de flotas, hardware para automatizaciones del negocio.”</div>
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Fluid Section One -->
@endsection

<style>
    .margin-botton{
        margin-bottom: 5rem !important;
    }
    .btn-mm {
        padding: 15px 50px !important;
        margin-top: 1rem;
    }
    .single-item-carousels {
    cursor: default !important;
    pointer-events: none !important;/* Cambia el cursor a un puntero por defecto */
    }
    .img-servce{
        width: 100% !important;
        height: 250px !important;
        object-fit: cover;
        border-radius: 1rem
    }
    .text-size-frase{
        font-size: 1.75rem !important;
        line-height: 2.5rem !important;
    }
</style>

