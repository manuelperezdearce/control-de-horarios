<?php

class registro
{
    public function __construct(
        private $conexion,
        private $searchTerm,
    ) {}

    public function getAll($conexion)
    {
        $searchTerm = isset($_POST['buscar']) ? $_POST['buscar'] : null;
        $data = [];
        if ($searchTerm !== null) {
            // Utilizando la inserción directa del término de búsqueda, lo cual NO es recomendado por razones de seguridad
            $searchTerm = '%' . $searchTerm . '%';
            $sql = "SELECT * FROM control_acceso.registros WHERE id LIKE '$searchTerm' OR user_name LIKE '$searchTerm' OR user_email LIKE '$searchTerm'";
        } else {
            $sql = "SELECT * FROM control_acceso.registros";
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
            $rut = $_POST['rut'];
            $pasword = $_POST['password'];
            $tipoRegistro = $_POST['IngresoSalida'];

            // Validar si el email ingresado ya existe
            $sql_check = "SELECT * FROM control_acceso.usuarios WHERE rut = '$rut'";
            $resultado = $conexion->query($sql_check);

            if ($resultado->num_rows > 0) {
                // Insertar el nuevo registro
                $sql = "INSERT INTO control_acceso.registros (usuario_id, tipo) VALUES ('$rut', '$tipoRegistro')";

                if ($conexion->query($sql)) {
                    // Redirigir al usuario de vuelta a registros.php con un mensaje de éxito
                    header("Location: ../index.php?controller=registro&action=list&success=record_added");
                    exit;
                } else {
                    // Redirigir al usuario de vuelta a registros.php con un mensaje de error
                    header("Location: ../index.php?controller=registro&action=list&error=insert_failed");
                    exit;
                }
            } else {
                // Redirigir al usuario de vuelta a registros.php con un mensaje de error
                header("Location: ../index.php?controller=registro&action=list&error=user_404");
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
            $rut = $_POST['user_email'];

            // editar la consula SQL para actualizar el registro

            $sql = "UPDATE control_acceso.registros SET user_name='$userName', user_email='$rut' WHERE id='$fileId'";

            if ($conexion->query($sql)) {
                // Redirigir de nuevo a registros.php después de la actualización
                header("Location: ../index.php?controller=registro&action=list&success=record_edited");
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

            // Crear la consula SQL para actualizar el registro

            $sql = "DELETE FROM control_acceso.registros WHERE id='$fileId'";

            if ($conexion->query($sql)) {
                // Redirigir de nuevo a registros.php después de la actualización
                header("Location: ../index.php?controller=registro&action=list&success=record_ereased");
                exit;
            } else {
                echo "Error: " . $sql . "<br>" . $conexion->error;
            }
            // Cerrar la conexión
            $conexion->close();
        }
    }
}
