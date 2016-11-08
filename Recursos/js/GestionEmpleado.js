/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function validarEmpleado(tipo) {

    var formulario = document.getElementById("formEmpleado");
    document.getElementById("txtType").value = tipo;

    if (tipo === "save") {
        if (document.getElementById("txt").value !== "" &&
                document.getElementById("txtIdempleado").value !== "" &&
                document.getElementById("txtCedula").value !== "" &&
                document.getElementById("txtNombre").value !== "" &&
                document.getElementById("txtEdad").value !== "" &&
                document.getElementById("txtDescripcion").value !== "" &&
                document.getElementById("txtCargo").value !== "" &&
                document.getElementById("txtIdsucursal").value !== "") {
            formulario.submit();
        } else {
            alert("Ingrese todos los datos");
        }

    }

    if (tipo === "update") {
        if (document.getElementById("txt").value !== "" &&
                document.getElementById("txtIdempleado").value !== "" &&
                document.getElementById("txtCedula").value !== "" &&
                document.getElementById("txtNombre").value !== "" &&
                document.getElementById("txtEdad").value !== "" &&
                document.getElementById("txtDescripcion").value !== "" &&
                document.getElementById("txtCargo").value !== "" &&
                document.getElementById("txtIdsucursal").value !== "") {
            formulario.submit();
        } else {
            alert("Por favor realice una busqueda previa o ingrese todos los datos");
        }

    }

    if (tipo === "search") {
        if (document.getElementById("txtCedula").value !== "") {
            formulario.submit();

        } else {
            alert("Por favor ingrese la cedula del empleado a buscar");
        }
    }

    if (tipo === "delete") {
        if (document.getElementById("txtCedula").value !== "") {
            formulario.submit();
        } else {
            alert("Por favor busque el empleado que desea eliminar");
        }
    }

    if (tipo === "list") {
        formulario.submit();
    }
}
