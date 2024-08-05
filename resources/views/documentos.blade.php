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
                            <object id="main-document" type="application/pdf"
                                data="{{ asset('cliente/img/videos/CARTA DE PRESENTACION SFESVEN 2024-I.pdf#toolbar=0') }}"
                                class="main-video" width="500" height="500" sandbox="allow-same-origin"
                                data-id="main-document-id"></object>
                        </div>
                        <div class="div">
                            @foreach ($categories as $category)
                                <div class="wrapper">
                                    <div class="collapsible" data-id="{{ $category->id }}">
                                        <input type="checkbox" id="collapsible-head-{{ $category->id }}">
                                        <div class="collapsible-card">
                                            <label
                                                for="collapsible-head-{{ $category->id }}">{{ $category->name }}</label>
                                            <img src="{{ asset('cliente/img/icons/icons8-flecha.png') }}"
                                                alt="Flecha">
                                        </div>
                                        <div class="collapsible-text">
                                            <div class="video-list-container" id="videosList{{ $category->id }}">
                                                @foreach ($category->documentos as $documento)
                                                    <div class="list" id="documento-{{ $documento->id }}">
                                                        <object type="application/pdf"
                                                            data="{{ asset('storage/' . $documento->documento . '#toolbar=0') }}"
                                                            class="list-document" width="100" height="150"
                                                            data-id="{{ $documento->id }}"></object>
                                                        <h3 class="list-title">{{ $documento->name }}</h3>
                                                        @if ($documentProgress->has($documento->id))
                                                            <p class="progress">Visualizado</p>
                                                        @else
                                                            <p class="progress">No Visualizado</p>
                                                        @endif
                                                        <p class="progress" id="progress-{{ $documento->id }}"
                                                            style="display: none"></p>
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
    function saveProgress(documentId, progress) {
        fetch('{{ route('update-document-progress') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    documentoId: documentId,
                    progress: progress
                })
            }).then(response => response.json())
            .then(data => {
                if (data.status !== 'success') {
                    console.error('Error al enviar el progreso:', data.message);
                }
            }).catch(error => {
                console.error('Error al enviar el progreso:', error);
            });
    }

    document.addEventListener('DOMContentLoaded', () => {
        const VIEW_THRESHOLD = 5000; // 5 segundos

        // Función para actualizar el estado de visualización
        function updateProgress(documentId) {
            const progressElement = document.getElementById(`progress-${documentId}`);
            if (progressElement) {
                progressElement.textContent = 'Visualizado';
            }
        }

        // Manejo de eventos para los documentos en la lista
        document.querySelectorAll('.list').forEach(listItem => {
            let timeoutId;
            let viewTimeoutId;

            /**  listItem.addEventListener('mouseover', function() {
                  timeoutId = setTimeout(() => {
                      const documentId = this.querySelector('.main-video-container .main-video').getAttribute('data-id');
                      updateProgress(documentId);
                      saveProgress(documentId, 1);
                       this.classList.add('visualizado');
                  }, VIEW_THRESHOLD);
              });

              listItem.addEventListener('mouseout', function() {
                  clearTimeout(timeoutId);
              });**/

            listItem.addEventListener('click', function() {
                document.querySelectorAll('.list').forEach(remove => {
                    remove.classList.remove('active');
                });

                this.classList.add('active');

                let data = this.querySelector('.list-document').getAttribute('data');
                let documentId = this.id.split('-')[1];

                let mainVideoContainer = document.querySelector('.main-video-container');
                let mainVideo = document.createElement('object');
                mainVideo.setAttribute('type', 'application/pdf');
                mainVideo.setAttribute('data', data);
                mainVideo.setAttribute('width', '100%');
                mainVideo.setAttribute('height', '500');
                mainVideo.setAttribute('sandbox', 'allow-same-origin');
                mainVideo.setAttribute('data-id', documentId);

                // Actualizar documento principal
                let oldMainDocument = document.getElementById('main-document');
                if (oldMainDocument) {
                    oldMainDocument.parentNode.replaceChild(mainVideo, oldMainDocument);
                } else {
                    mainVideoContainer.innerHTML = '';
                    mainVideoContainer.appendChild(mainVideo);
                }

                // Limpiar el temporizador si había uno previo
                clearTimeout(viewTimeoutId);

                // Establecer el temporizador para actualizar el estado de visualización
                viewTimeoutId = setTimeout(() => {
                    updateProgress(documentId);
                    saveProgress(documentId, 1);
                }, VIEW_THRESHOLD);

                const mainVideoContainerRect = mainVideoContainer.getBoundingClientRect();
                const mainVideoContainerTop = mainVideoContainerRect.top;

                window.scrollTo({
                    top: window.scrollY + mainVideoContainerTop - 100,
                    behavior: 'smooth'
                });
            });
        });

        // Manejo de eventos para el documento principal
        const mainDocument = document.getElementById('main-document');
        if (mainDocument) {
            let mainDocumentTimeoutId;

            mainDocument.addEventListener('mouseover', () => {
                mainDocumentTimeoutId = setTimeout(() => {
                    const documentId = mainDocument.getAttribute('data-id');
                    updateProgress(documentId);
                }, VIEW_THRESHOLD);
            });

            mainDocument.addEventListener('mouseout', () => {
                clearTimeout(mainDocumentTimeoutId);
            });
        }
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
            if (targetClassList.contains('list') || targetClassList.contains('list-document') ||
                targetClassList.contains('list-title') || targetClassList.contains('collapsible-text')
                ) {
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
