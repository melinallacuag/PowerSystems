<x-app-layout>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" flex items-center p-4 text-gray-900" style="gap: 0.5rem; margin-left:0.5rem;">
                    <p class="font-semibold text-sm text-green-600 leading-tight">
                        <a href="{{ route('usuarios.index') }}">Usuarios</a>
                    </p>
                    <p class="text-sm text-gray-500 leading-tight">
                        > Vista de usuario
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                        <!-- Datos del Usuario -->
                        <div class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Datos del Usuario: ')" class="font-semibold text-green-600" />
                            </div>
                        </div>
                        <!-- Nombre del Usuario-->
                        <div class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Nombre del Usuario')" />
                                <x-text-input class="block mt-1 w-full" type="text"  :value="$user->name" disabled/>
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12 flex-inputs">
                            <!-- RUC -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="ruc" :value="__('RUC')" />
                                <x-text-input class="block mt-1 w-full" type="text" :value="$user->ruc" disabled/>
                            </div>
                            <!-- Razón Social -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="razon_social" :value="__('Razón Social')" />
                                <x-text-input class="block mt-1 w-full" type="text" :value="$user->razon_social" disabled/>
                            </div>

                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12 flex-inputs">
                            <!-- Cargo -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="cargo" :value="__('Cargo')" />
                                <x-text-input class="block mt-1 w-full" type="text" :value="$user->cargo" disabled/>
                            </div>
                            <!-- Rol -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="role" :value="__('Rol')" />
                                <select class="block mt-1 w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm" disabled>
                                    <option value="" disabled>Seleccione un Rol</option>
                                    <option value="admin" {{ $user->rol === 'admin' ? 'selected' : '' }}>Admin</option>
                                    <option value="user"  {{ $user->rol === 'user' ? 'selected' : '' }}>User</option>
                                </select>
                            </div>
                        </div>
                        <!-- Credencial del Usuario -->
                        <div class="flex flex-wrap -mx-3 mb-12">
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="name" :value="__('Credencial del Usuario: ')" class="font-semibold text-green-600" />
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-12">
                            <!-- Usuario -->
                            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                                <x-input-label for="email" :value="__('Usuario')" />
                                <x-text-input class="block mt-1 w-full" type="text" :value="$user->email"/>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
