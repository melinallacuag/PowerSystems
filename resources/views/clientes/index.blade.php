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
                                <th class="px-4 py-2 border-b mobile-hidden">RUC</th>
                                <th class="px-4 py-2 border-b">RAZÓN SOCIAL</th>
                                <th class="px-4 py-2 border-b mobile-hidden">CARGO</th>
                                <th class="px-4 py-2 border-b mobile-hidden">FECHA DE CONTRATO</th>
                                <th class="px-4 py-2 border-b">ESTADO</th>
                                <th class="px-4 py-2 border-b">OPCIONES</th>
                            </tr>
                        </thead>

                        <tbody class="text-gray-600">
                            @foreach($clientes as $index => $cliente)
                            <tr>
                                <td class="border px-4 py-2 mobile-hidden">{{ $cliente->ruc }}</td>
                                <td class="border px-4 py-2">
                                    <button class="text-blue-500 hover:underline toggle-details btn-mas" data-target="#details{{ $index }}">
                                        +
                                     </button>
                                    {{ $cliente->razon_social }}

                                </td>
                                <td class="border px-4 py-2 mobile-hidden">{{ $cliente->cargo }}</td>
                                <td class="border px-4 py-2 mobile-hidden">{{ $cliente->fecha_inicio . ' / ' . $cliente->fecha_fin}}</td>
                                <td class="border px-4 py-2">
                                    <div class="card-status text-center {{ 'estado-' . $cliente->estado }}">
                                        {{ ucfirst($cliente->estado) }}
                                    </div>
                                </td>

                                <td class="border px-4 py-2">

                                    <x-primary-button class="text-center py-2 btn-botton">
                                        <a href="{{ route('clientes.edit', ['clientes' => $cliente]) }}">
                                            <img src="{{ asset('cliente/iconos/btn_edit.png') }}" alt="">
                                        </a>
                                    </x-primary-button>
                                    <x-danger-button class="text-center py-2 btn-botton">
                                        <a href="{{ route('clientes.delete', ['clientes' => $cliente]) }}">
                                            <img src="{{ asset('cliente/iconos/btn_delete.png') }}" alt="">
                                        </a>
                                    </x-danger-button>

                                    <x-segundary-button class="text-center py-2 btn-botton">
                                        <a href="{{ route('clientes.confirmarPago', ['clientes' => $cliente]) }}">
                                            <img src="{{ asset('cliente/iconos/btn_confirmar.png') }}" alt="">
                                        </a>
                                    </x-segundary-button>

                                    <x-secondary-button class="text-center py-2 btn-botton" style="background: black">
                                        <a href="{{ route('clientes.vista', ['clientes' => $cliente]) }}">
                                            <img src="{{ asset('cliente/iconos/btn_ver.png') }}" alt="">
                                        </a>
                                    </x-secondary-button>
                                </td>
                            </tr>

                            <tr id="details{{ $index }}" class="details-row">
                                <td colspan="4" class="border px-4 py-2">
                                    <div>RUC: {{ $cliente->ruc }}</div>
                                    <div>Cargo: {{ $cliente->cargo }}</div>
                                    <div>Teléfono: {{ $cliente->telefono }}</div>
                                    <div>Correo: {{ $cliente->correo }}</div>
                                    <div>Fecha Inicio: {{ $cliente->fecha_inicio }}</div>
                                    <div>Fecha Fin: {{ $cliente->fecha_fin }}</div>
                                    <div>Descripción: {{ $cliente->descripcion }}</div>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

                <div class="mt-4">
                </div>
        </div>
    </div>

</x-app-layout>

<style>
    @media (max-width: 768px) {
       .details-row {
           display: none;
       }
       .details-row.active {
           display: table-row;
       }
       .toggle-details {
           display: inline-block;
           cursor: pointer;
           color: #1c3faa;
           text-decoration: none;
       }
       .mobile-hidden {
           display: none;
       }
       .btn-mas{
           border-radius: 50%;
           width: 30px;
           height: 30px;
           border: 2px #009800 solid;
           color: #009800;
       }
   }
   @media (min-width: 769px) {
       .toggle-details {
           display: none;
       }
       .details-row {
           display: none;
       }

   }
   </style>

<script>

    /** Mostrar mensaje de alerta **/
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
