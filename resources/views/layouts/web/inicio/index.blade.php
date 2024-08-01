@extends('layouts.web.master')
@section('cuerpo')
    <!-- Main Slider -->
    <section class="slider-two" style="background-color: black;">
        <div class="single-item-carousel owl-carousel owl-theme">

            <!-- Slide -->
            <div class="slide">
                <div class="slider-two_image-layer"
                    style="background-image:url( {{ asset('cliente/img/background/grifo.jpg') }})"></div>
                <div class="slider-two_pattern-layer"
                    style="background-image:url( {{ asset('cliente/img/main-slider/pattern-1.png') }}); background-size: cover;">
                </div>
                <div class="auto-container">

                    <!-- Content Column -->
                    <div class="slider-two-content">
                        <div class="slider-two_inner">
                            <!-- <div class="slider-two_title">Somos Solución Empresarial</div> -->
                            <h1 class="slider-two_heading">Sistema inteligente para Estaciones de Servicio.</h1>

                            <!-- Button Box -->
                            <div class="slider-two_button-box">
                                <a class="btn-style-two theme-btn btn-item" href="{{ asset('contactanos') }}">
                                    <div class="btn-wrap">
                                        <span class="text-one">Contáctanos<i
                                                class="fa-solid fa-arrow-right fa-fw"></i></span>
                                        <span class="text-two">Contáctanos<i
                                                class="fa-solid fa-arrow-right fa-fw"></i></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="slide">
                <div class="slider-two_image-layer"
                    style="background-image:url({{ asset('cliente/img/background/bg-horustech.png') }})"></div>
                <div class="slider-two_pattern-layer"
                    style="background-image:url({{ asset('cliente/img/main-slider/pattern-1.png') }}g) ;background-size: cover;">
                </div>
                <div class="auto-container">

                    <!-- Content Column -->
                    <div class="slider-two-content">
                        <div class="slider-two_inner">

                            <!-- <div class="slider-two_title">Somos Solución Empresarial</div> -->
                            <h1 class="slider-two_heading">Controlador de dispensadores y surtidores</h1>

                            <!-- Button Box -->
                            <div class="slider-two_button-box">
                                <a class="btn-style-two theme-btn btn-io2tem" href="{{ asset('controlador-dys') }}">
                                    <div class="btn-wrap">
                                        <span class="text-one">Más Información<i
                                                class="fa-solid fa-arrow-right fa-fw"></i></span>
                                        <span class="text-two">Más Información<i
                                                class="fa-solid fa-arrow-right fa-fw"></i></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="slide">
                <div class="slider-two_image-layer"
                    style="background-image:url({{ asset('cliente/img/background/identfid.png') }})"></div>
                <div class="slider-two_pattern-layer"
                    style="background-image:url({{ asset('cliente/img/main-slider/pattern-1.png') }}) ;background-size: cover;">
                </div>
                <div class="auto-container">

                    <!-- Content Column -->
                    <div class="slider-two-content">
                        <div class="slider-two_inner">
                            <!-- <div class="slider-two_title">Somos Solución Empresarial</div> -->
                            <h1 class="slider-two_heading">Sistema IDENTFID</h1>

                            <!-- Button Box -->
                            <div class="slider-two_button-box">
                                <a class="btn-style-two theme-btn btn-item" href="{{ asset('appsven-rfid') }}">
                                    <div class="btn-wrap">
                                        <span class="text-one">Más información<i
                                                class="fa-solid fa-arrow-right fa-fw"></i></span>
                                        <span class="text-two">Más información<i
                                                class="fa-solid fa-arrow-right fa-fw"></i></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="slide">
                <div class="slider-two_image-layer"
                    style="background-image:url({{ asset('cliente/img/background/dispositivos.webp') }} )">
                </div>
                <div class="slider-two_pattern-layer"
                    style="background-image:url( {{ asset('cliente/img/main-slider/pattern-1.png') }}) ;background-size: cover;">
                </div>
                <div class="auto-container">

                    <!-- Content Column -->
                    <div class="slider-two-content">
                        <div class="slider-two_inner">
                            <!-- <div class="slider-two_title">Somos Solución Empresarial</div> -->
                            <h1 class="slider-two_heading">Dispositivos POS</h1>

                            <!-- Button Box -->
                            <div class="slider-two_button-box">
                                <a class="btn-style-two theme-btn btn-item" href="{{ asset('contactanos') }}">
                                    <div class="btn-wrap">
                                        <span class="text-one">Más información<i
                                                class="fa-solid fa-arrow-right fa-fw"></i></span>
                                        <span class="text-two">Más información<i
                                                class="fa-solid fa-arrow-right fa-fw"></i></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="slide">
                <div class="slider-two_image-layer"
                    style="background-image:url({{ asset('cliente/img/background/concept.webp') }})"></div>
                <div class="slider-two_pattern-layer"
                    style="background-image:url({{ asset('cliente/img/main-slider/pattern-1.png') }} ) ;background-size: cover;">
                </div>
                <div class="auto-container">

                    <!-- Content Column -->
                    <div class="slider-two-content">
                        <div class="slider-two_inner">
                            <!-- <div class="slider-two_title">Somos Solución Empresarial</div> -->
                            <h1 class="slider-two_heading">Sistema de Telemedición</h1>

                            <!-- Button Box -->
                            <div class="slider-two_button-box">
                                <a class="btn-style-two theme-btn btn-item" href="{{ asset('sistema-telemedicion') }}">
                                    <div class="btn-wrap">
                                        <span class="text-one">Más información<i
                                                class="fa-solid fa-arrow-right fa-fw"></i></span>
                                        <span class="text-two">Más información<i
                                                class="fa-solid fa-arrow-right fa-fw"></i></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="slide">
                <div class="slider-two_image-layer"
                    style="background-image:url({{ asset('cliente/img/background/RFID.webp') }})"></div>
                <div class="slider-two_pattern-layer"
                    style="background-image:url({{ asset('cliente/img/main-slider/pattern-1.png') }}) ;background-size: cover;">
                </div>
                <div class="auto-container">

                    <!-- Content Column -->
                    <div class="slider-two-content">
                        <div class="slider-two_inner">
                            <h1 class="slider-two_heading">Control de Flotas y Fidelización RFID</h1>

                            <!-- Button Box -->
                            <div class="slider-two_button-box">
                                <a class="btn-style-two theme-btn btn-item" href="{{ asset('appsven-rfid') }}">
                                    <div class="btn-wrap">
                                        <span class="text-one">Más información<i
                                                class="fa-solid fa-arrow-right fa-fw"></i></span>
                                        <span class="text-two">Más información<i
                                                class="fa-solid fa-arrow-right fa-fw"></i></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Main Slider -->

    <!-- Featured One -->
    <section class="featured-one ">
        <div class="auto-container ">
            <div class="row clearfix d-flex justify-content-center">

                <!-- Feature Block One -->
                <div class="feature-block_one d-flex justify-content-center">
                    <div class="feature-block_one-inner">
                        <a class="overlay-link" href="{{ url('servicios#desarrollo-software') }}"></a>
                        <span class="color-layer"></span>
                        <span class="feature-block_one-icon">
                            <img src="{{ asset('cliente/img/icons/icons8-desarrollo-de-software-100.png') }} "
                                alt="Sistema para Estaciones de Servicios | Power Group System | Software"
                                style="height: 100px;" />
                        </span>
                        <h5 class="feature-block_one-title">Desarrollo de Software</h5>
                    </div>
                </div>

                <!-- Feature Block One -->
                <div class="feature-block_one d-flex justify-content-center">
                    <div class="feature-block_one-inner">
                        <a class="overlay-link" href="{{ url('servicios#mesa-ayuda') }}"></a>
                        <span class="color-layer"></span>
                        <span class="feature-block_one-icon">
                            <img src="{{ asset('cliente/img/icons/icons8-online-support-100.png') }}"
                                alt="Sistema para Estaciones de Servicios | Power Group System | ayuda"
                                style="height: 100px;" />
                        </span>
                        <h5 class="feature-block_one-title">Mesa de Ayuda</h5>
                    </div>
                </div>

                <!-- Feature Block One -->
                <div class="feature-block_one d-flex justify-content-center">
                    <div class="feature-block_one-inner">
                        <a class="overlay-link" href="{{ url('servicios#facturacion-electronica') }}"></a>
                        <span class="color-layer"></span>
                        <span class="feature-block_one-icon">
                            <img src="{{ asset('cliente/img/icons/icons8-cuenta-100.png') }}"
                                alt="Sistema para Estaciones de Servicios | Power Group System | facturación"
                                style="height: 100px;" />
                        </span>
                        <h5 class="feature-block_one-title">Facturación Electrónica</h5>
                    </div>
                </div>

                <!-- Feature Block One -->
                <div class="feature-block_one d-flex justify-content-center">
                    <div class="feature-block_one-inner">
                        <a class="overlay-link" href="{{ url('servicios#hardware-computo') }}"></a>
                        <span class="color-layer"></span>
                        <span class="feature-block_one-icon">
                            <img src="{{ asset('cliente/img/icons/icons8-computadora-100.png') }}"
                                alt="Sistema para Estaciones de Servicios | Power Group System | hardware"
                                style="height: 100px;" />
                        </span>
                        <h5 class="feature-block_one-title">Hardware de Cómputo</h5>
                    </div>
                </div>

                <!-- Feature Block One -->
                <div class="feature-block_one d-flex justify-content-center">
                    <div class="feature-block_one-inner">
                        <a class="overlay-link" href="{{ url('servicios#consultoria-ti') }}"></a>
                        <span class="color-layer"></span>
                        <span class="feature-block_one-icon">
                            <img src="{{ asset('cliente/img/icons/icons8-meeting-room-100.png') }}"
                                alt="Sistema para Estaciones de Servicios | Power Group System | servicios"
                                style="height: 100px;" />
                        </span>
                        <h5 class="feature-block_one-title">Consultoría en TI</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured One -->

    <!-- Clients One -->
    <section class="clients-one">
        <div class="clients-one_pattern"
            style="background-image:url({{ asset('cliente/img/background/grifo.jpg') }})"></div>
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Title Column -->
                <div class="clients-one_title-column col-lg-4 col-md-12 col-sm-12">
                    <div class="client-one_title">Contamos con más de 100 clientes en todo el Perú!</div>
                </div>

                <!-- Carousel Column -->
                <div class="clients-one_carousel-column col-lg-8 col-md-12 col-sm-12">

                    <!-- Sponsors Carousel -->
                    <ul class="sponsors-carousel-two owl-carousel owl-theme">
                        <li class="slide-item">
                            <figure class="client-one_image-box"><a><img
                                        src=" {{ asset('cliente/img/clients/5.png') }} "
                                        alt="Sistema para Estaciones de Servicios | Power Group System | cliente"></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="client-one_image-box"><a><img
                                        src=" {{ asset('cliente/img/clients/6.png') }}"
                                        alt="Sistema para Estaciones de Servicios | Power Group System | cliente"></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="client-one_image-box"><a><img
                                        src="{{ asset('cliente/img/clients/8.png') }}"
                                        alt="Sistema para Estaciones de Servicios | Power Group System | cliente"></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="client-one_image-box"><a><img
                                        src="{{ asset('cliente/img/clients/9.1.png') }}"
                                        alt="Sistema para Estaciones de Servicios | Power Group System | cliente"></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="client-one_image-box"><a><img
                                        src="{{ asset('cliente/img/clients/11.1.png') }}"
                                        alt="Sistema para Estaciones de Servicios | Power Group System | cliente"></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="client-one_image-box"><a><img
                                        src="{{ asset('cliente/img/clients/12.1.png') }}"
                                        alt="Sistema para Estaciones de Servicios | Power Group System | cliente"></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="client-one_image-box"><a><img
                                        src="{{ asset('cliente/img/clients/13.1.png') }}"
                                        alt="Sistema para Estaciones de Servicios | Power Group System | cliente"></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="client-one_image-box"><a><img
                                        src="{{ asset('cliente/img/clients/14.1.png') }}"
                                        alt="Sistema para Estaciones de Servicios | Power Group System | cliente"></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="client-one_image-box"><a><img
                                        src="{{ asset('cliente/img/clients/15.1.png') }}"
                                        alt="Sistema para Estaciones de Servicios | Power Group System | cliente"></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="client-one_image-box"><a><img
                                        src="{{ asset('cliente/img/clients/17.1.png') }}"
                                        alt="Sistema para Estaciones de Servicios | Power Group System | cliente"></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="client-one_image-box"><a><img
                                        src="{{ asset('cliente/img/clients/18.1.png') }}"
                                        alt="Sistema para Estaciones de Servicios | Power Group System | cliente"></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="client-one_image-box"><a><img
                                        src="{{ asset('cliente/img/clients/19.png') }}"
                                        alt="Sistema para Estaciones de Servicios | Power Group System | cliente"></a>
                            </figure>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Clients One -->

    <!-- About Two -->
    <section class="about-two">
        <div class="case-one_pattern-layer"
            style="background-image:url({{ asset('cliente/img/main-slider/pattern-16.png') }} )"></div>
        <div class="about-two_pattern-two"
            style="background-image:url( {{ asset('cliente/img/main-slider/pattern-13.png') }}); filter: hue-rotate(239deg);">
        </div>
        <div class="about-two_pattern-two pattern-two"
            style="background-image:url( {{ asset('cliente/img/main-slider/pattern-13.png') }}); filter: hue-rotate(239deg); left: 100px; top: 665px;">
        </div>
        <div class="auto-container" style="position: relative;">
            <div class="row clearfix">

                <!-- Content Column -->
                <div class="col-6 align-items-center d-flex align-items-iframe">
                    <iframe class="align-iframe"
                        src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2F100092632664470%2Fvideos%2F1278911819439113%2F&show_text=false&width=560&t=0"
                        width="500" height="450" style="border:none;overflow:hidden;border-radius: 1rem;"
                        scrolling="no" frameborder="0" allowfullscreen="true"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                        allowFullScreen="true"></iframe>
                </div>

                <!-- Content Column -->
                <div class="about-two_content col-lg-6 col-md-12 col-sm-12">
                    <div class="about-two_content-inner">
                        <div class="sec-title_two">
                            <div class="sec-title_two-title">Acerca de Nosotros</div>
                            <h2 class="sec-title_two-heading">Tu aliado <span>estratégico</span> <br> con las
                                <span>mejores</span> <br> soluciones <span>tecnológicas</span>
                            </h2>
                        </div>
                        <div class="about-two_text text-justify">Somos una empresa con presencia a nivel nacional, con
                            sucursales en LIMA – LIMA Y HUANCAYO – JUNÍN, dedicada a brindar soluciones tecnológicas para
                            <b>Estaciones de Servicio</b>, optimizando y automatizando los procesos clave de su negocio.
                            Acompañamos la implementación de negocio con estándares de calidad y facilidad en el uso de los
                            sistemas, asimismo, ofrecemos soporte asistido 24/7 durante y después de la implementación.<br>
                            Contamos con más de 12 años de experiencia en la implementación de sistemas informáticos en los
                            diversos mercados.
                        </div>
                        <div class="about-two_feature">
                            <div class="d-flex flex-wrap">
                                <a class="btn-style-three theme-btn btn-item" href="{{ asset('contactanos') }}">
                                    <div class="btn-wrap">
                                        <span class="text-one">Contáctanos <i
                                                class="fa-solid fa-arrow-right fa-fw"></i></span>
                                        <span class="text-two">Contáctanos <i
                                                class="fa-solid fa-arrow-right fa-fw"></i></span>
                                    </div>
                                </a>

                                <!-- About Phone Box -->
                                <div class="about-phone_box">
                                    Escribenos! <br>
                                    <a target="_blank" class="about-two_phone-number" style="user-select: none;"
                                        href="https://api.whatsapp.com/send?phone=+51901716475&text=Hola!%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus%20servicios.">
                                        <span class="p-2"><img src="{{ asset('cliente/iconos/icons8-whatsapp-30.png') }}"
                                                alt=""></span>901 716 475</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Two -->

    <!-- Services One -->
    <section class="services-one">
        <div class="services-one_pattern-layer"
            style="background-image:url({{ asset('cliente/img/main-slider/pattern-14.png') }} )"></div>
        <div class="auto-container">

            <!-- Sec Title -->
            <div class="sec-title_two centered">
                <div class="sec-title_two-title">Nuestros</div>
                <h2 class="sec-title_two-heading"> <span>Servicios</span><br></h2>
            </div>
            <div class="services-one_inner-coontainer">
                <div class="four-item-carousel owl-carousel owl-theme">

                    <!-- Service Block-->
                    <div class="service-block_three">
                        <div class="service-block_three-inner">
                            <span class="service-block_three-icon"><img
                                    src=" {{ asset('cliente/img/icons/icons8-desarrollo-de-software-100.png') }} "
                                    width="50px"
                                    alt="Sistema para Estaciones de Servicios | Power Group System | Software" /></span>
                            <h5 class="service-block_three-heading">Desarrollo de Software</h5>
                            <div class="service-block_three-text">Soluciones tecnológicas para todas las plataformas</div>
                            <div class="service-block_three-overlay">
                                <span class="service-block_three-icon-two"><img
                                        src=" {{ asset('cliente/img/icons/icons8-desarrollo-de-software-100.png') }}"
                                        width="50px"
                                        alt="Sistema para Estaciones de Servicios | Power Group System | Software" /></span>
                                <h5 class="service-block_three-heading alternate"><a href="{{ asset('servicios#desarrollo-software') }}">Desarrollo de
                                        Software</a></h5>
                                <a class="service-block_three-learn" href="{{ asset('servicios#desarrollo-software') }}">Saber Más!</a>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block_three">
                        <div class="service-block_three-inner">
                            <span class="service-block_three-icon"><img
                                    src=" {{ asset('cliente/img/icons/icons8-online-support-100.png') }} " width="50px"
                                    alt="Sistema para Estaciones de Servicios | Power Group System | mesa de ayuda" /></span>
                            <h5 class="service-block_three-heading">Mesa de Ayuda</h5>
                            <div class="service-block_three-text">Soporte 24/7</div>
                            <div class="service-block_three-overlay">
                                <span class="service-block_three-icon-two"><img
                                        src="{{ asset('cliente/img/icons/icons8-online-support-100.png') }}" width="50px"
                                        alt="Sistema para Estaciones de Servicios | Power Group System | mesa de ayuda" /></span>
                                <h5 class="service-block_three-heading alternate"><a href="{{ asset('servicios#mesa-ayuda') }}">Mesa de
                                        Ayuda</a></h5>
                                <a class="service-block_three-learn" href="{{ asset('servicios#mesa-ayuda') }}">Saber Más!</a>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block-->
                    <div class="service-block_three">
                        <div class="service-block_three-inner">
                            <span class="service-block_three-icon"><img
                                    src=" {{ asset('cliente/img/icons/icons8-desarrollo-de-software-100.png') }}"
                                    width="50px"
                                    alt="Sistema para Estaciones de Servicios | Power Group System | facturación electronica" /></span>
                            <h5 class="service-block_three-heading">Facturación Electrónica</h5>
                            <div class="service-block_three-text">Generación y envío de comprobantes de pago electrónicos a
                                la SUNAT</div>
                            <div class="service-block_three-overlay">
                                <span class="service-block_three-icon-two"><img
                                        src="{{ asset('cliente/img/icons/icons8-desarrollo-de-software-100.png') }}"
                                        width="50px"
                                        alt="Sistema para Estaciones de Servicios | Power Group System | facturación-electronica" /></span>
                                <h5 class="service-block_three-heading alternate"><a href="{{ asset('servicios#facturacion-electronica') }}">Facturación
                                        Electrónica</a></h5>
                                <a class="service-block_three-learn" href="{{ asset('servicios#facturacion-electronica') }}">Saber Más!</a>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block-->
                    <div class="service-block_three">
                        <div class="service-block_three-inner">
                            <span class="service-block_three-icon"><img
                                    src="{{ asset('cliente/img/icons/icons8-computadora-100.png') }}" width="50px"
                                    alt="Sistema para Estaciones de Servicios | Power Group System | hardware" /></span>
                            <h5 class="service-block_three-heading">Hardware de Cómputo</h5>
                            <div class="service-block_three-text">Venta de equipos de cómputo para toda necesidad</div>
                            <div class="service-block_three-overlay">
                                <span class="service-block_three-icon-two"><img
                                        src="{{ asset('cliente/img/icons/icons8-computadora-100.png') }}" width="50px"
                                        alt="Sistema para Estaciones de Servicios | Power Group System | hardware" /></span>
                                <h5 class="service-block_three-heading alternate"><a href="{{ asset('servicios#hardware-computo') }}">Hardware de
                                        Cómputo</a></h5>
                                <a class="service-block_three-learn" href="{{ asset('servicios#hardware-computo') }}">Saber Más!</a>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block-->
                    <div class="service-block_three">
                        <div class="service-block_three-inner">
                            <span class="service-block_three-icon"><img
                                    src="{{ asset('cliente/img/icons/icons8-meeting-room-100.png') }}" width="50px"
                                    alt="Sistema para Estaciones de Servicios | Power Group System | servicios" /></span>
                            <h5 class="service-block_three-heading">Consultoría en TI</h5>
                            <div class="service-block_three-text">Asesoría especializada en gestión de recursos
                                tecnológicos</div>
                            <div class="service-block_three-overlay">
                                <span class="service-block_three-icon-two"><img
                                        src="{{ asset('cliente/img/icons/icons8-meeting-room-100.png') }}" width="50px"
                                        alt="Sistema para Estaciones de Servicios | Power Group System | servicios" /></span>
                                <h5 class="service-block_three-heading alternate"><a href="{{ asset('servicios#consultoria-ti') }}">Consultoría en
                                        TI</a></h5>
                                <a class="service-block_three-learn" href="{{ asset('servicios#consultoria-ti') }}">Saber Más!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services One -->

    <!-- Case One -->
    <section class="case-one">

        <div class="case-one_pattern-layer"
            style="background-image:url({{ asset('cliente/img/main-slider/pattern-16.png') }})"></div>
        <div class="auto-container" style="overflow-x: hidden;">

            <!-- Sec Title -->
            <div class="sec-title_two">
                <!-- <div class="sec-title_two-title">Our Case St</div> -->
                <h2 class="sec-title_two-heading">¿Tienes un <span>Negocio?</span> <br></h2>
            </div>

            <div class="case-one_inner-container d-flex">
                <div class="d-flex align-items-center">

                </div>
                <div id="slider-sistemas" class="three-item-carousel owl-carousel owl-theme owl-loaded owl-drag">

                    <!-- Case Block -->
                    <div>
                        <div class="card-container">
                            <div class="card">
                                <div class="front-content">
                                    <img src=" {{ asset('cliente/img/negocios/licores.jpg') }} " alt=""
                                        style="height: 100%;">
                                </div>
                                <div class="content">
                                    <p class="fw-bold parrafo-sistemas">
                                        Sistema que facilita el control de ventas e inventarios del negocio, con la carga de
                                        ingresos de compras para el seguimiento del stock y la generación de venta a través
                                        de facturas, boletas, notas de crédito, notas de débito y notas de venta. El módulo
                                        de ventas puede ser anexado a facturación electrónica o notas de ventas para un
                                        control interno.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="case-block_lower-content">
                            <h5 class="case-block_heading text-center"><a href="{{ asset('contactanos') }}">Sistema de Licorería con
                                    Facturación Electrónica</a></h5>
                        </div>
                    </div>

                    <!-- Case Block -->
                    <div>
                        <div class="card-container">
                            <div class="card">
                                <div class="front-content">
                                    <img src="{{ asset('cliente/img/negocios/restaurante.avif') }}  " alt=""
                                        style="height: 100%;">
                                </div>
                                <div class="content">
                                    <p class="fw-bold parrafo-sistemas">
                                        Sistema que permite y facilita el control de pedidos, inventarios y facturación
                                        electrónica a través de facturas, boletas y notas de venta para un control interno.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="case-block_lower-content">
                            <h5 class="case-block_heading text-center"><a href="{{ asset('contactanos') }}">Sistema de Restaurante con
                                    Facturación Electrónica</a></h5>
                        </div>
                    </div>

                    <!-- Case Block -->
                    <div>
                        <div class="card-container">
                            <div class="card">
                                <div class="front-content">
                                    <img src="{{ asset('cliente/img/negocios/tienda.jpg') }}" alt=""
                                        style="height: 100%;">
                                </div>
                                <div class="content">
                                    <p class="fw-bold parrafo-sistemas">
                                        Sistema que facilita el control de ventas e inventarios del negocio, con la carga de
                                        ingresos de compras para el seguimiento del stock y la generación de ventas a través
                                        de facturas, boletas, notas de crédito, notas de débito y notas de ventas. El módulo
                                        de ventas puede ser anexado a facturación electrónica o notas de ventas para un
                                        control interno. El sistema cuenta con un módulo de reportes que permite y facilita
                                        la validación de los cuadres de los vendedores y los movimientos generales de ventas
                                        por formas de pagos, turnos, días y en rangos de fechas.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="case-block_lower-content">
                            <h5 class="case-block_heading text-center"><a href="{{ asset('contactanos') }}">Sistema de Minimarket con
                                    Facturación Electrónica</a></h5>
                        </div>
                    </div>


                    <!-- Case Block -->
                    <div>
                        <div class="card-container">
                            <div class="card">
                                <div class="front-content">
                                    <img src="{{ asset('cliente/img/negocios/ferreteria.jpg') }}" alt=""
                                        style="height: 100%;">
                                </div>
                                <div class="content">
                                    <p class="fw-bold parrafo-sistemas">
                                        Sistema con funciones especializadas que permite controlar el inventario, gestionar
                                        las ventas a través de facturas boletas electrónicas o notas de ventas de manera
                                        ágil y sencilla.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="case-block_lower-content">
                            <h5 class="case-block_heading text-center"><a href="{{ asset('contactanos') }}">Sistema de Ferretería con
                                    Facturación Electrónica</a></h5>
                        </div>
                    </div>

                    <!-- Case Block -->
                    <div>
                        <div class="card-container">
                            <div class="card">
                                <div class="front-content">
                                    <img src="{{ asset('cliente/img/negocios/farmacia.jpg') }}" alt=""
                                        style="height: 100%;">
                                </div>
                                <div class="content">
                                    <p class="fw-bold parrafo-sistemas">
                                        Sistema con funciones especializadas que permite controlar el inventario, gestionar
                                        las ventas a través de facturas boletas electrónicas o notas de ventas de manera
                                        ágil y sencilla.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="case-block_lower-content">
                            <h5 class="case-block_heading text-center"><a href="{{ asset('contactanos') }}">Sistema de Farmacia con
                                    Facturación Electrónica</a></h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Case One -->

    <!-- Choose One -->
    <section class="choose-one">
        <div class="choose-one_pattern-layer"
            style="background-image:url({{ asset('cliente/img/main-slider/pattern-19.png') }} ); filter: hue-rotate(239deg);">
        </div>
        <div class="auto-container">

            <!-- Sec Title -->
            <div class="sec-title_twos centered">
                <div class="sec-title_two-title">¿Por qué elegirnos? </div>
                <h2 class="sec-title_two-heading">Atendemos Una Amplia <span>Variedad</span> <br> De Industrias.</h2>
            </div>
        </div>
    </section>
    <!-- End Choose One -->

    <!-- Counter Two -->
    <section class="counter-two">
        <div class="auto-container">
            <div class="counter-two_inner-container">
                <div class="counter-two_pattern-two"
                    style="background-image:url( {{ asset('cliente/img/main-slider/pattern-21.png') }} ); filter: hue-rotate(288deg);">
                </div>
                <div class="counter-two_pattern-three"
                    style="background-image:url({{ asset('cliente/img/main-slider/pattern-22.png') }}); filter: hue-rotate(288deg);">
                </div>
                <div class="counter-two_image-layer"
                    style="background-image:url({{ asset('cliente/img/background/grifos.jpg') }})"></div>
                <h2 class="counter-two_heading selector-de-texto">Brindamos Soluciones integrales para la gestión de
                    Estaciones de Servicio</h2>
                <div class="row clearfix">

                    <!-- Counter Column -->
                    <div class="counter-two_block col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-two_counter font-weight-900"><span class="odometer" data-count="12"></span>+
                        </div>
                        <div class="counter-two_text font-weight-900">Años de Experiencia.</div>
                    </div>

                    <!-- Counter Column -->
                    <div class="counter-two_block col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-two_counter font-weight-900"><span class="odometer" data-count="150"></span>+
                        </div>
                        <div class="counter-two_text font-weight-900">Clientes en todo el Perú</div>
                    </div>

                    <!-- Counter Column -->
                    <div class="counter-two_block col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-two_counter font-weight-900"><span class="odometer" data-count="20"></span>+
                        </div>
                        <div class="counter-two_text font-weight-900">Aliados Estratégicos</div>
                    </div>

                    <!-- Counter Column -->
                    <div class="counter-two_block col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-two_counter font-weight-900"><span class="odometer" data-count="5"></span>★
                        </div>
                        <div class="counter-two_text font-weight-900">Puntuación del <br> Cliente</div>
                    </div>
                </div>
                <div class="counter-two_text selector-de-texto">Tiene mejores cosas que hacer que preocuparse por la TI de
                    su pequeña empresa. <a href="{{ asset('contactanos') }}">Hablemos sobre el proyecto!</a></div>
            </div>
        </div>
    </section>
    <!-- End Counter Two -->

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="pattern-layer-one"
            style="background-image: url({{ asset('cliente/img/main-slider/pattern-25.png') }}  ); filter: hue-rotate(176deg);">
        </div>
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Title Column -->
                <div class="title-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">

                        <!-- Sec Title -->
                        <div class="sec-title_two">
                            <div class="sec-title_two-title">Testimonios</div>
                            <h2 class="sec-title_two-heading">Esto es lo que han dicho<br> <span>Nuestros Clientes</span>
                            </h2>
                            <div class="sec-title_two-text"></div>
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
                        <div class="single-item-carousel owl-carousel owl-theme">

                            <!-- Testimonial Block -->
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div class="text">“I To helped the client achieve their goal of calling the attention
                                        of mobile network operators. The expert team was also able to develop an app with
                                        commendable UI/UX. The client appreciates their flexibility in terms.”</div>
                                </div>
                                <div class="author-box">
                                    <div class="box-inner">
                                        <span class="author-image">
                                            <img src="{{ asset('cliente/img/clients/g.robles_resultado.webp') }}"
                                                alt="Sistema para Estaciones de Servicios | Power Group System | Testimonios" />
                                        </span>
                                        <h5>Servicento ROBLES</h5>
                                        <div class="designation">Gerencia</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Block -->
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div class="text">“I To helped the client achieve their goal of calling the attention
                                        of mobile network operators. The expert team was also able to develop an app with
                                        commendable UI/UX. The client appreciates their flexibility in terms.”</div>
                                </div>
                                <div class="author-box">
                                    <div class="box-inner">
                                        <span class="author-image">
                                            <img src="{{ asset('cliente/img/clients/soria.png') }}"
                                                alt="Sistema para Estaciones de Servicios | Power Group System | Testimonios" />
                                        </span>
                                        <h5>Grifo SORIA</h5>
                                        <div class="designation">Gerencia</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Block -->
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div class="text">“I To helped the client achieve their goal of calling the attention
                                        of mobile network operators. The expert team was also able to develop an app with
                                        commendable UI/UX. The client appreciates their flexibility in terms.”</div>
                                </div>
                                <div class="author-box">
                                    <div class="box-inner">
                                        <span class="author-image">
                                            <img src="{{ asset('cliente/img/clients/petrox.jpg') }}"
                                                alt="Sistema para Estaciones de Servicios | Power Group System | Testimonios" />
                                        </span>
                                        <h5> Estación de Servicios PETROX</h5>
                                        <div class="designation">Gerencia</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Block -->
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div class="text">“I To helped the client achieve their goal of calling the attention
                                        of mobile network operators. The expert team was also able to develop an app with
                                        commendable UI/UX. The client appreciates their flexibility in terms.”</div>
                                </div>
                                <div class="author-box">
                                    <div class="box-inner">
                                        <span class="author-image">
                                            <img src=" {{ asset('cliente/img/clients/shatu_resultado.webp') }} "
                                                alt="Sistema para Estaciones de Servicios | Power Group System | Testimonios" />
                                        </span>
                                        <h5>Grifo SHATU</h5>
                                        <div class="designation">Gerencia</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Block -->
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div class="text">“I To helped the client achieve their goal of calling the attention
                                        of mobile network operators. The expert team was also able to develop an app with
                                        commendable UI/UX. The client appreciates their flexibility in terms.”</div>
                                </div>
                                <div class="author-box">
                                    <div class="box-inner">
                                        <span class="author-image">
                                            <img src=" {{ asset('cliente/img/clients/TsP_resultado.webp') }} "
                                                alt="Sistema para Estaciones de Servicios | Power Group System | Testimonios" />
                                        </span>
                                        <h5>Estación de Servicios T&P</h5>
                                        <div class="designation">Gerencia</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->
@endsection
