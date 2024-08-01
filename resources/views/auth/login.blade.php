<x-guest-layout>

    <div class="aligm_img" style="margin-bottom: 1rem;">

        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />

    </div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Alertas del Usuario -->
        <div class="flex flex-wrap -mx-3 mb-12">
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                <x-input-label :value="__(' ')" id="alert-area" class="font-semibold text-red-600" />
                @if ($errors->any())
                    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Usuario*')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                autofocus placeholder="Ingresar usuario" />
            <span style="font-size: 1rem"> *Ejemplo de usuario: usuario@ejemplo.com </span>
        </div>
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña*')" />

            <div class="relative">
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                    placeholder="Ingresar contraseña" />
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

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('register'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('register') }}">
                    {{ __('¿No tienes una cuenta? Registrate') }}
                </a>
            @endif
            <!-- Boton Registrar Usuario -->
            <x-primary-button class="ms-4 btn-register"> {{ __('Ingresar') }} </x-primary-button>
        </div>


        <!--   <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
<a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('¿Olvidaste tu contraseña?') }}
                </a>
@endif
        </div> -->

    </form>
</x-guest-layout>
<div id="chat-whatsapps">
    <a target="_blank"
        href="https://api.whatsapp.com/send?phone=+51901716475&amp;text=Hola!%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus%20servicios.">
        <img src="{{ asset('cliente/img/avatar/avatrChat.png') }}" alt="Whatsapp" class="img-fluid">
    </a>
</div>
<style>
    .relative .absolute {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        right: 0.75rem;
        cursor: pointer;
    }

    #chat-whatsapps {
        position: fixed;
        z-index: 1000;
        right: 10px;
        bottom: 180px;
        width: 280px;
        height: 0px;
        animation: bounce 2s infinite;
    }

    @media(max-width:400px) {
        #chat-whatsapps {
            bottom: 100px !important;
            width: 200px !important;
        }
    }

    @media (max-width: 768px) {
        #chat-whatsapps {
            bottom: 100px !important;
            width: 200px !important;
        }
    }
</style>
<script>
    function togglePasswordVisibility(passwordFieldId, iconId) {
        const passwordField = document.getElementById(passwordFieldId);
        const icon = document.getElementById(iconId);
        const openEyeIcon = icon.querySelector('path[id="openEye"]');
        const closedEyeIcon = icon.querySelector('path[id="closedEye"]');

        const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordField.setAttribute('type', type);

        if (openEyeIcon && closedEyeIcon) {
            openEyeIcon.style.display = type === 'password' ? 'none' : 'block';
            closedEyeIcon.style.display = type === 'password' ? 'block' : 'none';
        }
    }

    document.addEventListener('DOMContentLoaded', function() {

        let btnRegister = document.querySelectorAll('.btn-register');

        btnRegister.forEach(btn => {
            btn.addEventListener('click', function(e) {

                const alertArea = document.getElementById('alert-area');
                const email = document.getElementById('email').value.trim();
                const password = document.getElementById('password').value.trim();

                let isValid = true;
                let errorMessages = [];

                if (email === '') {
                    isValid = false;
                    errorMessages.push('* El campo usuario es obligatorio.');
                } else if (password === '') {
                    isValid = false;
                    errorMessages.push('* El campo contraseña es obligatorio.');
                }

                if (!isValid) {
                    e.preventDefault();
                    alertArea.innerHTML = errorMessages.join('<br>');
                } else {
                    document.getElementById('user-form').submit();
                }
            });
        });

    });
</script>
