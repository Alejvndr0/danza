@extends('layouts.crud')

@section('content')
<div class="container">
    <h2>Listado de estilos</h2>
    <a href="{{route('users.index')}}" class="btn btn-primary mb-3">Volver</a>
    <a href="{{ route('estilos.create') }}" class="btn btn-primary mb-3">agregar estilos</a>
    <table class="table">
        <thead >
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>dificultad</th>
                <th>acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estilos as $estilo)
                <tr>
                    <td>{{$estilo->id }}</td>
                    <td>{{$estilo->nombre }}</td>
                    <td>{{$estilo->dificultad }}</td>
                    <td>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <a href="{{ route('estilos.edit', $estilo->id) }}" class="btn btn-primary mb-3">Editar</a>
                                </div>
                                <div class="col">
                                    <form action="{{ route('estilos.destroy', $estilo->id) }}" method="POST">
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