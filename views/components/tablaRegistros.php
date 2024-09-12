<?php
// Vista (Componente) - tablaRegistros.php
function tablaRegistrosView($registros)
{
?>
    <span class="ms-auto px-2">
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['buscarRegistros'])): ?>
            Se encontraron <b><?php echo count($registros); ?></b> registros para la búsqueda de:
            <b>"<?php echo $_POST['buscarRegistros']; ?>"</b>
        <?php else: ?>
            Se encontraron <b><?php echo count($registros); ?></b> registros en total.
        <?php endif; ?>
    </span>
    <article class="w-full table-responsive max-w-[1400px] mx-auto shadow-md">
        <table class="table">
            <thead>
                <tr class="bg-secondary">
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Creado</th>
                    <th scope="col">Última actualización</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($registros as $registro) { ?>
                    <tr>
                        <td><?= htmlspecialchars($registro["report_id"]) ?></td>
                        <td><?= htmlspecialchars($registro["user_name"]) ?></td>
                        <td><?= htmlspecialchars($registro["user_email"]) ?></td>
                        <td><?= htmlspecialchars($registro["create_at"]) ?></td>
                        <td><?= htmlspecialchars($registro["updated_at"]) ?></td>
                        <td>
                            <!-- Ejemplo de cómo podrías organizar el modal para edición -->
                            <a class="btn btn-warning" href="" data-bs-toggle="modal" data-bs-target="#editModal<?= $registro['report_id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>

                            <!-- Modal Structure -->
                            <div class="modal fade" id="editModal<?= $registro['report_id'] ?>" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form action="/controllers/editarRegistroController.php" method="post">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Editar Registro</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" name="report_id" value="<?= $registro['report_id'] ?>">
                                                <div class="mb-3">
                                                    <label for="name<?= $registro['report_id'] ?>" class="form-label">Nombre:</label>
                                                    <input type="text" class="form-control" id="name<?= $registro['report_id'] ?>" name="user_name" value="<?= $registro['user_name'] ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="email<?= $registro['report_id'] ?>" class="form-label">Email:</label>
                                                    <input type="email" class="form-control" id="email<?= $registro['report_id'] ?>" name="user_email" value="<?= $registro['user_email'] ?>">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <form action="/controllers/eliminarRegistroController.php" method="post" style="display:inline;">
                                <input type="hidden" name="report_id" value="<?= htmlspecialchars($registro['report_id']) ?>">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este registro?');">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </article>
<?php
}
