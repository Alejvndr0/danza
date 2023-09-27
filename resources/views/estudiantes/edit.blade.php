
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">editar usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="container">
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
                        <input type="email" class="form-control" name="correo" value="{{ $estudiante->correo }}" required>
                    </div>
                    <div class="form-group">
                        <label for="direccion">direccion:</label>
                        <input type="text" class="form-control" name="direccion" value="{{ $estudiante->direccion }}" required>
                    </div>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save changes</button>
                      </div>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>