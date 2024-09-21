<?php

class report
{
    public function __construct(
        private $conexion,
        private $searchTerm,
    ) {}

    public function getAll($conexion, $searchTerm)
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
    public function getByID() {}

    public function create($conexion)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {


            // Insertar el nuevo report
            $sql = "INSERT INTO reports_db.reports (report_id) VALUES (NULL)";

            if ($conexion->query($sql)) {
                // Redirigir al usuario de vuelta a reports.php con un mensaje de éxito
                header("Location: ../index.php?controller=report&action=list&success=record_added");
                exit;
            } else {
                // Redirigir al usuario de vuelta a reports.php con un mensaje de error
                header("Location: ../index.php?controller=report&action=list&error=insert_failed");
                exit;
            }

            // Cerrar la conexión
            $conexion->close();
        }
    }

    public function edit($conexion)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fileId = $_POST['id'];
            $userName = $_POST['user_name'];
            $userEmail = $_POST['user_email'];

            // editar la consula SQL para actualizar el report

            $sql = "UPDATE reports_db.reports SET user_name='$userName', user_email='$userEmail' WHERE id='$fileId'";

            if ($conexion->query($sql)) {
                // Redirigir de nuevo a reports.php después de la actualización
                header("Location: ../index.php?controller=report&action=list&success=record_edited");
                exit;
            } else {
                echo "Error: " . $sql . "<br>" . $conexion->error;
            }

            // Cerrar la conexión
            $conexion->close();
        }
    }
    public function delete($conexion)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fileId = $_POST['id'];

            // Crear la consula SQL para actualizar el report

            $sql = "DELETE FROM reports_db.reports WHERE id='$fileId'";

            if ($conexion->query($sql)) {
                // Redirigir de nuevo a reports.php después de la actualización
                header("Location: ../index.php?controller=report&action=list&success=record_ereased");
                exit;
            } else {
                echo "Error: " . $sql . "<br>" . $conexion->error;
            }
            // Cerrar la conexión
            $conexion->close();
        }
    }
}
