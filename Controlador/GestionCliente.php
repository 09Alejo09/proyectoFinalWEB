<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require '../Modelo/Usuario.php';
require '../DAO/ClienteDAO.php';

isset($_REQUEST['id']) ? $id = $_REQUEST['id'] : $id = "";
isset($_REQUEST['nombre']) ? $nombre = $_REQUEST['nombre'] : $nombre = "";
isset($_REQUEST['nickname']) ? $nickname = $_REQUEST['nickname'] : $nickname = "";
isset($_REQUEST['password']) ? $password = $_REQUEST['password'] : $password = "";
isset($_REQUEST['cargo']) ? $cargo = $_REQUEST['cargo'] : $cargo = "cliente";
isset($_REQUEST['type'])? $type = $_REQUEST['type']: $type="";

$usuario = new Usuario($id, $nombre, $nickname, $password,$cargo);
$dao = new ClienteDAO();
$dao->guardar($usuario);


