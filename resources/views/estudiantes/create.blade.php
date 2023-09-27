

<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">resgistrar estudiante</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="container">
                <form action="{{ route('estudiantes.store') }}" method="POST">
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
                        <label for="fecha">fecha de nacimiento:</label>
                        <input type="date" class="form-control" name="fecha_nac" required>
                    </div>
                    <div class="form-group">
                        <label for="correo">correo:</label>
                        <input type="email" class="form-control" name="correo" required>
                    </div>
                    <div class="form-group">
                        <label for="direccion">direccion:</label>
                        <input type="text" class="form-control" name="direccion" required>
                    </div>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Guardar</button>
                      </div>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>