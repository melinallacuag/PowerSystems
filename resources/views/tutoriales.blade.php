<x-app-layout>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" flex items-center p-4 text-gray-900" style="gap: 0.5rem; margin-left:0.5rem;">
                    <p class="font-semibold text-sm text-green-600 leading-tight">
                       Videos
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="containers">
                        <div class="main-video-container">
                            <video  id="mainVideo" src="{{ asset('cliente/img/videos/clip.mp4') }}" loop autoplay controls controlsList="nodownload" class="main-video"></video>
                            <h3 class="main-vid-title">APPSVEN</h3>
                        </div>

                        <div class="div">
                            @foreach($categories as $category)
                            <div class="wrapper">
                                <div class="collapsible" data-id="{{ $category->id }}">
                                    <input type="checkbox" id="collapsible-head-{{ $category->id }}">

                                    <div class="collapsible-card">
                                        <label for="collapsible-head-{{ $category->id }}">{{ $category->name }}</label>
                                        <img src="{{ asset('cliente/img/icons/icons8-flecha.png') }}" alt="Flecha">
                                    </div>
                                    <div class="collapsible-text">
                                        <div class="video-list-container" id="videosList{{ $category->id }}">
                                            @foreach($category->videos as $video)
                                            <div class="list" data-id="{{ $video->id }}">
                                                <video  src="{{ asset('storage/' . $video->url) }}" class="list-video"></video>
                                                <h3 class="list-title">{{ $video->name }}</h3>
                                                    @if($videoProgress->has($video->id))
                                                        <p class="progress">Visualizado</p>
                                                    @else
                                                        <p class="progress">No Visualizado</p>
                                                    @endif
                                                    <p class="progress" id="progress{{ $video->id }}" style="display: none;">
                                                        {{ $videoProgress->get($video->id)->progress ?? '0%' }} visto
                                                    </p>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
</x-app-layout>
<script>

function sendProgressToServer(videoId, progress) {
    fetch('{{ route('update-progress') }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({
            videoId: videoId,
            progress: progress
        })
    }).then(response => {
        if (!response.ok) {
            console.error('Error al enviar el progreso:', response.statusText);
        }
    }).catch(error => {
        console.error('Error al enviar el progreso:', error);
    });
}


document.addEventListener('DOMContentLoaded', () => {
    const videos = document.querySelectorAll('video');

    videos.forEach(video => {
        video.addEventListener('timeupdate', () => {
            // Asegúrate de que el elemento de progreso existe
            const progressElement = document.getElementById(`progress${video.id.slice(-1)}`);
            if (progressElement) {
                const duration = video.duration;
                const currentTime = video.currentTime;

                // Asegúrate de que duration y currentTime sean válidos antes de calcular el porcentaje
                if (duration > 0) {
                    const percentage = ((currentTime / duration) * 100).toFixed(0);
                    progressElement.textContent = `${percentage}% visto`;

                    sendProgressToServer(video.id.slice(-1), percentage);
                }
            }
        });
    });
});

    document.querySelectorAll('.collapsible').forEach(collapsible => {
        collapsible.addEventListener('click', function(event) {

            const targetClassList = event.target.classList;
            if (targetClassList.contains('list') || targetClassList.contains('list-video') ||
                targetClassList.contains('list-title') || targetClassList.contains(
                'collapsible-text') || targetClassList.contains('parrafo')) {
                return; // Salir de la función si el clic proviene de la parte del collapsible relacionada con el video
            }

            // Obtener el input dentro del collapsible
            const input = this.querySelector('input');

            // Verificar si el collapsible está activo
            const isActive = input.checked;

            // Remover la clase 'rotated' de todas las flechas
            document.querySelectorAll('.collapsible .collapsible-card img').forEach(arrow => {
                arrow.classList.remove('rotated');
            });

            // Agregar o remover la clase 'rotated' según el estado del collapsible
            const img = this.querySelector('img');
            if (!isActive) {
                img.classList.add('rotated');
            }

            // Cambiar el estado del input
            input.checked = !isActive;

            // Desactivar otras opciones
            deactivateOtherOptions(this.dataset.id);

            closeCollapsibles(this.dataset.id);
        });
    });

    // Función para desactivar otras opciones cuando se selecciona una en un collapsible
    function deactivateOtherOptions(currentCollapsibleId, selectedOption) {
        // Itera sobre todos los collapsibles
        document.querySelectorAll('.collapsible').forEach(collapsible => {
            // Verifica si es el collapsible actual
            if (collapsible.dataset.id !== currentCollapsibleId) {
                // Desactiva todas las opciones en este collapsible
                collapsible.querySelectorAll('.list').forEach(option => {
                    option.classList.remove('active');
                });
            }
        });
    }

    function closeCollapsibles(currentId) {
        document.querySelectorAll('.collapsible').forEach(collapsible => {
            if (collapsible.dataset.id !== currentId) {
                collapsible.querySelector('input').checked = false;
                collapsible.querySelector('.collapsible-card img').classList.remove('rotated');
            }
        });
    }

    document.querySelectorAll('.list').forEach(vid => {
        const mainVideo = document.querySelector('.main-video-container .main-video');
        vid.addEventListener('click', () => {

            let src = vid.querySelector('.list-video').src;
            let title = vid.querySelector('.list-title').innerHTML;
            let videoId = vid.dataset.id;

            document.querySelector('.main-video-container .main-video').src = src;
            mainVideo.id = `video${videoId}`;
            document.querySelector('.main-video-container .main-vid-title').innerHTML = title;

            const mainVideoContainer = document.querySelector('.main-video-container');
            const mainVideoContainerRect = mainVideoContainer.getBoundingClientRect();
            const mainVideoContainerTop = mainVideoContainerRect.top;

            window.scrollTo({
                top: window.scrollY + mainVideoContainerTop - 100,
                behavior: 'smooth'
            });

            vid.closest('.video-list-container').querySelectorAll('.list').forEach(remove => {
                remove.classList.remove('active');
            });
            vid.classList.add('active');
        });
    });

    document.addEventListener('contextmenu', function(e) {
        e.preventDefault();
    });




</script>
