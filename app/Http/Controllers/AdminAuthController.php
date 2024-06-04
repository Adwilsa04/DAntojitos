<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrador;
use Illuminate\Support\Facades\Auth;
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

        $admin = Administrador::where('correo', $request->correo)->first();

        if ($admin && Hash::check($request->contrasena, $admin->contrasena)) {
            Auth::guard('admin')->login($admin);
            return redirect()->route('pantadmin')->with('success', 'Inicio de sesión exitoso.');
        } else {
            return redirect()->back()->with('error', 'Las credenciales no son correctas.');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('success', 'Cierre de sesión exitoso.');
    }
}
