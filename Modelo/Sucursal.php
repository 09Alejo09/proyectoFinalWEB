<?php

class Sucursal {

    private $id_sucursal;
    private $nombre;
    private $descripcion;
    private $id_municipio;
    private $banco;

    function __construct($id_sucursal, $nombre, $descripcion, $id_municipio, $banco) {
        $this->id_sucursal = $id_sucursal;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->id_municipio = $id_municipio;
        $this->banco = $banco;
    }

    function getId_sucursal() {
        return $this->id_sucursal;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getId_Municipio() {
        return $this->municipio;
    }

    function getBanco() {
        return $this->banco;
    }

    function setId_sucursal($idsucursal) {
        $this->id_sucursal = $idsucursal;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setI_Municipio($municipio) {
        $this->municipio = $municipio;
    }

    function setBanco($banco) {
        $this->banco = $banco;
    }

}
