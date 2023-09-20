@extends('layouts.crud')

@section('content')

<div class="container">
    <h2>Listado de profesores</h2>
    <a href="{{route('users.index')}}" class="btn btn-primary mb-3">Volver</a>
    <a href="{{ route('profesores.create') }}" class="btn btn-primary mb-3">Crear profesor</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>apellido</th>
                <th>correo</th>
                <th>telefono</th>
                <th>direccion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($profesores as $profesor)
                <tr>
                    <td>{{$profesor->id }}</td>
                    <td>{{$profesor->nombre }}</td>
                    <td>{{$profesor->apellido }}</td>
                    <td>{{$profesor->correo}}</td>
                    <td>{{$profesor->telefono}}</td>
                    <td>{{$profesor->direccion}}</td>
                    <td>
                        
                        <a href="{{ route('profesores.edit', $profesor->id) }}" class="btn btn-primary mb-3">Editar</a>
                        <form action="{{ route('profesores.destroy', $profesor->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection