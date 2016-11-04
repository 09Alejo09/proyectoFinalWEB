
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LogInDAO
 *
 * @author Alejandro Sanchez
 */
class LogInDAO {

    //put your code here

    private $con;
    private $object;

    function LoginDAO() {
        require '../Infraestructura/Conexion.php';
        $this->object = new Conexion;
        $this->con = $this->object->conectar();
    }

    function ingresar(LogIn $obj) {
        $sql = "SELECT nombre,nickname,pass,cargo "
                . "from usuarios "
                . "where nickname='" . $obj->getNickName() . "' AND pass='" . md5($obj->getPassword()) . "'";
        $resultado = $this->object->ejecutar($sql);
        return $this->object->validarLogin($resultado);
    }

}
