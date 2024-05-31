<x-app-layout>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900 flex items-center justify-between h-16">
                    <p class="font-semibold text-sm text-green-600 leading-tight">
                       Usuarios
                    </p>
                    <x-primary-button class="text-center py-2">
                        <a href="{{ route('usuarios.create') }}">Crear usuario</a>
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

                    <form method="GET" action="{{ route('usuarios.index') }}" class="flex items-center" style="gap: 1rem; padding: 1rem" >
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Buscar Cliente ..." class="w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm">
                        <x-primary-button class="ml-2">Buscar</x-primary-button>
                    </form>

                    <table style="flex: auto">
                        <thead class="text-white">
                            <tr class="bg-green-800">
                                <th class="px-4 py-2 border-b">NOMBRE</th>
                                <th class="px-4 py-2 border-b mobile-hidden">RUC</th>
                                <th class="px-4 py-2 border-b mobile-hidden">RAZÓN SOCIAL</th>
                                <th class="px-4 py-2 border-b mobile-hidden">CARGO</th>
                                <th class="px-4 py-2 border-b mobile-hidden">ROL</th>
                                <th class="px-4 py-2 border-b">OPCIONES</th>
                            </tr>
                        </thead>

                        <tbody class="text-gray-600">

                            @foreach($usuarios as $index => $usuario)
                                <tr>
                                    <td class="border px-4 py-2">
                                        <button class="text-blue-500 hover:underline toggle-details btn-mas" data-target="#details{{ $index }}">
                                            +
                                         </button>
                                        {{ $usuario->name }}

                                    </td>
                                    <td class="border px-4 py-2 mobile-hidden">{{ $usuario->ruc }}</td>
                                    <td class="border px-4 py-2 mobile-hidden">{{ $usuario->razon_social }}</td>
                                    <td class="border px-4 py-2 mobile-hidden">{{ $usuario->cargo }}</td>
                                    <td class="border px-4 py-2 mobile-hidden">{{ $usuario->rol }}</td>
                                    <td class="border px-4 py-2">
                                        <x-primary-button class="text-center py-2">
                                            <a href="{{ route('usuarios.edit', ['user' => $usuario]) }}">Editar</a>
                                        </x-primary-button>
                                        <x-danger-button class="text-center py-2">
                                            <a href="{{ route('usuarios.delete', ['user' => $usuario]) }}">Eliminar</a>
                                        </x-danger-button>
                                    </td>
                                </tr>

                                <tr id="details{{ $index }}" class="details-row">
                                    <td colspan="4" class="border px-4 py-2">
                                        <div>RUC: {{ $usuario->ruc }}</div>
                                        <div>Razón Social: {{ $usuario->razon_social }}</div>
                                        <div>Cargo: {{ $usuario->cargo }}</div>
                                        <div>Rol: {{ $usuario->rol }}</div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-4">
                    {{ $usuarios->appends(['search' => request('search')])->links() }}
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
