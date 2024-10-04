<?php

class usuario
{
    public function __construct(
        private $conexion,
        private $searchTerm,
    ) {}

    public function getAll($conexion, $searchTerm)
    {
        $searchTerm = isset($_POST['buscar']) ? $_POST['buscar'] : null;
        $data = [];
        if ($searchTerm !== null) {
            // Utilizando la inserción directa del término de búsqueda, lo cual NO es recomendado por razones de seguridad
            $searchTerm = '%' . $searchTerm . '%';
            $sql = "SELECT * FROM control_acceso.usuarios WHERE id LIKE '$searchTerm'";
        } else {
            $sql = "SELECT * FROM control_acceso.usuarios";
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
            $password = $_POST['password'];
            $role = $_POST['rol'];

            // Validar si el email ingresado ya existe
            $sql_check = "SELECT * FROM control_acceso.usuarios WHERE rut = '$rut'";
            $resultado = $conexion->query($sql_check);

            if ($resultado->num_rows > 0) {
                // Redirigir al usuario de vuelta a usuarios.php con un mensaje de error
                header("Location: ../index.php?controller=usuario&action=list&error=email_exists");
                exit;
            } else {
                // Insertar el nuevo usuario
                $sql = "INSERT INTO control_acceso.usuarios (rut, password, role) VALUES ('$rut','$password','$role')";

                if ($conexion->query($sql)) {
                    // Redirigir al usuario de vuelta a usuarios.php con un mensaje de éxito
                    header("Location: ../index.php?controller=usuario&action=list&success=record_added");
                    exit;
                } else {
                    // Redirigir al usuario de vuelta a usuarios.php con un mensaje de error
                    header("Location: ../index.php?controller=usuario&action=list&error=insert_failed");
                    exit;
                }
            }

            // Cerrar la conexión
            $conexion->close();
        }
    }

    public function edit($conexion)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fileId = $_POST['id'];

            // editar la consula SQL para actualizar el user

            // $sql = "";

            // if ($conexion->query($sql)) {
            //     // Redirigir de nuevo a usuarios.php después de la actualización
            //     header("Location: ../index.php?controller=usuario&action=list&success=record_edited");
            //     exit;
            // } else {
            //     echo "Error: " . $sql . "<br>" . $conexion->error;
            // }
            header("Location: ../index.php?controller=usuario&action=list&success=notworking");
            // Cerrar la conexión
            $conexion->close();
        }
    }
    public function delete($conexion)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fileId = $_POST['id'];

            // Crear la consula SQL para actualizar el user

            $sql = "DELETE FROM control_acceso.usuarios WHERE id='$fileId'";

            if ($conexion->query($sql)) {
                // Redirigir de nuevo a usuarios.php después de la actualización
                header("Location: ../index.php?controller=usuario&action=list&success=record_ereased");
                exit;
            } else {
                echo "Error: " . $sql . "<br>" . $conexion->error;
            }
            // Cerrar la conexión
            $conexion->close();
        }
    }
}
