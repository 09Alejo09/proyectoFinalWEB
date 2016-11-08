

function validarMunicipio(tipo) {

    var formulario = document.getElementById("formMunicipio");
    document.getElementById("txtType").value = tipo;

    if (tipo === "save") {
        if (document.getElementById("txtNombre").value !== "" &&
                document.getElementById("txtDescripcion").value !== "" &&
                document.getElementById("txtDepartamento").value !== "") {
            formulario.submit();
        } else {
            alert("Ingrese todos los datos");
        }

    }

    if (tipo === "update") {
        if (document.getElementById("txtNombre").value !== "" &&
                document.getElementById("txtDescripcion").value !== "" &&
                document.getElementById("txtDepartamento").value !== "") {
            formulario.submit();
        } else {
            alert("Por favor realice una busqueda previa o ingrese todos los datos");
        }

    }

    if (tipo === "search") {
        if (document.getElementById("txtNombre").value !== "") {
            formulario.submit();

        } else {
            alert("Por favor ingrese el nombre del municipio a buscar");
        }
    }

    if (tipo === "delete") {
        if (document.getElementById("txtNombre").value !== "") {
            formulario.submit();
        } else {
            alert("Por favor busque el nombre del municipio a eliminar");
        }
    }

    if (tipo === "list") {
        formulario.submit();
    }
}


