<?php

include("controllers/tablaRegistrosController.php");
include("controllers/dashboardController.php");

function registrosController()
{
    // Llamar al controlador para renderizar el dashboard
    dashboardController();
    // Llamar al controlador para renderizar la tabla
    tablaRegistrosController();
}
