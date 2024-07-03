<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900 flex items-center justify-between h-16">
                    <p class="font-semibold text-sm text-green-600 leading-tight">
                        Documentos
                    </p>
                    <x-primary-button class="text-center py-2">
                        <a href="{{ route('archivos.create') }}">Crear Documentos</a>
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
                    <form method="GET" action="{{ route('archivos.index') }}" class="flex items-center" style="gap: 1rem; padding: 1rem" >
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Buscar Documentos por nombre ..." class="w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm">
                        <x-primary-button class="ml-2">Buscar</x-primary-button>
                    </form>
                    <table style="flex: auto">
                        <thead class="text-white">
                            <tr class="bg-green-800">
                                <th class="px-4 py-2 border-b">NOMBRE DOCUMENTO</th>
                                <th class="px-4 py-2 border-b mobile-hidden">NOMBRE CATEGORÍA</th>
                                <th class="px-4 py-2 border-b mobile-hidden">DOCUMENTO</th>
                                <th class="px-4 py-2 border-b">OPCIONES</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600">
                            @foreach($documento as $index => $document)
                            <tr>
                                <td class="border px-4 py-2">
                                    <button class="text-blue-500 hover:underline toggle-details btn-mas" data-target="#details{{ $index }}">
                                        +
                                     </button>
                                    {{ $document->name }}

                                </td>
                                <td class="border px-4 py-2 mobile-hidden">{{ $document->category->name }}</td>
                                <td class="border px-4 py-2 mobile-hidden"><a href="{{ asset('storage/' . $document->documento) }}" target="_blank">{{ $document->documento }}</a></td>
                                <td class="border px-4 py-2">
                                    <x-primary-button class="text-center py-2">
                                        <a href="{{ route('archivos.edit', ['documento' => $document]) }}">
                                            <img src="{{ asset('cliente/iconos/btn_edit.png') }}" alt="">
                                        </a>
                                    </x-primary-button>
                                    <x-danger-button class="text-center py-2">
                                        <a href="{{ route('archivos.delete', ['documento' => $document]) }}">
                                            <img src="{{ asset('cliente/iconos/btn_delete.png') }}" alt="">
                                        </a>
                                    </x-danger-button>
                                </td>
                            </tr>
                            <tr id="details{{ $index }}" class="details-row">
                                <td colspan="2" class="border px-4 py-2">
                                    <div>Categoría Documento: {{ $document->category->name }}</div>
                                    <div>URL: {{ $document->documento }}</div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-4">
                    {{ $documento->appends(['search' => request('search')])->links() }}
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
