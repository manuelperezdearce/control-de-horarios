 <?php
    //components/reportesView.php
    // include "controllers/dashboardController.php";
    function reportesView($reportes)
    {

    ?>
     <span class="ms-auto px-2">
         <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['buscarreportes'])): ?>
             Se encontraron <b><?php echo count($reportes); ?></b> reportes para la búsqueda de:
             <b>"<?php echo $_POST['buscarreportes']; ?>"</b>
         <?php else: ?>
             Se encontraron <b><?php echo count($reportes); ?></b> reportes en total.
         <?php endif; ?>
     </span>
     <article class="w-full table-responsive max-w-[1400px] mx-auto shadow-md">
         <table class="table">
             <thead>
                 <tr class="bg-secondary">
                     <th class="text-center" scope="col">ID</th>
                     <th class="text-center" scope="col">Creado</th>
                     <th class="text-center" scope="col">Última actualización</th>
                     <th class="text-center" scope="col">Acciones</th>
                 </tr>
             </thead>
             <tbody>
                 <?php foreach ($reportes as $reporte) { ?>
                     <tr>
                         <td class="text-center"><?= htmlspecialchars($reporte["report_id"]) ?></td>
                         <td class="text-center"><?= htmlspecialchars($reporte["created_at"]) ?></td>
                         <td class="text-center"><?= htmlspecialchars($reporte["updated_at"]) ?></td>
                         <td class="text-center">
                             <!-- Ejemplo de cómo podrías organizar el modal para edición -->
                             <a class="btn btn-warning" href="" data-bs-toggle="modal" data-bs-target="#editModal<?= $reporte['report_id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>

                             <!-- Modal Structure -->
                             <div class="modal fade" id="editModal<?= $reporte['report_id'] ?>" tabindex="-1" role="dialog">
                                 <div class="modal-dialog" role="document">
                                     <div class="modal-content">
                                         <form action="/controllers/editarRegistroController.php" method="post">
                                             <div class="modal-header">
                                                 <h5 class="modal-title">Editar Registro</h5>
                                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                             </div>
                                             <div class="modal-body">
                                                 <input type="hidden" name="id" value="<?= $reporte['report_id'] ?>">
                                                 <div class="mb-3">
                                                     <label for="name<?= $reporte['report_id'] ?>" class="form-label">Nombre:</label>
                                                     <input type="text" class="form-control" id="name<?= $reporte['report_id'] ?>" name="user_name" value="<?= $reporte['user_name'] ?>">
                                                 </div>
                                                 <div class="mb-3">
                                                     <label for="email<?= $reporte['report_id'] ?>" class="form-label">Email:</label>
                                                     <input type="email" class="form-control" id="email<?= $reporte['report_id'] ?>" name="user_email" value="<?= $reporte['user_email'] ?>">
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
                             <form action="index?controller=reporte&action=delete" method="post" style="display:inline;">
                                 <input type="hidden" name="id" value="<?= htmlspecialchars($reporte['report_id']) ?>">
                                 <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este reporte?');">
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
