<footer class="main-footer" style="background-image:url( {{ asset('cliente/img/background/pattern-11.png') }})">

    <div class="auto-container">

        <!-- Widgets Section -->
        <div class="widgets-section">
            <div class="row clearfix" style="align-content: center; justify-content: center;">

                <!-- Big Column -->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix" style="align-content: center; justify-content: center;">

                        <!-- Footer Column -->
                        <div class="footer-column aligm_footer">
                            <div class="footer-widget logo-widget">
                                <div class="logo-iconoimg">
                                    <a href="{{ asset('/') }}" class="aligm_img"><img
                                            src=" {{ asset('cliente/img/logos/LOGO-PAG-BLANCO.png') }}"
                                            alt="Sistema para Estaciones de Servicios | Power Group System | logo-empresa"
                                            width="50%" /></a>
                                </div>
                            </div>
                            <div class="py-1" style="width: 90%; margin-bottom: 0.85rem;">
                                <select onchange="mostrarLocalMapa(this.value)" class="form-select" name="select">
                                    <option value="1">Jr. Los Precursores Mz.102 Lt.2 AA.HH, Nicolas de Piérola -
                                        Lurigancho - Lima - Lima</option>
                                    <option value="2" selected>Jr. La Unión N°814, Azapampa - Chilca - Huancayo -
                                        Junín</option>
                                </select>
                            </div>
                            <iframe id="mapa-locales" class="mapa-border"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d975.3276356963357!2d-75.19765563048907!3d-12.090880187904428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910e97030d0d43b3%3A0x15a65c8004d91280!2sLa%20Union%20Azapampa%20814%2C%20Huancayo%2012003!5e0!3m2!1ses!2spe!4v1709153145362!5m2!1ses!2spe"
                                width="90%" height="350PX" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

                <!-- Big Column -->
                <div class="big-column col-lg-4 col-md-12 col-sm-12  align-items-center">
                    <div class="row clearfix" style="align-content: center; justify-content: center;">

                        <!-- Footer Column -->
                        <div class="footer-column aligm_footer">
                            <div class="footer-widget contact-widget aligns_items">
                                <h4>Información Oficial:</h4>

                                <div class="timing">
                                    <strong>Contáctenos: </strong>
                                </div>

                                <ul class="contact-list">
                                    <li><span class="icon fa fa-phone"></span> (+51) 901 716 475 <br> (+51) 915 173 761
                                        <br> (+51) 951 684 791
                                    </li>
                                    <li><span class="icon fa fa-envelope"></span> comercial@sosfact.com</li>
                                    <li><span class="icon fa fa-brands"></span> Jr. Los Precursores Mz.102 Lt.2 AA.HH,
                                        Nicolas de Piérola - Lurigancho - Lima - Lima
                                        Sucursal: Jr. La Unión N°814, Azapampa - Chilca - Huancayo - Junín</li>
                                </ul>
                                <div class="timing">
                                    <strong>Horarios de Atención | Oficina: </strong>
                                    Lunes - Viernes: 09:00 A.M - 06:00 P.M <br>
                                    Sábado: 09:00 A.M - 01:00 PM <br>
                                    Domingo: CERRADO
                                </div>

                                <div class="timing">
                                    <strong>Horarios de Atención | Mesa de Ayuda: </strong>
                                    Asistencia 24/7
                                </div>

                                <div class="timing">
                                    <strong>Nuestras Redes: </strong>
                                    <ul class="header-social_box">
                                        <li><a target="_blank"
                                                href="https://www.facebook.com/profile.php?id=100092632664470&sfnsn=wa&mibextid=RUbZ1f"><img
                                                    src="{{ asset('cliente/img/icons/facebook.webp') }}"
                                                    width="45px"
                                                    alt="Sistema para Estaciones de Servicios | Power Group System | facebook"></a>
                                        </li>
                                        <li><a target="_blank" href="https://www.facebook.com/profile.php?id=100092632664470&sfnsn=wa&mibextid=RUbZ1f"><img
                                                    src="{{ asset('cliente/img/icons/twitter.webp') }}"
                                                    width="45px"
                                                    alt="Sistema para Estaciones de Servicios | Power Group System | twitter"></a>
                                        </li>
                                        <li><a target="_blank" href="https://www.facebook.com/profile.php?id=100092632664470&sfnsn=wa&mibextid=RUbZ1f"><img
                                                    src="{{ asset('cliente/img/icons/linkedin.webp') }}"
                                                    width="45px"
                                                    alt="Sistema para Estaciones de Servicios | Power Group System | linkedin"></a>
                                        </li>
                                        <li><a target="_blank" href="https://www.facebook.com/profile.php?id=100092632664470&sfnsn=wa&mibextid=RUbZ1f"><img
                                                    src="{{ asset('cliente/img/icons/instagram.webp') }}"
                                                    width="45px"
                                                    alt="Sistema para Estaciones de Servicios | Power Group System | instagram"></a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="copyright">2024 &copy; Todos los derechos reservados por <a> POWER GROUP SYSTEM</a></div>
        </div>
    </div>
</footer>
<!-- Footer -->
