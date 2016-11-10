<?php

require '../Modelo/Sucursal.php';
require '../DAO/SucursalDAO.php';

isset($_REQUEST['txtId_sucursal']) ? $idsucursal = $_REQUEST['id_sucursal'] : $idsucursal = "";
isset($_REQUEST['txtNombre']) ? $nombre = $_REQUEST['txtNombre'] : $nombre = "";
isset($_REQUEST['txtDescripcion']) ? $descripcion = $_REQUEST['txtDescripcion'] : $descripcion = "";
isset($_REQUEST['txtId_municipio']) ? $id_municipio = $_REQUEST['txtId_municipio'] : $id_municipio = "";


$sucursal = new Sucursal($id_sucursal, $nombre, $descripcion, $id_municipio);
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