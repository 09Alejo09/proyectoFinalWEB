<?php

class DepartamentoDAO {

    private $con;
    private $object;

    function DepartamentoDAO() {
        require '../infraestrucutura/clsConexion.php';
        $this->object = new clsConexion();
        $this->con = $this->object->conectar();
    }

    public function guardar(Departamento $obj) {

        $sql = "insert into departamento(nombre, descripcion, pais) values('" .
                $obj->getNombre() . "','" .
                $obj->getDescripcion() . "','" .
                $obj->getPais() . "','" . ");";

        $resultado = $this->object->ejecutar($sql);
        $this->object->respuesta($resultado, 'departamento');
    }

    public function Buscar(Departamento $obj) {
        $sql = "SELECT nombre, descripcion, pais from departamento where nombre='" .
                $obj->getNombre() . "';";
        $resultado = $this->object->ejecutar($sql);
        $this->construirBusqueda($resultado);
    }

    public function construirBusqueda($resultado) {
        $vec = pg_fetch_row($resultado);

        if (isset($vec) && $vec[0] != "") {
            $lista = "nombre=" . $vec[0] . "&&";
            $lista .= "descripcion=" . $vec[1] . "&&";
            $lista .="pais=" . $vec[2];


            header('Location:../index.php?page=Departamento&&' . $lista);
        } else {
            $mensaje = "No se encontro informacion";
            header('Location:../index.php?page=Departamento&&message=' . $mensaje);
        }
    }

    public function modificar(Departamento $obj) {
        $sql = "update departamento set nombre='" . $obj->getNombre() . "'" .
                ",nombre='" . $obj->getNombre() .
                "',descripcion='" . $obj->getDescripcion() . "'" .
                ",pais='" . $obj->getPais() .
                "where nombre=" . $obj->getNombre();
        $resultado = $this->object->ejecutar($sql);
        $this->object->respuesta($resultado, 'departamento');
    }

    public function eliminar(Departamento $obj) {
        $sql = "delete from departamento where nombre=" . $obj->getNombre();
        $resultado = $this->object->ejecutar($sql);
        $this->object->respuesta($resultado, 'departamento');
    }

    public function listar(Departamento $obj) {
        $sql = "select nombre, descripcion, pais from departamento";
        $resultado = $this->object->ejecutar($sql);
        $this->construirListado($resultado);
    }

    public function construirListado($resultado) {

        if ($resultado && pg_num_rows($resultado) > 0) {
            $cadenaHTML = "<table border='1'>";
            $cadenaHTML .="<tr>";
            $cadenaHTML .="<th>nombre</th>";
            $cadenaHTML .="<th>descripcion</th>";
            $cadenaHTML .="<th>pais</th>";

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
        header('Location:../index.php?page=Departamento&&info_list=' . $cadenaHTML);
    }

}
