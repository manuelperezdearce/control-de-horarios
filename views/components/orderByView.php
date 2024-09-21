<?php
function orderByView()
{ ?>
    <article class="w-full">
        <label for="" class="form-label w-full">Ordenar por:</label>
        <div class="flex flex-row gap-2 ">
            <div class="input-group flex flex-row">
                <select value="3" class="input-group-text max-w-[100px] [&>*]:text-left" id="inputGroupSelect01">
                    <option value="0">ID</option>
                    <option value="1">Nombre</option>
                    <option value="2">Email</option>
                    <option value="3">Fecha (creado)</option>
                    <option value="4">Fecha (última actualización)</option>
                </select>
                <select class="form-select max-w-[300px]" id="inputGroupSelect01">
                    <option selected>Seleccionar...</option>
                    <option value="1">Ascendente</option>
                    <option value="2">Descendente</option>
                </select>
            </div>
        </div>
    </article>
<?php }
?>