<?php
include_once("./conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'post') {
    $userName = $conexion->real_escape_string($_POST['user_name']);
    $userEmail = $conexion->real_escape_string($_POST['user_email']);

    $sql = "INSERT INTO reports_db.reports (user_name, user_email) VALUES ('$userName', '$userEmail')";

    if ($conexion->query($sql) === TRUE) {
        // Redirige a la página principal después de un éxito
        header("Location: index.php?status=success");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
}

$conexion->close();
