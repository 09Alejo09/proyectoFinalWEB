

function validarPais(tipo) {

    var formulario = document.getElementById("formPais");
    document.getElementById("txtType").value = tipo;

    if (tipo === "save") {
        if (document.getElementById("txtNombre").value !== "" &&
                document.getElementById("txtDescripcion").value !== "") {
            formulario.submit();
        } else {
            alert("Ingrese todos los datos");
        }

    }

    if (tipo === "update") {
        if (document.getElementById("txtNombre").value !== "" &&
                document.getElementById("txtDescripcion").value !== "") {
            formulario.submit();
        } else {
            alert("Por favor realice una busqueda previa o ingrese todos los datos");
        }

    }

    if (tipo === "search") {
        if (document.getElementById("txtNombre").value !== "") {
            formulario.submit();

        } else {
            alert("Por favor ingrese el nombre del pais a buscar");
        }
    }

    if (tipo === "delete") {
        if (document.getElementById("txtNombrePais").value !== "") {
            formulario.submit();
        } else {
            alert("Por favor busque el nombre del pais a eliminar");
        }
    }

    if (tipo === "list") {
        formulario.submit();
    }
}



