<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">



                </div>
            </div>
        </div>

    </div>

    <style>
        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-transform: capitalize;
        }

        .containers {
            max-width: 12200px;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            gap: 20px;
        }

        .main-video-container {
            flex: 1 1 650px;
            background-color: #fff;
            padding: 15px;
        }

        .main-video {
            margin-bottom: 7px;
            width: 100%;
        }

        .main-vid-title {
            font-size: 20px;
            color: #444;
        }

        .video-list-container {
            flex: 1 1 300px;
            border-left: 2px solid #eee;
            background-color: #fff;
            padding: 15px;
        }

        .list {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 10px;
            border: 1px solid #1aa700;
            cursor: pointer;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .list:last-child {
            margin-bottom: 0;
        }

        .list.active {
            background-color: #1aa700;
        }

        .containers .video-list-container .list.active .list-title {
            color: #fff;
        }

        .list-video {
            width: 100px;
            border-radius: 5px;
        }

        .list-title {
            font-size: 17px;
            color: #444;
        }

        @media (max-width:1200px) {
            .containers {
                margin: 0;
            }

            .video-list-container {
                border: none !important;
                padding: 15px !important;
            }
        }

        @media(max-width:400px) {
            .video-list-container {
                border: none !important;
                padding: 15px !important;
            }

            .main-vid-title {
                font-size: 15px;
                text-align: center;
            }

            .list {
                flex-flow: column;
                gap: 10px
            }

            .list-video {
                width: 100%;
            }

            .list-title {
                font-size: 15px;
                text-align: center;

            }
        }

        .wrapper {
            display: flex;
            padding: 15px;
            justify-content: center;
        }

        .collapsible {
            max-width: 450px;
            overflow: hidden;
            font-weight: 500;
        }

        .collapsible input {
            display: none;
        }

        .collapsible .collapsible-card {
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: relative;
            font-weight: 500;
            background: #1aa700;
            box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .1), 0 4px 11px 0 rgba(0, 0, 0, .08);
            color: #fff;
            margin-bottom: 10px;
            padding: 15px;
            cursor: pointer;
            font-size: 14px;
            border-radius: 15px;
            z-index: 1;
            letter-spacing: 0.065rem;
        }

        .collapsible .collapsible-card img {
            transition: transform 0.3s ease;
            transform: rotate(0deg);
            /* Agregamos transición para la rotación */
        }

        .collapsible .collapsible-card label:after {
            content: "";
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            width: 50px;
            height: 50px;
        }

        .collapsible input:checked+.collapsible-card label:after {
            transform: rotate(90deg);
        }

        /* Agregamos regla para rotar la imagen cuando la clase 'rotated' está presente */
        .collapsible .collapsible-card img.rotated {
            transform: rotate(90deg);
        }

        .collapsible-text {
            max-height: 1px;
            overflow: hidden;
            border-radius: 4px;
            line-height: 1.4;
            position: relative;
            top: -100%;
            opacity: 0.5;
            transition: all 0.3s ease;
        }

        .collapsible input:checked~.collapsible-text {
            max-height: 100%;
            padding-bottom: 20px;
            background: #fff;
            box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .1), 0 4px 11px 0 rgba(0, 0, 0, .08);
            opacity: 1;
            top: 0;
            border: 1px solid #1aa700;
            padding-top: 20px;
            border-radius: 15px;
            border-top: 5px solid #1aa700;
        }

        .collapsible-text h2 {
            margin-bottom: 10px;
            padding: 15px 15px 0;
            color: #1c1c6b;
        }

        .collapsible-text p {
            padding-left: 15px;
            padding-right: 15px;
            font-size: 12px;
            line-height: 1rem;
            text-align: justify;
            color: #333;
        }
    </style>

    <!-- Lista de Videos-->
    <div class="containers">
        <div class="main-video-container">

            <video src="{{ asset('cliente/images/resource/appSVEN.2.0.mp4') }} " loop controls
                class="main-video"></video>

            <h3 class="main-vid-title">3d plus</h3>
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
                        <p class="parrafo">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Excepturi, autem
                            obcaecati. Sed officiis minima explicabo
                            delectus, rerum molestias.</p>
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
                        <p class="parrafo">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Excepturi, autem
                            obcaecati. Sed officiis minima explicabo
                            delectus, rerum molestias.</p>
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
                        <p class="parrafo">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Excepturi, autem
                            obcaecati. Sed officiis minima explicabo
                            delectus, rerum molestias.</p>
                        <div class="video-list-container" id="videosList3"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>

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
                    document.querySelector('.main-video-container .main-video').play();
                    document.querySelector('.main-video-container .main-vid-title').innerHTML = title;

                    const mainVideoContainer = document.querySelector('.main-video-container');
                    const mainVideoContainerRect = mainVideoContainer.getBoundingClientRect();
                    const mainVideoContainerTop = mainVideoContainerRect.top;

                    // Desplaza la página hacia la posición del contenedor principal de videos
                    window.scrollTo({
                        top: window.scrollY + mainVideoContainerTop -
                        100, // Agrega el desplazamiento actual
                        behavior: 'smooth' // Desplazamiento suave
                    });
                });
            });
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
    </script>

</x-app-layout>
