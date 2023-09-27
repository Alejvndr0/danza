<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pago;
use App\Models\Inscripcion;

class PagosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pagos = Pago::all();
        return view('pagos.index',compact('pagos'));
    }

    public function create()
    {
        $inscripciones = Inscripcion::all();
        return view('pagos.create', compact('inscripciones'));
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'fecha_pago' => 'required|date',
            'monto' => 'required|numeric',
            'id_inscripcion' => 'required',
        ]);

        Pago::create($request->all());
        return redirect()->route('pagos.index')->with('success', 'Pago registrado exitosamente.');
    }

    public function show(string $id)
    {
        
    }

   
    public function edit(Pago $pago)
    {
        $inscripciones= Inscripcion::all();
        return view('pagos.edit' , compact('pago','inscripciones'));
    }

    public function update(Request $request, Pago $pago)
    {
        $request->validate([
            'fecha_pago' => 'required|date',
            'monto' => 'required|numeric',
            'id_inscripcion' => 'required',
        ]);
        $pago->update($request->all());
        return redirect()->route('pagos.index')
            ->with('success', 'registro actualizado exitosamente.');
    }

   
    public function destroy(Pago $pago)
    {
        $pago->delete();
        return redirect()->route('pagos.index')
            ->with('success', 'Estilo eliminado exitosamente.');
    }
}
