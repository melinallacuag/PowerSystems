<x-app-layout>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" flex items-center p-4 text-gray-900" style="gap: 0.5rem; margin-left:0.5rem;">
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
                            <object type="application/pdf" data="{{asset('cliente/docs/APPSVEN Documentación de Versiones.pdf#toolbar=0')}}" class="main-video" width="500" height="500" sandbox="allow-same-origin"></object>
                        </div>

                        <div>
                            <div class="wrapper">
                                <div class="collapsible" data-id="1">
                                    <input type="checkbox" id="collapsible-head-1">

                                    <div class="collapsible-card">
                                        <label for="collapsible-head-1">APPSVEN - Combustibles </label>
                                        <img src="{{asset('cliente/images/icons/icons8-flecha.png')}}" alt="Flecha">
                                    </div>
                                    <div class="collapsible-text">
                                        <p class="parrafo">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Excepturi, autem
                                            obcaecati. Sed officiis minima explicabo
                                            delectus, rerum molestias.</p>
                                        <div class="video-list-container" id="documentosList1"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="wrapper">
                                <div class="collapsible" data-id="2">
                                    <input type="checkbox" id="collapsible-head-2">

                                    <div class="collapsible-card">
                                        <label for="collapsible-head-2">APPSVEN - Tienda</label>
                                        <img src="{{asset('cliente/images/icons/icons8-flecha.png')}}" alt="Flecha">
                                    </div>

                                    <div class="collapsible-text">
                                        <p class="parrafo" >Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Excepturi, autem
                                            obcaecati. Sed officiis minima explicabo
                                            delectus, rerum molestias.</p>
                                        <div class="video-list-container" id="documentosList2"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="wrapper">
                                <div class="collapsible" data-id="3">
                                    <input type="checkbox" id="collapsible-head-3">
                                    <div class="collapsible-card">
                                        <label for="collapsible-head-3">APPSVEN - NFC</label>
                                        <img src="{{asset('cliente/images/icons/icons8-flecha.png')}}" alt="Flecha">
                                    </div>
                                    <div class="collapsible-text">
                                        <p class="parrafo">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Excepturi, autem
                                            obcaecati. Sed officiis minima explicabo
                                            delectus, rerum molestias.</p>
                                        <div class="video-list-container" id="documentosList3"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</x-app-layout>

<script>

    const documentsByCollapsible = {
        1: [
            {
                document: '{{ asset('cliente/docs/APPSVEN Documentación de Versiones.pdf#toolbar=0')}}',
                title: 'INICIAR SESION'
            },
            {
                document: '{{ asset('https://www.imaginanet.com/pdfinet/Dise%C3%B1o%20Responsive%20o%20Adaptativo.pdf#toolbar=0')}}',
                title: 'Boleta'
            },
            {
                document: '{{ asset('cliente/docs/APPSVEN Documentación de Versiones.pdf#toolbar=0')}}',
                title: 'Factura'
            }
        ],
        2: [
            {
            document: '{{ asset('cliente/docs/APPSVEN Documentación de Versiones.pdf#toolbar=0')}}',
                title: 'Factura'
            },
            {
                document: '{{ asset('https://www.imaginanet.com/pdfinet/Dise%C3%B1o%20Responsive%20o%20Adaptativo.pdf#toolbar=0')}}',
                title: 'Factura'
            },
        ],
        3: [
            {
            document: '{{ asset('https://www.imaginanet.com/pdfinet/Dise%C3%B1o%20Responsive%20o%20Adaptativo.pdf#toolbar=0')}}',
                title: 'Factura'
            },
        ]

    };

       // Genera el contenido HTML para los videos en cada collapsible
       for (let collapsibleId in documentsByCollapsible) {
            const documentos = documentsByCollapsible[collapsibleId];
            const documentosListContainer = document.getElementById(`documentosList${collapsibleId}`);

            documentosListContainer.innerHTML = documentos.map(document => {
                return `
                    <div class="list">
                        <object data="${document.document}" type="application/pdf" class="list-document"></object>
                        <h3 class="list-title">${document.title}</h3>
                    </div>
                `;
            }).join('');

            // Agrega el evento onclick para cada video
            documentosListContainer.querySelectorAll('.list').forEach(vid => {
                vid.addEventListener('click', () => {
                    // Remueve la clase 'active' de todos los videos
                    documentosListContainer.querySelectorAll('.list').forEach(remove => {
                        remove.classList.remove('active');
                    });

                    // Agrega la clase 'active' al video seleccionado
                    vid.classList.add('active');

                    // Obtiene la ruta del video y el título
                    let data = vid.querySelector('.list-document').data;
                    let title = vid.querySelector('.list-title').innerHTML;

                    // Asigna la ruta y el título al video principal
                    document.querySelector('.main-video-container .main-video').data = data;
                    document.querySelector('.main-video-container .main-vid-title').innerHTML = title;

                    const mainVideoContainer = document.querySelector('.main-video-container');
                    const mainVideoContainerRect = mainVideoContainer.getBoundingClientRect();
                    const mainVideoContainerTop = mainVideoContainerRect.top;

                    // Desplaza la página hacia la posición del contenedor principal de videos
                    window.scrollTo({
                        top: window.scrollY + mainVideoContainerTop - 100, // Agrega el desplazamiento actual
                        behavior: 'smooth' // Desplazamiento suave
                    });
                });
            });
        }

        function deactivateOtherOptions(currentCollapsibleId, selectedOption) {
            // Itera sobre todos los collapsibles
            for (let id in documentsByCollapsible) {
                // Verifica si es el collapsible actual
                if (id !== currentCollapsibleId) {
                    // Desactiva todas las opciones en este collapsible
                    document.querySelectorAll(`#documentosList${id} .list`).forEach(option => {
                        option.classList.remove('active');
                    });
                }
            }
        }

        const collapsibles = document.querySelectorAll('.collapsible');

        collapsibles.forEach(collapsible => {
            collapsible.addEventListener('change', function() {
                if (this.querySelector('input').checked) {
                    closeOtherCollapsibles(this.dataset.id);
                }
            });
        });

        function closeOtherCollapsibles(currentId) {
            collapsibles.forEach(collapsible => {
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
                if (targetClassList.contains('list') || targetClassList.contains('list-document') || targetClassList.contains('list-title')  || targetClassList.contains('collapsible-text') || targetClassList.contains('parrafo')  ) {
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


