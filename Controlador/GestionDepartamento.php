<?php

require '../Modelo/Departamento.php';
require '../DAO/DepartamentoDAO.php';

isset($_REQUEST['txtId_departamento']) ? $id_departamento = $_REQUEST['txtId_Departamento'] : $id_departamento = "";
isset($_REQUEST['txtDescripcion']) ? $descripcion = $_REQUEST['txtDescripcion'] : $descripcion = "";
isset($_REQUEST['txtId_Pais']) ? $id_pais = $_REQUEST['txtId_Pais'] : $id_pais = "";
isset($_REQUEST['type']) ? $accion = $_REQUEST['type'] : $accion = "";

$departamento = new Departamento($id_departamento, $descripcion, $id_pais);
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