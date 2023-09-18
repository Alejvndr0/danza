@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Crear Estudiante</h2>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">correo:</label>
            <input type="text" class="form-control" name="email" required>
        </div>
        <div class="form-group">
            <label for="email">contraseña:</label>
            <input type="text" class="form-control" name="password" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection