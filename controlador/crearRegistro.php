<?php
include "conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userName = $_POST['user_name'];
    $userEmail = $_POST['user_email'];

    $sql = "INSERT INTO reports_db.reports (user_name, user_email) VALUES ('$userName', '$userEmail')";

    if ($conexion->query($sql)) {
        // Redirigir al usuario de vuelta a registros.php
        header("Location: ../index.php?page=registros");
        exit; // Asegúrate de detener la ejecución del script después de redirigir
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }

    // Cerrar la conexión
    $conexion->close();
}
