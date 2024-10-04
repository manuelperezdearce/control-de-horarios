<?php
// conexion.php


// class conexion
// {

//     function __construct(
//         $hostname = "localhost",
//         $username = "root",
//         $password = "",
//         $database = "reports_db",
//         $port = 3306,
//         $socket = null
//     ) {
//         // Crear la conexión
//         $conexion = new mysqli($hostname, $username, $password, $database, $port, $socket);

//         // Verificar la conexión
//         if ($conexion->connect_error) {
//             die("Error de conexión: " . $conexion->connect_error);
//         }

//         // Establecer el charset para evitar problemas con acentos
//         if (!$conexion->set_charset("utf8")) {
//             die("Error al cargar el conjunto de caracteres utf8: " . $conexion->error);
//         }

//         // Retornar la conexión si todo está bien
//         return $conexion;
//     }
// }



function handleConexion()
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "reports_db";
    $port = 3306;
    $socket = null;


    $conexion = new mysqli($hostname, $username, $password, $database, $port, $socket);

    return $conexion;
}
