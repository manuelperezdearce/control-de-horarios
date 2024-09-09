<?php

// crearRegistro.php
function crearRegistroModel($conexion)
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $userName = $_POST['user_name'];
        $userEmail = $_POST['user_email'];

        // Validar si el email ingresado ya existe
        $sql_check = "SELECT * FROM reports_db.reports WHERE user_email = '$userEmail'";
        $resultado = $conexion->query($sql_check);

        if ($resultado->num_rows > 0) {
            // Redirigir al usuario de vuelta a registros.php con un mensaje de error
            header("Location: ../index.php?page=registros&error=email_exists");
            exit;
        } else {
            // Insertar el nuevo registro
            $sql = "INSERT INTO reports_db.reports (user_name, user_email) VALUES ('$userName', '$userEmail')";

            if ($conexion->query($sql)) {
                // Redirigir al usuario de vuelta a registros.php con un mensaje de éxito
                header("Location: ../index.php?page=registros&success=record_added");
                exit;
            } else {
                // Redirigir al usuario de vuelta a registros.php con un mensaje de error
                header("Location: ../index.php?page=registros&error=insert_failed");
                exit;
            }
        }

        // Cerrar la conexión
        $conexion->close();
    }
}
