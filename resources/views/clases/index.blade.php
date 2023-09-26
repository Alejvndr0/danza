@extends('layouts.crud')

@section('content')
<div class="container">
    <h2>Listado de clases</h2>
    <a href="{{route('users.index')}}" class="btn btn-primary mb-3">Volver</a>
    <a href="{{ route('clases.create') }}" class="btn btn-primary mb-3">agregar una nueva clase</a>
    <table class="table">
        <thead >
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>descripcion</th>
                <th>hora de inicio</th>
                <th>hora fin</th>
                <th>estilo</th>
                <th>dificultad</th>
                <th>profesor</th>
                <th>acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clases as $clase)
                <tr>
                    <td>{{$clase->id }}</td>
                    <td>{{$clase->nombre }}</td>
                    <td>{{$clase->descripcion }}</td>
                    <td>{{$clase->hora_inicio }}</td>
                    <td>{{$clase->hora_fin}}</td>
                    <td>{{$clase->estilo->nombre}}</td>
                    <th>{{$clase->estilo->dificultad}}</th>
                    <td>{{$clase->profesor->nombre}}</td>
                    
                    <td>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <a href="{{ route('clases.edit', $clase->id) }}" class="btn btn-primary mb-3">Editar</a>
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