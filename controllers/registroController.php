<?php
// registrosController.php
include_once "models/registroModel.php";
include_once "views/registrosView.php";

class registroController
{
    public function __construct(
        private $conexion
    ) {}

    public function list()
    {
        $registroModel = new registro($this->conexion, null);
        $registros = $registroModel->getAll($this->conexion, null);
        registrosView($registros);
    }
    public function create()
    {
        $registroModel = new registro($this->conexion, null);
        $registros = $registroModel->create($this->conexion, null);
        registrosView($registros);
    }
    public function edit()
    {
        $registroModel = new registro($this->conexion, null);
        $registros = $registroModel->edit($this->conexion, null);
        registrosView($registros);
    }
    public function delete()
    {
        $registroModel = new registro($this->conexion, null);
        $registros = $registroModel->delete($this->conexion, null);
        registrosView($registros);
    }
    public function search()
    {
        $registroModel = new registro($this->conexion, null);
        $registros = $registroModel->getAll($this->conexion, null);
        registrosView($registros);
    }
}
