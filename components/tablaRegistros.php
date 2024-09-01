<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($registros as $registro) { ?>
                <tr class="">
                    <td scope="row"><?= $registro["report_id"] ?></td>
                    <td><?= $registro["user_name"] ?></td>
                    <td><?= $registro["user_email"] ?></td>
                    <td class="">
                        <a class="btn btn-warning" href="" data-bs-toggle="modal"
                            data-bs-target="#modalId"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a class="btn btn-danger" href=""><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>

                <!-- Modal Body -->
                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                <div
                    class="modal fade"
                    id="modalId"
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
                                <form action="" method="post">
                                    <div class="mb-3">
                                        <label name="user_name" for="nameForm" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" id="nameForm" value=<?= $registro["user_name"] ?>>
                                    </div>
                                    <div class="mb-3">
                                        <label name="user_email" for="emailForm" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="emailForm" value=<?= $registro["user_email"] ?>>
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