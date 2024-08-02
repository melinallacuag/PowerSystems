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
                    <form method="POST" action="{{ route('clientes.update', ['clientes' => $clientes]) }}" id="user-form" >
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

                        <div class="flex flex-wrap -mx-3 mb-12 flex-inputs">
                            <!-- Nombre Comercial -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="nom_comercial" :value="__('Nombre Comercial *')" />
                                <x-text-input id="nom_comercial" class="block mt-1 w-full" type="text" name="nom_comercial" :value="$clientes->nom_comercial" />
                            </div>
                             <!-- Nombre de Contacto -->
                             <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="nom_contacto" :value="__('Nombre de Contacto *')" />
                                <x-text-input id="nom_contacto" class="block mt-1 w-full" type="text" name="nom_contacto"  :value="$clientes->nom_contacto" />
                            </div>

                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12 flex-inputs">
                            <!-- Cargo -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                               <x-input-label for="cargo" :value="__('Cargo *')" />
                               <select id="cargos_id" name="cargos_id" class="block mt-1 w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm">
                                   <option value="" disabled>Seleccionar Cargo</option>
                                   @foreach($cargos as $cargo)
                                       <option value="{{ $cargo->id }}" {{ $clientes->cargos_id == $cargo->id ? 'selected' : '' }}>
                                           {{ $cargo->name }}
                                       </option>
                                   @endforeach
                               </select>
                           </div>
                            <!-- Cargo -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                               <x-input-label for="service" :value="__('Servicios *')" />
                               <select id="service_id" name="service_id" class="block mt-1 w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm">
                                   <option value="" disabled>Seleccionar Servicios</option>
                                   @foreach($services as $service)
                                       <option value="{{ $service->id }}" {{ $clientes->service_id == $service->id ? 'selected' : '' }}>
                                           {{ $service->name }}
                                       </option>
                                   @endforeach
                               </select>
                           </div>
                       </div>

                       <div class="flex flex-wrap -mx-3 mb-12 flex-inputs">
                        <!-- Telefono -->
                        <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                            <x-input-label for="telefono" :value="__('Teléfono')" />
                            <x-text-input id="telefono" class="block mt-1 w-full" type="text" name="telefono" :value="$clientes->telefono" />
                        </div>
                        <!-- Correo Electrónico -->
                        <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                            <x-input-label for="correo" :value="__('Correo Electrónico')" />
                            <x-text-input id="correo" class="block mt-1 w-full" type="email" name="correo" :value="$clientes->correo" />
                            <span class="txt-mensaje">  *Ejemplo de usuario: usuario@ejemplo.com </span>
                        </div>
                    </div>

                    <!-- Fecha del Instalación y Apertura -->
                    <div class="flex flex-wrap -mx-3 mb-12">
                        <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                            <x-input-label for="name" :value="__('Fecha del Instalación y Apertura: ')" class="font-semibold text-green-600" />
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-12">
                        <!-- Fecha de Instalación -->
                        <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                            <x-input-label for="fecha_instalacion" :value="__('Fecha de Instalación *')" />
                            <x-text-input id="fecha_instalacion" class="block mt-1 w-full" type="date" name="fecha_instalacion" :value="$clientes->fecha_instalacion" required autocomplete="username" />
                        </div>
                        <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                            <x-input-label for="fecha_apertura" :value="__('Fecha de Apertura *')" />
                            <x-text-input id="fecha_apertura" class="block mt-1 w-full" type="date" name="fecha_apertura" :value="$clientes->fecha_apertura" required autocomplete="username" />
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
                                <x-input-label for="fecha_fin" :value="__('Fecha Fin *')" />
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

    function limitDigits(element, maxDigits) {
        if (element.value.length > maxDigits) {
            element.value = element.value.slice(0, maxDigits);
        }
    }

    document.getElementById('btnBuscarCliente').addEventListener('click', function () {
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
        });

        document.addEventListener('DOMContentLoaded', function () {

            let btnRegister = document.querySelectorAll('.btn-register');
            const userForm = document.getElementById('user-form');

            let razonSocialInput = document.getElementById('razon_social');

            btnRegister.forEach(btn => {
                btn.addEventListener('click', function (e) {

                    razonSocialInput.disabled = false;

                    const alertArea = document.getElementById('alert-area');
                    const ruc = document.getElementById('ruc').value.trim();
                    const razon_social = document.getElementById('razon_social').value.trim();
                    const nom_comercial = document.getElementById('nom_comercial').value.trim();
                    const nom_contacto = document.getElementById('nom_contacto').value.trim();
                    const cargos_id = document.getElementById('cargos_id').value.trim();
                    const service_id = document.getElementById('service_id').value.trim();
                    const correo = document.getElementById('correo').value.trim();
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
                    }else if(nom_comercial === ''){
                        isValid = false;
                        errorMessages.push('* El campo nombre comercial es obligatorio.');
                    }else if(nom_contacto === ''){
                        isValid = false;
                        errorMessages.push('* El campo nombre contacto es obligatorio.');
                    }else if(cargos_id === ''){
                        isValid = false;
                        errorMessages.push('* Seleccionar Cargo.');
                    }else if(service_id === ''){
                        isValid = false;
                        errorMessages.push('* Seleccionar Sservicio.');
                    }else if (fecha_instalacion === '') {
                        isValid = false;
                        errorMessages.push('* El campo fecha de instalación es obligatorio.');
                    }else if (fecha_apertura === '') {
                        isValid = false;
                        errorMessages.push('* El campo fecha fin de apertura es obligatorio.');
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
