<?php
// tablaRegistrosController.php

include_once __DIR__ . "/../views/components/tablaRegistros.php";

function tablaRegistrosController($registros)
{
    // Pasar los registros al componente vista para mostrar
    tablaRegistrosView($registros);
}
