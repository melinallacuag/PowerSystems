<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" flex items-center p-4 text-gray-900" style="gap: 0.5rem; margin-left:0.5rem;">
                    <p class="font-semibold text-sm text-green-600 leading-tight">
                        <a href="{{ route('clientes.index') }}">Cliente</a>
                    </p>
                    <p class="text-sm text-gray-500 leading-tight">
                        > Crear nuevo cliente
                    </p>
                </div>
            </div>
        </div>
    </div>
    @if (session('message'))
        <div class="notification fixed  hidden" id="notification">
            {{ session('message') }}
        </div>
    @endif
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('clientes.save') }}"  id="user-form" class="w-full max-w-lg">
                        @csrf
                        <!-- Alertas del Cliente -->
                        <div class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label :value="__(' ')" id="alert-area" class="font-semibold text-red-600" />
                            </div>
                        </div>
                        <!-- Datos del Cliente -->
                        <div class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label :value="__('Datos del Cliente: ')" class="font-semibold text-green-600" />
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12 flex-inputs">
                           <!-- RUC y Botón de Buscar Cliente-->
                            <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                                <div class="flex-inputs">
                                    <div class="w-full md:w-1/3 mb-4 md:mb-0">
                                        <x-input-label for="ruc" :value="__('RUC *')" />
                                        <x-text-input id="ruc" class="block mt-1 w-full" type="number" maxlength="11" oninput="limitDigits(this, 11)"  name="ruc" :value="old('ruc')" placeholder="Ingresar RUC" />
                                    </div>
                                    <div class="w-full md:w-2/3 mb-4 md:mb-0 btn-buscar-align">
                                        <x-segundary-button type="button" id="btnBuscarCliente" class="w-full text-center btn-large">
                                            <span class="w-full">BUSCAR</span>
                                        </x-segundary-button>
                                    </div>
                                </div>
                            </div>
                            <!-- Razón Social -->
                            <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                                <x-input-label for="razon_social" :value="__('Razón Social *')" />
                                <x-text-input id="razon_social" class="block mt-1 w-full" type="text" name="razon_social" :value="old('razon_social')" placeholder="Ingresar Razón Social" />
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12 flex-inputs">
                            <!-- Nombre Comercial -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                               <x-input-label for="nom_comercial" :value="__('Nombre Comercial *')" />
                               <x-text-input id="nom_comercial" class="block mt-1 w-full" type="text" name="nom_comercial" :value="old('nom_comercial')" placeholder="Ingresar Nombre Comercial"/>
                           </div>
                            <!-- Nombre de Contacto -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="nom_contacto" :value="__('Nombre de Contacto *')" />
                                <x-text-input id="nom_contacto" class="block mt-1 w-full" type="text" name="nom_contacto" :value="old('nom_contacto')" oninput="validateNameInput(this)" placeholder="Ingresar Nombre de Contacto"/>
                            </div>
                       </div>

                        <div class="flex flex-wrap -mx-3 mb-12 flex-inputs">
                            <!-- Cargo -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="cargos_id " :value="__('Cargo *')" />
                                <select id="cargos_id" name="cargos_id" class="block mt-1 w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm">
                                    <option value="" disabled selected>Seleccionar Cargo</option>
                                    @foreach($cargos as $cargo)
                                        <option value="{{ $cargo->id }}">{{ $cargo->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Tipo de Servicios -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="service_id " :value="__('Tipo de Servicios *')" />
                                <select id="service_id" name="service_id" class="block mt-1 w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm">
                                    <option value="" disabled selected>Seleccionar Tipo de Servicios</option>
                                    @foreach($services as $service)
                                    <option value="{{ $service->id }}">{{ $service->name }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12 flex-inputs">
                            <!-- Telefono -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="telefono" :value="__('Teléfono ')" />
                                <x-text-input id="telefono" class="block mt-1 w-full" type="text" name="telefono" :value="old('telefono')" placeholder="Ingresar Teléfono"/>
                            </div>
                            <!-- Correo Electrónico -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="correo" :value="__('Correo Electrónico ')" />
                                <x-text-input id="correo" class="block mt-1 w-full" type="email" name="correo" :value="old('correo')"  placeholder="Ingresar Correo Electrónico"/>
                                <span class="txt-mensaje">  *Ejemplo de usuario: usuario@ejemplo.com </span>
                            </div>
                        </div>

                         <!-- Fecha de Instalación y Apertura -->
                         <div class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Fecha del Instalación y Apertura: ')" class="font-semibold text-green-600" />
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12 flex-inputs">
                            <!-- Fecha Inicio de instalacion -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="fecha_instalacion" :value="__('Fecha de Instalación *')" />
                                <x-text-input id="fecha_instalacion" class="block mt-1 w-full" type="date" name="fecha_instalacion" :value="old('fecha_instalacion')" />
                            </div>
                            <!-- Fecha Fin de apertura-->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="fecha_apertura" :value="__('Fecha de Apertura*')" />
                                <x-text-input id="fecha_apertura" class="block mt-1 w-full" type="date" name="fecha_apertura" :value="old('fecha_apertura')" />
                            </div>
                        </div>

                        <!-- Fecha de Contrato -->
                        <div class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Fecha del Contrato: ')" class="font-semibold text-green-600" />
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12 flex-inputs">
                            <!-- Fecha Inicio de contrato -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="fecha_inicio" :value="__('Fecha Inicio *')" />
                                <x-text-input id="fecha_inicio" class="block mt-1 w-full" type="date" name="fecha_inicio" :value="old('fecha_inicio')" />
                            </div>
                            <!-- Fecha Fin de contrato-->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="fecha_fin" :value="__('Fecha Fin*')" />
                                <x-text-input id="fecha_fin" class="block mt-1 w-full" type="date" name="fecha_fin" :value="old('fecha_fin')" />
                            </div>
                        </div>

                        <input type="hidden" id="continue-register" name="continue_register" value="false">

                        <div  class="flex flex-wrap -mx-3 mb-12 flex-inputs">
                            <!-- Boton Registrar Cliente -->
                            <div class="w-full md:w-2/3 px-3 mb-4 md:mb-0">
                                <x-segundary-button data-continue-register="disabled" class="btn-register w-full text-center btn-large">
                                    <span class="w-full">AGREGAR</span>
                                </x-segundary-button>
                            </div>
                            <!-- Boton Seguir Registrando Cliente -->
                            <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                                <x-primary-button data-continue-register="enabled" class="btn-register w-full text-center btn-small" >
                                    <span class="w-full">SEGUIR REGISTRANDO</span>
                                </x-primary-button>
                            </div>
                            <!-- Boton Cancelar Registro -->
                            <div class="w-full md:w-2/3 px-3 mb-4 md:mb-0 ">
                                <x-danger-button id="btnCancelar" class="w-full text-center btn-small" type="button">
                                    <span class="w-full">CANCELAR</span>
                                </x-danger-button>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>


    .disabled-input {
        background-color: #f0f0f0;
        /* Color de fondo gris claro */
        border: 1px solid #ccc;
        /* Borde gris */
        /* cursor: not-allowed;  Cursor de no permitido */
    }

    </style>

<script>

    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    function validateNameInput(input) {
        // Solo permite letras y espacios
        input.value = input.value.replace(/[^a-zA-Z\s]/g, '');
    }

    function limitDigits(element, maxDigits) {
        if (element.value.length > maxDigits) {
            element.value = element.value.slice(0, maxDigits);
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        const btnCancelar = document.getElementById('btnCancelar');
        if (btnCancelar) {
            btnCancelar.addEventListener('click', function () {
                window.location.href = '{{ route('clientes.index') }}';
            });
        }

        const notification = document.getElementById('notification');
        if (notification) {
            if (notification.innerText.trim() !== '') {
                notification.classList.add('show');
                setTimeout(() => {
                    notification.classList.add('hide');
                    setTimeout(() => {
                        notification.style.display = 'none';
                    }, 300);
                }, 3000);
            }
        }

        let inputContinueRegister = document.querySelector('#continue-register');
        let btnRegister = document.querySelectorAll('.btn-register');
        let razonSocialInput = document.getElementById('razon_social');

        btnRegister.forEach(btn => {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                if (validateForm()) {

                    razonSocialInput.disabled = false;

                    if (btn.getAttribute('data-continue-register') == 'enabled') {
                        inputContinueRegister.value = 'enabled';
                    } else {
                        inputContinueRegister.value = 'disabled';
                    }
                    document.getElementById('user-form').submit();
                }
            });
        });

        document.getElementById('btnBuscarCliente').addEventListener('click', function () {
            buscarCliente();
        });

    });


    function validateForm() {
        const alertArea = document.getElementById('alert-area');
        const ruc = document.getElementById('ruc').value.trim();
        const razon_social = document.getElementById('razon_social').value.trim();
        const nom_comercial = document.getElementById('nom_comercial').value.trim();
        const nom_contacto = document.getElementById('nom_contacto').value.trim();
        const cargos_id = document.getElementById('cargos_id').value.trim();
        const service_id = document.getElementById('service_id').value.trim();
        const fecha_inicio = document.getElementById('fecha_inicio').value.trim();
        const fecha_fin = document.getElementById('fecha_fin').value.trim();
        const fecha_instalacion = document.getElementById('fecha_instalacion').value.trim();
        const fecha_apertura = document.getElementById('fecha_apertura').value.trim();

        let isValid = true;
        let errorMessages = [];

        if (ruc === '') {
            isValid = false;
            errorMessages.push('* El campo RUC es obligatorio.');
        } else if (ruc.length !== 11) {
            isValid = false;
            errorMessages.push('* El RUC debe tener 11 dígitos.');
        }else if (razon_social === '') {
            isValid = false;
            errorMessages.push('* El campo razón social es obligatorio.');
        }else if (nom_comercial === '') {
            isValid = false;
            errorMessages.push('* El campo nombre comercial es obligatorio.');
        }else if (nom_contacto === '') {
            isValid = false;
            errorMessages.push('* El campo nombre contacto es obligatorio.');
        }else if (cargos_id === '') {
            isValid = false;
            errorMessages.push('* Seleccionar Cargo.');
        }else if (service_id === '') {
            isValid = false;
            errorMessages.push('* Seleccionar Tipo de Servicio.');
        }else if (fecha_instalacion === '') {
            isValid = false;
            errorMessages.push('* El campo fecha de instalación es obligatorio.');
        }else if (fecha_apertura === '') {
            isValid = false;
            errorMessages.push('* El campo fecha fin de apertura es obligatorio.');
        }else if (fecha_inicio === '') {
            isValid = false;
            errorMessages.push('* El campo fecha inicio de contrato es obligatorio.');
        }else if (fecha_fin === '') {
            isValid = false;
            errorMessages.push('* El campo fecha fin de contrato es obligatorio.');
        }

        if (!isValid) {
            alertArea.innerHTML = errorMessages.join('<br>');
            alertArea.classList.remove('hidden');
        } else {
            alertArea.classList.add('hidden');
            alertArea.innerHTML = '';
        }

        return isValid;
    }

    function buscarCliente() {
        let ruc = document.getElementById('ruc').value;
        const alertArea = document.getElementById('alert-area');
        const razonSocialInput = document.getElementById('razon_social');

        if (ruc.length === 11) {
            fetch('{{ route("clientes.buscarCliente") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ ruc: ruc })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    if (data.usuario) {
                        document.getElementById('razon_social').value = data.usuario.razon_social;
                    } else if (data.clientes) {
                        document.getElementById('razon_social').value = data.clientes.razon_social;
                    }
                    razonSocialInput.disabled = true;
                    razonSocialInput.classList.add('disabled-input');
                    alertArea.classList.add('hidden');
                    alertArea.textContent = '';
                } else {
                    document.getElementById('razon_social').value = '';
                    razonSocialInput.disabled = false;
                    razonSocialInput.classList.remove('disabled-input');
                    alertArea.textContent = '* Razón Social no encontrado.';
                    alertArea.classList.remove('hidden');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        } else {
            alertArea.textContent = '* El RUC debe tener 11 dígitos.';
            alertArea.classList.remove('hidden');
        }
    }

</script>
