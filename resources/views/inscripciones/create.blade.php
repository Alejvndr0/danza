@extends('layouts.crud')

@section('content')
    <h1>Registrar Inscripción</h1>

    <form method="POST" action="{{ route('inscripciones.store') }}">
        @csrf

        <div class="form-group">
            <label for="fecha_inscripcion">Fecha de Inscripción:</label>
            <input type="date" name="fecha_inscripcion" id="fecha_inscripcion" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="estado_pago">Estado de Pago:</label>
            <select name="estado_pago" id="estado_pago" class="form-control" required>
                <option value="Pagado">Pagado</option>
                <option value="Pendiente">Pendiente</option>
            </select>
        </div>

        <div class="form-group">
            <label for="num_pago">Número de Pago:</label>
            <input type="text" name="num_pago" id="num_pago" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="id_estudiante">Estudiante:</label>
            <select name="id_estudiante" id="id_estudiante" class="form-control" required>
                @foreach ($estudiantes as $estudiante)
                    <option value="{{ $estudiante->id }}">{{ $estudiante->nombre }} {{ $estudiante->apellido }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="id_clase">Clase:</label>
            <select name="id_clase" id="id_clase" class="form-control" required>
                @foreach ($clases as $clase)
                    <option value="{{ $clase->id }}">{{ $clase->nombre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Registrar Inscripción</button>
    </form>
@endsection
