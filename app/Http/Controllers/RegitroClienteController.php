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
         try {
             $registros = Registro_cliente::all();
             return view('manejoadmin.usuarios', compact('registros'));
         } catch (\Exception $e) {
             return back()->withError($e->getMessage())->withInput();
         }
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
        $validatedData = $request->validate([
            'nombre_cliente' => 'required|string|max:40',
            'apellido_cliente' => 'required|string|max:40',
            'telefono_cliente' => 'required|string|regex:/\d{3}-\d{3}-\d{4}/',
            'correo' => 'required|email|max:100',
            'contrasena' => 'required|string|min:8|max:20',
            'estado' => 'nullable|integer|between:0,1'
        ]);
        
        $validatedData['estado'] = $validatedData['estado'] ?? 1;

        // Guardar los datos en la base de datos
        $registros = Registro_cliente::create($validatedData);

// Rediriges al perfil del usuario recién creado y pasas el registro
return redirect()->route('perfil', ['registro' => $registros])->with('success', 'Registro exitoso.');

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

    public function cambiarEstado($id)
    {
        $registro = Registro_cliente::findOrFail($id);
        $registro->estado = !$registro->estado;
        $registro->save();

        return redirect()->back()->with('success', 'Estado del registro actualizado correctamente.');
    }

    public function buscar(Request $request)
    {
        $query = $request->input('query');
    
        if ($query) {
            $registros = Registro_cliente::where(function ($q) use ($query) {
                $q->where('id', 'LIKE', "%$query%")
                  ->orWhere('nombre_cliente', 'LIKE', "%$query%")
                  ->orWhere('apellido_cliente', 'LIKE', "%$query%")
                  ->orWhere('telefono_cliente', 'LIKE', "%$query%")
                  ->orWhere('correo', 'LIKE', "%$query%")
                  ->orWhere('estado', 'LIKE', "%$query%");
            })->get();
        } else {
            $registros = Registro_cliente::all();
        }
    
        return view('manejoadmin.usuarios', compact('registros'));
    }

    public function buscarid(Request $request)
{
    $id = $request->input('id');

    if ($id) {
        $registros = Registro_cliente::where('id', $id)->get();
    } else {
        $registros = Registro_cliente::all();
    }

    return view('manejoadmin.usuarios', compact('registros'));
}

}

?>