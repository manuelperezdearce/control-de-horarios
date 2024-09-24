<?php
// components/editarView.php
function editarView($elemento)
{
    global $controller;

    // Determinar la clave del ID según el tipo de controlador
    $elementoIDKey = $controller == 'registro' ? 'id' : 'report_id';
    $elementoID = $elemento[$elementoIDKey]; // Obtener el valor del ID
?>
    <!-- Botón para abrir el modal -->
    <a class="btn btn-warning" href="#" data-bs-toggle="modal" data-bs-target="#editModal<?= htmlspecialchars($elementoID) ?>"><i class="fa-solid fa-pen-to-square"></i></a>

    <!-- Estructura del Modal -->
    <div class="modal fade" id="editModal<?= htmlspecialchars($elementoID) ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="index.php?controller=<?= htmlspecialchars($controller) ?>&action=edit" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title">Editar <?= htmlspecialchars($controller) ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Recorremos los elementos del array para crear inputs dinámicos -->
                        <?php foreach ($elemento as $key => $value) { ?>
                            <div class="mb-3">
                                <label for="<?= htmlspecialchars($key . $elementoID) ?>" class="form-label"><?= ucfirst(htmlspecialchars($key)) ?></label>
                                <input type="text" class="form-control" id="<?= htmlspecialchars($key . $elementoID) ?>" name="<?= htmlspecialchars($key) ?>" value="<?= htmlspecialchars($value) ?>">
                            </div>
                        <?php } ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
}
?>