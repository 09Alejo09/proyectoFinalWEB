<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Estudiante
 *
 * @author 
 */
class Cargo {

    private $nombreCargo;
    private $intensidadHoraria;
    private $salario;
    private $descripcion;
    
    function __construct($nombreCargo, $intensidadHoraria, $salario, $descripcion) {
        $this->nombreCargo = $nombreCargo;
        $this->intensidadHoraria = $intensidadHoraria;
        $this->salario = $salario;
        $this->descripcion = $descripcion;
    }
    function getNombreCargo() {
        return $this->nombreCargo;
    }

    function getIntensidadHoraria() {
        return $this->intensidadHoraria;
    }

    function getSalario() {
        return $this->salario;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setNombreCargo($nombreCargo) {
        $this->nombreCargo = $nombreCargo;
    }

    function setIntensidadHoraria($intensidadHoraria) {
        $this->intensidadHoraria = $intensidadHoraria;
    }

    function setSalario($salario) {
        $this->salario = $salario;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }


    
}
