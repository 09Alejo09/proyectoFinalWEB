<?php

require '../Modelo/Cargo.php';
require '../DAO/CargoDAO.php';

isset($_REQUEST['nombre']) ? $nombre = $_REQUEST['nombreCargo'] : $nombre = "";
isset($_REQUEST['intensidad']) ? $intensisad = $_REQUEST['intensidad'] : $intensidad = "";
isset($_REQUEST['salario']) ? $salario = $_REQUEST['salario'] : $salario = "";
isset($_REQUEST['descripcion']) ? $descripcion = $_REQUEST['descripcion'] : $descripcion = "";
isset($_REQUEST['type']) ? $accion = $_REQUEST['type'] : $accion = "";

$estudiante = new Cargo($nombre, $intensidad, $salario, $descripcion);
$dao = new CargoDAODAO();

switch ($accion) {
    case "save":
        $dao->guardar($cargo);
        break;
    case "list":
        $dao->listar($cargo);
        break;

    case "search":
        $dao->buscar($cargo);
        break;

    case "update":
        $dao->modificar($cargo);
        break;
    
    case "delete":
        $dao->eliminar($cargo);
        break;
}