<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" flex items-center p-4 text-gray-900" style="gap: 0.5rem; margin-left:0.5rem;">
                    <p class="font-semibold text-sm text-green-600 leading-tight">
                        <a href="{{ route('videos.index') }}">Videos</a>
                    </p>
                    <p class="text-sm text-gray-500 leading-tight">
                        > Crear nuevo video
                    </p>
                </div>
            </div>
        </div>
    </div>
    @if (session('message'))
        <div class="notification fixed  hidden" id="notification">
            {{ session('message') }}
        </div>
    @endif
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('videos.save') }}" class="w-full max-w-lg"  enctype="multipart/form-data">
                        @csrf
                        <!-- Alertas de Categoria -->
                        <div class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label :value="__(' ')" id="alert-area" class="font-semibold text-red-600" />
                            </div>
                        </div>
                        <!-- Datos del Video -->
                        <div class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label :value="__('Datos del Video: ')" class="font-semibold text-green-600" />
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12 flex-inputs">
                            <!-- Nombre del Video -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Nombre del Video *')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" maxlength="50" name="name" :value="old('name')" placeholder="Ingresar Nombre del Video" />
                            </div>
                            <!-- Categoria del Video -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="category_id" :value="__('Categoria del Video *')" />
                                <select id="category_id" name="category_id" class="block mt-1 w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm">
                                    <option value="" disabled selected>Seleccionar Categoria del Video</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- Subir Video -->
                        <div class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="url" :value="__('Subir Video *')" />
                                <input id="url" class="block mt-1 w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm" type="file" name="url" accept="video/*"/>
                            </div>
                        </div>

                        <input type="hidden" id="continue-register" name="continue_register" value="false">
                        <div  class="flex flex-wrap -mx-3 mb-12">
                            <!-- Boton Registrar Video -->
                            <div class="w-full md:w-2/3 px-3 mb-4 md:mb-0">
                                <x-segundary-button data-continue-register="disabled" class="btn-register w-full text-center btn-large">
                                    <span class="w-full">AGREGAR</span>
                                </x-segundary-button>
                            </div>
                            <!-- Boton Seguir Registrando Video -->
                            <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                                <x-primary-button data-continue-register="enabled" class="btn-register w-full text-center btn-small" >
                                    <span class="w-full">SEGUIR REGISTRANDO</span>
                                </x-primary-button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>

    let inputContinueRegister = document.querySelector('#continue-register');
    let btnRegister = document.querySelectorAll('.btn-register');

    btnRegister.forEach(btn => {
        btn.addEventListener('click', function (e) {
            console.log(btn.getAttribute('data-continue-register'));
            if (btn.getAttribute('data-continue-register') == 'enabled') {
                inputContinueRegister.value = 'enabled';
            } else {
                inputContinueRegister.value = 'disabled';
            }
        });
    });

    document.addEventListener('DOMContentLoaded', function () {

        let inputContinueRegister = document.querySelector('#continue-register');
        let btnRegister = document.querySelectorAll('.btn-register');

        btnRegister.forEach(btn => {
            btn.addEventListener('click', function (e) {

                const alertArea = document.getElementById('alert-area');
                const name = document.getElementById('name').value.trim();
                const category_id = document.getElementById('category_id').value.trim();
                const url = document.getElementById('url').value.trim();

                let isValid = true;
                let errorMessages = [];

                if(name === ''){
                    isValid = false;
                    errorMessages.push('* El campo nombre de la categoría es obligatorio.');
                }else if(category_id === ''){
                    isValid = false;
                    errorMessages.push('* Seleccionar categoría.');
                }else if(url === ''){
                    isValid = false;
                    errorMessages.push('* Seleccionar video.');
                }

                if (!isValid) {
                    e.preventDefault();
                    alertArea.innerHTML = errorMessages.join('<br>');
                } else {
                    if (btn.getAttribute('data-continue-register') == 'enabled') {
                        inputContinueRegister.value = 'enabled';
                    } else {
                        inputContinueRegister.value = 'disabled';
                    }

                    document.getElementById('user-form').submit();
                }
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        const notification = document.getElementById('notification');
        if (notification) {
            if (notification.innerText.trim() !== '') {
                notification.classList.add('show');
                setTimeout(() => {
                    notification.classList.add('hide');
                    setTimeout(() => {
                        notification.style.display = 'none';
                    }, 300);
                }, 3000);
            }
        }
    });

</script>
