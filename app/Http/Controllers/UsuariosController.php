<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        return view('user.index', compact('usuarios'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function save(Request $request)
    {
        $request->validate([

            'name'         => ['required', 'string', 'max:255'],
            'ruc'          => ['required', 'string', 'max:11'],
            'razon_social' => ['required', 'string', 'max:255'],
            'cargo'        => ['required', 'string', 'max:180'],
            'role'          => ['required', 'string', 'max:180'],
            'email'        => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password'     => ['required', 'confirmed', Rules\Password::defaults()],

        ]);
        $user = new User();

        $user->name           = $request->name;
        $user->ruc            = $request->ruc;
        $user->razon_social   = $request->razon_social;
        $user->cargo          = $request->cargo;
        $user->rol            = $request->role;
        $user->email          = $request->email;
        $user->password       = Hash::make($request->password);

        $user->save();

        // $user = User::create([
        //     'name' => $request->name,
        //     'ruc'  => $request->ruc,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);

        return redirect(route('usuarios.index'));
    }

    // mostrar la vista del edit, osea pagina donde editaras el usuario
    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    // metodo que servira para actualizar informacion del usuario al dar click en crear o registrar
    // este no tendra una vista porque servira para editar la data
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255',
            // wicho es que tienes que entender la logica, pero vamos a la practico
                Rule::unique('users')->ignore($user->id),
            ],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($user->id)],
        ]);

        // wicho borraste la validacion :V
        //nose que hiciste tu
        // $user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);

        // aqui ya no se crea nueva instancia si no se usa la misma
        // tu boton editar? ahi tenemos que validar que si editas este usuario con el mismo email , no te valide ya que solo tiene que existir
        // ya wichos crea tus inputs de ruc, razon social, cargo y rold desde tu form, con esto ya esta el editar

        $user->name = $request->name;
        $user->ruc = $request->ruc;
        $user->razon_social = $request->razon_social;
        $user->cargo = '';// de momento pondremos un string vacio
        $user->rol = $request->role;// de momento pondremos un string vacio
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect(route('usuarios.index'));
    }

    public function delete(User $user)
    {
        return view('user.destroy', compact('user'));
    }


    // esa peticion va a llegar aqui
     public function destroy(User $user)
     {
        $user->delete();

        return redirect(route('usuarios.index'));
     }
}
