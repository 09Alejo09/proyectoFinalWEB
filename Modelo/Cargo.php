<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 *
 * @author 
 */
class Cargo {

    private $nombre;
    private $intensidad;
    private $salario;
    private $descripcion;
    
    function __construct($nombre, $intensidad, $salario, $descripcion) {
        $this->nombre = $nombreCargo;
        $this->intensidad = $intensidad;
        $this->salario = $salario;
        $this->descripcion = $descripcion;
    }
    function getNombre() {
        return $this->nombre;
    }

    function getIntensidad() {
        return $this->intensidad;
    }

    function getSalario() {
        return $this->salario;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setNombre($nombre) {
        $this->nombreCargo = $nombre;
    }

    function setIntensidad($intensidad) {
        $this->intensidadHoraria = $intensidad;
    }

    function setSalario($salario) {
        $this->salario = $salario;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }


    
}
