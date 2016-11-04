<?php

require '../Modelo/Cargo.php';
require '../DAO/Cargo.php';

isset($_REQUEST['idCargo']) ? $idCargo = $_REQUEST['idCargo'] : $idCargo = "";
isset($_REQUEST['nombreCargo']) ? $nombreCargo = $_REQUEST['nombreCargo'] : $nombreCargo = "";
isset($_REQUEST['salario']) ? $salario = $_REQUEST['salario'] : $salario = "";
isset($_REQUEST['intensidadHoraria']) ? $intensisadHoraria = $_REQUEST['intensidadHoraria'] : $semestre = "";
isset($_REQUEST['type']) ? $accion = $_REQUEST['type'] : $accion = "";

$estudiante = new Cargo($idCargo, $nombreCargo, $salario, $intensisadHoraria);
$dao = new estudianteDAO();

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