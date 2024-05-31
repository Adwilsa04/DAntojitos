<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'mensaje' => 'required|string'
        ]);

        // Crear un nuevo mensaje en la base de datos
        Message::create($validatedData);

        // Redirigir al usuario con un mensaje de éxito
        return redirect()->back()->with('success', '¡Mensaje enviado exitosamente!');
    }
}

