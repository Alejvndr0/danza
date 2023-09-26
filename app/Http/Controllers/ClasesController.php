<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clase;
use App\Models\Estilo;
use App\Models\Profesor;

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
    public function store(Request $request)
    {
        $request->validate([
            'nombre' =>'required',
            'descripcion'=>'required',
            'hora_inicio' =>'required',
            'hora_fin' =>'required',
            'id_estilo' =>'required',
            'id_profesor' =>'required',
        ]);
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
    public function update(Request $request, Clase $clase) 
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'hora_inicio' => 'required',
            'hora_fin' => 'required',
            'id_estilo' => 'required',
            'id_profesore' => 'required',        
        ]);
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
