<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" flex items-center p-4 text-gray-900" style="gap: 0.5rem; margin-left:0.5rem;">
                    <p class="font-semibold text-sm text-green-600 leading-tight">
                        <a href="{{ route('usuarios.index') }}">Usuarios</a>
                    </p>
                    <p class="text-sm text-gray-500 leading-tight">
                        > Eliminar usuario
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('usuarios.destroy', ['user' => $user]) }}">
                        @csrf
                        @method('DELETE')
                        <!-- Mensaje de alerta -->
                        <div class="text-sm font-medium text-gray-900 mb-4">¿Está seguro de que desea eliminar al usuario <strong class="text-red-600">{{ $user->dni }}  {{ $user->name }}</strong>  ? </div>

                        <div  class="flex items-center justify-end -mx-3 mb-12">
                            <!-- Boton Eliminar Usuario -->
                            <div class="md:w-2/3 px-3 mb-4 md:mb-0">
                                <x-primary-button class="btn-register w-full text-center btn-large">
                                    <span class="w-full">ELIMINAR</span>
                                </x-primary-button>
                            </div>
                            <!-- Boton Cancelar Registro -->
                            <div class="md:w-2/3 px-3 mb-4 md:mb-0 ">
                                <x-danger-button id="btnCancelar" class="w-full text-center btn-large" type="button">
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
                window.location.href = '{{ route('usuarios.index') }}';
            });
        }
     });
</script>
