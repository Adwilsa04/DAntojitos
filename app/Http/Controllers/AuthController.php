<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registro_cliente;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'correo' => 'required|email',
            'contrasena' => 'required|string',
        ]);

        // Verificación de las credenciales
        $cliente = Registro_cliente::where('correo', $request->correo)->first();

        if ($cliente && Hash::check($request->contrasena, $cliente->contrasena)) {
            // Autenticar al usuario
            Auth::login($cliente);
            return redirect()->intended('dashboard')->with('success', 'Inicio de sesión exitoso.');
        } else {
            return redirect()->back()->with('error', 'Las credenciales no son correctas.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Cierre de sesión exitoso.');
    }
}
