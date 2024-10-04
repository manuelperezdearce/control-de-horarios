<?php

include __DIR__ . "/../views/components/dashboardView.php";
include __DIR__ . "/../views/components/actionsView.php";
include __DIR__ . "/../views/components/searchbarView.php";
include __DIR__ . "/../views/components/crearView.php";
include __DIR__ . "/../views/components/orderByView.php";
include __DIR__ . "/../views/components/editarView.php";
include __DIR__ . "/../views/components/eliminarView.php";


include_once "models/reporteModel.php";
include "views/components/listaView.php";

class reporteController
{
    // Constructor para recibir la conexión a la base de datos
    public function __construct(
        private $conexion,
    ) {}
    // Acción 'list' para obtener todos los reportes
    public function list()
    {
        dashboardView();
        // Crear una instancia del modelo
        $reportModel = new reporte($this->conexion, null);

        // Obtener todos los reportes
        $reportes = $reportModel->getAll($this->conexion, null);

        listaView($reportes);
    }
    public function create()
    {
        $reporteModel = new reporte($this->conexion, null);
        $reportes = $reporteModel->create($this->conexion, null);
        dashboardView();
        listaView($reportes);
    }
    public function edit()
    {
        $reporteModel = new reporte($this->conexion, null);
        $reportes = $reporteModel->edit($this->conexion, null);
        dashboardView();
        listaView($reportes);
    }
    public function delete()
    {
        $reporteModel = new reporte($this->conexion, null);
        $reportes = $reporteModel->delete($this->conexion, null);
        dashboardView();
        listaView($reportes);
    }
    public function search()
    {
        $reporteModel = new reporte($this->conexion, null);
        $reportes = $reporteModel->getAll($this->conexion, null);
        dashboardView();
        listaView($reportes);
    }
}
