<?php

require '../Modelo/PaisM.php';
require '../DAO/PaisDAO.php';

isset($_REQUEST['txtNombre']) ? $nombre = $_REQUEST['txtNombre'] : $nombre = "";
isset($_REQUEST['txtDescripcion']) ? $descripcion = $_REQUEST['txtDescripcion'] : $descripcion = "";
isset($_REQUEST['type']) ? $accion = $_REQUEST['type'] : $accion = "";

$pais = new Pais($nombre, $descripcion);
$dao = new PaisDAO();

switch ($accion) {
    case "save":
        $dao->guardar($pais);
        break;
    case "list":
        $dao->listar($pais);
        break;
    
    case "search":
        $dao->buscar($pais);
        break;

    case "update":
        $dao->modificar($pais);
        break;
    
    case "delete":
        $dao->eliminar($pais);
        break;
}