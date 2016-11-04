<?php

require '../Modelo/Cargo.php';
require '../DAO/CargoDAO.php';

isset($_REQUEST['nombreCargo']) ? $nombreCargo = $_REQUEST['nombreCargo'] : $nombreCargo = "";
isset($_REQUEST['intensidadHoraria']) ? $intensisadHoraria = $_REQUEST['intensidadHoraria'] : $semestre = "";
isset($_REQUEST['salarioCargo']) ? $salarioCargo = $_REQUEST['salarioCargo'] : $salarioCargo = "";
isset($_REQUEST['descripcionCargo']) ? $descripcionCargo = $_REQUEST['descripcionCargo'] : $descripcionCargo = "";
isset($_REQUEST['type']) ? $accion = $_REQUEST['type'] : $accion = "";

$estudiante = new Cargo($nombreCargo, $intensidadHoraria, $salario, $descripcion);
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