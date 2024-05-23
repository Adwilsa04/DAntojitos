<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\Registro_cliente;

class InicioController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.inicio');
    }

    public function login(Request $request)
{
    $credentials = $request->validate([
        'correo' => ['required', 'email'],
        'contrasena' => ['required', 'string'],
    ]);

    if (Auth::attempt(['correo' => $credentials['correo'], 'password' => $credentials['contrasena']])) {
        $request->session()->regenerate();

        // Inicio de sesión exitoso
        return redirect()->intended('dashboard')->with('success', '¡Inicio de sesión exitoso!');
    }

    // Inicio de sesión fallido
    return redirect()->route('login')->with('error', 'Credenciales incorrectas. Por favor, inténtalo de nuevo.');
}
}