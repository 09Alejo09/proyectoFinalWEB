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
class Pais {

    //put your code here
    private $id_pais;
    private $nombre;
    private $descripcion;

    function __construct($id_pais, $nombre, $descripcion) {
        $this->id_pais = $id_pais;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
    }

    function getId_pais() {
        return $this->id_pais;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setId_pais($id_pais) {
        $this->id_pais = $id_pais;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

}
