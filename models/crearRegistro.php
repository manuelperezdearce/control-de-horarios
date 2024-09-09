<?php
// crearRegistro.php
function crearRegistroModel($conexion)
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Sanitizar entradas para evitar ataques XSS
        $userName = htmlspecialchars($_POST['user_name']);
        $userEmail = htmlspecialchars($_POST['user_email']);

        /// Validar si el email ingresado ya existe usando consultas preparadas
        $sql_check = "SELECT * FROM reports_db.reports WHERE user_email = ?";
        $stmt = $conexion->prepare($sql_check);
        $stmt->bind_param("s", $userEmail);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows > 0) {
            // Redirigir con mensaje de error si ya existe el email
            header("Location: ../index.php?page=registros&error=email_exists");
            exit;
        } else {
            // Insertar nuevo registro usando consultas preparadas
            $sql = "INSERT INTO reports_db.reports (user_name, user_email) VALUES (?, ?)";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param("ss", $userName, $userEmail);

            if ($stmt->execute()) {
                // Redirigir al usuario de vuelta a registros.php
                header("Location: ../index.php?page=registros&success=record_added");
                exit;
            } else {
                // Redirigir con mensaje de error si hubo un fallo al insertar
                header("Location: ../index.php?page=registros&error=insert_failed");
                exit;
            }
        }

        // Cerrar la conexión
        $stmt->close();
        $conexion->close();
    }
}
