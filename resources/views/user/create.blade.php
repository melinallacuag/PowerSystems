<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Crear nuevo usuario
        </h2>
    </x-slot>
{{--
    @if (session('nessage'))
        <div class="container">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('nessage') }}.</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @php
                        // dump($errors);
                    @endphp
                    <form method="POST" action="{{ route('usuarios.save') }}" class="w-full max-w-lg">
                        @csrf

                         <!-- Nombre -->
                        <div class="flex flex-wrap -mx-3 mb-12">

                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <x-input-label for="name" :value="__('Nombre')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Ingresar Nombre" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">

                            <!-- RUC -->
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <x-input-label for="ruc" :value="__('RUC')" />
                                <x-text-input id="ruc" class="block mt-1 w-full" type="number" maxlength="11" oninput="limitDigits(this, 11)"  name="ruc" :value="old('ruc')" required autocomplete="ruc" placeholder="Ingresar RUC" />
                                <x-input-error :messages="$errors->get('ruc')" class="mt-2" />
                            </div>

                            <!-- Razón Social -->
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <x-input-label for="razon_social" :value="__('Razón Social')" />
                                <x-text-input id="razon_social" class="block mt-1 w-full" type="text" name="razon_social" :value="old('razon_social')" required autofocus autocomplete="name" placeholder="Ingresar Razón Social" />
                                <x-input-error :messages="$errors->get('razon_social')" class="mt-2" />
                            </div>

                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">

                            <!-- Cargo -->
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <x-input-label for="cargo" :value="__('Cargo')" />
                                <x-text-input id="cargo" class="block mt-1 w-full" type="text" name="cargo" :value="old('cargo')" required autofocus autocomplete="name" placeholder="Ingresar Cargo"/>
                                <x-input-error :messages="$errors->get('cargo')" class="mt-2" />
                            </div>

                            <!-- Rol -->
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <x-input-label for="role" :value="__('Rol')" />
                                <select id="role" name="role" :value="old('role')"class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                                    <option value="" disabled selected>Seleccione un Rol</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                                <x-input-error :messages="$errors->get('role')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-12">

                            <!-- Usuario -->
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <x-input-label for="email" :value="__('Usuario')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username"  placeholder="Ingresar Usuario"/>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                <span class="txt-mensaje">  *Ejemplo de usuario: ejemplo@gmail.com </span>
                            </div>

                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">

                            <!-- Contraseña -->
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <x-input-label for="password" :value="__('Contraseña')" />
                                <x-text-input id="password" class="block mt-1 w-full"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" placeholder="Ingresar Contraseña"/>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Confirmar Contraseña -->
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" />

                                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                                type="password"
                                                name="password_confirmation" required autocomplete="new-password"  placeholder="Confirmar Contraseña"/>

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                        </div>

                        <div class="mt-4">
                            <x-primary-button class="w-full text-center" style="background-color: #009800">
                                <span class="w-full ">AGREGAR</span>
                            </x-primary-button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function limitDigits(element, maxDigits) {
        if (element.value.length > maxDigits) {
            element.value = element.value.slice(0, maxDigits);
        }
    }
</script>
