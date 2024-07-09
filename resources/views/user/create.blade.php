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

                        <div class="flex flex-wrap -mx-3 mb-12 flex-inputs">
                            <!-- Nombres y Apellidos -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Nombres y Apellidos *')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" autofocus placeholder="Ingresar Nombres y Apellidos" />
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

    function buscarCliente() {
        let ruc = document.getElementById('ruc').value;
        const alertArea = document.getElementById('alert-area');

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
    }

    document.getElementById('btnBuscarCliente').addEventListener('click', buscarCliente);

    document.addEventListener('DOMContentLoaded', function () {

        let inputContinueRegister = document.querySelector('#continue-register');
        let btnRegister = document.querySelectorAll('.btn-register');

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
