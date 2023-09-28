@extends('layouts.crud')

@section('content')

<div class="container">
    <h2>Listado de profesores</h2>
    <a href="{{route('users.index')}}" class="btn btn-primary mb-3">Volver</a>
    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createModal">
        Agregar profesor
    </button>
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
                        <div class="container mt-4">
                            <div class="row">
                                <div class="col px-1">
                                    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#editModal{{ $profesor->id }}">
                                        Editar
                                    </button>
                                </div>
                                <div class="col px-1">
                                    <form action="{{ route('profesores.destroy', $profesor->id) }}" method="POST">
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
@foreach ($profesores as $profesor)
    <!-- Modal de Edición para el Estudiante Actual -->
    <div class="modal fade" id="editModal{{ $profesor->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                @include('profesores.edit')
            </div>
        </div>
    </div>
@endforeach

<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            @include('profesores.create')
        </div>
    </div>
</div>
@endsection