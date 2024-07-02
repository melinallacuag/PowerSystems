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
                    <form method="POST" action="{{ route('clientes.save') }}" class="w-full max-w-lg">
                        @csrf

                        <!-- Alertas del Cliente -->
                        <div class="flex flex-wrap -mx-3 mb-12">

                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__(' ')" id="alert-area" class="font-semibold text-red-600" />
                            </div>

                        </div>

                         <!-- Datos del Cliente -->
                         <div class="flex flex-wrap -mx-3 mb-12">

                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Datos del Cliente: ')" class="font-semibold text-green-600" />
                            </div>

                        </div>
                        <div class="flex flex-wrap -mx-3 mb-12 flex-inputs">

                           <!-- RUC y Botón de Buscar Cliente-->
                            <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                                <div class="flex-inputs">
                                    <div class="w-full md:w-1/3 mb-4 md:mb-0">
                                        <x-input-label for="ruc" :value="__('RUC *')" />
                                        <x-text-input id="ruc" class="block mt-1 w-full" type="number" maxlength="11" oninput="limitDigits(this, 11)"  name="ruc" :value="old('ruc')" required autocomplete="ruc" placeholder="Ingresar RUC" />
                                        <x-input-error :messages="$errors->get('ruc')" class="mt-2" />
                                    </div>
                                    <div class="w-full md:w-2/3 mb-4 md:mb-0 btn-buscar-align">
                                        <x-segundary-button type="button" id="btnBuscarCliente" class="btn-register w-full text-center btn-large">
                                            <span class="w-full">BUSCAR</span>
                                        </x-segundary-button>
                                    </div>
                                </div>
                            </div>

                            <!-- Razón Social -->
                            <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
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

                             <!-- Telefono -->
                             <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="telefono" :value="__('Teléfono *')" />
                                <x-text-input id="telefono" class="block mt-1 w-full" type="text" name="telefono" :value="old('telefono')" required autofocus autocomplete="name" placeholder="Ingresar Teléfono"/>
                                <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12">

                            <!-- Correo -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="correo" :value="__('Correo Electrónico *')" />
                                <x-text-input id="correo" class="block mt-1 w-full" type="email" name="correo" :value="old('correo')" required autocomplete="correo"  placeholder="Ingresar Correo Electrónico"/>
                                <x-input-error :messages="$errors->get('correo')" class="mt-2" />
                                <span class="txt-mensaje">  *Ejemplo de usuario: usuario@ejemplo.com </span>
                            </div>

                             <!-- Descripcion -->
                             <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="descripcion" :value="__('Descripción *')" />
                                <x-text-input id="descripcion" class="block mt-1 w-full" type="text" name="descripcion" :value="old('descripcion')" required autofocus autocomplete="name" placeholder="Ingresar Descripción"/>
                                <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
                            </div>

                        </div>

                        <!-- Credencial del Cliente -->
                        <div class="flex flex-wrap -mx-3 mb-12">

                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Fecha del Contrato: ')" class="font-semibold text-green-600" />
                            </div>

                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12">

                            <!-- Fecha Inicio -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="fecha_inicio" :value="__('Fecha Inicio *')" />
                                <x-text-input id="fecha_inicio" class="block mt-1 w-full" type="date" name="fecha_inicio" :value="old('fecha_inicio')" required />
                                <x-input-error :messages="$errors->get('fecha_inicio')" class="mt-2" />
                            </div>

                            <!-- Fecha Fin -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="fecha_fin" :value="__('Fecha Fin*')" />
                                <x-text-input id="fecha_fin" class="block mt-1 w-full" type="date" name="fecha_fin" :value="old('fecha_fin')" required />
                                <x-input-error :messages="$errors->get('fecha_fin')" class="mt-2" />
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



    function buscarCliente() {
        let ruc = document.getElementById('ruc').value;
        const alertArea = document.getElementById('alert-area');

        if (ruc.length === 11) {
            fetch('{{ route("clientes.buscarUsuario") }}', {
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
                    document.getElementById('razon_social').value = data.usuario.razon_social;
                    document.getElementById('cargo').value = data.usuario.cargo;
                    document.getElementById('correo').value = data.usuario.email;
                    alertArea.classList.add('hidden');
                    alertArea.textContent = '';
                } else {
                    document.getElementById('razon_social').value = '';
                    document.getElementById('cargo').value = '';
                    document.getElementById('correo').value = '';
                    alertArea.textContent = '* Usuario no encontrado.';
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

</script>
