@extends('layouts.crud')

@section('content')
<div class="container">
    <h2>agregar un nuevo estilo</h2>
    <a href="{{route('estilos.index')}}" class="btn btn-primary mb-3">Volver</a>
    <form action="{{ route('estilos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="dificultad">dificultad:</label>
            <input type="text" class="form-control" name="dificultad" required>
        </div>
        <br>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection