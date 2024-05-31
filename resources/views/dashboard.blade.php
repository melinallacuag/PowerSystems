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

                        <div>
                            <div class="wrapper">
                                <div class="collapsible" data-id="1">
                                    <input type="checkbox" id="collapsible-head-1">

                                    <div class="collapsible-card">
                                        <label for="collapsible-head-1">APPSVEN - Combustibles </label>
                                        <img src="{{ asset('cliente/images/icons/icons8-flecha.png') }}" alt="Flecha">
                                    </div>
                                    <div class="collapsible-text">
                                        <p class="parrafo">Sistema APPSven es un sistema especializado y de gestión para Estaciones de Servicio,
                                             que permite el control y monitoreo de todas las operaciones, esta versión esta desarrollado en una plataforma móvil
                                             CLIENTE – SERVIDOR en una distribución ANDROID el cual es instalado dentro del negocio permitiendo limitar las interrupciones
                                              de las operaciones de emisión de comprobantes y trabajos operativos por alguna alteración del servicio de internet.
                                               Esta versión trabaja con redes inalámbricas (WIFI) y nos brinda varias bondades dentro las cuales podemos destacar:</p>
                                        <div class="video-list-container" id="videosList1"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="wrapper">
                                <div class="collapsible" data-id="2">
                                    <input type="checkbox" id="collapsible-head-2">

                                    <div class="collapsible-card">
                                        <label for="collapsible-head-2">APPSVEN - Tienda</label>
                                        <img src="{{ asset('cliente/images/icons/icons8-flecha.png') }}" alt="Flecha">
                                    </div>

                                    <div class="collapsible-text">
                                        <p class="parrafo">Sistema APPSven TIENDA es un sistema especializado y de gestión para tiendas, minimarkets, distribuidoras y
                                            negocios a fines, que permite el control y monitoreo de todas las operaciones, esta versión esta desarrollado en una plataforma
                                            móvil CLIENTE - SERVIDOR con una distribución ANDROID el cual es instalado en un servidor o equipo local. Esta versión trabaja
                                            con redes locales WIFI O CABLEADO y nos brinda varias bondades dentro las cuales podemos destacar:</p>
                                        <div class="video-list-container" id="videosList2"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="wrapper">
                                <div class="collapsible" data-id="3">
                                    <input type="checkbox" id="collapsible-head-3">
                                    <div class="collapsible-card">
                                        <label for="collapsible-head-3">APPSVEN - NFC</label>
                                        <img src="{{ asset('cliente/images/icons/icons8-flecha.png') }}" alt="Flecha">
                                    </div>
                                    <div class="collapsible-text">
                                        <p class="parrafo">Este es un conjunto de sistemas que permiten la gestión y control de los despachos de las flotas que abastecen así
                                            mismo el control de descuentos corporativos en mas de un local y la fidelización de clientes a través de stickers y pulseras RFID.
                                            Estos sistemas ayudan y complementan al crecimiento de la rentabilidad del negocio, destacamos el uso de las tecnologías RFID
                                            para controlar el plagio de códigos y la seguridad en los procesos.</p>
                                        <div class="video-list-container" id="videosList3"></div>
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

    const videosByCollapsible = {
        1: [{
                video: '{{ asset('cliente/videos/combustible/INICIAR SESION.mp4') }}',
                title: 'INICIAR SESION'
            },
            {
                video: '{{ asset('cliente/videos/combustible/Boleta.mp4') }}',
                title: 'Boleta'
            },
            {
                video: '{{ asset('cliente/videos/combustible/Factura.mp4') }}',
                title: 'Factura'
            },
            {
                video: '{{ asset('cliente/videos/combustible/Serafín.mp4') }}',
                title: 'Serafín'
            },
            {
                video: '{{ asset('cliente/videos/combustible/Cambio de Turno.mp4') }}',
                title: 'Cambio de Turno'
            },
            {
                video: '{{ asset('cliente/videos/combustible/Inicio de Dia.mp4') }}',
                title: 'Inicio de Dia'
            },
            {
                video: '{{ asset('cliente/videos/combustible/CIERRE X.mp4') }}',
                title: 'CIERRE X'
            },
            {
                video: '{{ asset('cliente/videos/combustible/Reimprimir o Anular.mp4') }}',
                title: 'Reimprimir o Anular'
            },
            {
                video: '{{ asset('cliente/videos/combustible/Descuento.mp4') }}',
                title: 'Descuento'
            },
            {
                video: '{{ asset('cliente/videos/combustible/Lados.mp4') }}',
                title: 'Lados'
            },
            {
                video: '{{ asset('cliente/videos/combustible/Configurar Lado.mp4') }}',
                title: 'Configurar Lado'
            },
            {
                video: '{{ asset('cliente/videos/combustible/Configurar Bluetooth.mp4') }}',
                title: 'Configurar Bluetooth'
            }
        ],
        2: [{
                video: '{{ asset('cliente/videos/tienda/Tienda.mp4') }}',
                title: 'Tienda'
            },
            {
                video: '{{ asset('cliente/videos/tienda/Productos Gratuitos.mp4') }}',
                title: 'Productos Gratuitos'
            }
        ],
        3: [{
                video: '{{ asset('cliente/videos/nfc/Iniciar Sesión APPSVEN NFC.mp4') }}',
                title: 'Iniciar Sesión APPSVEN NFC'
            },
            {
                video: '{{ asset('cliente/videos/nfc/Registrar Clientes Afiliados.mp4') }}',
                title: 'Registrar Clientes Afiliados'
            },
            {
                video: '{{ asset('cliente/videos/nfc/Actualizar Clientes Afiliados.mp4') }}',
                title: 'Actualizar Clientes Afiliados'
            },
            {
                video: '{{ asset('cliente/videos/nfc/Registrar Nuevo Producto.mp4') }}',
                title: 'Registrar Nuevo Producto'
            },
            {
                video: '{{ asset('cliente/videos/nfc/Eliminar Clientes Afiliados.mp4') }}',
                title: 'Eliminar Clientes Afiliados'
            }
        ]
    };

    // Genera el contenido HTML para los videos en cada collapsible
    for (let collapsibleId in videosByCollapsible) {
        const videos = videosByCollapsible[collapsibleId];
        const videosListContainer = document.getElementById(`videosList${collapsibleId}`);

        videosListContainer.innerHTML = videos.map(video => {
            return `
                <div class="list">
                    <video src="${video.video}" class="list-video"></video>
                    <h3 class="list-title">${video.title}</h3>
                </div>
            `;
        }).join('');

        // Agrega el evento onclick para cada video
        videosListContainer.querySelectorAll('.list').forEach(vid => {
            vid.addEventListener('click', () => {
                // Remueve la clase 'active' de todos los videos
                videosListContainer.querySelectorAll('.list').forEach(remove => {
                    remove.classList.remove('active');
                });

                // Agrega la clase 'active' al video seleccionado
                vid.classList.add('active');

                // Obtiene la ruta del video y el título
                let src = vid.querySelector('.list-video').src;
                let title = vid.querySelector('.list-title').innerHTML;

                // Asigna la ruta y el título al video principal
                document.querySelector('.main-video-container .main-video').src = src;
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

    // Función para desactivar otras opciones cuando se selecciona una en un collapsible
    function deactivateOtherOptions(currentCollapsibleId, selectedOption) {
        // Itera sobre todos los collapsibles
        for (let id in videosByCollapsible) {
            // Verifica si es el collapsible actual
            if (id !== currentCollapsibleId) {
                // Desactiva todas las opciones en este collapsible
                document.querySelectorAll(`#videosList${id} .list`).forEach(option => {
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

                let videosListContainer = collapsible.querySelector('.video-list-container');
                videosListContainer.querySelectorAll('.list').forEach(remove => {
                    remove.classList.remove('active');
                });
            }
        });
    }


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
            document.querySelectorAll('.collapsible .collapsible-card-doc img').forEach(arrow => {
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



    function closeCollapsibles(currentId) {
        document.querySelectorAll('.collapsible').forEach(collapsible => {
            if (collapsible.dataset.id !== currentId) {
                collapsible.querySelector('input').checked = false;
                collapsible.querySelector('.collapsible-card-doc img').classList.remove('rotated');
            }
        });
    }



    document.addEventListener('contextmenu', function(e) {
        e.preventDefault();
    });

</script>
