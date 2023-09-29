@extends('layouts.crud')

@section('content')
    <div class="container">
        <h2>Listado de clases</h2>
        <a href="{{ route('users.index') }}" class="btn btn-primary mb-3">Volver</a>
        <a href="{{ route('clases.create') }}" class="btn btn-primary mb-3">agregar una nueva clase</a>
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Hora de Inicio</th>
                    <th>Hora Fin</th>
                    <th>Estilo</th>
                    <th>Dificultad</th>
                    <th>Profesor</th>
                    <th>Estudiantes Inscritos</th> <!-- Agregamos una columna para estudiantes inscritos -->
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clases as $clase)
                    <tr>
                        <td>{{ $clase->id }}</td>
                        <td>{{ $clase->nombre }}</td>
                        <td>{{ $clase->descripcion }}</td>
                        <td>{{ $clase->hora_inicio }}</td>
                        <td>{{ $clase->hora_fin }}</td>
                        <td>{{ $clase->estilo->nombre ?? 'No Asignado' }}</td>
                        <td>{{ $clase->estilo->dificultad ?? 'No Asignado' }}</td>
                        <td>{{ $clase->profesor->nombre ?? 'No Asignado' }}</td>
                        <td>{{ $inscripcionesCount[$clase->id] ?? 0 }}</td> <!-- Muestra el recuento de inscripciones -->
                        <td>
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <a href="{{ route('clases.edit', $clase->id) }}"
                                            class="btn btn-primary mb-3">Editar</a>
                                    </div>
                                    <div class="col">
                                        <form action="{{ route('clases.destroy', $clase->id) }}" method="POST">
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
