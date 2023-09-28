<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asistencia;
use App\Models\Clase;
use App\Models\Estudiante;
use App\Http\Requests\AsistenciasRequest;

class AsistenciasController extends Controller
{
    public function index()
    {
        $asistencias = Asistencia::all();
        return view('asistencias.index', compact('asistencias'));
    }

    public function create()
    {
        $clases = Clase::all();
        $estudiantes = Estudiante::all();
        return view('asistencias.create', compact('estudiantes','clases'));
    }

    public function store(AsistenciasRequest $request)
    {
        Asistencia::create($request->all());
        return redirect()->route('asistencias.index')->with('asistencia creado exitosamente');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Asistencia $asistencia)
    {
        $estudiantes = Estudiante::all();
        $clases= Clase::all();
        return view('asistencias.edit' , compact('asistencia','estudiantes','clases'));
    }

    public function update(AsistenciasRequest $request, Asistencia $asistencia)
    {
        $asistencia->update($request->all());
        return redirect()->route('asistencias.index')
            ->with('success', 'registro actualizado exitosamente.');
    }

    public function destroy(Asistencia $asistencia)
    {
        $asistencia->delete();
        return redirect()->route('asistencias.index')
            ->with('success', 'Estilo eliminado exitosamente.');
    }
}
