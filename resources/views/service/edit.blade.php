<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" flex items-center p-4 text-gray-900" style="gap: 0.5rem; margin-left:0.5rem;">
                    <p class="font-semibold text-sm text-green-600 leading-tight">
                        <a href="{{ route('service.index') }}">Servicios</a>
                    </p>
                    <p class="text-sm text-gray-500 leading-tight">
                        > Editar servicio
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('service.update', ['service' => $service->id]) }}">
                        @csrf
                        @method('PUT')
                        <!-- Alertas de Service -->
                        <div class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label :value="__(' ')" id="alert-area" class="font-semibold text-red-600" />
                            </div>
                        </div>
                        <!-- Actualizar Service  -->
                        <div class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Actualizar servicio: ')" class="font-semibold text-green-600" />
                            </div>
                        </div>
                        <!-- Nombre de la Categoria -->
                        <div class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Nombre del Servicio  *')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$service->name" autofocus/>
                            </div>
                        </div>
                        <!-- Boton Editar Categoria -->
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
                window.location.href = '{{ route('service.index') }}';
            });
        }

        let inputContinueRegister = document.querySelector('#continue-register');
        let btnRegister = document.querySelectorAll('.btn-register');

        btnRegister.forEach(btn => {
            btn.addEventListener('click', function (e) {

                const alertArea = document.getElementById('alert-area');
                const name = document.getElementById('name').value.trim();

                let isValid = true;
                let errorMessages = [];

                if(name === ''){
                    isValid = false;
                    errorMessages.push('* El campo nombre del servicio es obligatorio.');
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
