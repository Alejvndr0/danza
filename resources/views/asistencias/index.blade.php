@extends('layouts.crud')

@section('content')
<div class="container">
    <h2>Listado de asistencias</h2>
    <a href="{{route('users.index')}}" class="btn btn-primary mb-3">Volver</a>
    <a href="{{ route('asistencias.create') }}" class="btn btn-primary mb-3">agregar una nueva asistencia</a>
    <table class="table">
        <thead >
            <tr>
                <th>ID</th>
                <th>fecha de asistencia</th>
                <th>estado de asistencia</th>
                <th>estudiante</th>
                <th>clase</th>
                <th>acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($asistencias as $asistencia)
                <tr>
                    <td>{{$asistencia->id }}</td>
                    <td>{{$asistencia->fecha_asistencia}}</td>
                    <td>{{$asistencia->estado_asistencia}}</td>
                    <td>{{$asistencia->estudiante->nombre}}</td>
                    <td>{{$asistencia->clase->nombre}}</td>
                    
                    <td>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <a href="{{ route('asistencias.edit', $asistencia->id) }}" class="btn btn-primary mb-3">Editar</a>
                                </div>
                                <div class="col">
                                    <form action="{{ route('asistencias.destroy', $asistencia->id) }}" method="POST">
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
@endsection