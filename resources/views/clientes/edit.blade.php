<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" flex items-center p-4 text-gray-900" style="gap: 0.5rem; margin-left:0.5rem;">
                    <p class="font-semibold text-sm text-green-600 leading-tight">
                        <a href="{{ route('clientes.index') }}">Clientes</a>
                    </p>
                    <p class="text-sm text-gray-500 leading-tight">
                        > Editar cliente
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('clientes.update', ['clientes' => $clientes]) }}">
                        @csrf
                        @method('PUT')
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
                                        <x-text-input id="ruc" class="block mt-1 w-full" type="number" name="ruc" :value="$clientes->ruc" maxlength="11" oninput="limitDigits(this, 11)"  required autocomplete="username" />
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
                                <x-text-input id="razon_social" class="block mt-1 w-full" type="text" name="razon_social" :value="$clientes->razon_social" required autocomplete="razon_social" />
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12">
                            <!-- Cargo -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="cargo" :value="__('Cargo *')" />
                                <x-text-input id="cargo" class="block mt-1 w-full" type="text" name="cargo" :value="$clientes->cargo" required autocomplete="cargo" />
                            </div>
                            <!-- Telefono -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="telefono" :value="__('Teléfono *')" />
                                <x-text-input id="telefono" class="block mt-1 w-full" type="text" name="telefono" :value="$clientes->telefono" required autocomplete="telefono" />
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12">
                            <!-- Correo Electrónico -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="correo" :value="__('Correo Electrónico *')" />
                                <x-text-input id="correo" class="block mt-1 w-full" type="email" name="correo" :value="$clientes->correo" required autocomplete="correo" />
                                <span class="txt-mensaje">  *Ejemplo de usuario: usuario@ejemplo.com </span>
                            </div>
                             <!-- Descripcion -->
                             <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="descripcion" :value="__('Descripción')" />
                                <x-text-input id="descripcion" class="block mt-1 w-full" type="text" name="descripcion"  :value="$clientes->descripcion" autocomplete="name"/>
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
                                <x-text-input id="fecha_inicio" class="block mt-1 w-full" type="date" name="fecha_inicio" :value="$clientes->fecha_inicio" required autocomplete="username" />
                            </div>
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="fecha_fin" :value="__('Ffecha Fin *')" />
                                <x-text-input id="fecha_fin" class="block mt-1 w-full" type="date" name="fecha_fin" :value="$clientes->fecha_fin" required autocomplete="username" />
                            </div>
                        </div>

                        <div  class="flex flex-wrap -mx-3 mb-12">
                            <!-- Boton Editar Usuario -->
                            <div class="w-full md:w-2/3 px-3 mb-4 md:mb-0">
                                <x-primary-button class="btn-register w-full text-center btn-large">
                                    <span class="w-full">EDITAR</span>
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

    /** Numero RUC **/
    function limitDigits(element, maxDigits) {
        if (element.value.length > maxDigits) {
            element.value = element.value.slice(0, maxDigits);
        }
    }

    document.getElementById('btnBuscarCliente').addEventListener('click', function () {
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

            let inputContinueRegister = document.querySelector('#continue-register');
            let btnRegister = document.querySelectorAll('.btn-register');

            btnRegister.forEach(btn => {
                btn.addEventListener('click', function (e) {

                    const alertArea = document.getElementById('alert-area');
                    const ruc = document.getElementById('ruc').value.trim();
                    const razon_social = document.getElementById('razon_social').value.trim();
                    const cargo = document.getElementById('cargo').value.trim();
                    const telefono = document.getElementById('telefono').value.trim();
                    const correo = document.getElementById('correo').value.trim();
                    const descripcion = document.getElementById('descripcion').value.trim();
                    const fecha_inicio = document.getElementById('fecha_inicio').value.trim();
                    const fecha_fin = document.getElementById('fecha_fin').value.trim();

                    let isValid = true;
                    let errorMessages = [];

                    if(ruc === ''){
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
                    }else if(telefono === ''){
                        isValid = false;
                        errorMessages.push('* El campo teléfono es obligatorio.');
                    }else if(telefono.length !== 9){
                        isValid = false;
                        errorMessages.push('* El teléfono debe tener 9 dígitos.');
                    }else if(correo === ''){
                        isValid = false;
                        errorMessages.push('* El campo correo electrónico es obligatorio');
                    }else if(fecha_inicio === ''){
                        isValid = false;
                        errorMessages.push('* El campo fecha inicio de contrata es obligatorio');
                    }else if(fecha_fin === ''){
                        isValid = false;
                        errorMessages.push('* El campo fecha fin de contrata  es obligatorio');
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

</script>
