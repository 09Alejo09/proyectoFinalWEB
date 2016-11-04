<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../modelo/LogIn.php';
include '../DAO/LogInDAO.php';

isset($_REQUEST['type'])? $type = $_REQUEST['type']: $type="";
isset($_REQUEST['nickName'])? $nickName = $_REQUEST['nickName']: $nickName="";
isset($_REQUEST['password'])? $password = $_REQUEST['password']: $password="";

session_start();

$login = new LogIn($nickName, $password);
$dao = new LogInDAO();

$mensaje = "";

switch ($type){
    
    case"con":
        if(!$dao->ingresar($login)){
            $mensaje = "El usuario no existe";
            header('location:../index.php?infoLogIn='. $mensaje);
        }
        else{
            header('location:../index.php');
        }
        break;
        
    case "desc":
        session_destroy();
        $mensaje = "Se ha cerrado la sesion";
        header('location:../index.php?infoLogIn='. $mensaje);
        break;
}

