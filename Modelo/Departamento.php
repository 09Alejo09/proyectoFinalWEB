<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of departamento
 *
 * @author Ideapad 300
 */
class Departamento {

    //put your code here


    private $nombre;
    private $descripcion;
    private $pais;
 

    function __construct($nombre, $descripcion, $pais) {
        $this->nombre= $nombre;
        $this->descripcion = $cedula;
        $this->pais = $pais;
      
    }
    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getPais() {
        return $this->pais;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setPais($pais) {
        $this->pais = $pais;
    }


}
