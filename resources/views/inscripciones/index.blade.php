@extends('layouts.crud')

@section('content')
<div class="container">
    <h1>Lista de Inscripciones</h1>
    <a href="{{route('users.index')}}" class="btn btn-primary mb-3">Volver</a>
    <a href="{{ route('inscripciones.create') }}" class="btn btn-primary mb-3">registrar inscripcion</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha de Inscripción</th>
                <th>Estado de Pago</th>
                <th>Número de Pago</th>
                <th>Estudiante</th>
                <th>Clase</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inscripciones as $inscripcion)
                <tr>
                    <td>{{ $inscripcion->id }}</td>
                    <td>{{ $inscripcion->fecha_inscripcion }}</td>
                    <td>{{ $inscripcion->estado_pago }}</td>
                    <td>{{ $inscripcion->num_pago }}</td>
                    <td>{{ $inscripcion->estudiante->nombre }} {{ $inscripcion->estudiante->apellido }}</td>
                    <td>{{ $inscripcion->clase->nombre }}</td>
                    <td>
                        <a href="{{ route('inscripciones.edit', $inscripcion->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('inscripciones.destroy', $inscripcion->id) }}" method="POST" style="display: inline">
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