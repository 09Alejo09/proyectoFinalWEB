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

    private $id_cargo;
    private $nombre;
    private $intensidad;
    private $salario;
    private $descripcion;

    function __construct($id_cargo, $nombre, $intensidad, $salario, $descripcion) {
        $this->id_cargo = $id_cargo;
        $this->nombre = $nombre;
        $this->intensidad = $intensidad;
        $this->salario = $salario;
        $this->descripcion = $descripcion;
    }

    function getId_cargo() {
        return $this->id_cargo;
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

    function setId_cargo($id_cargo) {
        $this->id_cargo = $id_cargo;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setIntensidad($intensidad) {
        $this->intensidad = $intensidad;
    }

    function setSalario($salario) {
        $this->salario = $salario;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

}
