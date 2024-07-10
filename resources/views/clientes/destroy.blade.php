<x-app-layout>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" flex items-center p-4 text-gray-900" style="gap: 0.5rem; margin-left:0.5rem;">
                    <p class="font-semibold text-sm text-green-600 leading-tight">
                        <a href="{{ route('clientes.index') }}">Clientes</a>
                    </p>
                    <p class="text-sm text-gray-500 leading-tight">
                        > Eliminar cliente
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('clientes.destroy', ['clientes' => $clientes]) }}">
                        @csrf
                        @method('DELETE')

                        <div class="text-sm font-medium text-gray-900">¿Está seguro de que desea eliminar al cliente <strong class="text-red-600">{{ $clientes->ruc }} {{ $clientes->razon_social }}</strong>  ? </div>

                        <div  class="flex items-center justify-end -mx-3 mb-12">

                            <!-- Boton Eliminar Usuario -->
                            <div class="md:w-2/3 px-3 mb-4 md:mb-0">
                                <x-danger-button class="btn-register w-full text-center btn-large">
                                    <span class="w-full">ELIMINAR</span>
                                </x-danger-button>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
