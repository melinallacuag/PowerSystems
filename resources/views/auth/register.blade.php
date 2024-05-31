<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Datos del Cliente -->
        <div class="flex flex-wrap -mx-3 mb-12">

            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                <x-input-label for="name" :value="__('Datos del Cliente: ')" class="font-semibold text-green-600" />
            </div>

        </div>

        <!-- Nombre -->
        <div class="flex flex-wrap -mx-3 mb-12">

            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                <x-input-label for="name" :value="__('Nombre *')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Ingresar Nombre" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-12">

            <!-- RUC -->
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                <x-input-label for="ruc" :value="__('RUC *')" />
                <x-text-input id="ruc" class="block mt-1 w-full" type="number" maxlength="11" oninput="limitDigits(this, 11)"  name="ruc" :value="old('ruc')" required autocomplete="ruc" placeholder="Ingresar RUC" />
                <x-input-error :messages="$errors->get('ruc')" class="mt-2" />
            </div>

            <!-- Razón Social -->
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                <x-input-label for="razon_social" :value="__('Razón Social *')" />
                <x-text-input id="razon_social" class="block mt-1 w-full" type="text" name="razon_social" :value="old('razon_social')" required autofocus autocomplete="name" placeholder="Ingresar Razón Social" />
                <x-input-error :messages="$errors->get('razon_social')" class="mt-2" />
            </div>

        </div>

        <div class="flex flex-wrap -mx-3 mb-12">

            <!-- Cargo -->
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                <x-input-label for="cargo" :value="__('Cargo *')" />
                <x-text-input id="cargo" class="block mt-1 w-full" type="text" name="cargo" :value="old('cargo')" required autofocus autocomplete="name" placeholder="Ingresar Cargo"/>
                <x-input-error :messages="$errors->get('cargo')" class="mt-2" />
            </div>

            <!-- Rol -->
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                <x-input-label for="role" :value="__('Rol ')" />
                <select id="role" name="role" disabled class="block mt-1 w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm" required>
                    <option value="user" selected>User</option>
                </select>
                <input type="hidden" name="role" value="user">
                <x-input-error :messages="$errors->get('role')" class="mt-2" />
            </div>
        </div>

        <!-- Credencial del Cliente -->
        <div class="flex flex-wrap -mx-3 mb-12">

            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                <x-input-label for="name" :value="__('Credencial del Cliente: ')" class="font-semibold text-green-600" />
            </div>

        </div>

        <div class="flex flex-wrap -mx-3 mb-12">

            <!-- Usuario -->
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                <x-input-label for="email" :value="__('Usuario *')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username"  placeholder="Ingresar Usuario"/>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                <span class="txt-mensaje">  *Ejemplo de usuario: usuario@ejemplo.com </span>
            </div>

        </div>

        <div class="flex flex-wrap -mx-3 mb-12">

            <!-- Contraseña -->
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                <x-input-label for="password" :value="__('Contraseña *')" />
                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" placeholder="Ingresar Contraseña"/>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirmar Contraseña -->
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña *')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password"  placeholder="Confirmar Contraseña"/>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('¿Ya tienes una cuenta? Iniciar sesión') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

<script>
     function limitDigits(element, maxDigits) {
        if (element.value.length > maxDigits) {
            element.value = element.value.slice(0, maxDigits);
        }
    }
</script>
