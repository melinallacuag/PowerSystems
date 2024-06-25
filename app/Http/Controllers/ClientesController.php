<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Clientes;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class ClientesController extends Controller
{
    const REGISTER_DISABLED = 'disabled';
    const REGISTER_ENABLED = 'enabled';

    public function index(Request $request)
    {

        $search = $request->input('search');

        $clientes = Clientes::when($search, function ($query, $search) {
            return $query->where('razon_social', 'like', "%{$search}%");
        })->paginate(5);

        return view('clientes.index',compact('clientes', 'search'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function save(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:50',
        ]);


        $clientes = new Category();

        $clientes->name = $request->name;

        $clientes->save();

        if ($request->input('continue_register') == self::REGISTER_ENABLED) {
            return redirect(route('clientes.create'))->with('message', 'Se registro correctamente.');
        }

        return redirect(route('clientes.index'))->with('message', 'Se registro correctamente.');
    }

    public function edit(Clientes $clientes)
    {
        return view('clientes.edit', compact('clientes'));
    }

    public function update(Request $request, Category $clientes)
    {
        $request->validate([
            'name' => 'required|string|max:50',
        ]);


        $clientes->name = $request->name;
        $clientes->save();

        return redirect(route('clientes.index'))->with('message', 'Se actualizo correctamente.');
    }

    public function delete(Clientes $categclientesoria)
    {
        return view('clientes.destroy', compact('clientes'));
    }

     public function destroy(Clientes $clientes)
     {
        $clientes->delete();

        return redirect(route('clientes.index'))->with('message', 'Se elimino correctamente.');
     }
}
