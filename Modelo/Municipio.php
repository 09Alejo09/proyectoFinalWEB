<?php


class Departamento {

   

    private $nombre;
    private $descripcion;
    private $departamento;
 

    function __construct($nombre, $descripcion, $departamento) {
        $this->nombre= $nombre;
        $this->descripcion = $descripcion;
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
