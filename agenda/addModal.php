


<!-- Modal -->
<div class="modal fade" id="addNew" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Contacto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="agregar.php">
                    <div class="mb-3">
                        <label for=nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" >
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="correo" neme="correo">
                    </div>
                    <div class="mb-3">
                        <label for="direccion">Dirección</label>
                        <textarea class="form-control"  id="direccion" name="direccion"></textarea>

                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" name="add" class="btn btn-primary">Guardar Cambios</button>
            </div>
            </form>
        </div>
    </div>
</div>
