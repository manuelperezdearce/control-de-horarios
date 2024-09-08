 <?php

    include("controllers/registrosController.php");


    function registrosView()
    { ?>
     <section class="flex flex-column gap-4 p-4 mx-auto w-full">
         <?php registrosController(); ?>
     </section>

 <?php } ?>