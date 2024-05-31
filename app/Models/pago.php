<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_completo',
        'email',
        'tipo_pago',
        'descripcion_pago',
        'monto',
        'nombre_tarjeta',
        'num_tarjeta',
        'mes_expiracion',
        'ano_expiracion',
        'cvv',
        'activo',
    ];
}
