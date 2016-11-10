<?php

require '../Modelo/Empleado.php';
require '../DAO/EmpleadoDAO.php';

isset($_REQUEST['id_empleado']) ? $id_empleado = $_REQUEST['id_empleado'] : $id_empleado = "";
isset($_REQUEST['cedula']) ? $cedula = $_REQUEST['cedula'] : $cedula = "";
isset($_REQUEST['nombre']) ? $nombre = $_REQUEST['nombre'] : $nombre = "";
isset($_REQUEST['apellido']) ? $apellido = $_REQUEST['apellido'] : $apellido = "";
isset($_REQUEST['edad']) ? $edad = $_REQUEST['edad'] : $edad = "";
isset($_REQUEST['descripcion']) ? $descripcion = $_REQUEST['descripcion'] : $descripcion = "";
isset($_REQUEST['id_cargo']) ? $id_cargo = $_REQUEST['id_cargo'] : $id_cargo = "";
isset($_REQUEST['id_sucursal']) ? $id_sucursal = $_REQUEST['id_sucursal'] : $id_sucursal = "";
isset($_REQUEST['type'])? $type = $_REQUEST['type']: $type="";

$empleado = new Empleado($id_empleado, $cedula, $nombre, $apellido, $edad, $descripcion, $id_cargo, $id_sucursal);
$dao = new EmpleadoDAO();

switch ($accion) {
    case "save":
        $dao->guardar(Empleado);
        break;
    case "list":
        $dao->listar($empleado);
        break;

    case "search":
        $dao->buscar($empleado);
        break;

    case "update":
        $dao->modificar($empleado);
        break;

    case "delete":
        $dao->eliminar($empleado);
        break;
}