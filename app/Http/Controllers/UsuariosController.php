<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cargos;
use App\Models\Clientes;
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

    public function dashboard()
    {
        $user = Auth::user();
        $cliente = Clientes::where('ruc', $user->ruc)->first();

        if ($cliente) {

            $meses_espanol = [
                1 => 'Enero',
                2 => 'Febrero',
                3 => 'Marzo',
                4 => 'Abril',
                5 => 'Mayo',
                6 => 'Junio',
                7 => 'Julio',
                8 => 'Agosto',
                9 => 'Septiembre',
                10 => 'Octubre',
                11 => 'Noviembre',
                12 => 'Diciembre',
            ];

            $fechaInicio = new \DateTime($cliente->fecha_inicio);
            $fechaFin = new \DateTime($cliente->fecha_fin);

            $cliente->fecha_inicio_dia = $fechaInicio->format('d');
             $cliente->fecha_inicio_mes = $meses_espanol[$fechaInicio->format('n')];
            $cliente->fecha_inicio_ano = $fechaInicio->format('Y');

            $cliente->fecha_fin_dia = $fechaFin->format('d');
            $cliente->fecha_fin_mes = $meses_espanol[$fechaFin->format('n')];
            $cliente->fecha_fin_ano = $fechaFin->format('Y');

            switch ($cliente->estado) {
                case 'deuda':
                    $cliente->avatar = asset('cliente/img/avatar/avatar_llorando.png');
                    break;
                case 'normal':
                    $cliente->avatar = asset('cliente/img/avatar/avatar_alegre.png');
                    break;
                case 'pagar':
                    $cliente->avatar = asset('cliente/img/avatar/avatar_alterado.png');
                    break;
                default:
                    $cliente->avatar = asset('cliente/img/avatar/avatar_default.png');
                    break;
            }
        }

        return view('dashboard', compact('user', 'cliente'));
    }

    public function index(Request $request)
    {
        $search = $request->input('search');

        $usuarios = User::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%");
        })->paginate(5);

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
