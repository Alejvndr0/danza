<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clase;
use App\Models\Estilo;
use App\Models\Profesor;
use App\Http\Requests\ClasesRequest;

class ClasesController extends Controller
{
    public function index()
    {
        
        $clases = Clase::all();
        return view('clases.index', compact('clases'));
    }

    public function create()
    {   
        $estilos = Estilo::all();
        $profesores= Profesor::all();
        return view('clases.create', compact('estilos', 'profesores'));
    }

    public function store(ClasesRequest $request)
    {
        Clase::create($request->all());
        return redirect()->route('clases.index')->with('clase creado exitosamente');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Clase $clase)
    {
        $estilos = Estilo::all();
        $profesores= Profesor::all();
        return view('clases.edit' , compact('clase','estilos','profesores'));
    }

    public function update(ClasesRequest $request, Clase $clase) 
    {
        $clase->update($request->all());
        return redirect()->route('clases.index')
            ->with('success', 'Estilo actualizado exitosamente.');
    }

    public function destroy(Clase $clase)
    {
        $clase->delete();
        return redirect()->route('clases.index')
            ->with('success', 'Estilo eliminado exitosamente.');
    }
}
