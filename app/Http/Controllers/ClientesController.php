<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Pagos;
use App\Models\Cargos;
use App\Models\Clientes;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class ClientesController extends Controller
{
    const REGISTER_DISABLED = 'disabled';
    const REGISTER_ENABLED = 'enabled';


    public function updateConfirmarPago(Clientes $clientes)
    {
        return view('clientes.confirmarPago', compact('clientes'));
    }

    public function estadisticas()
    {
        $totalClientes = Clientes::count();
        $clientesConDeuda = Clientes::where('estado', 'deuda')->count();
        $clientesNormales = Clientes::where('estado', 'normal')->count();
        $clientesPagar = Clientes::where('estado', 'pagar')->count();

        $estadisticas = [
            'total' => $totalClientes,
            'deuda' => $clientesConDeuda,
            'normal' => $clientesNormales,
            'pagar' => $clientesPagar,
        ];

        return view('clientes.estadisticas', compact('estadisticas'));
    }


    public function confirmarPago(Request $request, Clientes $clientes)
    {

        $request->validate([
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
        ]);

        $fechaHoraActual = Carbon::now()->setTimezone('America/Lima');

        Pagos::create([
            'cliente_id' => $clientes->id,
            'fecha_pago' => $fechaHoraActual,
            'fecha_inicio' => $clientes->fecha_inicio,
            'fecha_fin' => $clientes->fecha_fin,
        ]);

        $clientes->fecha_inicio = $request->fecha_inicio;
        $clientes->fecha_fin = $request->fecha_fin;

        $clientes->actualizarEstado();
        $clientes->save();

        return redirect()->route('clientes.index')->with('message', 'Pago confirmado y contrato renovado.');
    }

    public function index(Request $request)
    {

        $search = $request->input('search');

        $clientes = Clientes::when($search, function ($query, $search) {
            return $query->where('razon_social', 'like', "%{$search}%");
        })->with('pagos')->paginate(5);

        return view('clientes.index',compact('clientes', 'search'));
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

    public function create()
    {
        $cargos = Cargos::all();
        $services = Service::all();
        return view('clientes.create' , compact('cargos','services'));
    }

    public function save(Request $request)
    {

       //dd($request->all());

        $request->validate([
            'ruc' => ['required', 'string', 'max:11'],
            'razon_social' => ['required', 'string', 'max:255'],
            'nom_comercial' => ['required', 'string', 'max:255'],
            'nom_contacto' => ['required', 'string', 'max:255'],
            'correo' => ['nullable', 'string', 'email', 'max:255'],
            'fecha_inicio' => ['required', 'date'],
            'fecha_fin' => ['required', 'date'],
            'cargos_id' => 'required|string',
            'service_id' => 'required|string',
        ]);

        $clientes = new Clientes();

        $clientes->ruc = $request->ruc;
        $clientes->razon_social = $request->razon_social;
        $clientes->nom_comercial = $request->nom_comercial;
        $clientes->nom_contacto = $request->nom_contacto;
        $clientes->telefono = $request->telefono;
        $clientes->correo = $request->correo;
        $clientes->fecha_inicio = $request->fecha_inicio;
        $clientes->fecha_fin = $request->fecha_fin;
        $clientes->cargos_id = $request->cargos_id;
        $clientes->service_id = $request->service_id;

        //dd($clientes);
        $clientes->actualizarEstado();
        $clientes->save();

        if ($request->input('continue_register') == self::REGISTER_ENABLED) {
            return redirect(route('clientes.create'))->with('message', 'Se registro correctamente.');
        }

        return redirect(route('clientes.index'))->with('message', 'Se registró correctamente.');

    }

    public function vista(Clientes $clientes)
    {
        return view('clientes.vista', compact('clientes'));
    }

    public function edit(Clientes $clientes)
    {
        $cargos = Cargos::all();
        $services = Service::all();
        return view('clientes.edit', compact('clientes', 'cargos' ,'services'));
    }

    public function update(Request $request, Clientes $clientes)
    {
        $request->validate([
            'ruc' => ['required', 'string', 'max:11'],
            'razon_social' => ['required', 'string', 'max:255'],
            'nom_comercial' => ['required', 'string', 'max:255'],
            'nom_contacto' => ['required', 'string', 'max:255'],
            'correo' => ['nullable', 'string', 'email', 'max:255'],
            'fecha_inicio' => ['required', 'date'],
            'fecha_fin' => ['required', 'date'],
            'cargos_id' => 'required|string',
            'service_id' => 'required|string',
        ]);


        $clientes->ruc = $request->ruc;
        $clientes->razon_social = $request->razon_social;
        $clientes->nom_comercial = $request->nom_comercial;
        $clientes->nom_contacto = $request->nom_contacto;
        $clientes->telefono = $request->telefono;
        $clientes->correo = $request->correo;
        $clientes->fecha_inicio = $request->fecha_inicio;
        $clientes->fecha_fin = $request->fecha_fin;
        $clientes->cargos_id = $request->cargos_id;
        $clientes->service_id = $request->service_id;

        $clientes->actualizarEstado();
        $clientes->save();

        return redirect(route('clientes.index'))->with('message', 'Se actualizo correctamente.');
    }

    public function delete(Clientes $clientes)
    {
        return view('clientes.destroy', compact('clientes'));
    }

     public function destroy(Clientes $clientes)
     {
        $clientes->delete();

        return redirect(route('clientes.index'))->with('message', 'Se elimino correctamente.');
     }


}
