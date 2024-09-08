<?php
// Vista (Componente) - tablaRegistros.php
function tablaRegistrosView($registros)
{
?>
    <div class="w-full table-responsive max-w-[1400px] mx-auto">
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
                            <a class="btn btn-warning" href="" data-bs-toggle="modal" data-bs-target="#modal<?= htmlspecialchars($registro["report_id"]) ?>">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="./controllers/eliminarRegistro.php" method="post" style="display:inline;">
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
    </div>
<?php
}
