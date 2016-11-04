<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LogIn
 *
 * @author Alejandro Ortega
 */
class LogIn {
    //put your code here
    
    private $nickName;
    private $password;
    
    public function __construct($nickName, $password) {
        $this->nickName = $nickName;
        $this->password = $password;
    }
    public function getNickName() {
        return $this->nickName;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setNickName($nickName) {
        $this->nickName = $nickName;
    }

    public function setPassword($password) {
        $this->password = $password;
    }


    
}
