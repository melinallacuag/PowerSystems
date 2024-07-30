<style>
    .color-border-botton-normal {
        border-bottom: 10px solid #1ebf0c;
    }

    .color-border-botton-pagar {
        border-bottom: 10px solid orange;
    }

    .color-border-botton-deuda {
        border-bottom: 10px solid red;
    }

    .color-button-video {
        border-bottom: 10px solid blueviolet;
    }

    .color-button-document {
        border-bottom: 10px solid rgb(25, 57, 212);
    }

    .border-radius-20 {
        border-radius: 20px;
    }

    .button-estados-normal {
        background: #1ebf0c;
        color: wheat;
        font-weight: 700;
        padding: 10px;
        width: 90%;
    }

    .button-estados-deuda {
        background: red;
        color: wheat;
        font-weight: 700;
        padding: 10px;
        width: 90%;
    }

    .button-estados-pagar {
        background: orange;
        color: wheat;
        font-weight: 700;
        padding: 10px;
        width: 90%;
    }

    .align-text-fecha {
        flex-direction: column;
        display: flex;
        gap: 1rem;
    }

    .divider {
        border-left: 4px solid rgba(0, 156, 0, 0.85);
        height: 100px;
        margin: 0 10px;
    }

    .card-background {
        top: 0;
        left: 0;
        position: relative;
        background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('{{ asset('cliente/img/background/grifo.jpg') }}');
        height: 180px;
        width: 100%;
        background-size: cover;
        border-radius: 15px 15px 0 0;
    }

    .card-content {
        position: relative;
        z-index: 1;
    }

    .user-avatar {
        position: relative;
        z-index: 2;
        margin-top: -110px;
    }

    .content-avatar {
        border-radius: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .image-container-video {
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 15px 15px 0 0;
        background-color: blueviolet;
        position: relative;
        height: 250px;
    }

    .text-color-irvideo {
        color: blueviolet;
    }

    .text-color-irdocument {
        color: rgb(25, 57, 212);
    }

    .image-container-document {
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 15px 15px 0 0;
        background-color: rgb(25, 57, 212);
        position: relative;
        height: 250px;
    }

    .image {
        position: absolute;
        width: 90%;
        height: 125%;
    }

    .styled-hr-video {
        width: 90px;
        height: 5px;
        background: #8a2be2;
        margin-top: 0.5rem;
        margin-bottom: 2rem;
    }

    .styled-hr-document {
        width: 90px;
        height: 5px;
        background: rgb(25, 57, 212);
        margin-top: 0.5rem;
        margin-bottom: 2rem;
    }

    .card-link {
        display: block;
        text-decoration: none;
        color: inherit;
    }

    .color-button-video,
    .color-button-document {
        transition: transform 0.5s ease, box-shadow 0.5s ease;
    }

    .card-link:hover .color-button-video,
    .card-link:hover .color-button-document {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .divider-datos {
        border-left: 4px solid rgba(0, 156, 0, 0.85);
        height: 30px;
        margin: 0 45px;
    }

    .margin-rigth {
        margin-right: 0.75rem;
    }

    .color-left-cliente {
        border-left: 10px solid rgb(24 178 16);
    }

    .color-left-usuario {
        border-left: 10px solid rgb(255 83 0);
    }

    .color-left-video {
        border-left: 10px solid rgb(136, 32, 232);
    }

    .color-left-documento {
        border-left: 10px solid rgb(7 208 192);
    }
</style>

<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex items-center p-4 text-gray-900">
                    <p class="font-semibold text-sm text-gray-900 leading-tight">
                        ¡ Bienvenido, <span class="text-green-600 font-bold">{{ Auth::user()->name }} !</span> Nos alegra
                        tenerte de vuelta en <span class="font-bold text-green-600">Power Group System</span>.
                    </p>
                </div>
            </div>
        </div>
    </div>

    @if (Auth::user()->rol != 'admin')
        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="px-6 text-gray-900">
                        <div class="flex flex-wrap -mx-3 flex-inputs" style="align-items: center">
                            @if ($cliente)
                                <div class="w-full md:w-1/3 px-3 mb-2 md:mb-0">
                                    <div
                                        class="bg-white bg-card text-card-foreground shadow-lg color-border-botton-{{ $cliente->estado }} border-radius-20">
                                        <div class="card-background">
                                        </div>
                                        <div class="card-content flex flex-col items-center p-6">
                                            <div class="w-90 h-90 bg-white user-avatar shadow-lgs content-avatar mb-4">
                                                <img class="w-70 h-70 rounded-full" src="{{ $cliente->avatar }}"
                                                    alt="User Avatar">
                                            </div>
                                            <h2 class="text-xls font-bold mb-2 text-center text-black">
                                                {{ $cliente->razon_social }}</h2>
                                            <p class="text-xl mb-4 font-bold text-gray-600">{{ $cliente->ruc }}</p>
                                            <div class="flex space-evenly w-full mb-4">
                                                <div class="text-center align-text-fecha">
                                                    <p class="text-x2 font-bold mb-1 text-green-600">
                                                        {{ $cliente->fecha_inicio_dia }}</p>
                                                    <p class="text-xl font-bold mb-4 text-gray-800 ">
                                                        {{ $cliente->fecha_inicio_mes }} del <br>
                                                        {{ $cliente->fecha_inicio_ano }}</p>
                                                </div>
                                                <div class="divider"></div>
                                                <div class="text-center align-text-fecha">
                                                    <p class="text-x2 font-bold mb-1 text-green-600">
                                                        {{ $cliente->fecha_fin_dia }}</p>
                                                    <p class="text-xl font-bold mb-4 text-gray-800 ">
                                                        {{ $cliente->fecha_fin_mes }} del <br>
                                                        {{ $cliente->fecha_fin_ano }}</p>
                                                </div>
                                            </div>
                                            <p class="text-xsls mb-4 font-bold text-center text-black uppercase">
                                                {{ $cliente->service->name }}</p>
                                            <p
                                                class="rounded-full button-estados-{{ $cliente->estado }} font-bold text-white text-center uppercase ">
                                                {{ $cliente->estado }}</p>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="w-full md:w-1/3 px-3 mb-2 md:mb-0">
                                    <div
                                        class="bg-white bg-card text-card-foreground shadow-lg color-border-botton border-radius-20">
                                        <p class="text-xl mb-4 font-bold text-gray-600">No se encontró información de
                                            clientes con el RUC asociado.</p>
                                    </div>
                                </div>
                            @endif

                            <div class="w-full md:w-1/3 px-6 mb-2 md:mb-0">
                                <a href="{{ route('tutoriales') }}" class="card-link">
                                    <div
                                        class="bg-white bg-card text-card-foreground shadow-lg color-button-video border-radius-20">
                                        <div class="image-container-video">
                                            <img class="image" style="margin-left: 2rem;"
                                                src="{{ asset('cliente/img/avatar/avatar_video.png') }}"
                                                alt="Videos Illustration">
                                        </div>
                                        <p class="text-xls font-bold mb-2 text-center text-black mb-4 "></p>
                                        <div class="flex flex-col items-center p-6">
                                            <p class="text-xls font-bold text-center mb-2 text-color-irvideo ">Ir a ver
                                            </p>
                                            <hr class="styled-hr-video">
                                            <p class="text-x2s font-bold text-center text-black mb-6 ">Videos</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="w-full md:w-1/3 px-6 mb-2 md:mb-0 mb-8">
                                <a href="{{ route('documentos') }}" class="card-link">
                                    <div
                                        class="bg-white bg-card text-card-foreground shadow-lg color-button-document border-radius-20">
                                        <div class="image-container-document">
                                            <img class="image"
                                                src="{{ asset('cliente/img/avatar/avatar_document.png') }}"
                                                alt="Documentos Illustration">
                                        </div>
                                        <p class="text-xls font-bold mb-2 text-center text-black mb-4 "></p>
                                        <div class="flex flex-col items-center p-6">
                                            <p class="text-xls font-bold text-center mb-2 text-color-irdocument ">Ir a
                                                ver</p>
                                            <hr class="styled-hr-document">
                                            <p class="text-x2s font-bold text-center text-black mb-6 ">Documentos</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="flex items-center p-2 text-gray-900" style="justify-content: center">
                        <p class="text-black font-bold margin-rigth">Contactanos al número : </p>
                        <p class="text-green-600 font-bold"> (+51) 901 716 475</p>
                        <div class="divider-datos"></div>
                        <p class=" text-black font-bold margin-rigth">Siguenos en nuestras redes :</p>
                        <ul class="header-social_box" style="display: flex;gap: 0.25rem;">
                            <li><a target="_blank"
                                    href="https://www.facebook.com/profile.php?id=100092632664470&sfnsn=wa&mibextid=RUbZ1f"><img
                                        src="{{ asset('cliente/img/icons/facebook.webp') }}" width="30px"
                                        alt="Sistema para Estaciones de Servicios | Power Group System | facebook"></a>
                            </li>
                            <li><a target="_blank" href="https://www.facebook.com/"><img
                                        src="{{ asset('cliente/img/icons/twitter.webp') }}" width="30px"
                                        alt="Sistema para Estaciones de Servicios | Power Group System | twitter"></a>
                            </li>
                            <li><a target="_blank" href="https://www.linkedin.com/"><img
                                        src="{{ asset('cliente/img/icons/linkedin.webp') }}" width="30px"
                                        alt="Sistema para Estaciones de Servicios | Power Group System | linkedin"></a>
                            </li>
                            <li><a target="_blank" href="https://instagram.com/"><img
                                        src="{{ asset('cliente/img/icons/instagram.webp') }}" width="30px"
                                        alt="Sistema para Estaciones de Servicios | Power Group System | instagram"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
    @endif

    @if (Auth::user()->rol == 'admin')
        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="px-6 text-gray-900">
                        <div class="flex flex-wrap -mx-3 flex-inputs" style="align-items: center">
                            <div class="w-full md:w-1/3 px-6 mb-4 md:mb-0 ">
                                <a href="{{ route('usuarios.index') }}" class="card-link">
                                    <div
                                        class="bg-white bg-card  color-left-cliente shadow-lg  bg-secondary p-4 rounded-lg shadow-md text-center flex items-center space-evenly">
                                        <div
                                            class="bg-primary-foreground w-12 h-12 rounded-full flex items-center justify-center mr-4">
                                            <img aria-hidden="true" alt="credit-card"
                                                src="{{ asset('cliente/iconos/icons-usuarios.png') }}" />
                                        </div>
                                        <div>
                                            <h2 class="text-secondary-foreground font-bold">Total Usuarios</h2>
                                            <p class="text-secondary-foreground text-2xl font-bold">
                                                {{ $totalUsuarios }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="w-full md:w-1/3 px-6 mb-4 md:mb-0 ">
                                <a href="{{ route('clientes.index') }}" class="card-link">
                                    <div
                                        class="bg-white bg-card color-left-usuario shadow-lg  bg-secondary p-4 rounded-lg shadow-md text-center flex items-center space-evenly">
                                        <div
                                            class="bg-primary-foreground w-12 h-12 rounded-full flex items-center justify-center mr-4">
                                            <img aria-hidden="true" alt="credit-card"
                                                src="{{ asset('cliente/iconos/icons-clientes.png') }}" />
                                        </div>
                                        <div>
                                            <h2 class="text-secondary-foreground font-bold">Total Clientes</h2>
                                            <p class="text-secondary-foreground text-2xl font-bold">
                                                {{ $totalClientes }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="w-full md:w-1/3 px-6 mb-4 md:mb-0 ">
                                <a href="{{ route('videos.index') }}" class="card-link">
                                    <div
                                        class="bg-white bg-card color-left-video shadow-lg  bg-secondary p-4 rounded-lg shadow-md text-center flex items-center space-evenly">
                                        <div
                                            class="bg-primary-foreground w-12 h-12 rounded-full flex items-center justify-center mr-4">
                                            <img aria-hidden="true" alt="credit-card"
                                                src="{{ asset('cliente/iconos/icons-videos.png') }}" />
                                        </div>
                                        <div>
                                            <h2 class="text-secondary-foreground font-bold">Total Videos</h2>
                                            <p class="text-secondary-foreground text-2xl font-bold">
                                                {{ $totalVideos }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="w-full md:w-1/3 px-6 mb-4 md:mb-0 ">
                                <a href="{{ route('archivos.index') }}" class="card-link">
                                    <div
                                        class="bg-white bg-card color-left-documento shadow-lg  bg-secondary p-4 rounded-lg shadow-md text-center flex items-center space-evenly">
                                        <div
                                            class="bg-primary-foreground w-12 h-12 rounded-full flex items-center justify-center mr-4">
                                            <img aria-hidden="true" alt="credit-card"
                                                src="{{ asset('cliente/iconos/icons-documentos.png') }}" />
                                        </div>
                                        <div>
                                            <h2 class="text-secondary-foreground font-bold">Total Documentos</h2>
                                            <p class="text-secondary-foreground text-2xl font-bold">
                                                {{ $totalDocumentos }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="px-6 text-gray-900">
                        <div class="flex flex-wrap -mx-3 flex-inputs" style="align-items: center">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <div
                                    class="bg-white bg-card shadow-lg  bg-secondary p-4 rounded-lg shadow-md text-center flex items-center space-evenly">
                                    <canvas id="clientesChart" width="400" height="200"></canvas>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <div
                                    class="bg-white bg-card shadow-lg  bg-secondary p-4 rounded-lg shadow-md text-center flex items-center space-evenly">
                                    <canvas id="proximosPagarChart" width="400" height="400"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

</x-app-layout>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-chart-3d"></script>

<script>
    function createGradient(ctx, colorStart, colorEnd) {
        const gradient = ctx.createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, colorStart);
        gradient.addColorStop(1, colorEnd);
        return gradient;
    }

    var ctx1 = document.getElementById('clientesChart').getContext('2d');

    var gradientDeuda = createGradient(ctx1, 'rgba(255, 0, 0, 0.5)', 'rgba(255,  0, 0, 1)');
    var gradientNormal = createGradient(ctx1, 'rgba(30, 191, 12, 0.5)', 'rgba(30, 191, 12, 1)');
    var gradientPagar = createGradient(ctx1, 'rgba(255, 165, 0, 0.5)', 'rgba(255, 165, 0, 1)');


    var clientesChart = new Chart(ctx1, {
        type: 'pie', // Cambiado a 'pie' para gráfico circular
        data: {
            labels: ['Deuda', 'Normal', 'Pagar'],
            datasets: [{
                label: 'Clientes',
                data: [
                    {{ $estadisticas['deuda'] }},
                    {{ $estadisticas['normal'] }},
                    {{ $estadisticas['pagar'] }}
                ],
                backgroundColor: [
                    gradientDeuda,
                    gradientNormal,
                    gradientPagar
                ],
                borderColor: [
                    'rgba(255, 0, 0, 1)',
                    'rgba(30, 191, 12, 1)',
                    'rgba(255, 165, 0, 1)'
                ],
                borderWidth: 1,
                hoverBorderWidth: 4,
                hoverBorderColor: 'rgba(0, 0, 0, 0.4)'
            }]
        },
        options: {
            responsive: true,
            plugins: {
                datalabels: {
                    color: 'white',
                    font: {
                        weight: 'bold',
                        size: 16
                    },
                    formatter: (value, ctx) => {
                        return ctx.chart.data.labels[ctx.dataIndex];
                    }
                },
                legend: {
                    position: 'top',
                    labels: {
                        font: {
                            size: 16,
                            weight: 'bold'
                        },
                        color: 'black'
                    }
                },
                tooltip: {
                    backgroundColor: 'rgba(0, 0, 0, 0.5)',
                    titleFont: {
                        size: 16,
                        weight: 'bold'
                    },
                    bodyFont: {
                        size: 16
                    },
                    callbacks: {
                        label: function(context) {
                            var label = context.label || '';
                            if (label) {
                                label += ': ';
                            }
                            label += context.raw;

                            // Información adicional que quieres mostrar
                            var additionalInfo = '';
                            if (context.label === 'Deuda') {
                                additionalInfo = ' (Clientes en deuda)';
                            } else if (context.label === 'Normal') {
                                additionalInfo = ' (Clientes normales)';
                            } else if (context.label === 'Pagar') {
                                additionalInfo = ' (Clientes que pagan)';
                            }

                            return label + additionalInfo;
                        }
                    }
                },
                title: {
                    display: true,
                    text: 'Distribución de Clientes por Estado',
                    font: {
                        size: 22,
                        weight: 'bold'
                    },
                    padding: {
                        top: 15,
                        bottom: 15
                    },
                    color: 'black'
                },
                chart3d: {
                    depth: 50,
                    angle: 45,
                    zScale: 0.5
                }
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    });


    var ctx = document.getElementById('proximosPagarChart').getContext('2d');
    var proximosAPagar = @json($proximosAPagar);

    var labels = proximosAPagar.map(cliente => cliente.fecha_fin);
    var data = proximosAPagar.map(cliente => {
        switch (cliente.estado) {
            case 'deuda':
                return 1;
            case 'pagar':
                return 2;
            default:
                return 0;
        }
    });

    var nombres = proximosAPagar.map(cliente => cliente.razon_social);
    var tipo = proximosAPagar.map(cliente => cliente.service);

    function getRandomColor() {
        var letters = '0123456789ABCDEF';
        var color = '#';
        for (var i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }

    var backgroundColors = proximosAPagar.map(() => getRandomColor());
    var borderColors = backgroundColors;

    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Estados de Clientes',
                data: data,
                backgroundColor: backgroundColors,
                borderColor: borderColors,
                borderWidth: 1,
                fill: false,
                tension: 0.1
            }]
        },
        options: {
            plugins: {
                tooltip: {
                    backgroundColor: 'rgba(0, 0, 0, 0.5)',
                    titleFont: {
                        size: 16,
                        weight: 'bold'
                    },
                    bodyFont: {
                        size: 16
                    },
                    callbacks: {
                        label: function(context) {
                            var fecha = context.label;
                            var estado = context.raw;
                            var nombre = nombres[context.dataIndex];
                            var servicio = tipo[context.dataIndex];
                            var estadoTexto = '';
                            switch (estado) {
                                case 1:
                                    estadoTexto = 'Deuda';
                                    break;
                                case 2:
                                    estadoTexto = 'Pagar';
                                    break;
                                default:
                                    estadoTexto = 'Desconocido';
                                    break;
                            }
                            return `Nombre: ${nombre}\nServicio: ${servicio}`;
                        }
                    }
                },
                title: {
                    display: true,
                    text: 'Proximas Fechas a Pagar',
                    font: {
                        size: 22,
                        weight: 'bold'
                    },
                    padding: {
                        top: 15,
                        bottom: 15
                    },
                    color: 'black'
                },
                legend: {
                    position: 'top',
                    labels: {
                        font: {
                            size: 16,
                            weight: 'bold'
                        },
                        color: 'black'
                    }
                }
            },
            scales: {
                x: {
                    //type: 'time',
                    time: {
                        unit: 'day',
                        tooltipFormat: 'll'
                    },
                    title: {
                        display: true,
                        text: 'Fecha de Pago',
                        font: {
                            size: 18,
                            weight: 'bold'
                        },
                        color: 'black'
                    }
                },
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Estado del Cliente',
                        font: {
                            size: 18,
                            weight: 'bold'
                        },
                        color: 'black'
                    },
                    ticks: {
                        font: {
                            weight: 'bold',
                            size: 12
                        },
                        color: 'black',
                        callback: function(value, index, values) {

                            switch (value) {
                                case 1:
                                    return 'Deuda';
                                case 2:
                                    return 'Pagar';
                                default:
                                    return;
                            }
                        }
                    }
                }
            }
        }
    });
</script>
