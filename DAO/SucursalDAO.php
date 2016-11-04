<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of estudienteDAO
 *
 * @author Mariana Restrepo
 */
class sucursalDAO {

    private $con;
    private $object;

    function sucursalDAO() {
        require '../infraestrucutura/clsConexion.php';
        $this->object = new clsConexion();
        $this->con = $this->object->conectar();
    }

    public function guardar(Sucursal $obj) {

        $sql = "insert into sucursales(idsucursal, nombre, descripcion, municipio, banco) values('" .
                $obj->getIdsucurusal() . "','" . $obj->getNombre() . "','" . $obj->getDescripcion(). 
                $obj->getIdmunicipio() . "','" .   $obj->getId_banco() . "','" . ");";

        $resultado = $this->object->ejecutar($sql);
        $this->object->respuesta($resultado, 'sucursales');
    }

    public function Buscar(Sucursal $obj) {
        $sql = "SELECT id_sucursal,nombre,descripcion,id_municipio,id_banco from sucursales " . "where id_sucursal='" .
                $obj->getId_sucursal() . "';";
        $resultado = $this->object->ejecutar($sql);
        $this->construirBusqueda($resultado);
    }

    public function construirBusqueda($resultado) {
        $vec = pg_fetch_row($resultado);

        if (isset($vec) && $vec[0] != "") {
            $lista = "id_sucursal=" . $vec[0] . "&&";
            $lista .= "nombre=" . $vec[1] . "&&";
            $lista .= "descripcion=" . $vec[2]. "&&";  
            $lista .= "id_municipio=" . $vec[3]. "&&";
            $lista .="id_banco=" . $vec[4];
            

            header('Location:../index.php?page=sucursales&&' . $lista);
        } else {
            $mensaje = "No se encontro informacion";
            header('Location:../index.php?page=sucursales&&message=' . $mensaje);
        }
    }

    public function modificar(Sucursal $obj) {
        $sql = "update sucursal set id_sucursal='" . $obj->getId() . "'" .
                ",nombre='" . $obj->getNombre() . 
                "',descripcion='" . $obj->getDescripcion() . "'" .
                ",id_municipio='" . $obj->getId_municipio()  . "'". 
                ",id_banco='" . $obj->getId_banco()  . 
                "where id_sucursal=" . $obj->getId_sucursal();
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
