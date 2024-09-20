<x-app-layout>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900 flex items-center justify-between h-16">
                    <p class="font-semibold text-sm text-green-600 leading-tight">
                       Clientes
                    </p>
                    <x-primary-button class="text-center py-2">
                        <a href="{{ route('clientes.create') }}">Crear Clientes</a>
                    </x-primary-button>
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
                <div class="flex bg-white overflow-hidden shadow-s sm:rounded-lg" style="flex-direction: column">

                    <form method="GET" action="{{ route('clientes.index') }}" class="flex items-center" style="gap: 1rem; padding: 1rem" >
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Buscar clientes por nombre ..." class="w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm">
                        <x-primary-button class="ml-2">Buscar</x-primary-button>
                    </form>

                    <table style="flex: auto">
                        <thead class="text-white">
                            <tr class="bg-green-800">
                                <th class="px-4 py-2 border-b">Empresa</th>
                                <th class="px-4 py-2 border-b mobile-hidden">Nombre Contacto - Cargo</th>
                                <th class="px-4 py-2 border-b mobile-hidden">Servicio</th>
                                <th class="px-4 py-2 border-b mobile-hidden">Fecha Instalación / Apertura</th>
                                <th class="px-4 py-2 border-b mobile-hidden">Fecha Inicio / Fin de Contrata</th>
                                <th class="px-4 py-2 border-b mobile-hidden">Estado</th>
                                <th class="px-4 py-2 border-b">Opciones</th>
                            </tr>
                        </thead>

                        <tbody class="text-gray-600">
                            @foreach($clientes as $index => $cliente)
                            <tr>
                                <td class="border px-4 py-2">
                                    <button class="text-blue-500 hover:underline toggle-details btn-mas" data-target="#details{{ $index }}">
                                        +
                                     </button>
                                     {{ $cliente->ruc }} - {{ $cliente->razon_social }}

                                </td>
                                <td class="border px-4 py-2 mobile-hidden">{{ $cliente->nom_contacto  }} - {{ $cliente->cargos->name  }}</td>
                                <td class="border px-4 py-2 mobile-hidden">{{ $cliente->service->name }}</td>
                                <td class="border px-4 py-2 mobile-hidden">{{ $cliente->fecha_instalacion . ' / ' . $cliente->fecha_apertura}}</td>
                                <td class="border px-4 py-2 mobile-hidden">{{ $cliente->fecha_inicio . ' / ' . $cliente->fecha_fin}}</td>
                                <td class="border px-4 py-2 mobile-hidden">
                                    <div class="card-status text-center {{ 'estado-' . $cliente->estado }}">
                                        @if ($cliente->estado === 'normal')
                                        PAGOS AL DIA
                                        @elseif ($cliente->estado === 'deuda')
                                        DEUDA PENDIENTE
                                        @elseif ($cliente->estado === 'pagar')
                                        PENDIENTES DE PAGO
                                        @else
                                        {{ ucfirst($cliente->estado) }}
                                        @endif

                                    </div>
                                </td>

                                <td class="border px-4 py-2">
                                    <div>
                                        <div class="tooltip-container">
                                        <x-primary-button class="text-center py-2 btn-botton">
                                            <a href="{{ route('clientes.edit', ['clientes' => $cliente]) }}">
                                                <img src="{{ asset('cliente/iconos/btn_edit.png') }}" alt="">
                                            </a>
                                            <span class="tooltip-text">Editar</span>
                                        </x-primary-button>
                                    </div>
                                    <div class="tooltip-container">
                                        <x-danger-button class="text-center py-2 btn-botton">
                                            <a href="{{ route('clientes.delete', ['clientes' => $cliente]) }}">
                                                <img src="{{ asset('cliente/iconos/btn_delete.png') }}" alt="">
                                            </a>
                                            <span class="tooltip-text">Eliminar</span>
                                        </x-danger-button>
                                    </div>
                                    <div class="tooltip-container">
                                        <x-segundary-button class="text-center py-2 btn-botton">
                                            <a href="{{ route('clientes.confirmarPago', ['clientes' => $cliente]) }}">
                                                <img src="{{ asset('cliente/iconos/btn_confirmar.png') }}" alt="">
                                            </a>
                                            <span class="tooltip-text">confirmar Pago</span>
                                        </x-segundary-button>
                                    </div>
                                    <div class="tooltip-container">
                                        <x-secondary-button class="text-center py-2 btn-botton" style="background: black">
                                            <a href="{{ route('clientes.vista', ['clientes' => $cliente]) }}">
                                                <img src="{{ asset('cliente/iconos/btn_ver.png') }}" alt="">
                                            </a>
                                            <span class="tooltip-text">Visualizar</span>
                                        </x-secondary-button>
                                    </div>

                                    <div class="tooltip-container">
                                        <x-secondary-button class="text-center py-2 btn-botton" style="background: rgb(9, 127, 148)">
                                            <a href="{{ route('clientes.historialPago', ['clientes' => $cliente]) }}">
                                                <img src="{{ asset('cliente/iconos/btn_formaPago.png') }}" alt="">
                                            </a>
                                            <span class="tooltip-text">Historial de Pago</span>
                                        </x-secondary-button>
                                    </div>
                                    </div>


                                </td>
                            </tr>

                            <tr id="details{{ $index }}" class="details-row">
                                <td colspan="5" class="border px-4 py-2">
                                    <div>Nom. Comercial: {{ $cliente->nom_comercial  }}</div>
                                    <div>Nom. Contacto: {{ $cliente->nom_contacto  }}</div>
                                    <div>Cargo: {{ $cliente->cargos->name }}</div>
                                    <div>Servicio: {{ $cliente->service->name }}</div>
                                    <div>Observación: {{ $cliente->observacion }}</div>
                                    <div>Fecha Instalación: {{ $cliente->fecha_instalacion }}</div>
                                    <div>Fecha Apertura: {{ $cliente->fecha_apertura }}</div>
                                    <div>Fecha Inicio: {{ $cliente->fecha_inicio }}</div>
                                    <div>Fecha Fin: {{ $cliente->fecha_fin }}</div>
                                    <div>
                                        <br>
                                        <div class="card-status text-center {{ 'estado-' . $cliente->estado }}">
                                            @if ($cliente->estado === 'normal')
                                            PAGOS AL DIA
                                            @elseif ($cliente->estado === 'deuda')
                                            DEUDA PENDIENTE
                                            @elseif ($cliente->estado === 'pagar')
                                            PENDIENTES DE PAGO
                                            @else
                                            {{ ucfirst($cliente->estado) }}
                                            @endif
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="mt-4">
                    {{ $clientes->appends(['search' => request('search')])->links() }}
                </div>
        </div>
    </div>

</x-app-layout>

<script>

    /** Mostrar mensaje de alerta **/
    document.addEventListener('DOMContentLoaded', function () {
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
    });

    /** Mostrar datos **/
    document.querySelectorAll('.toggle-details').forEach(button => {
    button.addEventListener('click', () => {
        const target = document.querySelector(button.getAttribute('data-target'));
        if (target.classList.contains('active')) {
            target.classList.remove('active');
        } else {
            document.querySelectorAll('.details-row').forEach(row => row.classList.remove('active'));
            target.classList.add('active');
        }
    });
});

</script>
