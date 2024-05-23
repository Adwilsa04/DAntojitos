<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

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

        if (Auth::attempt(['correo' => $credentials['email'], 'password' => $credentials['contrasena']])) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        throw ValidationException::withMessages([
            'correo' => __('auth.failed'),
        ]);

        
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

