<?php
// registrosController.php

include_once __DIR__ . "/../controllers/dashboardController.php";
include __DIR__ . "/../controllers/tablaRegistrosController.php";

include_once __DIR__ . "/../models/conexion.php";
include_once __DIR__ . "/../models/getData.php";

// Obtener datos
$conexion = handleConexion();
// Obtención del término de búsqueda desde el POST
$searchTerm = isset($_POST['buscarRegistros']) ? $_POST['buscarRegistros'] : null;
// Obtención de los registros desde el modelo, filtrados por término de búsqueda
$registros = getData($conexion, $searchTerm);

// Llamar al controlador para renderizar el dashboard
dashboardController();
// Llamar al controlador para renderizar la tabla
tablaRegistrosController($registros);
