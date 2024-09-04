<?php



function getData()
{

    include_once('controllers/conexion.php');

    $sql = "SELECT * FROM reports_db.reports";
    $res = $conexion->query($sql);

    if ($res === false) {
        die("Error en la consulta: " . $conexion->error);
    }
    $data = [];

    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            $data[] = $row;
        }
    }
    return $data;
}
$registros = getData();
?>


<div class="table-responsive max-w-[1400px] mx-auto">
    <table class="table ">
        <thead>
            <tr class="bg-secondary">
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Creado</th>
                <th scope="col">Última actualización</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($registros as $registro) { ?>
                <tr>
                    <td scope="row"><?= $registro["report_id"] ?></td>
                    <td scope="row"><?= $registro["user_name"] ?></td>
                    <td scope="row"><?= $registro["user_email"] ?></td>
                    <td scope="row"><?= $registro["create_at"] ?></td>
                    <td scope="row"><?= $registro["updated_at"] ?></td>

                    <td class="">
                        <a class="btn btn-warning" href="" data-bs-toggle="modal"
                            data-bs-target="<?= "#modal" . $registro["report_id"] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                        <!-- Formulario para eliminar -->
                        <form action="./controllers/eliminarRegistro.php" method="post" style="display:inline;">
                            <input type="hidden" name="report_id" value="<?= htmlspecialchars($registro['report_id']) ?>">
                            <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token']) ?>">
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este registro?');">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>

                <!-- Modal Body -->
                <div
                    class="modal fade"
                    id="<?= "modal" . $registro["report_id"] ?>"
                    tabindex="-1"
                    data-bs-backdrop="static"
                    data-bs-keyboard="false"
                    role="dialog"
                    aria-labelledby="modalTitleId"
                    aria-hidden="true">
                    <div
                        class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                        role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTitleId">
                                    Editar Registro
                                </h5>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="controllers/editarRegistro.php" method="post">
                                    <input type="hidden" name="report_id" value="<?= $registro["report_id"] ?>">
                                    <div class="mb-3">
                                        <label for="nameForm" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" id="nameForm" name="user_name" value="<?= $registro["user_name"] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailForm" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="emailForm" name="user_email" value="<?= $registro["user_email"] ?>">
                                    </div>
                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                        role="button">Enviar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </tbody>
    </table>
</div>