<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estilo;
use App\http\Requests\EstilosRequest;

class EstilosController extends Controller
{
    
    public function index()
    {
        $estilos = Estilo::all();
        return view('estilos.index' , compact('estilos'));
    }

    public function create()
    {
        return view('estilos.create');
    }

    public function store(EstilosRequest $request)
    {
        Estilo::create($request->all());
        return redirect()->route('estilos.index')->with('estilo creado exitosamente');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Estilo $estilo)
    {
        return view('estilos.edit', compact('estilo'));
    }

    public function update(EstilosRequest $request, Estilo $estilo)
    {
        $estilo->update($request->all());
        return redirect()->route('estilos.index')
            ->with('success', 'Estilo actualizado exitosamente.');
    }

    public function destroy(Estilo $estilo)
    {
        $estilo->delete();
        return redirect()->route('estilos.index')
            ->with('success', 'Estilo eliminado exitosamente.');
    }
}
