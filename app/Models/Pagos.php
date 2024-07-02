<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagos extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'cliente_id',
        'fecha_pago',
        'fecha_inicio',
        'fecha_fin',
    ];

    public function pagos()
    {
        return $this->belongsTo(Clientes::class);
    }
}
