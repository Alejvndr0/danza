<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pago;
use App\Models\Inscripcion;
use App\Http\Requests\PagosRequest;

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

  
    public function store(PagosRequest $request)
    {
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

    public function update(PagosRequest $request, Pago $pago)
    {
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
