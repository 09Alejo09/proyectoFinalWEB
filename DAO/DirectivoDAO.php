<?php

class DirectivoDAO {

    private $con;
    private $object;

    function estudianteDAO() {
        require '../Infraestructura/Conexion.php';
        $this->object = new Conexion();
        $this->con = $this->object->conectar();
    }

    public function guardar(Directivo $obj) {

        $sql = "insert into juntadirectiva (nombre, apellido, cedula, telefono, fechadenacimiento, municipio ) values('" .
                $obj->getNombreDirectivo() . "','" . $obj->getApellidoDirectivo() . "','" . $obj->getCedulaDirectivo() . "','" . $obj->getTelefonoDirectivo() . "'," .
                $obj->getFechaDeNacimiento() . "," . $obj->getMunicipio() . ");";

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
            $lista .= "fechadenacimiento=" . $vec[4] . "&&";
            $lista .= "minicipio=" . $vec[5];

            header('Location:../index.php?page=Directivo&&' . $lista);
        } else {
            $mensaje = "No se encontro informacion";
            header('Location:../index.php?page=Directivo&&message=' . $mensaje);
        }
    }

    public function modificar(Directivo $obj) {
        $sql = "update juntadirectiva set nombre='" . $obj->getNombreDirectivo() . "'" .
                ",nombre='" . $obj->getApellidoDirectivo() . "',cedula='" . $obj->getCedulaDirectivo() . "'" .
                ",telefono='" . $obj->getTelefonoDirectivo() . "',fechadenacimiento='" . $obj->getFechaDeNacimiento() .
                "',municipio=" . $obj->getMunicipio() . " where cedula='" . $obj->getCedulaDirectivo();
        $resultado = $this->object->ejecutar($sql);
        $this->object->respuesta($resultado, 'Directivo');
    }

    public function eliminar(Directivo $obj) {
        $sql = "delete from juntadirectiva where cedula=" . $obj->getCedulaDirectivo();
        $resultado = $this->object->ejecutar($sql);
        $this->object->respuesta($resultado, 'Directivo');
    }

    public function listar(Directivo $obj) {
        $sql = "select nombre, apellido, cedula, telefono, fechadenacimiento, municipio from juntadirectiva";
        $resultado = $this->object->ejecutar($sql);
        $this->construirListado($resultado);
    }

    public function construirListado($resultado) {

        if ($resultado && pg_num_rows($resultado) > 0) {
            $cadenaHTML = "<table border='1'>";
            $cadenaHTML .="<tr>";
            $cadenaHTML .="<th>nombre</th>";
            $cadenaHTML .="<th>apellido</th>";
            $cadenaHTML .="<th>cedula</th>";
            $cadenaHTML .="<th>telefono</th>";
            $cadenaHTML .="<th>fechadenacimiento</th>";
            $cadenaHTML .="<th>municipio</th>";
            $cadenaHTML .="</tr>";


            for ($cont = 0; $cont < pg_num_rows($resultado); $cont ++) {

                $cadenaHTML .="<tr>";
                $cadenaHTML .= "<td>" . pg_result($resultado, $cont, 0) . "</td>";
                $cadenaHTML .= "<td>" . pg_result($resultado, $cont, 1) . "</td>";
                $cadenaHTML .= "<td>" . pg_result($resultado, $cont, 2) . "</td>";
                $cadenaHTML .= "<td>" . pg_result($resultado, $cont, 3) . "</td>";
                $cadenaHTML .= "<td>" . pg_result($resultado, $cont, 4) . "</td>";
                $cadenaHTML .= "<td>" . pg_result($resultado, $cont, 5) . "</td>";
                $cadenaHTML .="</tr>";
            }

            $cadenaHTML .= "</table>";
        } else {
            $cadenaHTML .= "<b>No hay registros en la base de datos</b>";
        }
        header('Location:../index.php?page=Directivo&&info_list=' . $cadenaHTML);
    }

}
