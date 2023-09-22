@extends('layouts.crud')

@section('content')
<div class="container">
    <h2>Editar estilo</h2>
    <a href="{{route('estilos.index')}}" class="btn btn-primary mb-3">Volver</a>
    <form action="{{ route('estilos.update', $estilo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="{{ $estilo->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="dificultad">dificultad:</label>
            <input type="text" class="form-control" name="dificultad" value="{{ $estilo->dificultad }}" required>
        </div>
        <br>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection