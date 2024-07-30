<x-guest-layout>

    <div class="aligm_img" style="margin-bottom: 1rem;">

            <x-application-logo class="w-20 h-20 fill-current text-gray-500"  />

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
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" autofocus placeholder="Ingresar usuario" />
            <span style="font-size: 1rem">  *Ejemplo de usuario: usuario@ejemplo.com </span>
        </div>
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña*')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Ingresar contraseña"/>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('register'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
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
<div id="chat-whatsapps" >
    <a target="_blank" href="https://api.whatsapp.com/send?phone=+51901716475&amp;text=Hola!%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus%20servicios.">
        <img src="{{ asset('cliente/img/avatar/avatrChat.png') }}" alt="Whatsapp" class="img-fluid">
    </a>
</div>
<style>
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
        #chat-whatsapps{
            bottom: 100px !important;
            width: 200px !important;
        }
    }

    @media (max-width: 768px) {
        #chat-whatsapps{
            bottom: 100px !important;
            width: 200px !important;
        }
    }

</style>
<script>

     document.addEventListener('DOMContentLoaded', function () {

        let btnRegister = document.querySelectorAll('.btn-register');

        btnRegister.forEach(btn => {
            btn.addEventListener('click', function (e) {

                const alertArea = document.getElementById('alert-area');
                const email = document.getElementById('email').value.trim();
                const password = document.getElementById('password').value.trim();

                let isValid = true;
                let errorMessages = [];

                if(email === ''){
                    isValid = false;
                    errorMessages.push('* El campo usuario es obligatorio.');
                }else if(password === ''){
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
