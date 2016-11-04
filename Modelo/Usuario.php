<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Alejandro
 */
class Usuario {
    //put your code here    
    
    private $id;
    private $nombre;
    private $nickname;
    private $password;
    private $cargo;
    
    function __construct($id, $nombre, $nickname, $password, $cargo) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->nickname = $nickname;
        $this->password = $password;
        $this->cargo = $cargo;
    }

    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getNickname() {
        return $this->nickname;
    }

    function getPassword() {
        return $this->password;
    }

    function getCargo() {
        return $this->cargo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setNickname($nickname) {
        $this->nickname = $nickname;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setCargo($cargo) {
        $this->cargo = $cargo;
    }


    
}
