
<?php

include "conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $reportId = $_POST['report_id'];

    // Crear la consula SQL para actualizar el registro

    $sql = "DELETE FROM reports_db.reports WHERE report_id='$reportId'";

    if ($conexion->query($sql)) {
        // Redirigir de nuevo a registros.php después de la actualización
        header("Location: ../index.php?page=registros");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }

    // Cerrar la conexión
    $conexion->close();
}
