<?php

require '../Modelo/Directivo.php';
require '../DAO/DirectivoDAO.php';

isset($_REQUEST['nombreDirectivo']) ? $nombreDirectivo = $_REQUEST['nombreDirectivo'] : $nombreDirectivo = "";
isset($_REQUEST['apellidoDirectivo']) ? $apellidoDirectivo = $_REQUEST['apellidoDirectivo'] : $apellidoDirectivo = "";
isset($_REQUEST['cedulaDirectivo']) ? $cedulaDirectivo = $_REQUEST['cedulaDirectivo'] : $cedulaDirectivo = "";
isset($_REQUEST['telefonoDirectivo']) ? $telefonoDirectivo = $_REQUEST['telefonoDirectivo'] : $telefonoDirectivo = "";
isset($_REQUEST['fechaDeNacimiento']) ? $fechaDeNacimiento = $_REQUEST['fechaDeNacimiento'] : $fechaDeNacimiento = "";
isset($_REQUEST['idMunicipio']) ? $idMunicipio = $_REQUEST['idMunicipio'] : $idMunicipio = "";
isset($_REQUEST['type']) ? $accion = $_REQUEST['type'] : $accion = "";

$directivo = new Directivo($nombreDirectivo, $apellidoDirectivo, $cedulaDirectivo, $telefonoDirectivo, $fechaDeNacimiento, $idMunicipio);
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