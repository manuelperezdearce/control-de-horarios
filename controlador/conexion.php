<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "reports_db";
$port = 3306;
$socket = null;


$conexion = new mysqli($hostname, $username,  $password, $database, $port, $socket);
$conexion->set_charset("utf8");

echo $conexion->connect_error;
