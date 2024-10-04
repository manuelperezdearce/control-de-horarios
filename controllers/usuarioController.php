<?php

include __DIR__ . "/../views/components/dashboardView.php";
include __DIR__ . "/../views/components/actionsView.php";
include __DIR__ . "/../views/components/searchbarView.php";
include __DIR__ . "/../views/components/crearView.php";
include __DIR__ . "/../views/components/orderByView.php";
include __DIR__ . "/../views/components/editarView.php";
include __DIR__ . "/../views/components/eliminarView.php";


include_once "models/usuarioModel.php";
include "views/components/listaView.php";

class usuarioController
{
    // Constructor para recibir la conexión a la base de datos
    public function __construct(
        private $conexion,
    ) {}
    // Acción 'list' para obtener todos los usuarios
    public function list()
    {
        dashboardView();
        // Crear una instancia del modelo
        $usuarioModel = new usuario($this->conexion, null);

        // Obtener todos los usuarios
        $usuarios = $usuarioModel->getAll($this->conexion, null);

        listaView($usuarios);
    }
    public function create()
    {
        $usuarioModel = new usuario($this->conexion, null);
        $usuarios = $usuarioModel->create($this->conexion, null);
        dashboardView();
        listaView($usuarios);
    }
    public function edit()
    {
        $usuarioModel = new usuario($this->conexion, null);
        $usuarios = $usuarioModel->edit($this->conexion, null);
        dashboardView();
        listaView($usuarios);
    }
    public function delete()
    {
        $usuarioModel = new usuario($this->conexion, null);
        $usuarios = $usuarioModel->delete($this->conexion, null);
        dashboardView();
        listaView($usuarios);
    }
    public function search()
    {
        $usuarioModel = new usuario($this->conexion, null);
        $usuarios = $usuarioModel->getAll($this->conexion, null);
        dashboardView();
        listaView($usuarios);
    }
}
