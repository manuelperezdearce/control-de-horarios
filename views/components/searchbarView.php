<?php
//components/searchbarView.php
function searchbarView()
{
?> <form action="index?controller=registro&action=search" method="post" class="w-full">
        <div class="w-full my-auto">
            <label for="" class="form-label">Buscar</label>
            <div class="flex flex-row relative">
                <input
                    autofocus
                    type="text"
                    class="form-control rounded-start"
                    name="buscarRegistros"
                    id="buscarRegistros"
                    aria-describedby="helpId"
                    placeholder="Ingrese ID, Nombre o Email"
                    value=<?php echo isset($_POST['buscarRegistros']) ? $_POST['buscarRegistros'] : null ?>>


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