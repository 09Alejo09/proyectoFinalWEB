<?php

require '../Modelo/Estudiante.php';
require '../DAO/estudianteDAO.php';

isset($_REQUEST['id_sucursal']) ? $id_sucursal = $_REQUEST['id_sucursal'] : $id_sucursal = "";
isset($_REQUEST['nombre']) ? $nombre = $_REQUEST['nombre'] : $nombre = "";
isset($_REQUEST['descripcion']) ? $descripcion = $_REQUEST['descripcion'] : $descripcion = "";
isset($_REQUEST['id_municipio']) ? $id_municipio = $_REQUEST['id_municipio'] : $id_municipio = "";
isset($_REQUEST['id_banco']) ? $id_banco = $_REQUEST['id_banco'] : $id_banco = "";
isset($_REQUEST['type']) ? $accion = $_REQUEST['type'] : $accion = "";

$sucursal = new Sucursal($id,$nombre,$descripcion);
$dao = new sucursalDAO();

switch ($accion) {
    case "save":
        $dao->guardar(sucursal);
        break;
    case "list":
        $dao->listar($sucursal);
        break;

    case "search":
        $dao->buscar($sucursal);
        break;

    case "update":
        $dao->modificar($sucursal);
        break;
    
    case "delete":
        $dao->eliminar($sucursal);
        break;
}