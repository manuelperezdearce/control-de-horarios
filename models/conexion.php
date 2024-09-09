<?php
// conexion.php

function handleConexion()
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "reports_db";
    $port = 3306;
    $socket = null;

    // Crear la conexión
    $conexion = new mysqli($hostname, $username,  $password, $database, $port, $socket);

    // Establecer el charset para evitar problemas con acentos
    $conexion->set_charset("utf8");

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    return $conexion;
}
