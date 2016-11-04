<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmpleadoDAO
 *
 * @author Ideapad 300
 */
class EmpleadoDAO {

    //put your code here

    private $con;
    private $object;

    function EmpleadoDAO() {
        require '../Infraestructura/Conexion.php';
        $this->object = new Conexion();
        $this->con = $this->object->conectar();
    }

    public function guardar(Empleado $obj) {

        $sql = "insert into empleados(id_empleado,cedula, nombre, apellido, ,edad, id_cargo, id_sucursal, descripcion) values('" .
                $obj->getId_sucurusal() . "','" . $obj->getCedula() . "','" . $obj->getNombre() .
                $obj->getApellido() . "','" . $obj->getEdad() . "','" . $obj->getId_cargo() . "','" .
                $obj->getId_sucursal() . "','" . $obj->getDescripcion() . ");";

        $resultado = $this->object->ejecutar($sql);
        $this->object->respuesta($resultado, 'empleados');
    }

    public function Buscar(Empleado $obj) {
        $sql = "SELECT id_empleado,cedula,nombre, apellido, edad,id_cargo, id_cargo, id_sucursal, descripcion from empleados " . "where id_empleado='" .
                $obj->getId_empleado() . "';";
        $resultado = $this->object->ejecutar($sql);
        $this->construirBusqueda($resultado);
    }

    public function construirBusqueda($resultado) {
        $vec = pg_fetch_row($resultado);

        if (isset($vec) && $vec[0] != "") {
            $lista = "id_empleado=" . $vec[0] . "&&";
            $lista .= "cedula=" . $vec[1] . "&&";
            $lista .= "nombre=" . $vec[2] . "&&";
            $lista .= "apellido=" . $vec[3] . "&&";
            $lista .= "edad=" . $vec[4] . "&&";
            $lista .= "id_cargo=" . $vec[5] . "&&";
            $lista .= "id_sucursal=" . $vec[6] . "&&";
            $lista .= "descripcion=" . $vec[2] . "&&";


            header('Location:../index.php?page=empleados&&' . $lista);
        } else {
            $mensaje = "No se encontro informacion";
            header('Location:../index.php?page=empleados&&message=' . $mensaje);
        }
    }

    public function modificar(Empleado $obj) {
        $sql = "update empleados set id_empleados='" . $obj->getId_empleado() . "'" .
                ",cedula='" . $obj->getCedula() .
                ",nombre='" . $obj->getNombre() .
                 ",apellido='" . $obj->getApellido() .
                "',id_cargo='" . $obj->getId_cargo() . "'" .
                ",id_sucursal='" . $obj->getId_sucursal() . "'" .
                ",descripcion='" . $obj->getDescripcion() .
                "where id_empleado=" . $obj->getId_empleado();
        $resultado = $this->object->ejecutar($sql);
        $this->object->respuesta($resultado, 'sucursales');
    }

    public function eliminar(Sucursal $obj) {
        $sql = "delete from sucursales where id=" . $obj->getId_sucursal();
        $resultado = $this->object->ejecutar($sql);
        $this->object->respuesta($resultado, 'sucursales');
    }

    public function listar(Sucursal $obj) {
        $sql = "select id_sucursal,nombre,descripcion,id_municipio,id_banco from sucursales";
        $resultado = $this->object->ejecutar($sql);
        $this->construirListado($resultado);
    }

    public function construirListado($resultado) {

        if ($resultado && pg_num_rows($resultado) > 0) {
            $cadenaHTML = "<table border='1'>";
            $cadenaHTML .="<tr>";
            $cadenaHTML .="<th>id</th>";
            $cadenaHTML .="<th>Nombre</th>";
            $cadenaHTML .="<th>Descripcion</th>";
            $cadenaHTML .="<th>id_municipio</th>";
            $cadenaHTML .="<th>id_banco</th>";

            $cadenaHTML .="</tr>";


            for ($cont = 0; $cont < pg_num_rows($resultado); $cont ++) {

                $cadenaHTML .="<tr>";
                $cadenaHTML .= "<td>" . pg_result($resultado, $cont, 0) . "</td>";
                $cadenaHTML .= "<td>" . pg_result($resultado, $cont, 1) . "</td>";
                $cadenaHTML .= "<td>" . pg_result($resultado, $cont, 2) . "</td>";
                $cadenaHTML .= "<td>" . pg_result($resultado, $cont, 3) . "</td>";
                $cadenaHTML .= "<td>" . pg_result($resultado, $cont, 4) . "</td>";

                $cadenaHTML .="</tr>";
            }

            $cadenaHTML .= "</table>";
        } else {
            $cadenaHTML .= "<b>No hay registros en la base de datos</b>";
        }
        header('Location:../index.php?page=sucursales&&info_list=' . $cadenaHTML);
    }

}
