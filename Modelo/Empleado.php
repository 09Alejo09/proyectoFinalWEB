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
    private $apellido;
    private $edad;
    private $id_cargo;
    private $id_sucursal;
    private $descripcion;

    function __construct($id_empleado, $cedula, $nombre, $apellido, $edad, $id_cargo, $id_sucursal, $descripcion) {
        $this->id = $id_empleado;
        $this->cedula = $cedula;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->id_cargo = $id_cargo;
        $this->id_sucursal = $id_sucursal;
        $this->descripcion = $descripcion;
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

    function getApellido() {
        return $this->apellido;
    }

    function getEdad() {
        return $this->edad;
    }

    function getId_cargo() {
        return $this->id_cargo;
    }

    function getId_sucursal() {
        return $this->id_sucursal;
    }

    function getDescripcion() {
        return $this->descripcion;
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

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setEdad($edad) {
        $this->edad = $edad;
    }

    function setId_cargo($id_cargo) {
        $this->id_cargo = $id_cargo;
    }

    function setId_sucursal($id_sucursal) {
        $this->id_sucursal = $id_sucursal;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

}
