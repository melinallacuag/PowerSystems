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


                </div>
            </div>
        </div>

    </div>
</x-app-layout>
