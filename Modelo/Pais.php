<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PAis
 *
 * @author Alejandro Sanchez
 */
class PaisM {
    //put your code here
    private $nombrePais;
    private $descripcionPais;
    
    function __construct($nombrePais, $descripcionPais) {
        $this->nombrePais = $nombrePais;
        $this->descripcionPais = $descripcionPais;
    }

    function getNombrePais() {
        return $this->nombrePais;
    }

    function getDescripcionPais() {
        return $this->descripcionPais;
    }

    function setNombrePais($nombrePais) {
        $this->nombrePais = $nombrePais;
    }

    function setDescripcionPais($descripcionPais) {
        $this->descripcionPais = $descripcionPais;
    }


    
}

