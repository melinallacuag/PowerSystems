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
    const REGISTER_DISABLED = 'disabled';
    const REGISTER_ENABLED = 'enabled';

    public function index(Request $request)
    {
        $search = $request->input('search');

        $usuarios = User::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%")
                        ->orWhere('ruc', 'like', "%{$search}%")
                        ->orWhere('razon_social', 'like', "%{$search}%")
                        ->orWhere('cargo', 'like', "%{$search}%")
                        ->orWhere('rol', 'like', "%{$search}%");
        })->paginate(5);

        return view('user.index', compact('usuarios', 'search'));
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

        if ($request->input('continue_register') == self::REGISTER_ENABLED) {
            return redirect(route('usuarios.create'))->with('message', 'Se registro correctamente.');
        }

        return redirect(route('usuarios.index'))->with('message', 'Se registro correctamente.');
    }

    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'         => ['required', 'string', 'max:255'],
            'ruc'          => ['required', 'string', 'max:11'],
            'razon_social' => ['required', 'string', 'max:255'],
            'cargo'        => ['required', 'string', 'max:180'],
            'role'         => ['required', 'string', 'max:180'],
            'email'        => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique('users')->ignore($user->id),],
           // 'email'        => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($user->id)],
        ]);

        // $user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);

        $user->name         = $request->name;
        $user->ruc          = $request->ruc;
        $user->razon_social = $request->razon_social;
        $user->cargo        = $request->cargo;
        $user->rol          = $request->role;
        $user->email        = $request->email;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect(route('usuarios.index'))->with('message', 'Se actualizo correctamente.');
    }

    public function delete(User $user)
    {
        return view('user.destroy', compact('user'));
    }

     public function destroy(User $user)
     {
        $user->delete();

        return redirect(route('usuarios.index'))->with('message', 'Se elimino correctamente.');
     }
}
