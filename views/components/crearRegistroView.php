<?php
function crearRegistroView()
{ ?>
    <a class="btn btn-success my-auto" href="" data-bs-toggle="modal"
        data-bs-target="<?= "#modalNuevoRegistro" ?>"> Nuevo registro</a>
    <div
        class="modal fade"
        id="modalNuevoRegistro"
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
                        Nuevo Registro
                    </h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="max-w-md mx-auto" action="models/crearRegistro.php" method="post">
                        <div class="mb-3">
                            <label name="user_name" for="nameForm" class="form-label">Nombre</label>
                            <input name="user_name" type="text" class="form-control" id="nameForm" placeholder="Mi Nombre" required>
                        </div>
                        <div class="mb-3">
                            <label name="user_email" for="emailForm" class="form-label">Email</label>
                            <input name="user_email" type="email" class="form-control" id="emailForm" placeholder="nombre@ejemplo.com" required>
                        </div>
                        <button
                            type="submit"
                            class="btn btn-primary"
                            role="button">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>