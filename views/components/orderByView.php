<?php

function orderByView()
{ ?>

    <label for="" class="form-label w-full">Ordenar por:</label>
    <div class="flex flex-row gap-2 ">
        <div class="input-group flex flex-row">
            <select class="input-group-text [&>*]:text-left" id="inputParametro">
                <option value="0">ID</option>
                <option value="1">Nombre</option>
                <option value="2">Email</option>
                <option value="2">Rerporte ID</option>
                <option value="3">Fecha (creado)</option>
                <option value="4">Fecha (última actualización)</option>
            </select>
            <select class="form-select max-w-[300px]" id="inputTipoOrden">
                <option value="1">Ascendente</option>
                <option value="2">Descendente</option>
            </select>
        </div>
    </div>

<?php }
?>