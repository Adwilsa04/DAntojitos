<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrador;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('Formularios.inicioad');
    }

    public function login(Request $request)
    {
        $request->validate([
            'correo' => 'required|email',
            'contrasena' => 'required|string|min:8|max:20',
        ]);

        // Obtener el administrador por correo
        $admin = Administrador::where('correo', $request->correo)->first();

        // Verificar la contraseña
        if ($admin && Hash::check($request->contrasena, $admin->contrasena)) {
            // Guardar el administrador en la sesión manualmente
            $request->session()->put('admin', $admin->id);
            return redirect()->route('pantadmin1')->with('success', 'Inicio de sesión exitoso.');
        } else {
            return redirect()->back()->with('error', 'Las credenciales no son correctas.');
        }
    }

    public function logout(Request $request)
    {
        // Eliminar el administrador de la sesión
        $request->session()->forget('admin');
        return redirect()->route('admin.login')->with('success', 'Cierre de sesión exitoso.');
    }
}
