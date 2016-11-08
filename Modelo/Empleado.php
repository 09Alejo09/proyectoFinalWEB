<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Empleado
 *
 * @author Ideapad 300
 */
class Empleado {

    //put your code here


    private $idempleado;
    private $cedula;
    private $nombre;
    private $edad;
    private $descripcion;
    private $cargo;
    private $idsucursal;

    function __construct($idempleado, $cedula, $nombre, $edad, $descripcion, $cargo, $idsucursal) {

        $this->idempleado = $idempleado;
        $this->cedula = $cedula;
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->descripcion = $descripcion;
        $this->cargo = $cargo;
        $this->idsucursal = $idsucursal;
    }

    function getIdempleado() {
        return $this->idempleado;
    }

    function getCedula() {
        return $this->cedula;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getEdad() {
        return $this->edad;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getCargo() {
        return $this->cargo;
    }

    function getIdsucursal() {
        return $this->idsucursal;
    }

    function setIdempleado($idempleado) {
        $this->idempleado = $idempleado;
    }

    function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setEdad($edad) {
        $this->edad = $edad;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    function setIdsucursal($idsucursal) {
        $this->idsucursal = $idsucursal;
    }

}
