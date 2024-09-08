<?php

include 'views/components/dashboardView.php';
include_once "models/conexion.php";

include_once "models/crearRegistro.php";
include 'views/components/crearRegistroView.php';

include 'views/components/searchbarView.php';
include 'controllers/searchbarController.php';


function dashboardController()
{
    $conexion = handleConexion();

    dashboardView();
}
