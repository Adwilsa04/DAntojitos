<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;

class CitaController extends Controller
{

    public function index()
    {
        try {
            $citas = Cita::all();
            return view('manejoadmin.citas', compact('citas'));
        } catch (\Exception $e) {
            return back()->withError($e->getMessage())->withInput();
        }
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre_cliente' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'direccion' => 'required|string|max:255',
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
        ]);

        Cita::create($validatedData);

        return redirect()->back()->with('success', 'Cita creada exitosamente');
    }

    public function destroy($id)
    {
        $cita = Cita::findOrFail($id);
        $cita->delete();

        return redirect()->route('citas.index')->with('success', 'Cita eliminada exitosamente');
    }
}

