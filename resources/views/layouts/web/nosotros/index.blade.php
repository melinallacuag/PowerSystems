@extends('layouts.web.master')
@section('cuerpo')
    <!-- Page Title -->
    <section class="page-title img-encabezado"
        style="background-image:url({{ asset('cliente/images/background/background_about.png') }})">
        <div class="auto-container">
            <h2>Nosotros</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ asset('/') }}">Inicio</a></li>
                <li> Nosotros</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- About One -->
    <section class="about-one">
        <div class="services-one_pattern-layer position_background"
            style="background-image: url({{ asset('cliente/images/background/pattern-14.png') }}));"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Content Column -->
                <div class="about-one_content col-lg-6 col-md-12 col-sm-12">
                    <div class="about-one_content-inner">
                        <div class="sec-title">
                            <h2 class="sec-title_heading">Elija <span>La Mejor</span> <br> Solución para Estaciones de
                                Servicio</h2>
                        </div>

                        <!-- About Info Tabs -->
                        <div class="about-info-tabs">
                            <!-- About Tabs -->
                            <div class="about-tabs tabs-box">

                                <!-- Tab Btns -->
                                <ul class="tab-btns tab-buttons clearfix center">
                                    <li data-tab="#prod-mission" class="tab-btn active-btn">Nuestra Misión</li>
                                    <li data-tab="#prod-vision" class="tab-btn">Nuestra Visión</li>
                                </ul>

                                <!-- Tabs Container -->
                                <div class="tabs-content">

                                    <!-- Tab / Active Tab -->
                                    <div class="tab active-tab" id="prod-mission">
                                        <div class="content">
                                            <div class="text">En nuestra empresa de sistemas, nos comprometemos a
                                                proporcionar soluciones tecnológicas de vanguardia que impulsen el éxito de
                                                nuestros clientes, a través de la innovación, la excelencia en el servicio y
                                                la adaptabilidad a las necesidades del mercado.</div>
                                        </div>
                                    </div>

                                    <!-- Tab -->
                                    <div class="tab" id="prod-vision">
                                        <div class="content">
                                            <div class="text">Nos visualizamos como líderes en el desarrollo de sistemas
                                                inteligentes y eficientes que transforman la manera en que las empresas
                                                operan, contribuyendo a un mundo conectado y tecnológicamente avanzado.
                                                Buscamos ser reconocidos por nuestra capacidad de generar soluciones
                                                disruptivas que marquen la diferencia en la industria.</div>
                                        </div>
                                    </div>

                                    <!-- Tab -->
                                    <div class="tab" id="prod-value">
                                        <div class="content">
                                            <div class="text"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="center">
                            <!-- About One Detail -->
                            <a class="about-one_detail lightbox-video"
                                href="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2F100092632664470%2Fvideos%2F641602968109722%2F&show_text=false&width=560&t=0">
                                Consulte detalles sobre nuestra Empresa
                                <span class="play-icon"><span class="fa-solid fa-play fa-fw"></span><i
                                        class="ripple"></i></span>
                            </a>
                        </div>

                    </div>
                </div>
                <!-- Image Column -->
                <div class="about-one_image-column-two col-lg-6 col-md-12 col-sm-12">
                    <div class="about-one-image-inner-two">
                        <div class="about-cicle_layer-two">
                            <img src="{{ asset('cliente/images/background/pattern-45.png') }}"
                                alt="Sistema para Estaciones de Servicios | Power Group System | fondo" />
                        </div>
                        <div class="about-one_image-two">
                            <!-- Counter Column -->
                            <div class="about-one_counter-block">
                                <div class="dots-layer"
                                    style="background-image:url({{ asset('cliente/images/icons/about-dots.png') }} )"></div>
                                <div class="about-one_counter-number"><span class="odometer" data-count="12"></span></div>
                                <div class="about-one_counter-text">años de <br> experiencia</div>
                            </div>
                            <img src="{{ asset('cliente/images/background/gg_resultado.webp') }} "
                                alt="Sistema para Estaciones de Servicios | Power Group System | img"
                                style="height: 320px;width: 450px; border-radius: 20px;" />
                            <div class="about-one_award">
                                <div class="about-one_award-inner">
                                    <div class="about-one_award-icon">
                                        <img src="{{ asset('cliente/images/icons/software.png') }}"
                                            alt="Sistema para Estaciones de Servicios | Power Group System | icono" />
                                    </div>
                                    <strong>Mejor Empresa en Soluciones Tecnológicas</strong>
                                    Nos enorgullece ofrecer productos y servicios de la más alta calidad.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About One -->

    <!-- Team One -->
    <section class="team-one">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="sec-title_title">Miembros del Equipo</div>
                <h2 class="sec-title_heading">Personalidades Apasionadas, <br> <span class="theme_color">Cerebros</span>
                    Versátiles</h2>
            </div>
            <div class="row clearfix">

                <!-- Team One -->
                <div class="team_one col-lg-4 col-md-6 col-sm-12">
                    <div class="team_one-inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="team_one-image">
                            <img src="{{ asset('cliente/images/resource/equipo-1.webp') }}"
                                alt="Sistema para Estaciones de Servicios | Power Group System | Miembro de equipo" />
                            <div class="team_one-content">
                                <h5 class="team-one_title text-white"><a>Jhon Pino</a></h5>
                                <div class="team-one_designation">Gerente General</div>
                            </div>

                            <div class="team_one-overlay">
                                <div class="team-one_overlay-content">
                                    <div class="team_one-text">Lidera la empresa con visión estratégica, impulsando el
                                        crecimiento y la rentabilidad. Su experiencia y liderazgo garantizan la toma de
                                        decisiones acertadas para alcanzar los objetivos corporativos.</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Team One -->
                <div class="team_one col-lg-4 col-md-6 col-sm-12">
                    <div class="team_one-inner wow fadeInUp" data-wow-delay="150ms" data-wow-duration="1500ms">
                        <div class="team_one-image">
                            <img src="{{ asset('cliente/images/resource/equipo-2.webp') }}"
                                alt="Sistema para Estaciones de Servicios | Power Group System | Miembro de equipo" />
                            <div class="team_one-content">
                                <h5 class="team-one_title text-white"><a>Eder Muedas</a></h5>
                                <div class="team-one_designation">Gerente Comercial</div>
                            </div>

                            <div class="team_one-overlay">
                                <div class="team-one_overlay-content">
                                    <div class="team_one-text">Es responsable de la estrategia comercial y el desarrollo de
                                        negocios. Su enfoque en el cliente y su capacidad de negociación son claves para el
                                        éxito de la empresa.</div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Team One -->
                <div class="team_one col-lg-4 col-md-6 col-sm-12">
                    <div class="team_one-inner wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="team_one-image">
                            <img src="{{ asset('cliente/images/resource/equipo-3.webp') }}"
                                alt="Sistema para Estaciones de Servicios | Power Group System | Miembro de equipo" />
                            <div class="team_one-content">
                                <h5 class="team-one_title text-white"><a>David Eslava</a></h5>
                                <div class="team-one_designation">Consultor de Sistemas</div>
                            </div>

                            <div class="team_one-overlay">
                                <div class="team-one_overlay-content">
                                    <div class="team_one-text">Se especializa en la implementación y gestión de soluciones
                                        tecnológicas, asegurando su correcto funcionamiento y adaptación a las necesidades
                                        de la empresa.</div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Team One -->
                <div class="team_one col-lg-4 col-md-6 col-sm-12">
                    <div class="team_one-inner wow fadeInUp" data-wow-delay="450ms" data-wow-duration="1500ms">
                        <div class="team_one-image">
                            <img src="{{ asset('cliente/images/resource/equipo-4.webp') }}"
                                alt="Sistema para Estaciones de Servicios | Power Group System | Miembro de equipo" />
                            <div class="team_one-content">
                                <h5 class="team-one_title text-white"><a>Humberto Rojas</a></h5>
                                <div class="team-one_designation">Consultor de Sistemas</div>
                            </div>

                            <div class="team_one-overlay">
                                <div class="team-one_overlay-content">
                                    <div class="team_one-text">Se especializa en asistencia remota y aseguramiento de la
                                        continuidad de las operaciones. Su experiencia y capacidad de respuesta garantizan
                                        la resolución eficiente de problemas informáticos, minimizando el impacto en la
                                        productividad y el negocio.</div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Team One -->
                <div class="team_one col-lg-4 col-md-6 col-sm-12">
                    <div class="team_one-inner wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="team_one-image">
                            <img src="{{ asset('cliente/images/resource/equipo-5.webp') }}"
                                alt="Sistema para Estaciones de Servicios | Power Group System | Miembro de equipo" />
                            <div class="team_one-content">
                                <h5 class="team-one_title text-white"><a>Melina Llacua</a></h5>
                                <div class="team-one_designation">Analista Programador</div>
                            </div>

                            <div class="team_one-overlay">
                                <div class="team-one_overlay-content">
                                    <div class="team_one-text">Tiene un enfoque meticuloso en la calidad del código y la
                                        atención al detalle. Su trabajo asegura que las aplicaciones sean confiables,
                                        eficientes y fáciles de usar.</div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Team One -->
                <div class="team_one col-lg-4 col-md-6 col-sm-12">
                    <div class="team_one-inner wow fadeInUp" data-wow-delay="450ms" data-wow-duration="1500ms">
                        <div class="team_one-image">
                            <img src="{{ asset('cliente/images/resource/equipo-6.webp') }}"
                                alt="Sistema para Estaciones de Servicios | Power Group System | Miembro de equipo" />
                            <div class="team_one-content">
                                <h5 class="team-one_title text-white"><a>Ellim Avila</a></h5>
                                <div class="team-one_designation">Analista Programador</div>
                            </div>

                            <div class="team_one-overlay">
                                <div class="team-one_overlay-content">
                                    <div class="team_one-text">Desarrolla e implementa software innovador que responde a
                                        las necesidades del negocio, aportando soluciones creativas y eficientes.</div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team One -->

    <!-- Counter One -->
    <section class="counter-one pb-5">
        <div class="auto-container">
            <div class="counter-one_inner-container"
                style="background-image:url({{ asset('cliente/images/background/1.jpg') }})">
                <div class="row clearfix">

                    <!-- Counter Column -->
                    <div class="counter-one_block col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-one_inner">
                            <span class="counter-one_icon fa-solid fa-user-plus fa-fw"></span>
                            <div class="counter-one_counter"><span class="odometer" data-count="150"></span>+</div>
                            <div class="counter-one_text">Clientes</div>
                        </div>
                    </div>

                    <!-- Counter Column -->
                    <div class="counter-one_block col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-one_inner">
                            <span class="counter-one_icon fa-solid fa-award fa-fw"></span>
                            <div class="counter-one_counter"><span class="odometer" data-count="12"></span>+</div>
                            <div class="counter-one_text">Años de Experienecia</div>
                        </div>
                    </div>

                    <!-- Counter Column -->
                    <div class="counter-one_block col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-one_inner">
                            <span class="counter-one_icon fa-regular fa-file fa-fw"></span>
                            <div class="counter-one_counter"><span class="odometer" data-count="200"></span>+</div>
                            <div class="counter-one_text">Implementaciones</div>
                        </div>
                    </div>

                    <!-- Counter Column -->
                    <div class="counter-one_block col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-one_inner">
                            <span class="counter-one_icon fa-solid fa-user-tie fa-fw"></span>
                            <div class="counter-one_counter"><span class="odometer" data-count="20"></span>+</div>
                            <div class="counter-one_text">Aliados Estratégicos</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Counter One -->
@endsection
