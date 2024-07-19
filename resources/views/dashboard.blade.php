<style>
    .color-border-botton-normal{
        border-bottom: 10px solid #1ebf0c;
    }

    .color-border-botton-pagar{
        border-bottom: 10px solid orange;
    }

    .color-border-botton-deuda{
        border-bottom: 10px solid red;
    }

    .color-button-video{
        border-bottom: 10px solid blueviolet;
    }

    .color-button-document{
        border-bottom: 10px solid rgb(25, 57, 212);
    }

    .border-radius-20{
        border-radius: 20px;
    }

    .button-estados-normal{
        background: #1ebf0c;
    color: wheat;
    font-weight: 700;
    padding: 10px;
    width: 90%;
    }

    .button-estados-deuda{
        background: red;
    color: wheat;
    font-weight: 700;
    padding: 10px;
    width: 90%;
    }

    .button-estados-pagar{
        background: orange;
    color: wheat;
    font-weight: 700;
    padding: 10px;
    width: 90%;
    }
    .align-text-fecha{
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

    .content-avatar{
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
    .text-color-irvideo{
        color: blueviolet;
    }

    .text-color-irdocument{
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

    .margin-rigth{
        margin-right: 0.75rem;
    }
</style>

<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex items-center p-4 text-gray-900">
                    <p class="font-semibold text-sm text-gray-900 leading-tight">
                        ¡ Bienvenido, <span class="text-green-600 font-bold">{{ Auth::user()->name }} !</span> Nos alegra tenerte de vuelta en <span class="font-bold text-green-600">Power Group System</span>.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 text-gray-900">
                        <div class="flex flex-wrap -mx-3 flex-inputs" style="align-items: center">
                            @if ($cliente)
                            <div class="w-full md:w-1/3 px-3 mb-2 md:mb-0">
                                <div class="bg-white bg-card text-card-foreground shadow-lg color-border-botton-{{ $cliente->estado }} border-radius-20">
                                    <div class="card-background">
                                    </div>
                                    <div class="card-content flex flex-col items-center p-6">
                                        <div class="w-90 h-90 bg-white user-avatar shadow-lgs content-avatar mb-4">
                                            <img class="w-70 h-70 rounded-full" src="{{ $cliente->avatar }}" alt="User Avatar">
                                        </div>
                                      <h2 class="text-xls font-bold mb-2 text-center text-black">{{ $cliente->razon_social }}</h2>
                                      <p class="text-xl mb-4 font-bold text-gray-600">{{ $cliente->ruc }}</p>
                                      <div class="flex space-evenly w-full mb-4">
                                        <div class="text-center align-text-fecha">
                                          <p class="text-x2 font-bold mb-1 text-green-600">{{ $cliente->fecha_inicio_dia }}</p>
                                          <p class="text-xl font-bold mb-4 text-gray-800 ">{{ $cliente->fecha_inicio_mes }} del <br> {{ $cliente->fecha_inicio_ano }}</p>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="text-center align-text-fecha">
                                            <p class="text-x2 font-bold mb-1 text-green-600">{{ $cliente->fecha_fin_dia }}</p>
                                          <p class="text-xl font-bold mb-4 text-gray-800 ">{{ $cliente->fecha_fin_mes }} del <br> {{ $cliente->fecha_fin_ano }}</p>
                                        </div>
                                      </div>
                                      <p class="text-xsls mb-4 font-bold text-center text-black uppercase">{{ $cliente->service->name }}</p>
                                      <p class="rounded-full button-estados-{{ $cliente->estado }} font-bold text-white text-center uppercase ">{{ $cliente->estado }}</p>
                                    </div>
                                  </div>
                            </div>
                            @else
                            <div class="w-full md:w-1/3 px-3 mb-2 md:mb-0">
                                <div class="bg-white bg-card text-card-foreground shadow-lg color-border-botton border-radius-20">
                                    <p class="text-xl mb-4 font-bold text-gray-600">No se encontró información de clientes con el RUC asociado.</p>
                                </div>
                            </div>
                            @endif

                            <div class="w-full md:w-1/3 px-6 mb-2 md:mb-0">
                                <a href="{{route('tutoriales')}}"  class="card-link">
                                <div class="bg-white bg-card text-card-foreground shadow-lg color-button-video border-radius-20">
                                    <div class="image-container-video">
                                        <img class="image" style="margin-left: 2rem;" src="{{ asset('cliente/img/avatar/avatar_video.png') }}" alt="Videos Illustration">
                                    </div>
                                    <p class="text-xls font-bold mb-2 text-center text-black mb-4 "></p>
                                    <div class="flex flex-col items-center p-6">
                                        <p class="text-xls font-bold text-center mb-2 text-color-irvideo ">Ir a ver</p>
                                        <hr class="styled-hr-video">
                                        <p class="text-x2s font-bold text-center text-black mb-6 ">Videos</p>
                                    </div>
                                  </div>
                                </a>
                            </div>

                            <div class="w-full md:w-1/3 px-6 mb-2 md:mb-0 mb-8">
                                <a href="{{route('documentos')}}" class="card-link">
                                <div class="bg-white bg-card text-card-foreground shadow-lg color-button-document border-radius-20">
                                    <div class="image-container-document">
                                        <img class="image" src="{{ asset('cliente/img/avatar/avatar_document.png') }}" alt="Documentos Illustration">
                                    </div>
                                    <p class="text-xls font-bold mb-2 text-center text-black mb-4 "></p>
                                    <div class="flex flex-col items-center p-6">
                                        <p class="text-xls font-bold text-center mb-2 text-color-irdocument ">Ir a ver</p>
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
                        <p class="text-black font-bold margin-rigth">Contactanos al numero : </p>
                        <p class="text-green-600 font-bold"> (+51) 901 716 475</p>
                        <div class="divider-datos"></div>
                        <p class=" text-black font-bold margin-rigth">Siguenos en nuestras redes :</p>
                        <ul class="header-social_box" style="display: flex;gap: 0.25rem;">
                            <li><a target="_blank"
                                            href="https://www.facebook.com/profile.php?id=100092632664470&sfnsn=wa&mibextid=RUbZ1f"><img
                                                src="{{ asset('cliente/img/icons/facebook.webp') }}" width="30px"
                                                alt="Sistema para Estaciones de Servicios | Power Group System | facebook"></a></li>
                            <li><a target="_blank" href="https://www.facebook.com/"><img
                                                src="{{ asset('cliente/img/icons/twitter.webp') }}" width="30px"
                                                alt="Sistema para Estaciones de Servicios | Power Group System | twitter"></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/"><img
                                                src="{{ asset('cliente/img/icons/linkedin.webp') }}" width="30px"
                                                alt="Sistema para Estaciones de Servicios | Power Group System | linkedin"></a></li>
                            <li><a target="_blank" href="https://instagram.com/"><img
                                                src="{{ asset('cliente/img/icons/instagram.webp') }}" width="30px"
                                                alt="Sistema para Estaciones de Servicios | Power Group System | instagram"></a></li>
                        </ul>
                </div>
            </div>
        </div>


    </div>
</x-app-layout>
