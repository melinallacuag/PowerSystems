<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" type="text/css" href="{{ asset('cliente/css/mystyle.css') }}">


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
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
    </body>
</html>
