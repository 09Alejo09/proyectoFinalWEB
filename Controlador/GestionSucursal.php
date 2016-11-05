<?php

require '../Modelo/Sucursal.php';
require '../DAO/SucursalDAO.php';

isset($_REQUEST['idsucursal']) ? $idsucursal = $_REQUEST['idsucursal'] : $idsucursal = "";
isset($_REQUEST['nombre']) ? $nombre = $_REQUEST['nombre'] : $nombre = "";
isset($_REQUEST['descripcion']) ? $descripcion = $_REQUEST['descripcion'] : $descripcion = "";
isset($_REQUEST['municipio']) ? $municipio = $_REQUEST['municipio'] : $municipio = "";
isset($_REQUEST['banco']) ? $id_banco = $_REQUEST['banco'] : $banco = "";


$sucursal = new Sucursal($idsucursal, $nombre, $descripcion, $municipio, $banco);
$dao = new sucursalDAO();

switch ($accion) {
    case "save":
        $dao->guardar($sucursal);
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