<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro_cliente extends Model
{
    use HasFactory;

    protected $fillable = ['nombre_cliente', 'apellido_cliente', 'telefono_cliente', 'correo', 'contrasena'];

    // Contraseña cifrada
    public function setContrasenaAttribute($value)
    {
        $this->attributes['contrasena'] = bcrypt($value);
    }
}
