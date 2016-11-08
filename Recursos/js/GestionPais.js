/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function validarPais (tipo) {

    var formulario = document.getElementById("formPais");
    document.getElementById("txtType").value = tipo;

    if (tipo === "save") {
        if (document.getElementById("txtNombrePais").value !== "" &&
                document.getElementById("txtDescripcionPais").value !== ""){
                formulario.submit();
        } else {
            alert("Ingrese todos los datos");
        }

    }

    if (tipo === "update") {
        if (        document.getElementById("txtNombrePais").value !== "" &&
                    document.getElementById("txtDescripcionPais").value !== ""){
                    formulario.submit();
        } else {
            alert("por favor realice una busqueda previa o ingrese todos los datos");
        }

    }

    if (tipo === "search") {
        if (document.getElementById("txtNombrePais").value !== "") {
            formulario.submit();

        } else {
            alert("Por favor ingrese el nombre del pais a buscar");
        }
    }

    if (tipo === "delete") {
        if (document.getElementById("txtNombrePais").value !== "") {
            formulario.submit();
        } else {
            alert("Por favor busque el registro a eliminar");
        }
    }

    if (tipo === "list") {
        formulario.submit();
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


