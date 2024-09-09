<?php
// crearRegistrosController.php

include_once __DIR__ . "/../models/conexion.php";
include_once __DIR__ . "/../models/crearRegistro.php";

function crearRegistroController()
{
    // Manejar conexión a la base de datos
    $conexion = handleConexion();

    if ($conexion->connect_error) {
        die("Error de conexión a la base de datos: " . $conexion->connect_error);
    }

    // Ejecutar la lógica para crear el registro
    try {
        crearRegistroModel($conexion);
    } catch (Exception $e) {
        // Registrar o mostrar el error de manera controlada
        echo "Error: " . $e->getMessage();
    }

    // Cerrar la conexión después de la operación
    $conexion->close();
}

// Ejecutar el controlador
crearRegistroController();
