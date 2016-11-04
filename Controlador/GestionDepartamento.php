<?php

require '../Modelo/Departamento.php';
require '../DAO/DepartamentoDAO.php';

isset($_REQUEST['txtNombre']) ? $nombre = $_REQUEST['txtNombre'] : $nombre = "";
isset($_REQUEST['txtDescripcion']) ? $descripcion = $_REQUEST['txtDescripcion'] : $descripcion = "";
isset($_REQUEST['pais']) ? $pais = $_REQUEST['txtPais'] : $pais = "";
isset($_REQUEST['type']) ? $accion = $_REQUEST['type'] : $accion = "";

$sucursal = new Departamento($nombre,$descripcion,$pais);
$dao = new DepartamentoDAO();

switch ($accion) {
    case "save":
        $dao->guardar($departamento);
        break;
    case "list":
        $dao->listar($departamento);
        break;

    case "search":
        $dao->buscar($departamento);
        break;

    case "update":
        $dao->modificar($departamento);
        break;
    
    case "delete":
        $dao->eliminar($departamento);
        break;
}