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
    private $nombreDirectivo;
    private $apellidoDirectivo;
    private $cedulaDirectivo;
    private $telefonoDirectivo;
    private $fechaDeNacimiento;
    private $municipio;
    
    function __construct($nombreDirectivo, $apellidoDirectivo, $cedulaDirectivo, $telefonoDirectivo, $fechaDeNacimiento, $municipio) {
        $this->nombreDirectivo = $nombreDirectivo;
        $this->apellidoDirectivo = $apellidoDirectivo;
        $this->cedulaDirectivo = $cedulaDirectivo;
        $this->telefonoDirectivo = $telefonoDirectivo;
        $this->fechaDeNacimiento = $fechaDeNacimiento;
        $this->municipio = $municipio;
    }
    function getNombreDirectivo() {
        return $this->nombreDirectivo;
    }

    function getApellidoDirectivo() {
        return $this->apellidoDirectivo;
    }

    function getCedulaDirectivo() {
        return $this->cedulaDirectivo;
    }

    function getTelefonoDirectivo() {
        return $this->telefonoDirectivo;
    }

    function getFechaDeNacimiento() {
        return $this->fechaDeNacimiento;
    }

    function getMunicipio() {
        return $this->municipio;
    }

    function setNombreDirectivo($nombreDirectivo) {
        $this->nombreDirectivo = $nombreDirectivo;
    }

    function setApellidoDirectivo($apellidoDirectivo) {
        $this->apellidoDirectivo = $apellidoDirectivo;
    }

    function setCedulaDirectivo($cedulaDirectivo) {
        $this->cedulaDirectivo = $cedulaDirectivo;
    }

    function setTelefonoDirectivo($telefonoDirectivo) {
        $this->telefonoDirectivo = $telefonoDirectivo;
    }

    function setFechaDeNacimiento($fechaDeNacimiento) {
        $this->fechaDeNacimiento = $fechaDeNacimiento;
    }

    function setMunicipio($municipio) {
        $this->municipio = $municipio;
    }


}
