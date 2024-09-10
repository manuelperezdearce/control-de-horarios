 <?php
    //components/registrosView.php

    function registrosView()
    { ?>
     <section class="flex flex-column gap-4 p-4 mx-auto w-full">
         <?php include(__DIR__ . "/../controllers/registrosController.php"); ?>
     </section>

 <?php } ?>