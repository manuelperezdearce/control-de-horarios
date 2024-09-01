<?php

include_once("./modelo/conexion.php");


function getData()
{
    global $conexion;
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
$registros = getData();
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDNBootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>CRUD en PHP y MySQL</title>
</head>

<body>
    <main class="d-flex flex-wrap">
        <section class="p-4 col-12 col-md-4">
            <?php if (isset($_GET['status']) && $_GET['status'] === 'success'): ?>
                <div class="alert alert-success" role="alert">
                    Registro creado exitosamente.
                </div>
            <?php endif; ?>
            <?php include("./components/formularioRegistro.php"); ?>
        </section>
        <section class="p-4 col-12 col-md-8">
            <?php include("./components/tablaRegistros.php"); ?>
        </section>
    </main>
    <!-- JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>