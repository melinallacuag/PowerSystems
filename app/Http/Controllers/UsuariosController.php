<?php

namespace App\Http\Controllers;

use App\Models\User;

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
    public function save()
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);

        // $user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);

        return redirect(route('usuarios.index'));
    }

    // mostrar la vista del edit, osea pagina donde editaras el usuario
    public function edit()
    {
        return view('user.edit');
    }

    // metodo que servira para actualizar informacion del usuario al dar click en crear o registrar
    // este no tendra una vista porque servira para editar la data
    public function update()
    {
        return "se edito la informacion correctamente";
    }

     // metodo para eliminar el usuario
     public function destroy()
     {
        return "se elimino correctamente";
     }
}
