<?php

namespace App\Http\Controllers;

use App\Models\Cargos;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class ServiceController extends Controller
{
    const REGISTER_DISABLED = 'disabled';
    const REGISTER_ENABLED = 'enabled';

    public function index(Request $request)
    {

        $search = $request->input('search');

        $service = Service::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%");
        })->paginate(5);

        return view('service.index',compact('service', 'search'));
    }

    public function create()
    {
        return view('service.create');
    }

    public function save(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:50',
        ]);


        $service = new Service();

        $service->name = $request->name;

        $service->save();

        if ($request->input('continue_register') == self::REGISTER_ENABLED) {
            return redirect(route('service.create'))->with('message', 'Se registro correctamente.');
        }

        return redirect(route('service.index'))->with('message', 'Se registro correctamente.');
    }

    public function edit(Service $service)
    {
        return view('service.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name' => 'required|string|max:50',
        ]);


        $service->name = $request->name;
        $service->save();

        return redirect(route('service.index'))->with('message', 'Se actualizo correctamente.');
    }

    public function delete(Service $service)
    {
        return view('service.destroy', compact('service'));
    }


     public function destroy(Service $service)
     {

        if ($service->users()->exists()) {
            return redirect(route('service.index'))->withErrors(['error' => 'No se puede eliminar el cargo porque está asociado a uno o más usuarios.']);
        }

        $service->delete();

        return redirect(route('service.index'))->with('message', 'Se elimino correctamente.');
     }
}
