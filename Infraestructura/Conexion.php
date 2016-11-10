<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clsConexion
 *
 * @author compaq
 */
class Conexion {

    private $usuario;
    private $password;
    private $dataBase;
    private $puerto;
    private $host;
    private $cadenaConexion;
    private $connect;
    private $resultDB;

    public function conectar() {
        $this->usuario = "postgres";
        $this->password = "ADMIN";
        $this->dataBase = "proyectoFinal";
        $this->puerto = 5432;
        $this->host = "localhost";

        $this->cadenaConexion = "host=$this->host port=$this->puerto dbname=$this->dataBase user=$this->usuario password=$this->password";

        $this->connect = pg_connect($this->cadenaConexion) or die("Error al relizar la conexión con la base de datos.");
    }

    public function acceder_conexion() {
        return $this->connect;
    }

    function ejecutar($sql) {
        if ($sql == "") {
            return 0;
        } else {
            //consulta
            $this->resultDB = pg_query($this->connect, $sql);
            //Resultado de la consulta de la base de datos
            return $this->resultDB;
        }
    }

    function validarLogin($resultado) {
        //vector 
        $vec = pg_fetch_row($resultado);

        if ($vec[1] != "") {
            $_SESSION['nombre'] = $vec[0];
            $_SESSION['cargo'] = $vec[3];
            return $vec[0];
        } else {
            return "";
        }
    }

    function respuesta($resultado, $page) {
        if ($resultado) {
            $mensaje = "Operación exitosa";
        } else {
            $mensaje = "Error en la operación";
        }

        header('location:../index.php?page=' . $page . '&&message=' . $mensaje);
    }

}
