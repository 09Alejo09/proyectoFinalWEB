<?php

require '../Modelo/Directivo.php';
require '../DAO/DirectivoDAO.php';

isset($_REQUEST['txtNombreDirectivo']) ? $nombreDirectivo = $_REQUEST['txtNombreDirectivo'] : $nombreDirectivo = "";
isset($_REQUEST['txtApellidoDirectivo']) ? $apellidoDirectivo = $_REQUEST['txtApellidoDirectivo'] : $apellidoDirectivo = "";
isset($_REQUEST['txtCedulaDirectivo']) ? $cedulaDirectivo = $_REQUEST['txtCedulaDirectivo'] : $cedulaDirectivo = "";
isset($_REQUEST['txtTelefonoDirectivo']) ? $telefonoDirectivo = $_REQUEST['txtTelefonoDirectivo'] : $telefonoDirectivo = "";
isset($_REQUEST['txtFechaDeNacimiento']) ? $fechaDeNacimiento = $_REQUEST['txtFechaDeNacimiento'] : $fechaDeNacimiento = "";
isset($_REQUEST['txtMunicipio']) ? $municipio = $_REQUEST['txtMunicipio'] : $municipio = "";
isset($_REQUEST['type']) ? $accion = $_REQUEST['type'] : $accion = "";

$directivo = new Directivo($nombreDirectivo, $apellidoDirectivo, $cedulaDirectivo, $telefonoDirectivo, $fechaDeNacimiento, $municipio);
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