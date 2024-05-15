<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rules;

class UsuariosController extends Controller
{
    // mostrar la vista del index, osea listado de usuarios
    public function index()
    {
        $usuarios = User::all();
        return view('user.index', compact('usuarios'));
    }

    // mostrar la vista del create, osea pagina donde estara el formulario
    public function create()
    {
        return view('user.create');
    }

    // metodo que servira para guardar informacion del usuario al dar click en crear o registrar
    // este no tendra una vista porque servira para guardar la data
    public function save(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect(route('usuarios.index'));
    }

    // mostrar la vista del edit, osea pagina donde editaras el usuario
    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    // metodo que servira para actualizar informacion del usuario al dar click en crear o registrar
    // este no tendra una vista porque servira para editar la data
    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['nullable', 'required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect(route('usuarios.index'));
    }

     // metodo para eliminar el usuario
     public function destroy(User $user)
     {
        return "se elimino correctamente";
     }
}
