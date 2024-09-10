<?php
//components/searchbarView.php
function searchbarView()
{
?> <form action="index.php?page=registros" method="post" class="ms-auto">
        <div class="min-w-[290px] my-auto">
            <label for="" class="form-label">Buscar</label>
            <div class="flex flex-row relative">
                <input
                    type="text"
                    class="form-control rounded-start"
                    name="buscarRegistros"
                    id="buscarRegistros"
                    aria-describedby="helpId"
                    placeholder="Ingrese ID, Nombre o Email">

                </input>
                <button type="submit" class="btn btn-primary">
                    <i class="fa-solid fa-magnifying-glass "></i>
                </button>
            </div>


            <small id="helpId" class="form-text text-muted">Texto de ayuda</small>

        </div>

    </form>


<?php
}
?>