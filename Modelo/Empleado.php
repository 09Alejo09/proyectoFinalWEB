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


    private $id_empleado;
    private $cedula;
    private $nombre;
    private $edad;
    private $descripcion;
    private $id_cargo;
    private $id_sucursal;

    function __construct($id_empleado, $cedula, $nombre, $edad, $descripcion, $id_cargo, $id_sucursal) {

        $this->id_empleado = $id_empleado;
        $this->cedula = $cedula;
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->descripcion = $descripcion;
        $this->id_cargo = $id_cargo;
        $this->id_sucursal = $id_sucursal;
    }

    function getId_empleado() {
        return $this->id_empleado;
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

    function getId_cargo() {
        return $this->id_cargo;
    }

    function getId_Sucursal() {
        return $this->id_sucursal;
    }

    function setId_empleado($id_empleado) {
        $this->id_empleado = $id_empleado;
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

    function setId_cargo($id_cargo) {
        $this->id_cargo = $id_cargo;
    }

    function setId_sucursal($descripcion) {
        $this->id_sucursal = $id_sucursal;
    }

}
