<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of estudienteDAO
 *
 * @author alejandro Ortega
 */
class DirectivoDAO {

    private $con;
    private $object;

    function estudianteDAO() {
        require '../Infraestructura/Conexion.php';
        $this->object = new Conexion();
        $this->con = $this->object->conectar();
    }

    public function guardar(Directivo $obj) {

        $sql = "insert into JuntaDirectiva (nombre,apellido,cedula,telefono,fechadenacimiento,id_municipio ) values('" .
                $obj->getNombre() . "','" . $obj->getApellido() . "','" . $obj->getCedula() . "','" . $obj->getTelefono() . "'," .
                $obj->getFechaDeNacimiento() . "," . $obj->getIdMunicipio() . ");";

        $resultado = $this->object->ejecutar($sql);
        $this->object->respuesta($resultado, 'Directivo');
    }

    public function construirBusqueda($resultado) {
        $vec = pg_fetch_row($resultado);

        if (isset($vec) && $vec[0] != "") {
            $lista = "nombre=" . $vec[0] . "&&";
            $lista .= "apellido=" . $vec[1] . "&&";
            $lista .= "cedula=" . $vec[2] . "&&";
            $lista .= "telefono=" . $vec[3] . "&&";
            $lista .= "fechadenacimiento=" . $vec[4];

            header('Location:../index.php?page=Directivo&&' . $lista);
        } else {
            $mensaje = "No se encontro informacion";
            header('Location:../index.php?page=Directivo&&message=' . $mensaje);
        }
    }

    public function modificar(Directivo $obj) {
        $sql = "update JuntaDirectiva set nombre='" . $obj->getNombre() . "'" .
                ",nombre='" . $obj->getApellido() . "',cedula='" . $obj->getCedula() . "'" .
                ",telefono='" . $obj->getTelefono() . "',fechadenacimiento='" . $obj->getFechaDeNacimiento() . ",semestre=" . $obj->getSemestre() .
                "',id_municipio=". $obj->getIdMunicipio() ." where cedula='" . $obj->getCedula();
        $resultado = $this->object->ejecutar($sql);
        $this->object->respuesta($resultado, 'Directivo');
    }

    public function eliminar(Directivo $obj) {
        $sql = "delete from JuntaDirectiva where cedula=" . $obj->getId();
        $resultado = $this->object->ejecutar($sql);
        $this->object->respuesta($resultado, 'Directivo');
    }

    public function listar(Directivo $obj) {
        $sql = "select nombre,apellido,cedula,telefono,fechadenacimiento from JuntaDirectiva";
        $resultado = $this->object->ejecutar($sql);
        $this->construirListado($resultado);
    }

    public function construirListado($resultado) {

        if ($resultado && pg_num_rows($resultado) > 0) {
            $cadenaHTML = "<table border='1'>";
            $cadenaHTML .="<tr>";
            $cadenaHTML .="<th>Nombre</th>";
            $cadenaHTML .="<th>Apellido</th>";
            $cadenaHTML .="<th>Cedula</th>";
            $cadenaHTML .="<th>telefono</th>";
            $cadenaHTML .="<th>fechadenacimiento</th>";
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
        }else{
            $cadenaHTML .= "<b>No hay registros en la base de datos</b>";
        }
        header('Location:../index.php?page=Directivo&&info_list='. $cadenaHTML);
    }

}
