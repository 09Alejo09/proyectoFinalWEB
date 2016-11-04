<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Estudiante
 *
 * @author Mariana
 */
class Sucursal {

    private $id_sucursal;
    private $nombre;
    private $descripcion;
    private $id_municipio;
    private $id_banco;
   
    
    
    function Sucursal($id_sucursal,$nombre, $descripcion,$id_municipio,$id_banco) {
        $this->id_sucursal = $id;
        $this->nombre = $nombre;
         $this->descripcion = $descripcion;
         $this->id_municipio=$id_municipio;
         $this->id_banco=$id_banco;

    }

    function getId() {
        return $this->id_sucursal;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDescricpion() {
        return $this->descripcion;
    }
     function getId_municipio() {
        return $this->id_sucursal;
    }
     function getId_banco() {
        return $this->id_banco;
    }

    function setId($id) {
        $this->id_sucursal= $id_sucursal;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion) {
        $this->apellido = $descripcion;
    }
      function setId_municipio() {
        $this->id_municipio=$id_municipio;
    }
     function setId_banco() {
         $this->id_banco=$id_banco;
    }


}
