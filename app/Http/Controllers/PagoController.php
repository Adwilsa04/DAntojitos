<?php
namespace App\Http\Controllers;

use App\Models\Pago;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function index()
    {
        $pagos = Pago::all();
        return view('manejoadmin.pagos', ['pagos' => $pagos]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre_completo' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'tipo_pago' => 'required|string',
            'descripcion_pago' => 'required|string|max:255',
            'monto' => 'required|numeric',
            'nombre_tarjeta' => 'nullable|string|max:255',
            'num_tarjeta' => 'nullable|numeric',
            'mes_expiracion' => 'nullable|string|max:255',
            'ano_expiracion' => 'nullable|numeric',
            'cvv' => 'nullable|numeric',
        ]);

        Pago::create($validatedData);

        return redirect()->back()->with('success', 'Pago realizado con éxito');
    }

    public function toggle($id)
    {
        $pago = Pago::findOrFail($id);
        $pago->activo = !$pago->activo;
        $pago->save();

        return redirect()->back()->with('success', 'Estado del pago actualizado con éxito.');
    }
}
