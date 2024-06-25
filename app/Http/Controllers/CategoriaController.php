<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class CategoriaController extends Controller
{
    const REGISTER_DISABLED = 'disabled';
    const REGISTER_ENABLED = 'enabled';

    public function index(Request $request)
    {

        $search = $request->input('search');

        $categoria = Category::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%");
        })->paginate(5);

        return view('categoria.index',compact('categoria', 'search'));
    }

    public function create()
    {
        return view('categoria.create');
    }

    public function save(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:50',
        ]);


        $categoria = new Category();

        $categoria->name = $request->name;

        $categoria->save();

        if ($request->input('continue_register') == self::REGISTER_ENABLED) {
            return redirect(route('categoria.create'))->with('message', 'Se registro correctamente.');
        }

        return redirect(route('categoria.index'))->with('message', 'Se registro correctamente.');
    }

    public function edit(Category $categoria)
    {
        return view('categoria.edit', compact('categoria'));
    }

    public function update(Request $request, Category $categoria)
    {
        $request->validate([
            'name' => 'required|string|max:50',
        ]);


        $categoria->name = $request->name;
        $categoria->save();

        return redirect(route('categoria.index'))->with('message', 'Se actualizo correctamente.');
    }

    public function delete(Category $categoria)
    {
        return view('categoria.destroy', compact('categoria'));
    }

     public function destroy(Category $categoria)
     {
        $categoria->delete();

        return redirect(route('categoria.index'))->with('message', 'Se elimino correctamente.');
     }
}
