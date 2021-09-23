<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $dat['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Consulta</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="correo.php" method="post">
                    <h5 class="text-center"><?php echo $dat['nombre'] ?></h2>
                        <input type="hidden" id="tipo" name="tipo" value="2" class="form-control" />
                        <input type="hidden" id="asunto" name="asunto" value="Servicio  <?php echo $dat['nombre'] ?>" class="form-control" />
                        <div class="form mb-4">
                            <textarea id="descripcion" name="descripcion" class="form-control" rows="3" disabled><?php echo $dat['descripcion'] ?></textarea>
                        </div>
                        <!-- Email input -->
                        <div class="form mb-4">
                            <input type="text" name="nombre" id="nombre" class="form-control" required />
                            <label class="form-label" for="form1Example1">Nombres</label>
                        </div>

                        <!-- Password input -->
                        <div class="form mb-4">
                            <input type="number" name="telefono" id="telefono" class="form-control" required />
                            <label class="form-label" for="form1Example2">telefono</label>
                        </div>
                        <div class="form mb-4">
                            <textarea class="form-control" name="mensaje" id="mensaje" rows="4" required></textarea>
                            <label class="form-label" for="form4Example3">Mensaje</label>
                        </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                    Cerrar
                </button>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
            </form>
        </div>
    </div>
</div>