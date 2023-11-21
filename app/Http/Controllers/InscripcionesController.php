<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscripcion;
use App\Models\Clase;
use App\Models\Estudiante;
use App\Http\Requests\InscripcionesRequest;
use Carbon\Carbon;

class InscripcionesController extends Controller
{
    public function index()
    {
        $inscripciones = Inscripcion::all();

        return view('inscripciones.index', compact('inscripciones'));
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
        $inscripcion->fecha_expiracion = Carbon::now()->addMonth();
        $inscripcion->save();

        return redirect()
            ->route('inscripciones.index')
            ->with('success', 'Inscripción registrada exitosamente.');
    }

    public function show($id)
    {
        $inscripcion = Inscripcion::findOrFail($id);

        return view('inscripciones.show', compact('inscripcion'));
    }

    public function edit(Inscripcion $inscripcion)
    {
        $estudiantes = Estudiante::all();
        $clases = Clase::all();
        return view('inscripciones.edit', compact('inscripcion','estudiantes', 'clases'));
    }

    public function update(Request $request, Inscripcion $inscripcion)
    {
        $inscripcion->update($request->all());

        return redirect()->route('inscripciones.index')
                        ->with('success','Inscripción actualizada');

    }

    public function destroy($id)
    {
        $inscripcion = Inscripcion::findOrFail($id);

        $inscripcion->delete();

        return redirect()
            ->route('inscripciones.index')
            ->with('success', 'Inscripción eliminada');
    }
}
