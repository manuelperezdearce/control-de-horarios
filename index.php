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
<html lang="en">

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
    <main class="d-flex flex-row">
        <!-- <h1 class="text-center">Hola Mundo</h1> -->
        <section class="p-4 col-4">
            <form action="">
                <div class="mb-3">
                    <label for="nameForm" class="form-label">Email address</label>
                    <input type="text" class="form-control" id="nameForm" placeholder="Mi name">
                </div>
                <div class="mb-3">
                    <label for="emailForm" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="emailForm" placeholder="name@example.com">
                </div>
                <button
                    name=""
                    id=""
                    class="btn btn-primary"
                    href="#"
                    role="button">Enviar</button>

            </form>
        </section>
        <section class="p-4 col-8">
            <div
                class="table-responsive">
                <table
                    class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($registros as $registro) { ?>
                            <tr class="">
                                <td scope="row"><?= $registro["report_id"] ?></td>
                                <td><?= $registro["user_name"] ?></td>
                                <td><?= $registro["user_email"] ?></td>
                                <td class="">
                                    <a class="btn btn-warning" href=""><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a class="btn btn-danger" href=""><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </section>





        <!-- JavaScript Bootstrap -->
        <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>