<?php include("./views/components/head.php"); ?>

<body>
    <?php include("./views/components/header.php"); ?>
    <main class="max-w-[1400px] m-auto d-flex flex-column [&>*]:p-6">
        <?php

        // Obtener la página solicitada desde la URL, por ejemplo, ?page=about
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        // Ruteo básico
        switch ($page) {
            case 'registros':
                include_once 'views/registrosView.php';
                registrosView();
                break;
            case 'home':
            default:
                include_once 'controllers/homeController.php';
                home();
                break;
        }
        ?>
    </main>
    <!-- JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>