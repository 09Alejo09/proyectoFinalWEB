<?php

class Departamento {

    private $id_departamento;
    private $nombre;
    private $descripcion;
    private $id_pais;

    function __construct($id_departamento, $nombre, $descripcion, $departamento) {
        $this->id_departamento;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->pais = $id_pais;
    }

    function getId_departamento() {
        return $this->id_departamento;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getId_pais() {
        return $this->id_pais;
    }

    function setId_departamento($id_departamento) {
        $this->id_departamento = $id_departamento;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setId_pais($id_pais) {
        $this->id_pais = $id_pais;
    }

}
