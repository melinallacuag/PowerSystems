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
                                        <x-text-input id="ruc" class="block mt-1 w-full" class="block mt-1 w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm" type="number" name="ruc" :value="$clientes->ruc" maxlength="11" oninput="limitDigits(this, 11)"  disabled  autocomplete="username" />
                                        <x-input-error :messages="$errors->get('ruc')" class="mt-2" />
                                    </div>
                                </div>
                            </div>


                            <!-- Razón Social -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="razon_social" :value="__('Razón Social')" />
                                <x-text-input id="razon_social" class="block mt-1 w-full" type="text" name="razon_social" :value="$clientes->razon_social" disabled autocomplete="razon_social" />
                                <x-input-error :messages="$errors->get('razon_social')" class="mt-2" />
                            </div>

                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12">

                            <!-- Cargo -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="cargo" :value="__('Cargo')" />
                                <x-text-input id="cargo" class="block mt-1 w-full" type="text" name="cargo" :value="$clientes->cargo" disabled autocomplete="cargo" />
                                    <x-input-error :messages="$errors->get('cargo')" class="mt-2" />
                            </div>

                            <!-- Telefono -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="telefono" :value="__('Teléfono')" />
                                <x-text-input id="telefono" class="block mt-1 w-full" type="text" name="telefono" :value="$clientes->telefono" disabled autocomplete="telefono" />
                                    <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12 flex-inputs">

                            <!-- Correo Electrónico -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="correo" :value="__('Correo Electrónico')" />
                                <x-text-input id="correo" class="block mt-1 w-full" type="email" name="correo" :value="$clientes->correo" disabled autocomplete="correo" />
                                <x-input-error :messages="$errors->get('correo')" class="mt-2" />
                                    <span class="txt-mensaje">  *Ejemplo de usuario: usuario@ejemplo.com </span>
                            </div>

                             <!-- Descripcion -->
                             <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="descripcion" :value="__('Descripción')" />
                                <x-text-input id="descripcion" class="block mt-1 w-full" type="text" name="descripcion"  :value="$clientes->descripcion"  disabled autocomplete="name"/>
                                <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
                            </div>

                        </div>

                           <!-- Credencial del Cliente -->
                           <div class="flex flex-wrap -mx-3 mb-12">

                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Fecha del Contrato: ')" class="font-semibold text-green-600" />
                            </div>

                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12 flex-inputs">

                            <!-- Fecha Inicio -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="fecha_inicio" :value="__('Fecha Inicio')" />
                                <x-text-input id="fecha_inicio" class="block mt-1 w-full" type="date" name="fecha_inicio" :value="$clientes->fecha_inicio" disabled autocomplete="username" />
                                <x-input-error :messages="$errors->get('fecha_inicio')" class="mt-2" />
                            </div>

                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="fecha_fin" :value="__('Fecha Fin')" />
                                <x-text-input id="fecha_fin" class="block mt-1 w-full" type="date" name="fecha_fin" :value="$clientes->fecha_fin" disabled autocomplete="username" />
                                <x-input-error :messages="$errors->get('fecha_fin')" class="mt-2" />
                            </div>

                        </div>

                         <!-- Historial de Pago -->
                         <div class="flex flex-wrap -mx-3 mb-12">

                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Historial de Pago: ')" class="font-semibold text-green-600" />
                            </div>

                        </div>

                        <table style="flex: auto" class="w-full">
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

</script>
