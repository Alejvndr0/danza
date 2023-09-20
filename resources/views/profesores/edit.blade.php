@extends('layouts.crud')

@section('content')
<div class="container">
    <h2>Editar usuario</h2>
    <form action="{{ route('estudiantes.update', $estudiante->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="{{ $estudiante->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="apellido">apellidos:</label>
            <input type="text" class="form-control" name="apellido" value="{{ $estudiante->apellido }}" required>
        </div>
        <div class="form-group">
            <label for="fecha">fecha de nacimiento:</label>
            <input type="date" class="form-control" name="fecha_nac" value="{{ $estudiante->fecha_nac }}" required>
        </div>
        <div class="form-group">
            <label for="correo">correo:</label>
            <input type="text" class="form-control" name="correo" value="{{ $estudiante->correo }}" required>
        </div>
        <div class="form-group">
            <label for="direccion">direccion:</label>
            <input type="text" class="form-control" name="direccion" value="{{ $estudiante->direccion }}" required>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection