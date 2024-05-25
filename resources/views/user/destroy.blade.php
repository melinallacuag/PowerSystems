<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Eliminar usuario
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('usuarios.destroy', ['user' => $user]) }}">
                        @csrf
                        @method('DELETE')
                        <!-- este formulario es como un html normal puedes modificar el diseño  -->

                       <p>Desea eliminar?</p>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                Aceptar
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
