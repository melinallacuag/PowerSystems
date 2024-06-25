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

                        <!-- Datos del Video  -->
                        <div class="flex flex-wrap -mx-3 mb-12">

                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Datos del Video: ')" class="font-semibold text-green-600" />
                            </div>

                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12">

                           <!-- Nombre del Video -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Nombre del Video  *')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$video->name" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                             <!-- Categoria del Video -->
                             <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="category_id" :value="__('Categoria del Video *')" />
                                <select id="category_id" name="category_id" class="block mt-1 w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm" required>
                                    <option value="" disabled>Seleccionar Categoria del Video</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ $video->category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                            </div>

                        </div>

                         <!-- Subir Video -->
                         <div class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="url" :value="__('Subir Video')" />
                                <input id="url" class="block mt-1 w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm" type="file" name="url" accept="video/*" />
                                <x-input-error :messages="$errors->get('url')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Video Actual -->
                        @if($video->url)
                            <div class="flex flex-wrap -mx-3 mb-12">
                                <div class="w-full  md:w-1/2 mb-4 md:mb-0">
                                    <x-input-label for="current_video" :value="__('Video Actual')" />
                                    <video controls class="block mt-1 w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm" src="{{ asset('storage/' . $video->url) }}"></video>

                                    <input type="checkbox" id="remove_video" name="remove_video" class="mr-2">
                                    <label for="remove_video">Eliminar video actual</label>
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
