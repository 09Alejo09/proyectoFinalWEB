<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * 
 *
 * @author Mariana Restrepo
 */
class MunicipioDAO {

    private $con;
    private $object;

    function Municipio() {
        require '../infraestrucutura/clsConexion.php';
        $this->object = new clsConexion();
        $this->con = $this->object->conectar();
    }

    public function guardar(Municipio $obj) {

        $sql = "insert into municipio(nombre,descripcion,departamento) values('" .
                $obj->getNombre() . "','" . 
                $obj->getDescripcion() . "','" .
                $obj->getDepartamento() . "','" . ");";

        $resultado = $this->object->ejecutar($sql);
        $this->object->respuesta($resultado, 'municipio');
    }

    public function Buscar(Municipio $obj) {
        $sql = "SELECT nombre,descripcion, from municipio " . "where nombre='" .
                $obj->getNombre() . "';";
        $resultado = $this->object->ejecutar($sql);
        $this->construirBusqueda($resultado);
    }

    public function construirBusqueda($resultado) {
        $vec = pg_fetch_row($resultado);

        if (isset($vec) && $vec[0] != "") {
            $lista = "nombre=" . $vec[0] . "&&";
            $lista .= "descripcion=" . $vec[1] . "&&";
            $lista .="departamento=" . $vec[2];
            

            header('Location:../index.php?page=municipio&&' . $lista);
        } else {
            $mensaje = "No se encontro informacion";
            header('Location:../index.php?page=municipio&&message=' . $mensaje);
        }
    }

    public function modificar(Municipio $obj) {
        $sql = "update municipio set nombre='" . $obj->getNombre() . "'" .
                ",nombre='" . $obj->getNombre() . 
                "',descripcion='" . $obj->getDescripcion() . "'" .
                ",departamento='" . $obj->getDepartamento()  . 
               
                "where nombre=" . $obj->getNombre();
        $resultado = $this->object->ejecutar($sql);
        $this->object->respuesta($resultado, 'municipio');
    }

    public function eliminar(Municipio $obj) {
        $sql = "delete from municipio where nombre=" . $obj->getNombre();
        $resultado = $this->object->ejecutar($sql);
        $this->object->respuesta($resultado, 'municipio');
    }

    public function listar(Municipio $obj) {
        $sql = "select nombre,descripcion,departamento from departamento";
        $resultado = $this->object->ejecutar($sql);
        $this->construirListado($resultado);
    }

    public function construirListado($resultado) {

        if ($resultado && pg_num_rows($resultado) > 0) {
            $cadenaHTML = "<table border='1'>";
            $cadenaHTML .="<tr>";
            $cadenaHTML .="<th>Nombre</th>";
            $cadenaHTML .="<th>Descripcion</th>";
            $cadenaHTML .="<th>Departamento</th>";
          
            $cadenaHTML .="</tr>";


            for ($cont = 0; $cont < pg_num_rows($resultado); $cont ++) {

                $cadenaHTML .="<tr>";
                $cadenaHTML .= "<td>" . pg_result($resultado, $cont, 0) . "</td>";
                $cadenaHTML .= "<td>" . pg_result($resultado, $cont, 1) . "</td>";
                $cadenaHTML .= "<td>" . pg_result($resultado, $cont, 2) . "</td>";
         
             
                $cadenaHTML .="</tr>";
            }

            $cadenaHTML .= "</table>";
        } else {
            $cadenaHTML .= "<b>No hay registros en la base de datos</b>";
        }
        header('Location:../index.php?page=municipio&&info_list=' . $cadenaHTML);
    }

}
