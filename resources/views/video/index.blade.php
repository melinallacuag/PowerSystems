<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900 flex items-center justify-between h-16">
                    <p class="font-semibold text-sm text-green-600 leading-tight">
                       Videos
                    </p>
                    <x-primary-button class="text-center py-2">
                        <a href="{{ route('videos.create') }}">Crear Videos</a>
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
                    <form method="GET" action="{{ route('videos.index') }}" class="flex items-center" style="gap: 1rem; padding: 1rem" >
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Buscar Videos por nombre ..." class="w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm">
                        <x-primary-button class="ml-2">Buscar</x-primary-button>
                    </form>
                    <table style="flex: auto">
                        <thead class="text-white">
                            <tr class="bg-green-800">
                                <th class="px-4 py-2 border-b">NOMBRE VIDEO</th>
                                <th class="px-4 py-2 border-b mobile-hidden">NOMBRE CATEGORÍA</th>
                                <th class="px-4 py-2 border-b mobile-hidden">VIDEO</th>
                                <th class="px-4 py-2 border-b">OPCIONES</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600">

                            @foreach($videos as $index => $video)
                            <tr>
                                <td class="border px-4 py-2">
                                    <button class="text-blue-500 hover:underline toggle-details btn-mas" data-target="#details{{ $index }}">
                                        +
                                     </button>
                                    {{ $video->name }}

                                </td>
                                <td class="border px-4 py-2 mobile-hidden">{{ $video->category->name }}</td>
                                <td class="border px-4 py-2 mobile-hidden"><a href="{{ asset('storage/' . $video->url) }}" target="_blank">{{ $video->url }}</a></td>
                                <td class="border px-4 py-2">
                                    <x-primary-button class="text-center py-2">
                                        <a href="{{ route('videos.edit', ['video' => $video]) }}">
                                            <img src="{{ asset('cliente/iconos/btn_edit.png') }}" alt="">
                                        </a>
                                    </x-primary-button>
                                    <x-danger-button class="text-center py-2">
                                        <a href="{{ route('videos.delete', ['video' => $video]) }}">
                                            <img src="{{ asset('cliente/iconos/btn_delete.png') }}" alt="">
                                        </a>
                                    </x-danger-button>
                                </td>
                            </tr>

                            <tr id="details{{ $index }}" class="details-row">
                                <td colspan="2" class="border px-4 py-2">
                                    <div>Categoría Video: {{ $video->category->name }}</div>
                                    <div>URL: {{ $video->url }}</div>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="mt-4">
                    {{ $videos->appends(['search' => request('search')])->links() }}
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
