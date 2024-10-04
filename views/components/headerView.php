<!-- //components/header.php -->

<header class="bg-warning shadow-md">

    <nav class="navbar navbar-expand-lg max-w-[1400px] mx-auto">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php?controller=home&action=view">Control de Horarios</a>
            <button class="lg:hidden" type="button" id="burgerButton">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="w-full flex navbar-menu lg:block" id="navbarNav">
                <ul class="flex flex-col lg:flex-row gap-2 ms-auto justify-end w-full [&>*]:[&>*]:my-auto [&>*]:[&>*]:mx-2 [&>*]:[&>*]:flex [&>*]:[&>*]:gap-2">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=home&action=view"><i class="fa-solid fa-house"></i>Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=registro&action=list"><i class="fa-solid fa-file"></i>Registros</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=reporte&action=list"><i class="fa-solid fa-folder"></i>Reportes</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=usuario&action=list"><i class="fa-solid fa-user"></i>Usuarios</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Mi perfil</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <script>
        const burgerButton = document.querySelector("#burgerButton");
        const menu = document.querySelector("#navbarNav");
        burgerButton.addEventListener('click', () => {
            console.log("Hiciste clic al botón burger");

            // Alternar la clase 'active' para mostrar/ocultar el menú
            menu.classList.toggle("active");
        });
    </script>

    <style>
        /* Estilos para mostrar/ocultar el menú */
        .navbar-menu {
            display: block;
        }

        .navbar-menu.active {
            display: none;
        }
    </style>

</header>