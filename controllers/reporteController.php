<?php

include_once "models/reporteModel.php";
include_once "views/reportesView.php";

class reporteController
{
    // Constructor para recibir la conexión a la base de datos
    public function __construct(
        private $conexion,
    ) {}
    // Acción 'list' para obtener todos los reportes
    public function list()
    {
        // Crear una instancia del modelo
        $reportModel = new reporte($this->conexion, null);

        // Obtener todos los reportes
        $reportes = $reportModel->getAll($this->conexion, null);
        reportesView($reportes);
    }
    public function create()
    {
        $reporteModel = new reporte($this->conexion, null);
        $reportes = $reporteModel->create($this->conexion, null);
        reportesView($reportes);
    }
    public function edit()
    {
        $reporteModel = new reporte($this->conexion, null);
        $reportes = $reporteModel->edit($this->conexion, null);
        reportesView($reportes);
    }
    public function delete()
    {
        $reporteModel = new reporte($this->conexion, null);
        $reportes = $reporteModel->delete($this->conexion, null);
        reportesView($reportes);
    }
    public function search()
    {
        $reporteModel = new reporte($this->conexion, null);
        $reportes = $reporteModel->getAll($this->conexion, null);
        reportesView($reportes);
    }
}
