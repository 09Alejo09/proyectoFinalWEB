<?php

require '../Modelo/Municipio.php';
require '../DAO/MunicipioDAO.php';

isset($_REQUEST['txtId_Municipio']) ? $id_municipio = $_REQUEST['txtId_Municipio'] : $id_municipio = "";
isset($_REQUEST['txtNombre']) ? $nombre = $_REQUEST['txtNombre'] : $nombre = "";
isset($_REQUEST['txtDescripcion']) ? $descripcion = $_REQUEST['txtDescripcion'] : $descripcion = "";
isset($_REQUEST['txtId_departamento']) ? $id_departamento = $_REQUEST['txtId_departamento'] : $id_departamento = "";
isset($_REQUEST['type']) ? $accion = $_REQUEST['type'] : $accion = "";

$municipio = new Municipio($id_municipio, $nombre, $descripcion, $id_departamento);
$dao = new MunicipioDAO();

switch ($accion) {
    case "save":
        $dao->guardar($municipio);
        break;
    case "list":
        $dao->listar($municipio);
        break;

    case "search":
        $dao->buscar($municipio);
        break;

    case "update":
        $dao->modificar($municipio);
        break;

    case "delete":
        $dao->eliminar($municipio);
        break;
}