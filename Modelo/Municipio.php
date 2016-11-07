<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Municipio
 *
 * @author Ideapad 300
 */
class Departamento {

    //put your code here


    private $nombre;
    private $descripcion;
    private $departamento;
 

    function __construct($nombre, $descripcion, $departamento) {
        $this->nombre= $nombre;
        $this->descripcion = $cedula;
        $this->pais = $departamento;
      
    }
    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getDepartamento() {
        return $this->departamento;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setDepartamento($departamento) {
        $this->departamento = $departamento;
    }


}
