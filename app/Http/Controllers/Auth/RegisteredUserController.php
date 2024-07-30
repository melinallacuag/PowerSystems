<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Cargos;
use App\Models\Clientes;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $cargos = Cargos::all(); // Obtén todos los cargos
        return view('auth.register', compact('cargos'));
    }

    public function buscarCliente(Request $request)
    {
        $request->validate([
            'ruc' => 'required|string|max:11',
        ]);

        $usuario = User::where('ruc', $request->ruc)->first();

        if ($usuario) {
            return response()->json([
                'success' => true,
                'usuario' => $usuario,
            ]);
        }

        $clientes = Clientes::where('ruc', $request->ruc)->first();

        if ($clientes) {
            return response()->json([
                'success' => true,
                'clientes' => $clientes,
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Usuario no encontrado.',
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        $request->validate([

            'name'         => ['required', 'string', 'max:255'],
            'dni'          => ['required', 'string', 'max:8'],
            'ruc'          => ['required', 'string', 'max:11'],
            'razon_social' => ['required', 'string', 'max:255'],
            'role'         => ['required', 'string', 'max:180'],
            'email'        => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password'     => ['required', 'confirmed', Rules\Password::defaults()],
            'cargos_id'    => ['required', 'string', 'max:180'],

        ]);

        if (User::where('email', $request->email)->exists()) {
            return redirect()->back()->withErrors(['email' => 'El correo electrónico ya está registrado.']);
        }

        $user = new User();

        $user->name           = $request->name;
        $user->dni            = $request->dni;
        $user->ruc            = $request->ruc;
        $user->razon_social   = $request->razon_social;
        $user->rol            = $request->role;
        $user->email          = $request->email;
        $user->password       = Hash::make($request->password);
        $user->cargos_id      = $request->cargos_id;
        $user->save();


        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
