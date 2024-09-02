<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" flex items-center p-4 text-gray-900" style="gap: 0.5rem; margin-left:0.5rem;">
                    <p class="font-semibold text-sm text-green-600 leading-tight">
                        <a href="{{ route('videos.index') }}">Videos</a>
                    </p>
                    <p class="text-sm text-gray-500 leading-tight">
                        > Editar Video
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('videos.update', ['video' => $video->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!-- Alertas de Categoria -->
                        <div class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label :value="__(' ')" id="alert-area" class="font-semibold text-red-600" />
                            </div>
                        </div>
                        <!-- Datos del Video  -->
                        <div class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Datos del Video: ')" class="font-semibold text-green-600" />
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12 flex-inputs">
                           <!-- Nombre del Video -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Nombre del Video  *')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$video->name" autofocus/>
                            </div>
                             <!-- Categoria del Video -->
                             <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="category_id" :value="__('Categoria del Video *')" />
                                <select id="category_id" name="category_id" class="block mt-1 w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm">
                                    <option value="" disabled>Seleccionar Categoria del Video</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ $video->category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- Subir Video -->
                        <div class="flex flex-wrap -mx-3 mb-12 flex-inputs">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="url" :value="__('Subir Video *')" />
                                <input id="url" class="block mt-1 w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm" type="file" name="url" accept="video/*" />
                            </div>
                            <!-- Mostrat o Ocultar -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Mostrar o Ocultar Video *')" />
                                <input type="hidden" name="is_visible" value="0">
                                <input type="checkbox" name="is_visible" id="is_visible" value="1" {{ $video->is_visible ? 'checked' : '' }}>
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12 flex-inputs">
                            <!-- Video Actual -->
                                <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                    @if($video->url)
                                        <x-input-label for="current_video" :value="__('Video Actual')" />
                                        <video controls class="block mt-1 w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm" src="{{ asset('storage/' . $video->url) }}"></video>
                                    @endif
                                </div>
                                <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                    <x-input-label for="name" :value="__('Eliminar video actual *')" />
                                    <input type="checkbox" id="remove_video" name="remove_video" class="mr-2">
                                </div>
                        </div>

                        <!-- Boton Editar Usuario -->
                        <div  class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-2/3 px-3 mb-4 md:mb-0">
                                <x-primary-button class="btn-register w-full text-center btn-large">
                                    <span class="w-full">EDITAR</span>
                                </x-primary-button>
                            </div>
                            <!-- Boton Cancelar Registro -->
                            <div class="w-full md:w-2/3 px-3 mb-4 md:mb-0 ">
                                <x-danger-button id="btnCancelar" class="w-full text-center btn-small" type="button">
                                    <span class="w-full">CANCELAR</span>
                                </x-danger-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>

    document.addEventListener('DOMContentLoaded', function () {
        const btnCancelar = document.getElementById('btnCancelar');
        if (btnCancelar) {
            btnCancelar.addEventListener('click', function () {
                window.location.href = '{{ route('videos.index') }}';
            });
        }

    let inputContinueRegister = document.querySelector('#continue-register');
    let btnRegister = document.querySelectorAll('.btn-register');

        btnRegister.forEach(btn => {
            btn.addEventListener('click', function (e) {

                const alertArea = document.getElementById('alert-area');
                const name = document.getElementById('name').value.trim();
                const category_id = document.getElementById('category_id').value.trim();
                const url = document.getElementById('url').value.trim();
                const removeVideoCheckbox = document.getElementById('remove_video');

                let isValid = true;
                let errorMessages = [];

                if(name === ''){
                    isValid = false;
                    errorMessages.push('* El campo nombre del video es obligatorio.');
                }else if(category_id === ''){
                    isValid = false;
                    errorMessages.push('* Seleccionar categoría.');
                }else if (url !== '' && !removeVideoCheckbox.checked) {
                    isValid = false;
                    errorMessages.push('* Debe seleccionar eliminar el video actual si se va a subir uno nuevo.');
                }else if (removeVideoCheckbox && removeVideoCheckbox.checked && url === '') {
                    isValid = false;
                    errorMessages.push('* Debe seleccionar un nuevo video para subir si el video actual va a ser eliminado.');
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
</script>
