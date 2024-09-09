<?php
// tablaRegistrosController.php
include_once "models/getData.php";
include_once "views/components/tablaRegistros.php";
include "models/conexion.php";

// Función principal del controlador
function tablaRegistrosController()
{
    $conexion = handleConexion();
    // Obtención de los registros desde el modelo
    $registros = getData($conexion);
    // Pasar los registros al componente vista
    tablaRegistrosView($registros);
}
