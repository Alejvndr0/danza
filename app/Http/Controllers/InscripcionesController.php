<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscripcion;
use App\Models\Clase;
use App\Models\Estudiante;
use App\Http\Requests\InscripcionesRequest;
use App\Events\InscripcionCreada;

class InscripcionesController extends Controller
{
    public function index()
    {
        $inscripciones = Inscripcion::all();
        return view('inscripciones.index',compact('inscripciones'));

    }


    public function create()
    {
        $estudiantes = Estudiante::all();
        $clases = Clase::all();
        return view('inscripciones.create', compact('estudiantes', 'clases'));
    }
    public function store(InscripcionesRequest $request)
{
    $inscripcion = Inscripcion::create($request->all());
    event(new InscripcionCreada($inscripcion->id_clase));
    return redirect()->route('inscripciones.index')->with('success', 'Inscripción registrada exitosamente.');
}

    public function show(string $id)
    {
        //
    }


    public function edit(Inscripcion $inscripcion)
    {
        $estudiantes = Estudiante::all();
        $clases= Clase::all();
        return view('inscripciones.edit' , compact('inscripcion','estudiantes','clases'));
    }

    public function update(InscripcionesRequest $request, Inscripcion $inscripcion)
    {
        $inscripcion->update($request->all());
        return redirect()->route('inscripciones.index')
            ->with('success', 'registro actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $inscripcion = inscripcion::find($id);
        $inscripcion->delete();
        event(new InscripcionCreada($inscripcion->id_clase));
        return redirect()->route('inscripciones.index')
            ->with('success', 'Estilo eliminado exitosamente.');
    }
}
