<?php
// registrosController.php
include __DIR__ . "/../views/components/dashboardView.php";
include __DIR__ . "/../views/components/actionsView.php";
include __DIR__ . "/../views/components/searchbarView.php";
include __DIR__ . "/../views/components/crearView.php";
include __DIR__ . "/../views/components/orderByView.php";
include __DIR__ . "/../views/components/editarView.php";
include __DIR__ . "/../views/components/eliminarView.php";

include_once "models/registroModel.php";
include "views/components/listaView.php";
class registroController
{
    public function __construct(
        private $conexion
    ) {}

    public function list()
    {
        $registroModel = new registro($this->conexion, null);
        $registros = $registroModel->getAll($this->conexion, null);
        dashboardView();
        listaView($registros);
    }
    public function create()
    {
        $registroModel = new registro($this->conexion, null);
        $registros = $registroModel->create($this->conexion, null);
        dashboardView();
        listaView($registros);
    }
    public function edit()
    {
        $registroModel = new registro($this->conexion, null);
        $registros = $registroModel->edit($this->conexion, null);
        dashboardView();
        listaView($registros);
    }
    public function delete()
    {
        $registroModel = new registro($this->conexion, null);
        $registros = $registroModel->delete($this->conexion, null);
        dashboardView();
        listaView($registros);
    }
    public function search()
    {
        $registroModel = new registro($this->conexion, null);
        $registros = $registroModel->getAll($this->conexion, null);
        dashboardView();
        listaView($registros);
    }
}
