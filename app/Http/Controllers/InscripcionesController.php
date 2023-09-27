<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscripcion;
use App\Models\Clase;
use App\Models\Estudiante;

class InscripcionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inscripciones = Inscripcion::all();
        return view('inscripciones.index',compact('inscripciones'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $estudiantes = Estudiante::all();
        $clases = Clase::all();
        return view('inscripciones.create', compact('estudiantes', 'clases'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fecha_inscripcion' => 'required|date',
            'estado_pago' => 'required',
            'num_pago' => 'required',
            'id_estudiante' => 'required',
            'id_clase' => 'required',
        ]);

        Inscripcion::create($request->all());
        return redirect()->route('inscripciones.index')->with('success', 'Inscripción registrada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inscripcion $inscripcion)
    {
        $estudiantes = Estudiante::all();
        $clases= Clase::all();
        return view('inscripciones.edit' , compact('inscripcion','estudiantes','clases'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inscripcion $inscripcion)
    {
        $request->validate([
            'fecha_inscripcion' => 'required|date',
            'estado_pago' => 'required',
            'num_pago' => 'required',
            'id_estudiante' => 'required',
            'id_clase' => 'required',
        ]);
        $inscripcion->update($request->all());
        return redirect()->route('inscripciones.index')
            ->with('success', 'registro actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inscripcion $inscripcion)
    {
        $inscripcion->delete();
        return redirect()->route('inscripciones.index')
            ->with('success', 'Estilo eliminado exitosamente.');
    }
}
