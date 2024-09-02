<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900 flex items-center justify-between h-16">
                    <p class="font-semibold text-sm text-green-600 leading-tight">
                       Servicios
                    </p>
                    <x-primary-button class="text-center py-2">
                        <a href="{{ route('service.create') }}">Crear Servicios</a>
                    </x-primary-button>
                </div>
            </div>
        </div>
    </div>

    @if($errors->any())
    <div class="notification-danger fixed  hidden" id="notification">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    @if (session('message'))
        <div class="notification fixed  hidden" id="notification">
            {{ session('message') }}
        </div>
    @endif
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex bg-white overflow-hidden shadow-s sm:rounded-lg" style="flex-direction: column">
                    <form method="GET" action="{{ route('service.index') }}" class="flex items-center" style="gap: 1rem; padding: 1rem" >
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Buscar servicios por nombre ..." class="w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm">
                        <x-primary-button class="ml-2">Buscar</x-primary-button>
                    </form>
                    <table style="flex: auto">
                        <thead class="text-white">
                            <tr class="bg-green-800">
                                <th class="px-4 py-2 border-b">Nombre del Servicio</th>
                                <th class="px-4 py-2 border-b">Opciones</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600">
                            @foreach($service as $index => $services)
                            <tr>
                                <td class="border px-4 py-2">{{ $services->name }}</td>
                                <td class="border px-4 py-2">
                                    <div class="tooltip-container">
                                    <x-primary-button class="text-center py-2">
                                        <a href="{{ route('service.edit', ['service' => $services]) }}">
                                            <img src="{{ asset('cliente/iconos/btn_edit.png') }}" alt="">
                                        </a>
                                        <span class="tooltip-text">Editar</span>
                                    </x-primary-button>
                                    </div>
                                    <div class="tooltip-container">
                                    <x-danger-button class="text-center py-2">
                                        <a href="{{ route('service.delete', ['service' => $services]) }}">
                                            <img src="{{ asset('cliente/iconos/btn_delete.png') }}" alt="">
                                        </a>
                                        <span class="tooltip-text">Eliminar</span>
                                    </x-danger-button>
                                </div>
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

</script>
