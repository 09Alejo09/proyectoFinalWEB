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

        $sql = "insert into cargo(idCargo,nombreCargo,salario,intensidadHoraria) values('" .
                $obj->getIdCargo() . "','" . $obj->getNombreCargo() . "','" .$obj->getsalario() . "','" . $obj->getIntensidadHoraria() . ");";

        $resultado = $this->object->ejecutar($sql);
        $this->object->respuesta($resultado, 'cargos');
    }

    public function Buscar(Cargo $obj) {
        $sql = "SELECT idCargo,nomreCargo,salario,intensidadHoraria from sucursales " . "where idCargo='" .
                $obj->getIdCargo() . "';";
        $resultado = $this->object->ejecutar($sql);
        $this->construirBusqueda($resultado);
    }

    public function construirBusqueda($resultado) {
        $vec = pg_fetch_row($resultado);

        if (isset($vec) && $vec[0] != "") {
            $lista = "id_Cargo=" . $vec[0] . "&&";
            $lista .= "nombre_cargo=" . $vec[1] . "&&";
            $lista .= "salario=" . $vec[2]. "&&";
            $lista .= "intensidad_horaria=" . $vec[3];

            header('Location:../index.php?page=cargos&&' . $lista);
        } else {
            $mensaje = "No se encontro informacion";
            header('Location:../index.php?page=cargos&&message=' . $mensaje);
        }
    }

    public function modificar(Cargo $obj) {
        $sql = "update cargo set idCargo='" . $obj->getIdCargo() . "'" .
                ",nombreCargo='" . $obj->getNombreCargo() . "',salario='" . $obj->getSalario() . "'" .
                ",intensidadHoraria='" . $obj->getIntensidadHoraria()  .
                "where idCargo=" . $obj->getIdCargo();
        $resultado = $this->object->ejecutar($sql);
        $this->object->respuesta($resultado, 'cargos');
    }

    public function eliminar(Cargo $obj) {
        $sql = "delete from cargos where idCargo=" . $obj->getIdCargo();
        $resultado = $this->object->ejecutar($sql);
        $this->object->respuesta($resultado, 'cargos');
    }

    public function listar(Cargo $obj) {
        $sql = "select idCargo,nombreCargo,salario,intensidadHoraria from sucursales";
        $resultado = $this->object->ejecutar($sql);
        $this->construirListado($resultado);
    }

    public function construirListado($resultado) {

        if ($resultado && pg_num_rows($resultado) > 0) {
            $cadenaHTML = "<table border='1'>";
            $cadenaHTML .="<tr>";
            $cadenaHTML .="<th>idCargo</th>";
            $cadenaHTML .="<th>NombreCargo</th>";
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
        header('Location:../index.php?page=cargos&&info_list=' . $cadenaHTML);
    }

}
