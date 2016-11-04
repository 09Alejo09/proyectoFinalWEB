/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function validarDirectivo (tipo) {

    var formulario = document.getElementById("formDirectivo");
    document.getElementById("txtType").value = tipo;

    if (tipo === "save") {
        if (document.getElementById("txt").value !== "" &&
                document.getElementById("txtNombreDirectivo").value !== "" &&
                document.getElementById("txtApellidoDirectivo").value !== "" &&
                document.getElementById("txtCedulaDirectivo").value !== "" &&
                document.getElementById("txtTelefonoDirectivo").value !== "" &&
                document.getElementById("txtFechaDeNacimiento").value !== "" &&
                document.getElementById("txt").value !== "") {
            formulario.submit();
        } else {
            alert("ingrese todos los datos");
        }

    }

    if (tipo === "update") {
        if (document.getElementById("txtNombreDirectivo").value !== "" &&
                document.getElementById("txtApellidoDirectivo").value !== "" &&
                document.getElementById("txtCedulaDirectivo").value !== "" &&
                document.getElementById("txtTelefonoDirectivo").value !== "" &&
                document.getElementById("txtFechaDeNacimiento").value !== "" &&
                document.getElementById("txt").value !== "") {
            formulario.submit();
        } else {
            alert("por favor realice una busqueda previa o ingrese todos los datos");
        }

    }

    if (tipo === "search") {
        if (document.getElementById("txtCedulaDirectivo").value !== "") {
            formulario.submit();

        } else {
            alert("por favor ingrese la cedula del directivo a buscar");
        }
    }

    if (tipo === "delete") {
        if (document.getElementById("txtCedulaDirectivo").value !== "") {
            formulario.submit();
        } else {
            alert("por favor busque el registro a eliminar");
        }
    }

    if (tipo === "list") {
        formulario.submit();
    }
}
