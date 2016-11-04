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

    private $idCargo;
    private $nombreCargo;
    private $salario;
    private $intensidadHoraria;
   
    
    
    function Cargo($idCargo,$nombreCargo,  $salario, $intensidadHoraria) {
        $this->id = $idCargo;
        $this->codigo = $nombreCargo;
        $this->nombre = $salario;
        $this->apellido = $intensidadHoraria;
      
    }

    function getIdCargo() {
        return $this->id;
    }

    function getNombreCargo() {
        return $this->nombreCargo;
    }

    function getSalario() {
        return $this->salario;
    }

    function getIntensidadHoraria() {
        return $this->intensidadHoraria;
    }


    function setId($idCargo) {
        $this->id = $id;
    }

    function setCodigo($nombreCargo) {
        $this->codigo = $nombreCargo;
    }

    function setNombre($salario) {
        $this->nombre = $salario;
    }

    function setApellido($intensidadHoraria) {
        $this->apellido = $intensidadHoraria;
    }

}
