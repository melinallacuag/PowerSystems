<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cargos;
use App\Models\Clientes;
use App\Models\Documento;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Auth;

class UsuariosController extends Controller
{
    const REGISTER_DISABLED = 'disabled';
    const REGISTER_ENABLED = 'enabled';

    public function index(Request $request)
    {
        $search = $request->input('search');

        $usuarios = User::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%")
                        ->orWhere('rol', 'like', "%{$search}%");
        })->orderBy('created_at', 'desc')->paginate(5);

        return view('user.index', compact('usuarios', 'search'));
    }

    public function buscarCliente(Request $request)
    {
        $request->validate([
            'ruc' => 'required|string|max:11',
        ]);

        $clientes = Clientes::where('ruc', $request->ruc)->first();

        if ($clientes) {
            return response()->json([
                'success' => true,
                'clientes' => $clientes,
            ]);
        }

        $usuario = User::where('ruc', $request->ruc)->first();

        if ($usuario) {
            return response()->json([
                'success' => true,
                'usuario' => $usuario,
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Clientes no encontrado.',
        ]);
    }



    public function create()
    {
        $cargos = Cargos::all();
        return view('user.create' , compact('cargos'));
    }

    public function save(Request $request)
    {
        $request->validate([

            'name' => ['required', 'string', 'max:255'],
            'dni' => ['required', 'string', 'max:8'],
            'ruc' => ['required', 'string', 'max:11'],
            'razon_social' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'max:180'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'cargos_id'  => 'required|string',

        ]);

        $user = new User();

        $user->name = $request->name;
        $user->dni = $request->dni;
        $user->ruc = $request->ruc;
        $user->razon_social = $request->razon_social;
        $user->rol = $request->role;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->cargos_id = $request->cargos_id;

        $user->save();

        if ($request->input('continue_register') == self::REGISTER_ENABLED) {
            return redirect(route('usuarios.create'))->with('message', 'Se registro correctamente.');
        }

        return redirect(route('usuarios.index'))->with('message', 'Se registro correctamente.');
    }

    public function vista(User $user)
    {
        return view('user.vista', compact('user'));
    }

    public function edit(User $user)
    {
        $cargos = Cargos::all();
        return view('user.edit', compact('user', 'cargos'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'         => ['required', 'string', 'max:255'],
            'dni'          => ['required', 'string', 'max:8'],
            'ruc'          => ['required', 'string', 'max:11'],
            'razon_social' => ['required', 'string', 'max:255'],
            'role'         => ['required', 'string', 'max:180'],
            'email'        => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique('users')->ignore($user->id),],
            'cargos_id'    => 'required|string',
        ]);

        $user->name = $request->name;
        $user->dni = $request->dni;
        $user->ruc = $request->ruc;
        $user->razon_social = $request->razon_social;
        $user->rol = $request->role;
        $user->email = $request->email;
        $user->cargos_id = $request->cargos_id;

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
