<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regitro_cliente extends Model
{
    use HasFactory;
    protected $fillable = ['nombre_cliente', 'apellido_cliente', 'telefono_cliente', 'correo'];
}
