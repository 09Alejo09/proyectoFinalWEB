<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PaisDAO
 *
 * @author Mariana
 */
class PaisDAO {

    private $con;
    private $object;

    function PaisDAO() {
        require '../Infraestructura/Conexion.php';
        $this->object = new Conexion();
        $this->con = $this->object->conectar();
    }

    public function guardar(PaisM $obj) {

        $sql = "insert into pais (nombre,descripcion) values('" .
                $obj->getNombrePais() . "','" . $obj->getDescripcionPais() . "');";
        echo $sql;
        $resultado = $this->object->ejecutar($sql);
        $this->object->respuesta($resultado, 'Pais');
    }

    public function buscar(PaisM $obj) {
        $sql = "SELECT nombre,descripcion from pais where nombre='" .
                $obj->getNombrePais() . "';";
        echo $sql;
        $resultado = $this->object->ejecutar($sql);
        $this->construirBusqueda($resultado);
    }

    public function construirBusqueda($resultado) {
        $vec = pg_fetch_row($resultado);

        if (isset($vec) && $vec[0] != "") {
            $lista = "nombre=" . $vec[0] . "&&";
            $lista .= "descripcion=" . $vec[1];

            header('Location:../index.php?page=Pais&&' . $lista);
        } else {
            $mensaje = "No se encontro informacion";
            header('Location:../index.php?page=Pais' . $mensaje);
        }
    }

    public function modificar(Pais $obj) {
        $sql = "update pais set nombre='" . $obj->getNombre() . "'" .
                ",descripcion='" . $obj->getDescripcionPais() . " where nombre='" . $obj->getNombrePais();
        $resultado = $this->object->ejecutar($sql);
        $this->object->respuesta($resultado, 'Pais');
    }

    public function eliminar(Pais $obj) {
        $sql = "delete from pais where nombre=" . $obj->getNombrePais();
        $resultado = $this->object->ejecutar($sql);
        $this->object->respuesta($resultado, 'Pais');
    }

    public function listar(Pais $obj) {
        $sql = "select nombre,descripcion from pais";
        $resultado = $this->object->ejecutar($sql);
        $this->construirListado($resultado);
    }

    public function construirListado($resultado) {

        if ($resultado && pg_num_rows($resultado) > 0) {
            $cadenaHTML = "<table border='1'>";
            $cadenaHTML .="<tr>";
            $cadenaHTML .="<th>Nombre</th>";
            $cadenaHTML .="<th>Descripcion</th>";
            $cadenaHTML .="</tr>";


            for ($cont = 0; $cont < pg_num_rows($resultado); $cont ++) {

                $cadenaHTML .="<tr>";
                $cadenaHTML .= "<td>" . pg_result($resultado, $cont, 0) . "</td>";
                $cadenaHTML .= "<td>" . pg_result($resultado, $cont, 1) . "</td>";
                $cadenaHTML .="</tr>";
            }
            
            $cadenaHTML .= "</table>";
        }else{
            $cadenaHTML .= "<b>No hay registros en la base de datos</b>";
        }
        header('Location:../index.php?page=Pais&&info_list='. $cadenaHTML);
    }

}
