<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DirectivoM
 *
 * @author Alejandro Sanchez
 */
class Directivo {

    //put your code here
    private $nombre;
    private $apellido;
    private $cedula;
    private $telefono;
    private $fechadenacimiento;
    private $municipio;

    function __construct($nombre, $apellido, $cedula, $telefono, $fechadenacimiento, $municipio) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->cedula = $cedula;
        $this->telefono = $telefono;
        $this->fechadenacimiento = $fechadenacimiento;
        $this->municipio = $municipio;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getCedula() {
        return $this->cedula;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getFechadenacimiento() {
        return $this->fechadenacimiento;
    }

    function getMunicipio() {
        return $this->municipio;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setFechadenacimiento($fechadenacimiento) {
        $this->fechadenacimiento = $fechadenacimiento;
    }

    function setMunicipio($municipio) {
        $this->municipio = $municipio;
    }

}
