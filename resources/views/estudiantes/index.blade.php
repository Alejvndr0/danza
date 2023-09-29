@extends('layouts.crud')

@section('content')
    <div class="container">
        <h2>Listado de estudiantes</h2>
        <a href="{{ route('users.index') }}" class="btn btn-primary mb-3">Volver</a>
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createModal">
            Agregar estudiante
        </button>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Fecha de nacimiento</th>
                    <th>Correo</th>
                    <th>Dirección</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estudiantes as $estudiante)
                    <tr>
                        <td>{{ $estudiante->id }}</td>
                        <td>{{ $estudiante->nombre }}</td>
                        <td>{{ $estudiante->apellido }}</td>
                        <td>{{ $estudiante->fecha_nac }}</td>
                        <td>{{ $estudiante->correo }}</td>
                        <td>{{ $estudiante->direccion }}</td>
                        <td>
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                                            data-bs-target="#editModal{{ $estudiante->id }}">
                                            Editar
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

    @foreach ($estudiantes as $estudiante)
        <!-- Modal de Edición para el Estudiante Actual -->
        <div class="modal fade" id="editModal{{ $estudiante->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    @include('estudiantes.edit')
                </div>
            </div>
        </div>
    @endforeach

    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                @include('estudiantes.create')
            </div>
        </div>
    </div>
@endsection
