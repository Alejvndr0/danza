<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profesores = Profesor:: all();
        return view('profesores.index', compact('profesores'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profesores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' =>'required',
            'apellido'=>'required',
            'correo' =>'required',
            'telefono' =>'required',
            'direccion' =>'required',




        ]);
        Profesor::create($request->all());
        return redirect()->route('profesores.index')->with('profesor creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profesor $profesor)
    {
        return view('profeosres.show' ,compact('profesores'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Profesor $profesor)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'correo' =>'required',
            'telefono' => 'required',
            'direccion' => 'required',
        
        ]);

        $profesor->update($request->all());

        return redirect()->route('profesores.index')
            ->with('success', 'profesor actualizado exitosamente.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profesor $profesor)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'correo' =>'required',
            'telefono' => 'required',
            'direccion' => 'required',
        
        ]);

        $profesor->update($request->all());
        return redirect()->route('profesores.index')
            ->with('success', 'profesor actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profesor $profesor)
    {
        $profesor->delete();
        return redirect()->route('profesores.index')
            ->with('success', 'profesor eliminado exitosamente.');
    }
}
