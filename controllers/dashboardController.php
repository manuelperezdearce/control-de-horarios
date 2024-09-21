<?php
// dashboardControler.php
include __DIR__ . "/../views/components/dashboardView.php";
include __DIR__ . "/../views/components/actionsView.php";
include __DIR__ . "/../views/components/searchbarView.php";
include __DIR__ . "/../views/components/crearRegistroView.php";
include __DIR__ . "/../views/components/orderByView.php";
include __DIR__ . "/../views/components/editarRegistroView.php";

function dashboardController()
{
    dashboardView();
}
