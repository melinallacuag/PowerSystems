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

                        <!-- Datos del Video  -->
                        <div class="flex flex-wrap -mx-3 mb-12">

                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Datos de los Documentos: ')" class="font-semibold text-green-600" />
                            </div>

                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12">

                           <!-- Nombre del Video -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Nombre del Documento  *')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$documento->name" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                             <!-- Categoria del Video -->
                             <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="category_id" :value="__('Categoria del Documento *')" />
                                <select id="category_id" name="category_id" class="block mt-1 w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm" required>
                                    <option value="" disabled>Seleccionar Categoria del Documento</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ $documento->category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                            </div>

                        </div>

                        <!-- Subir Documento -->
                        <div class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="documento" :value="__('Subir Documento *')" />
                                <input id="documento" class="block mt-1 w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm" type="file" name="documento" accept=".pdf,.doc,.docx" />
                                <x-input-error :messages="$errors->get('documento')" class="mt-2" />
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

                            <!-- Boton Editar Usuario -->
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
