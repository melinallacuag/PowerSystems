<x-app-layout>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" flex items-center p-4 text-gray-900" style="gap: 0.5rem; margin-left:0.5rem;">
                    <p class="font-semibold text-sm text-green-600 leading-tight">
                        <a href="{{ route('clientes.index') }}">Clientes</a>
                    </p>
                    <p class="text-sm text-gray-500 leading-tight">
                        > Vista de cliente con contrata
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                        <!-- Datos del Cliente -->
                        <div class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Datos del Cliente con Contrata: ')" class="font-semibold text-green-600" />
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-12 flex-inputs">
                            <!-- RUC -->
                            <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                                <div class="flex-inputs">
                                    <div class="w-full md:w-1/3 mb-4 md:mb-0">
                                        <x-input-label for="ruc" :value="__('RUC')" />
                                        <x-text-input class="block mt-1 w-full" type="text" :value="$clientes->ruc" disabled/>
                                    </div>
                                </div>
                            </div>
                            <!-- Razón Social -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="razon_social" :value="__('Razón Social')" />
                                <x-text-input  class="block mt-1 w-full" type="text" :value="$clientes->razon_social" disabled />
                            </div>
                        </div>

                      <!--  <div class="flex flex-wrap -mx-3 mb-12 flex-inputs">

                            <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                                <div class="flex-inputs">
                                    <div class="w-full md:w-1/3 mb-4 md:mb-0">
                                        <x-input-label for="nom_comercial" :value="__('Nombre Comercial')" />
                                        <x-text-input class="block mt-1 w-full" type="text" :value="$clientes->nom_comercial" disabled/>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="nom_contacto" :value="__('Nombre de Contacto')" />
                                <x-text-input class="block mt-1 w-full" type="text" :value="$clientes->nom_contacto" disabled />
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12">

                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="cargo" :value="__('Cargo')" />
                                <x-text-input class="block mt-1 w-full" type="text" :value="$clientes->cargos->name" disabled />
                            </div>

                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="servicio" :value="__('Tipo de Servicio')" />
                                <x-text-input class="block mt-1 w-full" type="text" :value="$clientes->service->name" disabled />
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12 flex-inputs">

                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="telefono" :value="__('Teléfono')" />
                                <x-text-input class="block mt-1 w-full" type="text" :value="$clientes->telefono" disabled />
                            </div>

                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="correo" :value="__('Correo Electrónico')" />
                                <x-text-input class="block mt-1 w-full" type="email" :value="$clientes->correo" disabled />
                            </div>
                        </div>


                           <div class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Fecha del Instalación y Apertura: ')" class="font-semibold text-green-600" />
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12 flex-inputs">

                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="fecha_instalacion" :value="__('Fecha de Instalación')" />
                                <x-text-input class="block mt-1 w-full" type="text" :value="$clientes->fecha_instalacion" disabled />
                            </div>

                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="fecha_apertura" :value="__('Fecha de Apertura')" />
                                <x-text-input class="block mt-1 w-full" type="text" :value="$clientes->fecha_apertura" disabled />
                            </div>

                        </div>


                        <div class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Fecha del Contrato: ')" class="font-semibold text-green-600" />
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12 flex-inputs">

                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="fecha_inicio" :value="__('Fecha Inicio')" />
                                <x-text-input class="block mt-1 w-full" type="text" :value="$clientes->fecha_inicio" disabled />
                            </div>

                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="fecha_fin" :value="__('Fecha Fin')" />
                                <x-text-input class="block mt-1 w-full" type="text" :value="$clientes->fecha_fin" disabled />
                            </div>

                        </div>-->
                        <!-- Historial de Pago -->
                        <div class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Historial de Pago: ')" class="font-semibold text-green-600" />
                            </div>
                        </div>

                        <table style="flex: auto" class="w-full mb-4">
                            <thead class="text-white">
                                <tr class="bg-green-800">
                                    <th class="px-4 py-2 border-b mobile-hidden">Fecha de Confirmación de Pago</th>
                                    <th class="px-4 py-2 border-b">Fecha Inicio y Fin de Contrato</th>
                                </tr>
                            </thead>

                            <tbody class="text-gray-600">
                                @if ($clientes->pagos)
                                    @foreach ($clientes->pagos as $pago)
                                    <tr>
                                        <td class="border px-4 py-2 mobile-hidden text-center">{{ $pago->fecha_pago }}</td>
                                        <td class="border px-4 py-2 mobile-hidden text-center">{{ $pago->fecha_inicio . ' / ' . $pago->fecha_fin}}</td>
                                    </tr>
                                    @endforeach
                                @else
                                    <p>No hay pagos registrados.</p>
                                @endif
                            </tbody>
                        </table>

                        <div  class="flex flex-wrap -mx-3 mb-12">
                            <!-- Boton Cancelar Registro -->
                            <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                                <x-segundary-button id="btnVolver" class="w-full text-center btn-small" type="button">
                                    <span class="w-full">VOLVER</span>
                                </x-segundary-button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    document.addEventListener('DOMContentLoaded', function () {

        const btnVolver = document.getElementById('btnVolver');
        if (btnVolver) {
            btnVolver.addEventListener('click', function () {
                window.location.href = '{{ route('clientes.index') }}';
            });
        }
    });
</script>
