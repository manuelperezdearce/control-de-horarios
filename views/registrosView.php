 <?php
    //components/registrosView.php

    function registrosView()
    { ?>
     <section class="flex flex-column gap-4 lg:p-4 p-2 mx-auto w-full">
         <?php include(__DIR__ . "/../controllers/registrosController.php"); ?>
     </section>

 <?php } ?>