<?php
// editarRegistrosController.php

include_once __DIR__ . "/../models/conexion.php";
include_once __DIR__ . "/../models/editarRegistro.php";
include_once __DIR__ . "/../views/editarRegistroView.php";


function editarRegistroController()
{
    // Manejar conexión a la base de datos
    $conexion = handleConexion();

    if ($conexion->connect_error) {
        die("Error de conexión a la base de datos: " . $conexion->connect_error);
    }

    // Ejecutar la lógica para editar el registro
    try {
        editarRegistroModel($conexion);
    } catch (Exception $e) {
        // Registrar o mostrar el error de manera controlada
        echo "Error: " . $e->getMessage();
    }

    // Cerrar la conexión después de la operación
    $conexion->close();
}

// Ejecutar el controlador
editarRegistroController();
