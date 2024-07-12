@extends('layouts.web.master')
@section('cuerpo')
    <!-- Page Title -->
    <section class="page-title img-encabezado"
        style="background-image:url({{ asset('cliente/img/background/background_about.png') }})">
        <div class="auto-container">
            <h2>Sistema APPSVEN - In House</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Inicio</a></li>
                <li>Sistema APPSVEN - In House</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Sidebar Side -->
                <div class="sidebar-side right-sidebar col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">
                        <!-- Sidebar Widget -->
                        <div class="sidebar-widget category-widget">

                            <ul class="cat-list">
                                <li><a onclick="llevar('descripcion')"> Descripción</a></li>
                                <li><a onclick="llevar('requisitos')">Requisitos Previos</a></li>
                                <li><a onclick="llevar('implementacion')">Implementación</a></li>
                            </ul>

                        </div>

                        <!-- Contact Widget -->
                        <div class="sidebar-widget contact-widget d-none d-lg-block">
                            <div class="widget-content"
                                style="background-image:url({{ asset('cliente/img/background/8.jpg') }})">
                                <div class="help">Contáctanos</div>
                                <div class="py-1">
                                    <a target="_blank" class="phone"
                                        href="https://api.whatsapp.com/send?phone=+51901716475&text=Hola!%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus%20servicios.">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                                <path
                                                    d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                                            </svg>
                                        </span> 901 716 475
                                    </a>
                                </div>
                                <div class="py-1">
                                    <a target="_blank" class="phone" href="contact.html">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                            </svg>
                                        </span>901 716 475
                                    </a>
                                </div>
                            </div>
                        </div>

                    </aside>
                </div>

                <!-- Content Side -->
                <div class="content-side left-sidebar col-lg-8 col-md-12 col-sm-12">
                    <div class="service-detail">
                        <div class="inner-box">
                            <div class="image">
                                <img autoplay muted loop
                                    src="{{ asset('cliente/img/videos/APPSVEN_House.gif') }}"width="100%" />
                            </div>
                            <section id="descripcion">
                                <h3><span class="px-2"><img src="{{ asset('cliente/img/icons/descripcion.png') }}"
                                            alt="Sistema para Estaciones de Servicios | Power Group System | icono"></span>Descripción
                                </h3>
                                <p>Sistema APPSven es un sistema especializado y de gestión para <b>Estaciones de
                                        Servicio</b>, que permite el control y monitoreo de todas las operaciones, esta
                                    versión esta desarrollado en una plataforma móvil CLIENTE – SERVIDOR en una distribución
                                    ANDROID el cual es instalado dentro del negocio permitiendo limitar las interrupciones
                                    de las operaciones de emisión de comprobantes y trabajos operativos por alguna
                                    alteración del servicio de internet. Esta versión trabaja con redes inalámbricas (WIFI)
                                    y nos brinda varias bondades dentro las cuales podemos destacar: </p>
                                <ul class="circulo">
                                    <li>Control autónomo de los despachos de los dispensadores/surtidores.</li>
                                    <li>Habilitación de dispensadores desde terminales móviles.</li>
                                    <li>Cambio de precios en automático.</li>
                                    <li>Descuentos/incrementos de precios, clientes y productos.</li>
                                    <li>Control de las operaciones de venta de cada grifero facturas, boletas, Notas de
                                        venta, pruebas de calibración, canjes, etc. </li>
                                    <li>Control de cierres por cambio de turno (reportes de cuadre por cada grifero).</li>
                                    <li>Control de operaciones por tipos de pago (efectivo, tarjeta, yape).</li>
                                    <li>Control de clientes créditos a través de Vales, canjes de vales por facturas y
                                        cancelaciones con cobranzas de facturas.</li>
                                    <li>Control de inventarios (stock) e ingresos de compras. </li>
                                    <li>Sistema de fidelización a través stickers RFID.</li>
                                    <li>Descuentos corporativos a través de stickers RFID.</li>
                                    <li>Reportes específicos para la validación de la información. </li>
                                </ul>
                            </section>

                            <section id="requisitos">
                                <h3><span class="px-2"><img src="{{ asset('cliente/img/icons/requisitos.png') }}"
                                            alt="Sistema para Estaciones de Servicios | Power Group System | icono"></span>Requisitos
                                    Previos</h3>
                                <ul class="circulo">
                                    <li>Servidor de datos.</li>
                                    <li>Controlador de dispensadores/surtidores.</li>
                                    <li>Antenas repetidoras de señal WIFI.</li>
                                    <li>Ups y transformador de aislamiento para centro de datos.</li>
                                    <li>Equipos terminales móviles PDA en puntos de venta con impresora térmica bluetooth.
                                    </li>
                                    <li>Módulo de gabinete de piso para servidor y controlador.</li>
                                    <li>Cableado de data dispensadores/surtidores.</li>
                                    <li>Switch de datos para las redes. </li>
                                    <li>Equipo de cómputo oficina para controles administrativos. </li>

                                </ul>
                            </section>

                            <section id="implementacion">
                                <h3><span class="px-2"><img src="{{ asset('cliente/img/icons/implementacion.png') }}"
                                            alt="Sistema para Estaciones de Servicios | Power Group System | icono"></span>Implementación
                                </h3>
                                <ul class="circulo">
                                    <li>Día 1.- Instalación del Software Controlador HORUSTECH.</li>
                                    <li>Día 1.- Instalación del Software Interface de despachos de combustibles versión 2.0.
                                    </li>
                                    <li>Día 1.- Instalación del Software SVEN en equipos de punto de venta y oficina. </li>
                                    <li>Día 1.- Instalación del Software facturación electrónica SVEN y pruebas de
                                        generación y envió de comprobantes electrónicos.</li>
                                    <li>Día 2.- Puesta en marcha del sistema SVEN e inicio de las operaciones en los puntos
                                        de venta.</li>
                                    <li>Día 3, 4, y 5.- Capacitación, monitoreo y control del manejo del sistema a usuarios
                                        de oficina y griferos.</li>

                                </ul>
                            </section>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Sidebar Page Container -->

    <div class="sidebar-side right-sidebar col-lg-4 col-md-12 col-sm-12 d-lg-none pb-3">
        <aside class="sidebar">

            <!-- Contact Widget -->
            <div class="sidebar-widget contact-widget ">
                <div class="widget-content" style="background-image:url({{ asset('cliente/img/background/8.jpg') }})">
                    <div class="help">Contáctanos</div>
                    <div class="py-1">
                        <a target="_blank" class="phone"
                            href="https://api.whatsapp.com/send?phone=+51901716475&text=Hola!%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus%20servicios.">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path
                                        d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                                </svg>
                            </span> 901 716 475
                        </a>
                    </div>
                    <div class="py-1">
                        <a target="_blank" class="phone" href="contact.html">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    class="bi bi-telephone" viewBox="0 0 16 16">
                                    <path
                                        d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                </svg>
                            </span>901 716 475
                        </a>
                    </div>
                </div>
            </div>

        </aside>
    </div>
@endsection
