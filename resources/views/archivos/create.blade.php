<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" flex items-center p-4 text-gray-900" style="gap: 0.5rem; margin-left:0.5rem;">
                    <p class="font-semibold text-sm text-green-600 leading-tight">
                        <a href="{{ route('archivos.index') }}">Documentos</a>
                    </p>
                    <p class="text-sm text-gray-500 leading-tight">
                        > Crear nuevo documento
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
                    <form method="POST" action="{{ route('archivos.save') }}" class="w-full max-w-lg"  enctype="multipart/form-data">
                        @csrf
                        <!-- Alertas de Documentos -->
                        <div class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label :value="__(' ')" id="alert-area" class="font-semibold text-red-600" />
                            </div>
                        </div>
                         <!-- Datos del los Documentos -->
                         <div class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Datos de los Documentos: ')" class="font-semibold text-green-600" />
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12 flex-inputs">
                            <!-- Nombre del Documentos -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Nombre del Documento *')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" maxlength="50" name="name" :value="old('name')" placeholder="Ingresar Nombre del Documento" />
                            </div>
                            <!-- Categoria del Documentos -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="category_id" :value="__('Categoria del Documento *')" />
                                <select id="category_id" name="category_id" class="block mt-1 w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm" required>
                                    <option value="" disabled selected>Seleccionar Categoria del Documento</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12 flex-inputs">
                            <!-- Subir Documentos -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="documento" :value="__('Subir Documento *')" />
                                <input id="documento" class="block mt-1 w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm" type="file" name="documento" accept=".pdf,.doc,.docx"/>
                            </div>
                            <!-- Mostrat o Ocultar -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Mostrar o Ocultar Documento *')" />
                                <input type="hidden" name="is_visible" value="0">
                                <input type="checkbox" name="is_visible" id="is_visible" value="1">
                            </div>
                        </div>

                        <input type="hidden" id="continue-register" name="continue_register" value="false">

                        <div  class="flex flex-wrap -mx-3 mb-12">
                            <!-- Boton Registrar Documentos -->
                            <div class="w-full md:w-2/3 px-3 mb-4 md:mb-0">
                                <x-segundary-button data-continue-register="disabled" class="btn-register w-full text-center btn-large">
                                    <span class="w-full">AGREGAR</span>
                                </x-segundary-button>
                            </div>
                            <!-- Boton Sseguir Registrando Documentos -->
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

    document.addEventListener('DOMContentLoaded', function () {

        let inputContinueRegister = document.querySelector('#continue-register');
        let btnRegister = document.querySelectorAll('.btn-register');

        btnRegister.forEach(btn => {
            btn.addEventListener('click', function (e) {

                const alertArea = document.getElementById('alert-area');
                const name = document.getElementById('name').value.trim();
                const category_id = document.getElementById('category_id').value.trim();
                const documento = document.getElementById('documento').value.trim();

                let isValid = true;
                let errorMessages = [];

                if(name === ''){
                    isValid = false;
                    errorMessages.push('* El campo nombre del documento es obligatorio.');
                }else if(category_id === ''){
                    isValid = false;
                    errorMessages.push('* Seleccionar categoría.');
                }else if(documento === ''){
                    isValid = false;
                    errorMessages.push('* Seleccionar documentos.');
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
