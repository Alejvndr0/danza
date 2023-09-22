<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users = User::all();
        return view('users.index',compact('users'));
    }
    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'email'=>'required',
            'password' =>'required',
        ]);
        User::create($request->all());
        return redirect()->route('users.index')->with('estudiante creado exitosamente');
    }
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' =>'required',
        
        ]);
        $user->update($request->all());
        return redirect()->route('users.index')
            ->with('success', 'Estudiante actualizado exitosamente.');
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')
            ->with('success', 'Estudiante eliminado exitosamente.');
    }
}
