<?php
// dashboardControler.php
include __DIR__ . "/../views/components/dashboardView.php";

include __DIR__ . "/../views/components/crearRegistroView.php";

include __DIR__ . "/../views/components/searchbarView.php";
include __DIR__ . "/../controllers/searchbarController.php";


function dashboardController()
{

    dashboardView();
}
