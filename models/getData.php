<?php
// getData.php



function getData($conexion, $searchTerm = null)
{
    $data = [];
    if ($searchTerm !== null) {
        // Utilizando la inserción directa del término de búsqueda, lo cual NO es recomendado por razones de seguridad
        $searchTerm = '%' . $searchTerm . '%';
        $sql = "SELECT * FROM reports_db.reports WHERE report_id LIKE '$searchTerm' OR user_name LIKE '$searchTerm' OR user_email LIKE '$searchTerm'";
    } else {
        $sql = "SELECT * FROM reports_db.reports";
    }

    $result = $conexion->query($sql);


    if ($result === false) {
        die("Error en la consulta: " . $conexion->error);
    }

    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    return $data;
}
