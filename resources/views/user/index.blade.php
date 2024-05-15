<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Usuarios
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('usuarios.create') }}">Crear usuario</a>
                    <table>
                        <tr>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>role</th>
                        </tr>
                        @foreach($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->name }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td><a href="{{ route('usuarios.edit', ['user' => $usuario]) }}">editar</a></td>
                                <td><a href="{{ route('usuarios.destroy', ['user' => $usuario]) }}">eliminar</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
