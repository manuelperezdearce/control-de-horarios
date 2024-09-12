<?php

function actionsView()
{ ?>
    <article class="w-full flex flex-col items-start">
        <label for="" class="form-label">Acciones:</label>
        <div class="flex flex-row gap-4">
            <?php crearRegistroView(); ?>
            <?php editarRegistroView(); ?>
            <?php crearRegistroView(); ?>
        </div>
    </article>
<?php }

?>