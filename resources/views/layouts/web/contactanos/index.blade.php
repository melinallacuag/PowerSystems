@extends('layouts.web.master')
@section('cuerpo')
    <!-- Page Title -->
    <section class="page-title img-encabezado"
        style="background-image:url({{ asset('cliente/img/background/background_about.png') }})">
        <div class="auto-container">
            <h2>Contacto</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Inicio</a></li>
                <li>Contacto</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Contact One -->
    <section class="contact-one">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title center">
                <div class="d-flex justify-content-between align-items-center flex-wrap center">
                    <div class="left-box">
                        <div class="sec-title_title">Contáctanos</div>
                        <h2 class="sec-title_heading">Haga Crecer Su Negocio Con<br> <span>Nuestra Experiencia</span></h2>
                    </div>
                    <div class="right-box ">
                        <div class="sec-title_text fw-bold">
                            <p class="center-txt">La combinación perfecta de procesos maduros, <br> modelos de entrega
                                flexibles y gestión eficaz de proyectos.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix" style="align-items: center;">

                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <!-- Contact Block -->
                        <div class="contact-block">
                            <div class="content-contact">
                                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="#19a400"
                                    class="bi bi-map" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.5.5 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103M10 1.91l-4-.8v12.98l4 .8zm1 12.98 4-.8V1.11l-4 .8zm-6-.8V1.11l-4 .8v12.98z">
                                    </path>
                                </svg>
                                <div class="text-contect">
                                    <strong>Dirección Principal</strong>
                                    Jr. Los Precursores Mz.102 Lt.2 AA.HH, Nicolas de Piérola - Lima - Lurigancho
                                </div>

                            </div>
                        </div>

                        <!-- Contact Block -->
                        <div class="contact-block">
                            <div class="content-contact">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#19a400"
                                    class="bi bi-map" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.5.5 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103M10 1.91l-4-.8v12.98l4 .8zm1 12.98 4-.8V1.11l-4 .8zm-6-.8V1.11l-4 .8v12.98z">
                                    </path>
                                </svg>
                                <div class="text-contect">
                                    <strong>Sucursal</strong>
                                    Jr. La Unión N°814 Pueblo Azapampa, Junín - Huancayo - Chilca
                                </div>
                            </div>
                        </div>


                        <!-- Contact Block -->
                        <div class="contact-block">
                            <div class="content-contact">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#19a400"
                                    class="bi bi-telephone" viewBox="0 0 16 16">
                                    <path
                                        d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z">
                                    </path>
                                </svg>
                                <div class="text-contect">
                                    <strong>Número de teléfono</strong>
                                    (+51) 901 716 475 <br> (+51) 915 173 761 <br> (+51) 951 684 791
                                </div>
                            </div>
                        </div>

                        <!-- Contact Block -->
                        <div class="contact-block">
                            <div class="content-contact">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#19a400"
                                    class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path
                                        d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232">
                                    </path>
                                </svg>
                                <div class="text-contect">
                                    <strong>Whatsapp</strong>
                                    <a target="_blank"
                                        href="https://api.whatsapp.com/send?phone=+51901716475&text=Hola!%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus%20servicios.">(+51)
                                        901 716 475</a>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Block -->
                        <div class="contact-block">
                            <div class="content-contact">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#19a400"
                                    class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z">
                                    </path>
                                </svg>
                                <div class="text-contect">
                                    <strong>Correo Electrónico</strong>
                                    comercial@sosfact.com
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-lg-8 col-md-12 col-sm-12 mx-auto">
                    <div id="fondo-formulario" class="inner-column"
                         style="background-image: url('images/resource/news-2.jpg'); background-size: cover;">
                         <form class="row g-3 needs-validation" novalidate id="formulario-contacto"  action="{{ route('contact.send') }}" method="POST">
                            @csrf
                            <div id="alert-area" class="alert alert-danger col-12 hidden"></div>
                            <div id="success-area" class="alert alert-success col-12 hidden"></div>
                            <div class="col-md-4">
                                <label for="nombres" class="form-label fw-bold text-colors">* Nombres: </label>
                                <input type="text" class="form-control border-input" id="nombres" name="nombres" maxlength="30" placeholder="Ingresar Nombres" pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+">
                            </div>
                            <div class="col-md-4">
                                <label for="apellidos" class="form-label fw-bold text-colors">* Apellidos: </label>
                                <input type="text" class="form-control border-input" id="apellidos" name="apellidos" maxlength="50" placeholder="Ingresar Apellidos" pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+">
                            </div>
                            <div class="col-md-4">
                                <label for="telefono" class="form-label fw-bold text-colors">* Teléfono: </label>
                                <input type="number" class="form-control border-input" id="telefono" name="telefono" maxlength="9" oninput="limitDigits(this, 9)" placeholder="Ingresar Teléfono">
                            </div>
                            <div class="col-md-4">
                                <label for="ruc" class="form-label fw-bold text-colors">* RUC: </label>
                                <input type="number" class="form-control border-input" id="ruc" name="ruc" placeholder="Ingresar RUC" maxlength="11" oninput="limitDigits(this, 11)">
                            </div>
                            <div class="col-md-4">
                                <label for="empresa" class="form-label fw-bold text-colors">* Empresa: </label>
                                <input type="text" class="form-control border-input" id="empresa" name="empresa" maxlength="100" placeholder="Ingresar Empresa">
                            </div>

                            <div class="col-md-4">
                                <label for="ciudad" class="form-label fw-bold text-colors">* Ciudad: </label>
                                <input type="text" class="form-control border-input" id="ciudad" name="ciudad" maxlength="30" placeholder="Ingresar Ciudad" pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="correo" class="form-label fw-bold text-colors">* Correo Electrónico: </label>
                                <input type="email" class="form-control border-input" id="correo" name="correo" maxlength="100" placeholder="name@example.com">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="asunto" class="form-label fw-bold text-colors">* Asunto: </label>
                                <input type="text" class="form-control border-input" id="asunto" name="asunto" maxlength="200" placeholder="Ingresar Asunto">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="mensaje" class="form-label fw-bold text-colors">* Mensaje: </label>
                                <textarea class="form-control border-input" id="mensaje" name="mensaje" maxlength="150" placeholder="Mensaje..."></textarea>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <button class="btn btn-primary fw-bold btn-lg" style="background: #1aa700; width: 100%;" type="submit">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact One -->
