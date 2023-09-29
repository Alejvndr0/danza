@extends('layouts.crud')

@section('content')
    <h1>Registrar Pago</h1>

    <form method="POST" action="{{ route('pagos.store') }}">
        @csrf

        <div class="form-group">
            <label for="fecha_pago">Fecha de Pago:</label>
            <input type="date" name="fecha_pago" id="fecha_pago" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="monto">Monto:</label>
            <input type="number" name="monto" id="monto" class="form-control" step="0.01" required>
        </div>

        <div class="form-group">
            <label for="id_inscripcion">Inscripción:</label>
            <select name="id_inscripcion" id="id_inscripcion" class="form-control" required>
                @foreach ($inscripciones as $inscripcion)
                    <option value="{{ $inscripcion->id }}">{{ $inscripcion->id }} - {{ $inscripcion->estudiante->nombre }}
                        {{ $inscripcion->estudiante->apellido }} - {{ $inscripcion->clase->nombre ?? 'no asignado' }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Registrar Pago</button>
    </form>
@endsection
