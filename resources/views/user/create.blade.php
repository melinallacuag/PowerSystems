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

                         <!-- Datos del Cliente -->
                         <div class="flex flex-wrap -mx-3 mb-12">

                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Datos del Cliente: ')" class="font-semibold text-green-600" />
                            </div>

                        </div>

                         <!-- Nombre -->
                        <div class="flex flex-wrap -mx-3 mb-12">

                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Nombre *')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Ingresar Nombre" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12">

                            <!-- RUC -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="ruc" :value="__('RUC *')" />
                                <x-text-input id="ruc" class="block mt-1 w-full" type="number" maxlength="11" oninput="limitDigits(this, 11)"  name="ruc" :value="old('ruc')" required autocomplete="ruc" placeholder="Ingresar RUC" />
                                <x-input-error :messages="$errors->get('ruc')" class="mt-2" />
                            </div>

                            <!-- Razón Social -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="razon_social" :value="__('Razón Social *')" />
                                <x-text-input id="razon_social" class="block mt-1 w-full" type="text" name="razon_social" :value="old('razon_social')" required autofocus autocomplete="name" placeholder="Ingresar Razón Social" />
                                <x-input-error :messages="$errors->get('razon_social')" class="mt-2" />
                            </div>

                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12">

                            <!-- Cargo -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="cargo" :value="__('Cargo *')" />
                                <x-text-input id="cargo" class="block mt-1 w-full" type="text" name="cargo" :value="old('cargo')" required autofocus autocomplete="name" placeholder="Ingresar Cargo"/>
                                <x-input-error :messages="$errors->get('cargo')" class="mt-2" />
                            </div>

                            <!-- Rol -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="role" :value="__('Rol *')" />
                                <select id="role" name="role" :value="old('role')"class="block mt-1 w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm" required>
                                    <option value="" disabled selected>Seleccione un Rol</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                                <x-input-error :messages="$errors->get('role')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Credencial del Cliente -->
                        <div class="flex flex-wrap -mx-3 mb-12">

                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Credencial del Cliente: ')" class="font-semibold text-green-600" />
                            </div>

                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12">

                            <!-- Usuario -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="email" :value="__('Usuario *')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username"  placeholder="Ingresar Usuario"/>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                <span class="txt-mensaje">  *Ejemplo de usuario: usuario@ejemplo.com </span>
                            </div>

                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12">

                            <!-- Contraseña -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="password" :value="__('Contraseña *')" />
                                <x-text-input id="password" class="block mt-1 w-full"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" placeholder="Ingresar Contraseña"/>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Confirmar Contraseña -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña *')" />

                                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                                type="password"
                                                name="password_confirmation" required autocomplete="new-password"  placeholder="Confirmar Contraseña"/>
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
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

                            <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                                <x-primary-button data-continue-register="enabled" class="btn-register w-full text-center btn-small" >
                                    <span class="w-full">SEGUIR REGISTRANDO</span>
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

    let inputContinueRegister = document.querySelector('#continue-register');
    let btnRegister = document.querySelectorAll('.btn-register');

    btnRegister.forEach(btn => {
        btn.addEventListener('click', function (e) {
            console.log(btn.getAttribute('data-continue-register'));
            if (btn.getAttribute('data-continue-register') == 'enabled') {
                inputContinueRegister.value = 'enabled';
            } else {
                inputContinueRegister.value = 'disabled';
            }
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        const notification = document.getElementById('notification');
            if (notification.innerText.trim() !== '') {
                notification.classList.add('show');
                setTimeout(() => {
                    notification.classList.add('hide');
                    setTimeout(() => {
                        notification.style.display = 'none';
                    }, 300);
                }, 3000);
            }
    });

</script>
