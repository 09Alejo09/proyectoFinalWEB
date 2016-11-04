<?php

require '../Modelo/PaisM.php';
require '../DAO/PaisDAO.php';

isset($_REQUEST['nombrePais']) ? $nombrePais = $_REQUEST['nombrePais'] : $nombrePais = "";
isset($_REQUEST['descripcionPais']) ? $descripcionPais = $_REQUEST['descripcionPais'] : $descripcionPais = "";
isset($_REQUEST['type']) ? $accion = $_REQUEST['type'] : $accion = "";

$pais = new PaisM($nombrePais, $descripcionPais);
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