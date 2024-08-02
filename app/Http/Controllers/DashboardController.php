<?php
namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Video;
use App\Models\Clientes;
use App\Models\Documento;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $cliente = Clientes::where('ruc', $user->ruc)->first();

        $totalUsuarios = User::count();
        $totalClientes = Clientes::count();
        $totalVideos = Video::count();
        $totalDocumentos = Documento::count();

        $clientesConDeuda = Clientes::where('estado', 'deuda')->count();
        $clientesNormales = Clientes::where('estado', 'normal')->count();
        $clientesPagar = Clientes::where('estado', 'pagar')->count();

        $estadisticas = [
            'deuda' => $clientesConDeuda,
            'normal' => $clientesNormales,
            'pagar' => $clientesPagar,
        ];


        $proximosAPagar = Clientes::whereIn('estado', ['deuda', 'pagar'])
                                    ->with('service')
                                    ->orderBy('fecha_fin')
                                    ->get(['razon_social', 'estado', 'fecha_fin','service_id']);

        // Convertir datos a formato adecuado para el gráfico
        $proximosAPagar = $proximosAPagar->map(function($cliente) {
            $fecha_fin = Carbon::parse($cliente->fecha_fin);
            return [
                'razon_social' => $cliente->razon_social,
                'fecha_fin' => $fecha_fin->format('Y-m-d'),  // Formato de fecha para Chart.js
                'estado' => $cliente->estado,
                'service' => $cliente->service ? $cliente->service->name : 'No asignado'  // Incluir el nombre del servicio
            ];
        });

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
            $fecha_apertura = new \DateTime($cliente->fecha_apertura);

            $cliente->fecha_inicio_dia = $fechaInicio->format('d');
            $cliente->fecha_inicio_mes = $meses_espanol[$fechaInicio->format('n')];
            $cliente->fecha_inicio_ano = $fechaInicio->format('Y');

            $cliente->fecha_fin_dia = $fechaFin->format('d');
            $cliente->fecha_fin_mes = $meses_espanol[$fechaFin->format('n')];
            $cliente->fecha_fin_ano = $fechaFin->format('Y');

            $cliente->fecha_apertura_dia = $fecha_apertura->format('d');
            $cliente->fecha_apertura_mes = $meses_espanol[$fecha_apertura->format('n')];
            $cliente->fecha_apertura_ano = $fecha_apertura->format('Y');

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

        return view('dashboard', compact('user', 'cliente', 'totalUsuarios', 'totalClientes', 'totalVideos', 'totalDocumentos', 'estadisticas', 'proximosAPagar'));
    }
}
