<?php
//components/searchbarView.php
function searchbarView()
{
    global $controllerName;
    switch ($controllerName) {

        case 'registroController':
            global $controller;
            $controller = "registro";
            break;
        case 'reporteController':
            global $controller;
            $controller = "reporte";
            break;
    }
?>
    <form action="index?controller=<?php echo $controller ?>&action=search" method="post" class="w-full lg:w-2/3">
        <div class="w-full my-auto ">
            <label for="" class="form-label">Buscar</label>
            <div class="flex flex-row relative">
                <input
                    autofocus
                    type="text"
                    class="form-control"
                    name="buscar"
                    id="buscar"
                    aria-describedby="helpId"
                    placeholder="Ingrese ID, Nombre o Email"
                    value=<?php echo isset($_POST['buscar']) ? $_POST['buscar'] : null ?>>
                </input>
                <button type="submit" class="py-2 px-3 absolute right-0 hover:scale-[1.1] duration-150">
                    <i class="fa-solid fa-magnifying-glass "></i>
                </button>
            </div>
        </div>
    </form>
<?php
}
?>