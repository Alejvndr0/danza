<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;

class ProfesoresController extends Controller
{
    public function index()
    {
        $profesores = Profesor::all();
        return view('profesores.index', compact('profesores'));
    }
    public function create()
    {
        return view('profesores.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'correo' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
        ]);
        Profesor::create($request->all());
        return redirect()->route('profesores.index')->with('success', 'Profesor creado exitosamente');
    }
    public function show($id)
    {
        $profesor = Profesor::find($id);
        return view('profesores.show', compact('profesor'));
    }
    public function edit($id)
    {
        $profesor = Profesor::find($id);
        return view('profesores.edit', compact('profesor'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'correo' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
        ]);
        $profesor = Profesor::find($id);
        $profesor->update($request->all());
        return redirect()->route('profesores.index')->with('success', 'Profesor actualizado exitosamente');
    }
    public function destroy($id)
    {
        $profesor = Profesor::find($id);
        $profesor->delete();
        
        return redirect()->route('profesores.index')->with('success', 'Profesor eliminado exitosamente');
    }
}