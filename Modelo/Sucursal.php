<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Estudiante
 *
 * @author Mariana
 */
class Sucursal {

    private $idsucursal;
    private $nombre;
    private $descripcion;
    private $municipio;
    private $banco;

    function __construct($idsucursal, $nombre, $descripcion, $municipio, $banco) {
        $this->idsucursal = $idsucursal;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->municipio = $municipio;
        $this->banco = $banco;
    }

    function getIdsucursal() {
        return $this->idsucursal;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getMunicipio() {
        return $this->municipio;
    }

    function getBanco() {
        return $this->banco;
    }

    function setIdsucursal($idsucursal) {
        $this->idsucursal = $idsucursal;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setMunicipio($municipio) {
        $this->municipio = $municipio;
    }

    function setBanco($banco) {
        $this->banco = $banco;
    }

}
