<?php

function getData($conexion)
{
    $sql = "SELECT * FROM reports_db.reports";
    $res = $conexion->query($sql);

    if ($res === false) {
        die("Error en la consulta: " . $conexion->error);
    }
    $data = [];

    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            $data[] = $row;
        }
    }
    return $data;
}
