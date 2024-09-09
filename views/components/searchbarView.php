<?php
//components/searchbarView.php
function searchbarView()
{
?> <form action="" class="ms-auto">
        <div class="min-w-[290px] my-auto">
            <label for="" class="form-label">Buscar</label>
            <div class="flex flex-row relative">
                <input
                    type="text"
                    class="form-control rounded-start"
                    name=""
                    id=""
                    aria-describedby="helpId"
                    placeholder="Ingrese ID, Nombre o Email">

                </input>
                <a href="" class="btn btn-primary">
                    <i class="fa-solid fa-magnifying-glass "></i>
                </a>
            </div>


            <small id="helpId" class="form-text text-muted">Texto de ayuda</small>

        </div>

    </form>


<?php
}
?>