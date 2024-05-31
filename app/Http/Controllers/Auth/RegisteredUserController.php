<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // $request->validate([
        //    'name' => ['required', 'string', 'max:255'],
        //    'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        //    'password' => ['required', 'confirmed', Rules\Password::defaults()],
        //]);

        //$user = User::create([
        //    'name' => $request->name,
        //    'email' => $request->email,
        //    'password' => Hash::make($request->password),
        //]);

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


        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
