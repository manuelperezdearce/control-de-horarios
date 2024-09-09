<?php
// eliminarRegistrosController.php

include_once __DIR__ . "/../models/conexion.php";
include_once __DIR__ . "/../models/eliminarRegistro.php";
include_once __DIR__ . "/../views/eliminarRegistroView.php";


function eliminarRegistroController()
{
    // Manejar conexión a la base de datos
    $conexion = handleConexion();

    if ($conexion->connect_error) {
        die("Error de conexión a la base de datos: " . $conexion->connect_error);
    }

    // Ejecutar la lógica para eliminar el registro
    try {
        eliminarRegistroModel($conexion);
    } catch (Exception $e) {
        // Registrar o mostrar el error de manera controlada
        echo "Error: " . $e->getMessage();
    }

    // Cerrar la conexión después de la operación
    $conexion->close();
}

// Ejecutar el controlador
eliminarRegistroController();
