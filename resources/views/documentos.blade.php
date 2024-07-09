<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex items-center p-4 text-gray-900" style="gap: 0.5rem; margin-left:0.5rem;">
                    <p class="font-semibold text-sm text-green-600 leading-tight">
                       Documentos
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
                            <object type="application/pdf" data="{{ asset('cliente/images/resource/APPSVEN Documentación de Versiones.pdf#toolbar=0') }}" class="main-video" width="500" height="500" sandbox="allow-same-origin"></object>
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
                                                @foreach($category->documentos as $documento)
                                                    <div class="list">
                                                        <object type="application/pdf" data="{{ asset('storage/' . $documento->documento.'#toolbar=0') }}" class="list-document" width="100" height="150"></object>
                                                        <h3 class="list-title">{{ $documento->name }}</h3>
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
document.querySelectorAll('.list').forEach(listItem => {
    listItem.addEventListener('click', function() {
        document.querySelectorAll('.list').forEach(remove => {
            remove.classList.remove('active');
        });

        this.classList.add('active');

        let data = this.querySelector('.list-document').data;
        let title = this.querySelector('.list-title').innerHTML;

        let mainVideoContainer = document.querySelector('.main-video-container');
        let mainVideo = document.createElement('object');
        mainVideo.setAttribute('type', 'application/pdf');
        mainVideo.setAttribute('data', data);
        mainVideo.setAttribute('width', '100%');
        mainVideo.setAttribute('height', '500');
        mainVideo.setAttribute('sandbox', 'allow-same-origin');

        mainVideoContainer.innerHTML = '';
        mainVideoContainer.appendChild(mainVideo);

        const mainVideoContainerRect = mainVideoContainer.getBoundingClientRect();
        const mainVideoContainerTop = mainVideoContainerRect.top;

        window.scrollTo({
            top: window.scrollY + mainVideoContainerTop - 100,
            behavior: 'smooth'
        });
    });
});

function deactivateOtherOptions(currentCollapsibleId) {
    document.querySelectorAll('.video-list-container').forEach(container => {
        if (container.id !== `videosList${currentCollapsibleId}`) {
            container.querySelectorAll('.list').forEach(option => {
                option.classList.remove('active');
            });
        }
    });
}

document.querySelectorAll('.collapsible').forEach(collapsible => {
    collapsible.addEventListener('change', function() {
        if (this.querySelector('input').checked) {
            closeOtherCollapsibles(this.dataset.id);
        }
    });
});

function closeOtherCollapsibles(currentId) {
    document.querySelectorAll('.collapsible').forEach(collapsible => {
        if (collapsible.dataset.id !== currentId) {
            collapsible.querySelector('input').checked = false;

            let documentosListContainer = collapsible.querySelector('.video-list-container');
            documentosListContainer.querySelectorAll('.list').forEach(remove => {
                remove.classList.remove('active');
            });
        }
    });
}

document.querySelectorAll('.collapsible').forEach(collapsible => {
    collapsible.addEventListener('click', function(event) {
        const targetClassList = event.target.classList;
        if (targetClassList.contains('list') || targetClassList.contains('list-document') || targetClassList.contains('list-title') || targetClassList.contains('collapsible-text')) {
            return;
        }

        const input = this.querySelector('input');
        const isActive = input.checked;

        document.querySelectorAll('.collapsible .collapsible-card img').forEach(arrow => {
            arrow.classList.remove('rotated');
        });

        const img = this.querySelector('img');
        if (!isActive) {
            img.classList.add('rotated');
        }

        input.checked = !isActive;

        deactivateOtherOptions(this.dataset.id);

        closeCollapsibles(this.dataset.id);
    });
});

function closeCollapsibles(currentId) {
    document.querySelectorAll('.collapsible').forEach(collapsible => {
        if (collapsible.dataset.id !== currentId) {
            collapsible.querySelector('input').checked = false;
            collapsible.querySelector('.collapsible-card img').classList.remove('rotated');
        }
    });
}

document.addEventListener('contextmenu', function(e) {
    e.preventDefault();
});
</script>
