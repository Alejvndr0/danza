<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Editar estilo</h5>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="container">
        <a href="{{route('estilos.index')}}" class="btn btn-primary mb-3">Volver</a>
        <form action="{{ route('estilos.update', $estilo->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" value="{{ $estilo->nombre }}" required>
            </div>
            <div class="form-group">
                <label for="dificultad">dificultad:</label>
                <input type="text" class="form-control" name="dificultad" value="{{ $estilo->dificultad }}" required>
            </div>
            <br>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success">Guardar cambios</button>
            </div>
        </form>
    </div>
</div>