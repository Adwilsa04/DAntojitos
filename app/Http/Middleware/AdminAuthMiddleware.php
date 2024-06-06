<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuthMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->has('admin')) {
            return redirect()->route('admin.login')->with('error', 'Debes iniciar sesión primero.');
        }

        return $next($request);
    }
}
