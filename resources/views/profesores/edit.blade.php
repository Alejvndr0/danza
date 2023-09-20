@extends('layouts.crud')

@section('content')
<div class="container">
    <h2>Editar profesor</h2>
    <a href="{{route('profesores.index')}}" class="btn btn-primary mb-3">Volver</a>
    <form action="{{ route('profesores.update', $profesor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="{{ $profesor->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="apellido">Apellidos:</label>
            <input type="text" class="form-control" name="apellido" value="{{ $profesor->apellido }}" required>
        </div>
        <div class="form-group">
            <label for="correo">Correo:</label>
            <input type="email" class="form-control" name="correo" value="{{ $profesor->correo }}" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" class="form-control" name="telefono" value="{{ $profesor->telefono }}" required>
        </div>
        <div class="form-group">
            <label for="direccion">Dirección:</label>
            <input type="text" class="form-control" name="direccion" value="{{ $profesor->direccion }}" required>
        </div>
        <br>
        <button type="submit" class="btn btn-success mb-3">Actualizar</button>
    </form>
</div>
@endsection