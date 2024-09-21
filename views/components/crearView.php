<?php
// components/crearView.php
function crearView()
{
    global $controllerName;
    switch ($controllerName) {

        case 'registroController':
            global $controller;
            $controller = "registro";
            break;
        case 'reporteController':
            global $controller;
            $controller = "reporte";
            break;
    }
?>
    <a class="btn btn-success rounded-full p-0 h-12 w-12 flex items-center justify-center" href="" data-bs-toggle="modal"
        data-bs-target="<?= "#modalCrear" ?>"> <i class="fa-solid fa-plus fs-4 m-3"></i></i></a>
    <div
        class="modal fade"
        id="modalCrear"
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
                        Nuevo <?php echo $controller ?>
                    </h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="max-w-md mx-auto" action="index?controller=<?php echo $controller ?>&action=create" method="post">

                        <?php switch ($controller) {

                            case 'registro':
                        ?>
                                <div class="mb-3">
                                    <label name="user_name" for="nameForm" class="form-label">Nombre</label>
                                    <input name="user_name" type="text" class="form-control" id="nameForm" placeholder="Mi Nombre" required>
                                </div>
                                <div class="mb-3">
                                    <label name="user_email" for="emailForm" class="form-label">Email</label>
                                    <input name="user_email" type="email" class="form-control" id="emailForm" placeholder="nombre@ejemplo.com" required>
                                </div>
                            <?php
                                break;
                            case 'reporte':
                            ?>
                                <div class="mb-3">
                                    <label name="Confirmación" for="reporteForm" class="form-label">¿Desea crear un nuevo reporte?</label>

                                </div>
                        <?php
                                break;
                        }
                        ?>
                        <button
                            type="submit"
                            class="btn btn-primary"
                            role="button">Crear</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>