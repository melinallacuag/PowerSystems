<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" flex items-center p-4 text-gray-900" style="gap: 0.5rem; margin-left:0.5rem;">
                    <p class="font-semibold text-sm text-green-600 leading-tight">
                        <a href="{{ route('usuarios.index') }}">Usuarios</a>
                    </p>
                    <p class="text-sm text-gray-500 leading-tight">
                        > Crear nuevo usuario
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
                    <form method="POST" action="{{ route('usuarios.save') }}" id="user-form" class="w-full max-w-lg">
                        @csrf
                        <!-- Alertas del Usuario -->
                        <div class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label :value="__(' ')" id="alert-area" class="font-semibold text-red-600" />
                            </div>
                        </div>
                        <!-- Datos del Usuario -->
                        <div class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label :value="__('Datos del Usuario: ')" class="font-semibold text-green-600" />
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12 flex-inputs">
                            <!-- Nombres y Apellidos -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Nombres y Apellidos *')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" oninput="validateNameInput(this)"  autofocus placeholder="Ingresar Nombres y Apellidos" />
                            </div>
                            <!-- DNI -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="dni" :value="__('DNI *')" />
                                <x-text-input id="dni" class="block mt-1 w-full" type="number" name="dni" maxlength="8" oninput="limitDigits(this, 8)" :value="old('dni')" autofocus placeholder="Ingresar DNI" />
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
                            <!-- Rol -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="role" :value="__('Rol *')" />
                                <select id="role" name="role" :value="old('role')"class="block mt-1 w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm">
                                    <option value="" disabled selected>Seleccionar Rol</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                        </div>
                        <!-- Credencial del Usuario -->
                        <div class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label :value="__('Credencial del Usuario: ')" class="font-semibold text-green-600" />
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12">
                            <!-- Usuario -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="email" :value="__('Correo Electrónico del Usuario *')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Ingresar Correo Electrónico del Usuario"/>
                                <span class="txt-mensaje">*Ejemplo de usuario: usuario@ejemplo.com </span>
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12 flex-inputs">
                            <!-- Contraseña -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="password" :value="__('Contraseña *')" />
                                <div class="relative">
                                    <x-text-input id="password" class="block mt-1 w-full pr-10" type="password" name="password"
                                        placeholder="Ingresar Contraseña" />
                                    <span class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer"
                                        onclick="togglePasswordVisibility('password', 'togglePassword')">
                                        <svg id="togglePassword" class="h-6 w-6 text-gray-900" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <!-- Ojo abierto -->
                                            <path id="openEye" style="display:none;"
                                                d="M12 4.5C7.30558 4.5 3.29936 7.76315 1.5 12C3.29936 16.2369 7.30558 19.5 12 19.5C16.6944 19.5 20.7006 16.2369 22.5 12C20.7006 7.76315 16.6944 4.5 12 4.5ZM12 17.25C9.10051 17.25 6.75 14.8995 6.75 12C6.75 9.10051 9.10051 6.75 12 6.75C14.8995 6.75 17.25 9.10051 17.25 12C17.25 14.8995 14.8995 17.25 12 17.25ZM12 8.25C10.4812 8.25 9.25 9.48122 9.25 11C9.25 12.5188 10.4812 13.75 12 13.75C13.5188 13.75 14.75 12.5188 14.75 11C14.75 9.48122 13.5188 8.25 12 8.25Z" />
                                            <!-- Ojo cerrado -->
                                            <path id="closedEye"
                                                d="M12 4.5C7.30558 4.5 3.29936 7.76315 1.5 12C3.29936 16.2369 7.30558 19.5 12 19.5C16.6944 19.5 20.7006 16.2369 22.5 12C20.7006 7.76315 16.6944 4.5 12 4.5ZM12 17.25C9.10051 17.25 6.75 14.8995 6.75 12C6.75 9.10051 9.10051 6.75 12 6.75C14.8995 6.75 17.25 9.10051 17.25 12C17.25 14.8995 14.8995 17.25 12 17.25ZM2 12L22 12M2 12L4 10M2 12L4 14M22 12L20 10M22 12L20 14" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <!-- Confirmar Contraseña -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña *')" />
                                <div class="relative">
                                    <x-text-input id="password_confirmation" class="block mt-1 w-full pr-10" type="password"
                                        name="password_confirmation" placeholder="Confirmar Contraseña" />
                                    <span class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer"
                                        onclick="togglePasswordVisibility('password_confirmation', 'togglePasswordConfirmation')">
                                        <svg id="togglePasswordConfirmation" class="h-6 w-6 text-gray-900" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <!-- Ojo abierto -->
                                            <path id="openEyeConfirmation" style="display:none;"
                                                d="M12 4.5C7.30558 4.5 3.29936 7.76315 1.5 12C3.29936 16.2369 7.30558 19.5 12 19.5C16.6944 19.5 20.7006 16.2369 22.5 12C20.7006 7.76315 16.6944 4.5 12 4.5ZM12 17.25C9.10051 17.25 6.75 14.8995 6.75 12C6.75 9.10051 9.10051 6.75 12 6.75C14.8995 6.75 17.25 9.10051 17.25 12C17.25 14.8995 14.8995 17.25 12 17.25ZM12 8.25C10.4812 8.25 9.25 9.48122 9.25 11C9.25 12.5188 10.4812 13.75 12 13.75C13.5188 13.75 14.75 12.5188 14.75 11C14.75 9.48122 13.5188 8.25 12 8.25Z" />
                                            <!-- Ojo cerrado -->
                                            <path id="closedEyeConfirmation"
                                                d="M12 4.5C7.30558 4.5 3.29936 7.76315 1.5 12C3.29936 16.2369 7.30558 19.5 12 19.5C16.6944 19.5 20.7006 16.2369 22.5 12C20.7006 7.76315 16.6944 4.5 12 4.5ZM12 17.25C9.10051 17.25 6.75 14.8995 6.75 12C6.75 9.10051 9.10051 6.75 12 6.75C14.8995 6.75 17.25 9.10051 17.25 12C17.25 14.8995 14.8995 17.25 12 17.25ZM2 12L22 12M2 12L4 10M2 12L4 14M22 12L20 10M22 12L20 14" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" id="continue-register" name="continue_register" value="false">

                        <div  class="flex flex-wrap -mx-3 mb-12 flex-inputs">
                             <!-- Boton Registrar Usuario -->
                             <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                                <x-segundary-button data-continue-register="disabled" class="btn-register w-full text-center btn-large">
                                    <span class="w-full">AGREGAR</span>
                                </x-segundary-button>
                            </div>
                             <!-- Boton Seguir Registrando Usuario -->
                             <div class="w-full md:w-1/3 px-3  mb-4 md:mb-0">
                                <x-primary-button data-continue-register="enabled" class="btn-register w-full text-center btn-small" >
                                    <span class="w-full">SEGUIR AGREGANDO</span>
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
   .relative .absolute {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        right: 0.75rem;
        cursor: pointer;
    }

    #eyeClosedIcon,
    #eyeClosedConfirmationIcon {
        display: none;
    }

    .disabled-input {
        background-color: #f0f0f0;
        /* Color de fondo gris claro */
        border: 1px solid #ccc;
        /* Borde gris */
        /* cursor: not-allowed;  Cursor de no permitido */
    }

    </style>

<script>

function validateNameInput(input) {
        // Solo permite letras y espacios
        input.value = input.value.replace(/[^a-zA-Z\s]/g, '');
    }

     /** Visualizar Contraseña **/

     function togglePasswordVisibility(passwordFieldId, iconId) {
        const passwordField = document.getElementById(passwordFieldId);
        const icon = document.getElementById(iconId);
        const openEyeIcon = icon.querySelector('path[id^="openEye"]');
        const closedEyeIcon = icon.querySelector('path[id^="closedEye"]');

        const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordField.setAttribute('type', type);

        if (openEyeIcon && closedEyeIcon) {
            openEyeIcon.style.display = type === 'password' ? 'none' : 'block';
            closedEyeIcon.style.display = type === 'password' ? 'block' : 'none';
        }
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
                window.location.href = '{{ route('usuarios.index') }}';
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

    function buscarCliente() {
        let ruc = document.getElementById('ruc').value;
        const alertArea = document.getElementById('alert-area');
        const razonSocialInput = document.getElementById('razon_social');

        if (ruc.length === 11) {
            fetch('{{ route("usuarios.buscarCliente") }}', {
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

    function validateForm() {

        const alertArea = document.getElementById('alert-area');
        const name = document.getElementById('name').value.trim();
        const dni = document.getElementById('dni').value.trim();
        const ruc = document.getElementById('ruc').value.trim();
        const razon_social = document.getElementById('razon_social').value.trim();
        const cargos_id = document.getElementById('cargos_id').value.trim();
        const role = document.getElementById('role').value.trim();
        const email = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value.trim();
        const password_confirmation = document.getElementById('password_confirmation').value.trim();

            let isValid = true;
            let errorMessages = [];

            if(name === ''){
                isValid = false;
                errorMessages.push('* El campo nombres y apellidos es obligatorio.');
            }else if(dni === ''){
                isValid = false;
                errorMessages.push('* El campo DNI es obligatorio.');
            }else if (dni.length !== 8) {
                isValid = false;
                errorMessages.push('* El DNI debe tener 8 dígitos.');
            }else if(ruc === ''){
                isValid = false;
                errorMessages.push('* El campo RUC es obligatorio.');
            }else if (ruc.length !== 11) {
                isValid = false;
                errorMessages.push('* El RUC debe tener 11 dígitos.');
            }else if(razon_social === ''){
                isValid = false;
                errorMessages.push('* El campo razón social es obligatorio.');
            }else if(cargos_id === ''){
                isValid = false;
                errorMessages.push('* Seleccionar Cargo.');
            }else if(role === ''){
                isValid = false;
                errorMessages.push('* Seleccionar Rol.');
            }else if(email === ''){
                isValid = false;
                errorMessages.push('* El campo correo electrónico del usuario es obligatorio');
            }else if (!validateEmail(email)) {
                isValid = false;
                errorMessages.push('* El correo electrónico no tiene un formato válido.');
            }else if(password === ''){
                isValid = false;
                errorMessages.push('* El campo contraseña es obligatorio');
            }else if(password_confirmation === ''){
                isValid = false;
                errorMessages.push('* El campo confirmar contraseña es obligatorio');
            }else if(password !== password_confirmation){
                isValid = false;
                errorMessages.push('* Las contraseña son distintas');
            }else if(password.length < 8){
                isValid = false;
                errorMessages.push('* El campo contraseña debe contener al menos 8 caracteres.');
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

    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

</script>
