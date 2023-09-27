@extends('layouts.crud')

@section('content')
<div class="container">
    <h2>Listado de estudiantes</h2>
    <a href="{{route('users.index')}}" class="btn btn-primary mb-3">Volver</a>
    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#create">
        agregar estudiante
    </button>
    <table class="table">
        <thead >
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
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#edit">
                                        editar
                                    </button>
                                </div>
                                <div class="col">
                                    <form action="{{ route('estudiantes.destroy', $estudiante->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </div>
                                <div class="col"></div>
                            </div>
                        </div>
                        
                        
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@include('estudiantes.create')
@include('estudiantes.edit')
@endsection