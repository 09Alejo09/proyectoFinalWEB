<?php

require '../Modelo/Cargo.php';
require '../DAO/CargoDAO.php';

isset($_REQUEST['txtId_cargo']) ? $nombre = $_REQUEST['id_cargo'] : $nombre = "";
isset($_REQUEST['txtNombre']) ? $nombre = $_REQUEST['nombreCargo'] : $nombre = "";
isset($_REQUEST['txtIntensidad']) ? $intensisad = $_REQUEST['intensidadCargo'] : $intensidad = "";
isset($_REQUEST['txtSalario']) ? $salario = $_REQUEST['salarioCargo'] : $salario = "";
isset($_REQUEST['txtDescripcion']) ? $descripcion = $_REQUEST['descripcionCargo'] : $descripcion = "";
isset($_REQUEST['type']) ? $accion = $_REQUEST['type'] : $accion = "";

$cargo = new Cargo($id_cargo, $nombre, $intensidad, $salario, $descripcion);
$dao = new CargoDAO();

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