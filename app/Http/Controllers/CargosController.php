<?php

namespace App\Http\Controllers;

use App\Models\Cargos;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class CargosController extends Controller
{
    const REGISTER_DISABLED = 'disabled';
    const REGISTER_ENABLED = 'enabled';

    public function index(Request $request)
    {

        $search = $request->input('search');

        $cargos = Cargos::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%");
        })->orderBy('created_at', 'desc')->paginate(5);

        return view('cargos.index',compact('cargos', 'search'));
    }

    public function create()
    {
        return view('cargos.create');
    }

    public function save(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:50',
        ]);


        $cargos = new Cargos();

        $cargos->name = $request->name;

        $cargos->save();

        if ($request->input('continue_register') == self::REGISTER_ENABLED) {
            return redirect(route('cargos.create'))->with('message', 'Se registro correctamente.');
        }

        return redirect(route('cargos.index'))->with('message', 'Se registro correctamente.');
    }

    public function edit(Cargos $cargos)
    {
        return view('cargos.edit', compact('cargos'));
    }

    public function update(Request $request, Cargos $cargos)
    {
        $request->validate([
            'name' => 'required|string|max:50',
        ]);


        $cargos->name = $request->name;
        $cargos->save();

        return redirect(route('cargos.index'))->with('message', 'Se actualizo correctamente.');
    }

    public function delete(Cargos $cargos)
    {
        return view('cargos.destroy', compact('cargos'));
    }


     public function destroy(Cargos $cargos)
     {

        if ($cargos->users()->exists()) {
            return redirect(route('cargos.index'))->withErrors(['error' => 'No se puede eliminar el cargo porque está asociado a uno o más usuarios.']);
        }

        $cargos->delete();

        return redirect(route('cargos.index'))->with('message', 'Se elimino correctamente.');
     }
}
