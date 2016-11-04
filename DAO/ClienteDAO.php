<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RegistrarDAO
 *
 * @author Alejandro
 */
class ClienteDAO {
    //put your code here
    
    private $con;
    private $object;
    
     function ClienteDAO() {
        require '../Infraestructura/Conexion.php';
        $this->object = new Conexion();
        $this->con = $this->object->conectar();
    }

    public function guardar(Usuario $obj) {

        $sql = "insert into usuarios (nombre,nickname,pass,cargo) values('" .    $obj->getNombre() . "','" . $obj->getNickName() . "','" . md5($obj->getPassword()) . "','" . $obj->getCargo() . "');";

        $resultado = $this->object->ejecutar($sql);
        $this->object->respuesta($resultado, 'Registro');
    }
    
   
}
