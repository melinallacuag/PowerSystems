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
                            <video src="{{ asset('cliente/images/resource/clip.mp4') }}" loop autoplay controls controlsList="nodownload" class="main-video"></video>
                            <h3 class="main-vid-title">APPSVEN</h3>
                        </div>

                        <div class="div">
                            @foreach($categories as $category)
                            <div class="wrapper">
                                <div class="collapsible" data-id="{{ $category->id }}">
                                    <input type="checkbox" id="collapsible-head-{{ $category->id }}">

                                    <div class="collapsible-card">
                                        <label for="collapsible-head-{{ $category->id }}">{{ $category->name }}</label>
                                        <img src="{{ asset('cliente/images/icons/icons8-flecha.png') }}" alt="Flecha">
                                    </div>
                                    <div class="collapsible-text">
                                        <div class="video-list-container" id="videosList{{ $category->id }}">
                                            @foreach($category->videos as $video)
                                            <div class="list">
                                                <video src="{{ asset('storage/' . $video->url) }}" class="list-video"></video>
                                                <h3 class="list-title">{{ $video->name }}</h3>
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
        vid.addEventListener('click', () => {
            let src = vid.querySelector('.list-video').src;
            let title = vid.querySelector('.list-title').innerHTML;

            document.querySelector('.main-video-container .main-video').src = src;
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
