<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Usuarios
        </h2>
        <a href="{{ route('usuarios.create') }}">Crear usuario</a>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
            </tr>
            @foreach($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->email }}</td>
                </tr>
            @endforeach
        </table>
    </x-slot>
</x-app-layout>
