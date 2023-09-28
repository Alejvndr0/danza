@extends('layouts.crud')

@section('content')
    <div class="container">
    <h1>Lista de Pagos</h1>
    <a href="{{route('users.index')}}" class="btn btn-primary mb-3">Volver</a>
    <a href="{{ route('pagos.create') }}" class="btn btn-primary mb-3">registrar pago</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha de Pago</th>
                <th>Monto</th>
                <th>Inscripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pagos as $pago)
                <tr>
                    <td>{{ $pago->id }}</td>
                    <td>{{ $pago->fecha_pago }}</td>
                    <td>{{ $pago->monto }}</td>
                    <td>{{ $pago->inscripcion->id }} - {{ $pago->inscripcion->estudiante->nombre }} {{ $pago->inscripcion->estudiante->apellido }} - {{ $pago->inscripcion->clase->nombre ??'no asignado' }}</td>
                    <td>
                        <a href="{{ route('pagos.edit', $pago->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('pagos.destroy', $pago->id) }}" method="POST" style="display: inline">
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