<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="w-full max-w-lg" id="user-form">
        @csrf

        <!-- Alertas del Usuario -->
        <div class="flex flex-wrap -mx-3 mb-12">
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                <x-input-label :value="__(' ')" id="alert-area" class="font-semibold text-red-600" />
                @if ($errors->any())
                    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>El correo electrónico ya está registrado.</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
        <!-- Datos del Cliente -->
        <div class="flex flex-wrap -mx-3 mb-12">
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                <x-input-label for="name" :value="__('Registrar Datos del Cliente: ')" class="font-semibold text-green-600" />
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-12 flex-inputs">
            <!-- DNI -->
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                <x-input-label for="dni" :value="__('DNI *')" />
                <x-text-input id="dni" class="block mt-1 w-full" type="text" name="dni" :value="old('dni')" autofocus placeholder="Ingresar DNI" />
            </div>
            <!-- Nombre -->
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                <x-input-label for="name" :value="__('Nombres y Apellidos*')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"  placeholder="Ingresar Nombres y Apellidos" />
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
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
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
                <x-input-label for="role" :value="__('Rol ')" />
                <select id="role" name="role" disabled class="block mt-1 w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm">
                    <option value="user" selected>User</option>
                </select>
                <input type="hidden" name="role" value="user">
            </div>
        </div>

        <!-- Credencial del Cliente -->
        <div class="flex flex-wrap -mx-3 mb-12">
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                <x-input-label for="name" :value="__('Registrar Credencial del Cliente: ')" class="font-semibold text-green-600" />
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-12">
            <!-- Correo Electronico -->
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                <x-input-label for="email" :value="__('Usuario *')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Ingresar Usuario"/>
                <span style="font-size: 1rem">  *Ejemplo de usuario: usuario@ejemplo.com </span>
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
                <x-text-input id="password_confirmation" class="block mt-1 w-full"  type="password" name="password_confirmation" placeholder="Confirmar Contraseña"/>
            </div>
        </div>

        <div class="flex items-center justify-end mt-4 flex-inputs">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('¿Ya tienes una cuenta? Iniciar sesión') }}
            </a>
            <x-primary-button class="ms-4 btn-register">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>
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

     function limitDigits(element, maxDigits) {
        if (element.value.length > maxDigits) {
            element.value = element.value.slice(0, maxDigits);
        }
    }

    document.getElementById('btnBuscarCliente').addEventListener('click', function () {
        let ruc = document.getElementById('ruc').value;
        const alertArea = document.getElementById('alert-area');

        if (ruc.length === 11) {
            fetch('{{ route("register.buscarCliente") }}', {
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
                    alertArea.classList.add('hidden');
                    alertArea.textContent = '';
                } else {
                    document.getElementById('razon_social').value = '';
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
    });

    document.addEventListener('DOMContentLoaded', function () {

        let btnRegister = document.querySelectorAll('.btn-register');
        const userForm = document.getElementById('user-form');

        btnRegister.forEach(btn => {
            btn.addEventListener('click', function (e) {

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

                if(dni === ''){
                    isValid = false;
                    errorMessages.push('* El campo DNI es obligatorio.');
                }else if(name === ''){
                    isValid = false;
                    errorMessages.push('* El campo nombres y apellidos es obligatorio.');
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
                    e.preventDefault();
                        alertArea.innerHTML = errorMessages.join('<br>');
                        alertArea.classList.remove('hidden');
                } else {
                    alertArea.classList.add('hidden');
                    userForm.submit();
                }

                return isValid;

            });
        });

    });
</script>
