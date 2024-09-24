<?php

function eliminarView($elemento)
{
    global $controller;

    // Determinar el nombre de la clave según el tipo de controlador
    $elementoID = $controller == 'registro' ? 'id' : 'report_id';
    $idValue = $elemento[$elementoID]; // Obtener el valor del ID
?>
    <!-- Botón para abrir el modal de eliminación -->
    <a class="btn btn-danger" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $idValue ?>"><i class="fa-solid fa-trash"></i></a>

    <!-- Estructura del Modal -->
    <div class="modal fade" id="deleteModal<?= $idValue ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Eliminar <?= htmlspecialchars($controller) ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="index.php?controller=<?= htmlspecialchars($controller) ?>&action=delete" method="post" style="display:inline;">
                    <!-- Campo oculto con el ID del elemento -->
                    <input type="hidden" name="<?= $elementoID ?>" value="<?= htmlspecialchars($idValue) ?>">
                    <p class="my-3">¿Desea eliminar el <?= htmlspecialchars($controller); ?> con ID: <?= htmlspecialchars($idValue); ?>?</p>
                    <!-- Botón de eliminar con confirmación -->
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
<?php
}
?>