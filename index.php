<!-- /index.php -->

<?php

include_once __DIR__ . "/models/conexion.php";


// Obtener el controlador y la acción desde la URL
$controllerName = isset($_GET['controller']) ? $_GET['controller'] . 'Controller' : 'homeController';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// Ruta básica para encontrar los controladores
$controllerPath = __DIR__ . "/controllers/" . $controllerName . ".php";

?>
<html>
<?php include __DIR__ . "/views/components/head.php"; ?>
<?php include __DIR__ . "/views/components/headerView.php"; ?>

<body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">
    <main class="px-2 min-h-full max-w-[1400px] m-auto d-flex flex-column [&>article]:my-4 [&>article]:bg-slate-50 [&>*]:rounded-md [&>*]:p-3">
        <?php
        if (file_exists($controllerPath)) {
            include_once $controllerPath;
            // Crear instancia del controlador y llamar a la acción
            $controller = new $controllerName($conexion = handleConexion()); // Suponiendo que $conexion es tu conexión a la BD
            if (method_exists($controller, $action)) {
                $controller->$action();
            } else {
                echo "La acción no existe.";
            }
        } else {
            echo "El controlador no existe.";
        }

        ?>
    </main>
    <?php include __DIR__ . "/views/components/footerView.php"; ?>



    <!-- JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>