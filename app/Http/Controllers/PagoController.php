<?php

namespace App\Http\Controllers;

use App\Models\pago;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre_completo' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'tipo_pago' => 'required|string',
            'descripcion' => 'required|string',
            'monto' => 'required|string',
            'nombre_tarjeta' => 'nullable|string|max:255',
            'num_tarjeta' => 'nullable|numeric',
            'mes_expiracion' => 'nullable|string',
            'ano_expiracion' => 'nullable|numeric',
            'cvv' => 'nullable|numeric',
        ]);

        Pago::create([
            'nombre_completo' => $validatedData['nombre_completo'],
            'email' => $validatedData['email'],
            'tipo_pago' => $validatedData['tipo_pago'],
            'descripcion_pago' => $validatedData['descripcion'],
            'monto' => $validatedData['monto'],
            'nombre_tarjeta' => $validatedData['nombre_tarjeta'] ?? '',
            'num_tarjeta' => $validatedData['num_tarjeta'] ?? '',
            'mes_expiracion' => $validatedData['mes_expiracion'] ?? '',
            'ano_expiracion' => $validatedData['ano_expiracion'] ?? '',
            'cvv' => $validatedData['cvv'] ?? '',
            'activo' => true,
        ]);

        return redirect()->back()->with('success', 'Pago realizado con éxito');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(pago $pago)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pago $pago)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pago $pago)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pago $pago)
    {
        //
    }

}