<?php

require '../Modelo/Directivo.php';
require '../DAO/DirectivoDAO.php';

isset($_REQUEST['txtNombre']) ? $nombreDirectivo = $_REQUEST['txtNombre'] : $nombreDirectivo = "";
isset($_REQUEST['txtApellido']) ? $apellidoDirectivo = $_REQUEST['txtApellido'] : $apellidoDirectivo = "";
isset($_REQUEST['txtCedula']) ? $cedulaDirectivo = $_REQUEST['txtCedula'] : $cedulaDirectivo = "";
isset($_REQUEST['txtTelefono']) ? $telefonoDirectivo = $_REQUEST['txtTelefono'] : $telefonoDirectivo = "";
isset($_REQUEST['txtfechadenacimiento']) ? $fechadenacimiento = $_REQUEST['txtfechadenacimiento'] : $fechaDeNacimiento = "";
isset($_REQUEST['txtId_Municipio']) ? $id_municipio = $_REQUEST['txtId_Municipio'] : $municipio = "";
isset($_REQUEST['type']) ? $accion = $_REQUEST['type'] : $accion = "";

$directivo = new Directivo($nombre, $apellido, $cedula, $telefono, $fechadenacimiento, $id_municipio);
$dao = new DirectivoDAO();

switch ($accion) {
    case "save":
        $dao->guardar($directivo);
        break;
    case "list":
        $dao->listar($directivo);
        break;

    case "update":
        $dao->modificar($directivo);
        break;

    case "delete":
        $dao->eliminar($estudiante);
        break;
}