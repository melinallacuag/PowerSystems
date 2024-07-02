<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Clientes extends Model
{
    use HasFactory, Notifiable;


       /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'ruc',
        'razon_social',
        'cargo',
        'telefono',
        'correo',
        'fecha_inicio',
        'fecha_fin',
        'estado',
        'descripcion',
    ];


    protected $dates = [
        'fecha_inicio',
        'fecha_fin',
    ];

    public function pagos()
    {
        return $this->hasMany(Pagos::class, 'cliente_id');
    }

    public function actualizarEstado()
    {
        $hoy = Carbon::now();
        $diferenciaDias = $hoy->diffInDays($this->fecha_fin, false);

        if ($diferenciaDias > 15) {
            $this->estado = 'normal';
        } elseif ($diferenciaDias <= 15 && $diferenciaDias > 0) {
            $this->estado = 'pagar';
        } else {
            $this->estado = 'deuda';
        }

        $this->save();
    }

}