@endsection
<style>
    .hidden {
            display: none;
        }
        #mensaje {
    height: 100px; /* Ajusta este valor según tus necesidades */
}
</style>
<script>
    function limitDigits(element, maxDigits) {
        if (element.value.length > maxDigits) {
            element.value = element.value.slice(0, maxDigits);
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('nombres').addEventListener('input', function (event) {
        const input = event.target;
        const pattern = /^[A-Za-zÁÉÍÓÚáéíóúñÑ\s]*$/;

        if (!pattern.test(input.value)) {
            input.value = input.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúñÑ\s]/g, '');
        }
    });

    document.getElementById('apellidos').addEventListener('input', function (event) {
        const input = event.target;
        const pattern = /^[A-Za-zÁÉÍÓÚáéíóúñÑ\s]*$/;

        if (!pattern.test(input.value)) {
            input.value = input.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúñÑ\s]/g, '');
        }
    });

    document.getElementById('ciudad').addEventListener('input', function (event) {
        const input = event.target;
        const pattern = /^[A-Za-zÁÉÍÓÚáéíóúñÑ\s]*$/;

        if (!pattern.test(input.value)) {
            input.value = input.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúñÑ\s]/g, '');
        }
    });
        document.getElementById('formulario-contacto').addEventListener('submit', function(event) {
            event.preventDefault();

            const form = event.target;
                const alertArea = document.getElementById('alert-area');
                const successArea = document.getElementById('success-area');
                let isValid = true;
                let errorMessages = [];

            const nombres = document.getElementById('nombres').value.trim();
            const apellidos = document.getElementById('apellidos').value.trim();
            const telefono = document.getElementById('telefono').value.trim();
            const ruc = document.getElementById('ruc').value.trim();
            const empresa = document.getElementById('empresa').value.trim();
            const ciudad = document.getElementById('ciudad').value.trim();
            const correo = document.getElementById('correo').value.trim();
            const asunto = document.getElementById('asunto').value.trim();
            const mensaje = document.getElementById('mensaje').value.trim();

            if (nombres === '') {
                isValid = false;
                errorMessages.push('* El campo Nombres es obligatorio.');
            }
            if (apellidos === '') {
                isValid = false;
                errorMessages.push('* El campo Apellidos es obligatorio.');
            }
            if (telefono === '' || !/^\d{9}$/.test(telefono)) {
                isValid = false;
                errorMessages.push('* El Teléfono debe tener 9 dígitos.');
            }
            if (ruc === '' || !/^\d{11}$/.test(ruc)) {
                isValid = false;
                errorMessages.push('* El RUC debe tener 11 dígitos.');
            }
            if (empresa === '') {
                isValid = false;
                errorMessages.push('* El campo Empresa es obligatorio.');
            }
            if (ciudad === '') {
                isValid = false;
                errorMessages.push('* El campo Ciudad es obligatorio.');
            }
            if (correo === '' || !/^\S+@\S+\.\S+$/.test(correo)) {
                isValid = false;
                errorMessages.push('* El Correo Electrónico debe ser válido.');
            }
            if (asunto === '') {
                isValid = false;
                errorMessages.push('* El campo Asunto es obligatorio.');
            }
            if (mensaje === '') {
                isValid = false;
                errorMessages.push('* El campo Mensaje es obligatorio.');
            }


            if (!isValid) {
                successArea.classList.add('hidden');
                alertArea.innerHTML = errorMessages.join('<br>');
                alertArea.classList.remove('hidden');
            } else {
                alertArea.classList.add('hidden');
                successArea.innerHTML = '¡Correo enviado correctamente!';
                successArea.classList.remove('hidden');

                form.submit();

                form.reset();

                setTimeout(function() {
                    successArea.classList.add('hidden');
                }, 5000);
            }

        });
    });
</script>
