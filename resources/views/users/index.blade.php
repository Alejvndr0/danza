@extends('layouts.crud')

@section('content')
<div class="container">
    <h2>Listado de usuarios</h2>
    <a href="{{ route('users.create') }}" class="btn btn-primary">Crear usuario</a>
    <a href="{{route('estudiantes.index')}}" class="btn btn-primary">estudiantes</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>correo</th>
                <th>contraseña</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{$user->password}}</td>
                    <td>
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">Ver</a>
                        <br/>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Editar</a>
                        <br/>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection