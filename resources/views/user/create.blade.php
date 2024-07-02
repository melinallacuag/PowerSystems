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
                    <form method="POST" action="{{ route('usuarios.save') }}" class="w-full max-w-lg">
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
                        <!-- Nombre del Usuario -->
                        <div class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Nombre del Usuario *')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" autofocus placeholder="Ingresar Nombre del Usuario" />
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12 flex-inputs">
                            <!-- RUC -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="ruc" :value="__('RUC *')" />
                                <x-text-input id="ruc" class="block mt-1 w-full" type="number" maxlength="11" oninput="limitDigits(this, 11)"  name="ruc" :value="old('ruc')"  placeholder="Ingresar RUC" />
                            </div>
                            <!-- Razón Social -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="razon_social" :value="__('Razón Social *')" />
                                <x-text-input id="razon_social" class="block mt-1 w-full" type="text" name="razon_social" :value="old('razon_social')" placeholder="Ingresar Razón Social" />
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12 flex-inputs">
                            <!-- Cargo -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="cargo" :value="__('Cargo *')" />
                                <x-text-input id="cargo" class="block mt-1 w-full" type="text" name="cargo" :value="old('cargo')" placeholder="Ingresar Cargo"/>
                            </div>
                            <!-- Rol -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="role" :value="__('Rol *')" />
                                <select id="role" name="role" :value="old('role')"class="block mt-1 w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm">
                                    <option value="" disabled selected>Seleccione un Rol</option>
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
                                <x-input-label for="email" :value="__('Usuario *')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Ingresar Usuario"/>
                                <span class="txt-mensaje">*Ejemplo de usuario: usuario@ejemplo.com </span>
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12 flex-inputs">
                            <!-- Contraseña -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="password" :value="__('Contraseña *')" />
                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Ingresar Contraseña"/>
                            </div>
                            <!-- Confirmar Contraseña -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña *')" />
                                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"  placeholder="Confirmar Contraseña"/>
                            </div>
                        </div>

                        <input type="hidden" id="continue-register" name="continue_register" value="false">

                        <div  class="flex flex-wrap -mx-3 mb-12">
                            <!-- Boton Registrar Usuario -->
                            <div class="w-full md:w-2/3 px-3 mb-4 md:mb-0">
                                <x-segundary-button data-continue-register="disabled" class="btn-register w-full text-center btn-large">
                                    <span class="w-full">AGREGAR</span>
                                </x-segundary-button>
                            </div>
                            <!-- Boton Seguir Registrando Usuario -->
                            <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                                <x-primary-button data-continue-register="enabled" class="btn-register w-full text-center btn-small" >
                                    <span class="w-full">SEGUIR AGREGANDO</span>
                                </x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function limitDigits(element, maxDigits) {
        if (element.value.length > maxDigits) {
            element.value = element.value.slice(0, maxDigits);
        }
    }

    document.addEventListener('DOMContentLoaded', function () {

        let inputContinueRegister = document.querySelector('#continue-register');
        let btnRegister = document.querySelectorAll('.btn-register');

        btnRegister.forEach(btn => {
            btn.addEventListener('click', function (e) {

                const alertArea = document.getElementById('alert-area');
                const name = document.getElementById('name').value.trim();
                const ruc = document.getElementById('ruc').value.trim();
                const razon_social = document.getElementById('razon_social').value.trim();
                const cargo = document.getElementById('cargo').value.trim();
                const role = document.getElementById('role').value.trim();
                const email = document.getElementById('email').value.trim();
                const password = document.getElementById('password').value.trim();
                const password_confirmation = document.getElementById('password_confirmation').value.trim();

                let isValid = true;
                let errorMessages = [];

                if(name === ''){
                    isValid = false;
                    errorMessages.push('* El campo nombre es obligatorio.');
                }else if(ruc === ''){
                    isValid = false;
                    errorMessages.push('* El campo RUC es obligatorio.');
                }else if (ruc.length !== 11) {
                    isValid = false;
                    errorMessages.push('* El RUC debe tener 11 dígitos.');
                }else if(razon_social === ''){
                    isValid = false;
                    errorMessages.push('* El campo razón social es obligatorio.');
                }else if(cargo === ''){
                    isValid = false;
                    errorMessages.push('* El campo cargo es obligatorio.');
                }else if(role === ''){
                    isValid = false;
                    errorMessages.push('* Seleccionar el rol.');
                }else if(email === ''){
                    isValid = false;
                    errorMessages.push('* El campo correo electrónico es obligatorio');
                }else if(password === ''){
                    isValid = false;
                    errorMessages.push('* El campo contraseña es obligatorio');
                }else if(password_confirmation === ''){
                    isValid = false;
                    errorMessages.push('* El campo confirmar contraseña es obligatorio');
                }else if(password !== password_confirmation){
                    isValid = false;
                    errorMessages.push('* Las contraseña son distintas');
                }

                if (!isValid) {
                    e.preventDefault();
                    alertArea.innerHTML = errorMessages.join('<br>');
                } else {
                    if (btn.getAttribute('data-continue-register') == 'enabled') {
                        inputContinueRegister.value = 'enabled';
                    } else {
                        inputContinueRegister.value = 'disabled';
                    }

                    document.getElementById('user-form').submit();
                }
            });
        });

    });

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

</script>
