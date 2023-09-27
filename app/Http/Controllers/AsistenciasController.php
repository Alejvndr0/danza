<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asistencia;
use App\Models\Clase;
use App\Models\Estudiante;

class AsistenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $asistencias = Asistencia::all();
        return view('asistencias.index', compact('asistencias'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clases = Clase::all();
        $estudiantes = Estudiante::all();
        return view('asistencias.create', compact('estudiantes','clases'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fecha_asistencia' =>'required',
            'estado_asistencia'=>'required',
            'id_estudiante' =>'required',
            'id_clase' =>'required',
        ]);
        Asistencia::create($request->all());
        return redirect()->route('asistencias.index')->with('asistencia creado exitosamente');
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
    public function edit(Asistencia $asistencia)
    {
        $estudiantes = Estudiante::all();
        $clases= Clase::all();
        return view('asistencias.edit' , compact('asistencia','estudiantes','clases'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Asistencia $asistencia)
    {
        $request->validate([
            'fecha_asistencia' =>'required',
            'estado_asistencia'=>'required',
            'id_estudiante' =>'required',
            'id_clase' =>'required',        
        ]);
        $asistencia->update($request->all());
        return redirect()->route('asistencias.index')
            ->with('success', 'registro actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asistencia $asistencia)
    {
        $asistencia->delete();
        return redirect()->route('asistencias.index')
            ->with('success', 'Estilo eliminado exitosamente.');
    }
}
