
<?php
// buscarRegistros.php

function buscarRegistrosModel($conexion)
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $searchValue = $_POST['buscarRegistros'];

        // Crear la consula SQL para buscar en id, user_name y user_email

        $sql = "SELECT *
        FROM reports_db.files
        WHERE id LIKE '%$searchValue%' OR user_name LIKE '%$searchValue%' OR user_email LIKE '%$searchValue%'";

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
}
