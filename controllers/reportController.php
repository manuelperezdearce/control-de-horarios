<?php

include_once "models/reporteModel.php";
include_once "views/reportesView.php";

class reportController
{

    // Acción 'list' para obtener todos los reportes
    public function list()
    {
        // Crear una instancia del modelo
        $reportModel = new report($this->conexion, null);

        // Obtener todos los reportes
        $reports = $reportModel->getAll($this->conexion, null);
        reportesView($reports);
    }

    // Constructor para recibir la conexión a la base de datos
    public function __construct(
        private $conexion,
    ) {}
}
