@extends('layouts.crud')

@section('content')
<div class="container">
    <h2>Crear profesor</h2>
    <a href="{{route('profesores.index')}}" class="btn btn-primary mb-3">Volver</a>
    <form action="{{ route('profesores.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="apellido">apellidos:</label>
            <input type="text" class="form-control" name="apellido" required>
        </div>
        <div class="form-group">
            <label for="correo">correo:</label>
            <input type="email" class="form-control" name="correo" required>
        </div>
        <div class="form-group">
            <label for="telefono">telefono:</label>
            <input type="text" class="form-control" name="telefono" required>
        </div>
        <div class="form-group">
            <label for="direccion">direccion:</label>
            <input type="text" class="form-control" name="direccion" required>
        </div>
        <br>
        <button type="submit" class="btn btn-success mb-3">Guardar</button>
    </form>
</div>
@endsection