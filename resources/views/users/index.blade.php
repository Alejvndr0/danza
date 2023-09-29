@extends('layouts.inicio')

@section('content')
    <div class="container">
        <h2>Listado de usuarios</h2>
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
                        <td>{{ $user->password }}</td>
                        <td>
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">Ver</a>
                                    </div>
                                    <div class="col">
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Editar</a>
                                    </div>
                                    <div class="col">
                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </div>

                                </div>
                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
