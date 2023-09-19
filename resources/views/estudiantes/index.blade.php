@extends('layouts.crud')

@section('content')
<div class="container">
    <h2>Listado de usuarios</h2>
    <a href="{{ route('estudiantes.create') }}" class="btn btn-primary">Crear estudiante</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>apellido</th>
                <th>fecha de nacimiento</th>
                <th>correo</th>
                <th>direccion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiantes as $estudiante)
                <tr>
                    <td>{{$estudiante->id }}</td>
                    <td>{{$estudiante->nombre }}</td>
                    <td>{{$estudiante->apellido }}</td>
                    <td>{{$estudiante->fecha_nac}}</td>
                    <td>{{$estudiante->correo}}</td>
                    <td>{{$estudiante->direccion}}</td>
                    <td>
                        <a href="{{ route('estudiantes.show', $estudiante->id) }}" class="btn btn-info">Ver</a>
                        <br/>
                        <a href="{{ route('estudiantes.edit', $estudiante->id) }}" class="btn btn-primary">Editar</a>
                        <br/>
                        <form action="{{ route('estudiantes.destroy', $estudiante->id) }}" method="POST">
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