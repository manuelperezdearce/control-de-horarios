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
        case 'usuarioController':
            global $controller;
            $controller = "usuario";
            break;
        case 'homeController':
            global $controller;
            $controller = "registro";
            break;
    }
?>
    <a class="btn btn-success rounded-full p-0 <?= $controllerName == 'homeController' ? 'w-20 h-20' : 'w-12 h-12' ?> flex items-center justify-center shadow-md" href="" data-bs-toggle="modal"
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
                                    <div class="mb-3">
                                        <label name="rut" for="rutForm" class="form-label">Rut</label>
                                        <input name="rut" type="text" class="form-control" id="rutForm" placeholder="Ingrese ID de Trabajador" required>
                                    </div>
                                    <div class="mb-3">
                                        <label name="password" for="passForm" class="form-label">Contraseña</label>
                                        <input name="password" type="text" class="form-control" id="passForm" placeholder="Ingrese contraseña 4 dígitos" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Tipo de Registro</label>
                                        <select
                                            class="form-select form-select-md"
                                            name="IngresoSalida"
                                            id="IngresoSalida">
                                            <option value="entrada">Entrada</option>
                                            <option value="salida">Salida</option>
                                        </select>
                                    </div>
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
                            case 'usuario':
                            ?>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        <label name="rut" for="rutForm" class="form-label">Rut</label>
                                        <input name="rut" type="text" class="form-control" id="rutForm" placeholder="Ingrese ID de Trabajador" required>
                                    </div>
                                    <div class="mb-3">
                                        <label name="password" for="passForm" class="form-label">Contraseña</label>
                                        <input name="password" type="text" class="form-control" id="passForm" placeholder="Ingrese contraseña 4 dígitos" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Rol de usuario</label>
                                        <select
                                            class="form-select form-select-md"
                                            name="rol"
                                            id="rol">
                                            <option value="3">Usuario</option>
                                            <option value="1">Administrador</option>
                                        </select>
                                    </div>


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