<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registro_cliente;

class RegitroClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registros = Registro_cliente::all();
        return view('usuarios', compact('registros'));
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
        // Validación de los datos del formulario
        $validatedData = $request->validate([
            'nombre_cliente' => 'required|string|max:40',
            'apellido_cliente' => 'required|string|max:40',
            'telefono_cliente' => 'required|string|regex:/\d{3}-\d{3}-\d{4}/',
            'correo' => 'required|email|max:100',
            'contrasena' => 'required|string|min:8|max:20',
        ]);

        // Guardar los datos en la base de datos
        Registro_cliente::create($validatedData);

        // Redirigir o devolver una respuesta
        return redirect()->back()->with('success', 'Registro exitoso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Registro_cliente $registro_cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registro_cliente $registro_cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Registro_cliente $registro_cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registro_cliente $registro_cliente)
    {
        //
    }
}
?>