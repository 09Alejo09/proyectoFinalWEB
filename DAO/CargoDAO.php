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
class CargoDAO {

    private $con;
    private $object;

    function CargoDAO() {
        require '../infraestrucutura/clsConexion.php';
        $this->object = new clsConexion();
        $this->con = $this->object->conectar();
    }

    public function guardar(Cargo $obj) {

        $sql = "insert into cargo(nombre,intensidad,salario,descripcion) values('" .
                $obj->getNombre() . "','" . $obj->getIntensidad() . "'," .$obj->getsalario() . ",'" . $obj->getDescripcion() . ");";
        echo $sql;
        $resultado = $this->object->ejecutar($sql);
        $this->object->respuesta($resultado, 'cargo');
    }

    public function Buscar(Cargo $obj) {
        $sql = "SELECT nombre,intensidad,salario,descripcion from cargo where nombre='" .
                $obj->getNombre() . "';";
        $resultado = $this->object->ejecutar($sql);
        $this->construirBusqueda($resultado);
    }

    public function construirBusqueda($resultado) {
        $vec = pg_fetch_row($resultado);

        if (isset($vec) && $vec[0] != "") {
            $lista = "nombre=" . $vec[0] . "&&";
            $lista .= "intensidad=" . $vec[1] . "&&";
            $lista .= "salario=" . $vec[2]. "&&";
            $lista .= "decripcion=" . $vec[3];

            header('Location:../index.php?page=cargo&&' . $lista);
        } else {
            $mensaje = "No se encontro informacion";
            header('Location:../index.php?page=Cargo&&message=' . $mensaje);
        }
    }

    public function modificar(Cargo $obj) {
        $sql = "update cargo set nombre='" . $obj->getNombre() . "'" .
                ",intensidad='" . $obj->getIntensidad() . 
                "',salario='" . $obj->getSalario() . "'" .
                ",intensidadHoraria='" . $obj->getDescripcion()  .
                "where nombre=" . $obj->getNombre();
        $resultado = $this->object->ejecutar($sql);
        $this->object->respuesta($resultado, 'cargo');
    }

    public function eliminar(Cargo $obj) {
        $sql = "delete from cargo where nombre=" . $obj->getNombre();
        $resultado = $this->object->ejecutar($sql);
        $this->object->respuesta($resultado, 'cargo');
    }

    public function listar(Cargo $obj) {
        $sql = "select nombre,intensidad,salario,descripcion from cargo";
        $resultado = $this->object->ejecutar($sql);
        $this->construirListado($resultado);
    }

    public function construirListado($resultado) {

        if ($resultado && pg_num_rows($resultado) > 0) {
            $cadenaHTML = "<table border='1'>";
            $cadenaHTML .="<tr>";
            $cadenaHTML .="<th>nombre</th>";
            $cadenaHTML .="<th>intensidad</th>";
            $cadenaHTML .="<th>Salario</th>";
            $cadenaHTML .="<th>IntensidadHoraria</th>";
           
            $cadenaHTML .="</tr>";


            for ($cont = 0; $cont < pg_num_rows($resultado); $cont ++) {

                $cadenaHTML .="<tr>";
                $cadenaHTML .= "<td>" . pg_result($resultado, $cont, 0) . "</td>";
                $cadenaHTML .= "<td>" . pg_result($resultado, $cont, 1) . "</td>";
                $cadenaHTML .= "<td>" . pg_result($resultado, $cont, 2) . "</td>";
                $cadenaHTML .= "<td>" . pg_result($resultado, $cont, 3) . "</td>";
             
                $cadenaHTML .="</tr>";
            }

            $cadenaHTML .= "</table>";
        } else {
            $cadenaHTML .= "<b>No hay registros en la base de datos</b>";
        }
        header('Location:../index.php?page=cargo&&info_list=' . $cadenaHTML);
    }

}
