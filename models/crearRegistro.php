<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userName = $_POST['user_name'];
    $userEmail = $_POST['user_email'];

    /// Validar si el email ingresado ya existe


    $sql_check = "SELECT * FROM reports_db.reports WHERE user_email = '$userEmail'";
    $resultado = $conexion->query($sql_check);

    if ($resultado->num_rows > 0) {

        // Redirigir al usuario de vuelta a registros.php
        header("Location: ../index.php?page=registros");
        echo "Error: Ya existe un registro con este email";
        // exit; // Asegúrate de detener la ejecución del script después de redirigir

    } else {
        $sql = "INSERT INTO reports_db.reports (user_name, user_email) VALUES ('$userName', '$userEmail')";

        if ($conexion->query($sql)) {
            // Redirigir al usuario de vuelta a registros.php
            header("Location: ../index.php?page=registros");
            exit; // Asegúrate de detener la ejecución del script después de redirigir
        } else {
            // Redirigir al usuario de vuelta a registros.php
            header("Location: ../index.php?page=registros");
            exit; // Asegúrate de detener la ejecución del script después de redirigir
            echo "Error: " . $sql . "<br>" . $conexion->error;
        }
    }

    // Cerrar la conexión
    $conexion->close();
}
