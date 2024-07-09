<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Documento;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class DocumentosController extends Controller
{
    const REGISTER_DISABLED = 'disabled';
    const REGISTER_ENABLED = 'enabled';

    public function index(Request $request)
    {

        $search = $request->input('search');

        $documento = Documento::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%");
        })->paginate(5);

        return view('archivos.index',compact('documento', 'search'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('archivos.create' , compact('categories'));
    }

    public function save(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:50',
            'documento' => 'nullable|file|mimes:pdf,doc,docx',
            'category_id' => 'required|string',
        ]);

        if ($request->hasFile('documento')) {
            $path = $request->file('documento')->store('documents', 'public');
        }else {
            return back()->withErrors(['documento' => 'No se ha subido ningún archivo de video.']);
        }

        $documento = new Documento();

        $documento->name = $request->name;
        $documento->documento = $path;
        $documento->category_id = $request->category_id;
        $documento->is_visible = $request->input('is_visible') == '1' ? 1 : 0;

        $documento->save();

        if ($request->input('continue_register') == self::REGISTER_ENABLED) {
            return redirect(route('archivos.create'))->with('message', 'Se registro correctamente.');
        }

        return redirect(route('archivos.index'))->with('message', 'Se registro correctamente.');
    }

    public function edit(Documento $documento)
    {
        $categories = Category::all();
        return view('archivos.edit', compact('documento', 'categories'));
    }

    public function update(Request $request, Documento $documento)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'documento' => 'nullable|file|mimes:pdf,doc,docx',
            'category_id' => 'required|string',
        ]);



        if ($request->hasFile('documento')) {
            $path = $request->file('documento')->store('documents', 'public');
            $documento->documento = $path;
        } elseif ($request->input('remove_documento')) {
            $documento->documento = null;
        }


        $documento->name = $request->name;
        $documento->category_id = $request->category_id;
        $documento->is_visible = $request->input('is_visible') == '1' ? 1 : 0;
        $documento->save();

        return redirect(route('archivos.index'))->with('message', 'Se actualizo correctamente.');
    }

    public function delete(Documento $documento)
    {
        return view('archivos.destroy', compact('documento'));
    }

     public function destroy(Documento $documento)
     {
        $documento->delete();

        return redirect(route('archivos.index'))->with('message', 'Se elimino correctamente.');
     }
}
