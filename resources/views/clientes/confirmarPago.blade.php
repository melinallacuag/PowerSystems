<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" flex items-center p-4 text-gray-900" style="gap: 0.5rem; margin-left:0.5rem;">
                    <p class="font-semibold text-sm text-green-600 leading-tight">
                        <a href="{{ route('clientes.index') }}">Cliente</a>
                    </p>
                    <p class="text-sm text-gray-500 leading-tight">
                        > Confirmar Pago y Actualizar Fecha de contrato
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
                    <form method="POST" action="{{ route('clientes.confirmarPago', ['clientes' => $clientes]) }}" id="user-form" >
                        @csrf
                        <!-- Alertas del Cliente -->
                        <div class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__(' ')" id="alert-area" class="font-semibold text-red-600" />
                            </div>
                        </div>
                        <!-- Fecha de Confirmación de Pago -->
                        <div class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Fecha de Confirmación de Pago: ')" class="font-semibold text-green-600" />
                            </div>
                        </div>

                        <?php
                            date_default_timezone_set('America/Lima');
                            $fechaHoraActual = date('d-m-Y  H:i:s');
                        ?>

                        <div class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="fecha_pago" :value="__('Fecha y Hora de Confirmación *')" />
                                <x-text-input id="fecha_pago" class="block mt-1 w-full" type="text" name="fecha_pago" :value="$fechaHoraActual" disabled/>
                            </div>
                        </div>

                         <!-- Datos del Cliente -->
                         <div class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Actualizar fecha de contrato: ')" class="font-semibold text-green-600" />
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12">
                            <!-- Fecha Inicio -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="fecha_inicio" :value="__('Fecha Inicio *')" />
                                <x-text-input id="fecha_inicio" class="block mt-1 w-full" type="date" name="fecha_inicio" :value="old('fecha_inicio', $clientes->fecha_inicio)" />
                            </div>
                            <!-- Fecha Fin -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="fecha_fin" :value="__('Fecha Fin *')" />
                                <x-text-input id="fecha_fin" class="block mt-1 w-full" type="date" name="fecha_fin" :value="old('fecha_fin', $clientes->fecha_fin)" />
                            </div>
                        </div>

                        <div  class="flex flex-wrap -mx-3 mb-12">
                            <!-- Boton Confirmar Pago -->
                            <div class="w-full md:w-2/3 px-3 mb-4 md:mb-0">
                                <x-primary-button class="btn-register w-full text-center btn-large">
                                    <span class="w-full">Confirmar</span>
                                </x-primary-button>
                            </div>
                            <!-- Boton Cancelar Registro -->
                            <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
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
    function updateFechaHora() {
        const now = new Date();
        const year = now.getFullYear();
        const month = String(now.getMonth() + 1).padStart(2, '0');
        const day = String(now.getDate()).padStart(2, '0');
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');
        const seconds = String(now.getSeconds()).padStart(2, '0');

        const formattedDateTime = `${day}-${month}-${year} ${hours}:${minutes}:${seconds}`;

        document.getElementById('fecha_pago').value = formattedDateTime;
    }

    setInterval(updateFechaHora, 1000);
    updateFechaHora();

    document.addEventListener('DOMContentLoaded', function () {

        const btnCancelar = document.getElementById('btnCancelar');
            if (btnCancelar) {
                btnCancelar.addEventListener('click', function () {
                    window.location.href = '{{ route('clientes.index') }}';
                });
            }

        let inputContinueRegister = document.querySelector('#continue-register');
        let btnRegister = document.querySelectorAll('.btn-register');
        const userForm = document.getElementById('user-form');

        btnRegister.forEach(btn => {
            btn.addEventListener('click', function (e) {

                const alertArea = document.getElementById('alert-area');
                const fecha_inicio = document.getElementById('fecha_inicio').value.trim();
                const fecha_fin = document.getElementById('fecha_fin').value.trim();

                let isValid = true;
                let errorMessages = [];

                if(fecha_inicio === ''){
                    isValid = false;
                    errorMessages.push('* El campo fecha inicio de contrata es obligatorio');
                }else if(fecha_fin === ''){
                    isValid = false;
                    errorMessages.push('* El campo fecha fin de contrata  es obligatorio');
                }

                if (!isValid) {
                    e.preventDefault();
                    alertArea.innerHTML = errorMessages.join('<br>');
                    alertArea.classList.remove('hidden');
                } else {
                    alertArea.classList.add('hidden');
                    userForm.submit();
                }
            });
        });
    });

</script>

