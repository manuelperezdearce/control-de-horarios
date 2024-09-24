<?php
// Vista (Componente) - listaView.php

function listaView($data)
{
    global $controller;
?>
    <article class="w-full table-responsive max-w-[1400px] mx-auto shadow-md">
        <p class="ms-auto px-2 my-4">
            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['buscarregistros'])): ?>
                Se encontraron <b><?php echo count($data); ?></b> registros para la búsqueda de:
                <b>"<?php echo $_POST['buscarregistros']; ?>"</b>
            <?php else: ?>
                Se encontraron <b><?php echo count($data); ?></b> <?php echo $controller ?> en total.
            <?php endif; ?>
        </p>
        <table class="table">
            <thead>
                <tr class="bg-secondary">
                    <?php foreach (array_keys($data[0]) as $key) { ?>
                        <th class="text-center" scope="col"><?php echo $key ?></th>
                    <?php } ?>
                    <th class="text-center" scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $elemento) { ?>
                    <tr>
                        <?php foreach (array_keys($data[0]) as $key) { ?>
                            <td class="text-center" scope="col"><?php echo ($elemento[$key]) ?></td>
                        <?php } ?>
                        <td class="text-center">
                            <?php editarView($elemento) ?>
                            <?php eliminarView($elemento) ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </article>
<?php
}
