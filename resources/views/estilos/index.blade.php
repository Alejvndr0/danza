@extends('layouts.crud')

@section('content')
    <div class="container">
        <h1>Listado de estilos</h1>
        <a href="{{ route('users.index') }}" class="btn btn-primary mb-3">Volver</a>
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createModal">
            Agregar estilo
        </button>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>dificultad</th>
                    <th>acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estilos as $estilo)
                    <tr class="table-active">
                        <td>{{ $estilo->id }}</td>
                        <td>{{ $estilo->nombre }}</td>
                        <td>{{ $estilo->dificultad }}</td>
                        <td>
                            <div class="container">
                                <div class="row ">
                                    <div class="col">
                                        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                                            data-bs-target="#editModal{{ $estilo->id }}">
                                            Editar
                                        </button>
                                    </div>
                                    <div class="col">
                                        <form id="form-eliminar3" action="{{ route('estilos.destroy', $estilo->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger" onclick="confirmarEliminacion('form-eliminar3')">Eliminar</button>
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
    @foreach ($estilos as $estilo)
        <!-- Modal de Edición para el Estudiante Actual -->
        <div class="modal fade" id="editModal{{ $estilo->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    @include('estilos.edit')
                </div>
            </div>
        </div>
    @endforeach

    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                @include('estilos.create')
            </div>
        </div>
    </div>
@endsection
