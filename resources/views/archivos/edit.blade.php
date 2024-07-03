<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" flex items-center p-4 text-gray-900" style="gap: 0.5rem; margin-left:0.5rem;">
                    <p class="font-semibold text-sm text-green-600 leading-tight">
                        <a href="{{ route('archivos.index') }}">Documentos</a>
                    </p>
                    <p class="text-sm text-gray-500 leading-tight">
                        > Editar Documentos
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('archivos.update', ['documento' => $documento->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!-- Alertas de Documentos -->
                        <div class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label :value="__(' ')" id="alert-area" class="font-semibold text-red-600" />
                            </div>
                        </div>
                        <!-- Datos del los Documentos  -->
                        <div class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Datos de los Documentos: ')" class="font-semibold text-green-600" />
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12">
                           <!-- Nombre del Video -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Nombre del Documento  *')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$documento->name" autofocus/>
                            </div>
                             <!-- Categoria del Documento -->
                             <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="category_id" :value="__('Categoria del Documento *')" />
                                <select id="category_id" name="category_id" class="block mt-1 w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm">
                                    <option value="" disabled>Seleccionar Categoria del Documento</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ $documento->category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Subir Documento -->
                        <div class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="documento" :value="__('Subir Documento *')" />
                                <input id="documento" class="block mt-1 w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm" type="file" name="documento" accept=".pdf,.doc,.docx" />
                            </div>
                        </div>
                         <!-- Documento Actual -->
                         @if($documento->documento)
                         <div class="flex flex-wrap -mx-3 mb-12">
                             <div class="w-full md:w-1/2 mb-4 md:mb-0">
                                 <x-input-label for="current_documento" :value="__('Documento Actual')" />
                                 <a href="{{ asset('storage/' . $documento->documento) }}" target="_blank" class="block mt-1 w-full text-green-500">
                                    Click para ver documento
                                 </a>
                                 <input type="checkbox" id="remove_documento" name="remove_documento" class="mr-2 mt-2">
                                 <label for="remove_documento">Eliminar documento actual</label>
                             </div>
                         </div>
                        @endif
                        <div  class="flex flex-wrap -mx-3 mb-12">
                            <!-- Boton Editar Documento -->
                            <div class="w-full md:w-2/3 px-3 mb-4 md:mb-0">
                                <x-primary-button class="btn-register w-full text-center btn-large">
                                    <span class="w-full">EDITAR</span>
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

    document.addEventListener('DOMContentLoaded', function () {

    let inputContinueRegister = document.querySelector('#continue-register');
    let btnRegister = document.querySelectorAll('.btn-register');

        btnRegister.forEach(btn => {
            btn.addEventListener('click', function (e) {

                const alertArea = document.getElementById('alert-area');
                const name = document.getElementById('name').value.trim();
                const category_id = document.getElementById('category_id').value.trim();
                const documento = document.getElementById('documento').value.trim();
                const removeDocumentoCheckbox = document.getElementById('remove_documento');

                let isValid = true;
                let errorMessages = [];

                if(name === ''){
                    isValid = false;
                    errorMessages.push('* El campo nombre del documento es obligatorio.');
                }else if(category_id === ''){
                    isValid = false;
                    errorMessages.push('* Seleccionar categoría.');
                }else if (documento !== '' && !removeDocumentoCheckbox.checked) {
                    isValid = false;
                    errorMessages.push('* Debe seleccionar eliminar el documento actual si se va a subir uno nuevo.');
                }else if (removeDocumentoCheckbox && removeDocumentoCheckbox.checked && documento === '') {
                    isValid = false;
                    errorMessages.push('* Debe seleccionar un nuevo documento para subir si el video actual va a ser eliminado.');
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
