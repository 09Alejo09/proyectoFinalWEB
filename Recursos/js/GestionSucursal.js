

function validarSucursal(tipo) {

    var formulario = document.getElementById("formSucursal");
    document.getElementById("txtType").value = tipo;

    if (tipo === "save") {
        if (document.getElementById("txtIdsucursal").value !== "" &&
                document.getElementById("txtNombre").value !== "" &&
                document.getElementById("txtDescripcion").value !== "" &&
                document.getElementById("txtMunicipio").value !== "" &&
                document.getElementById("txtBanco").value !== "") {
            formulario.submit();
        } else {
            alert("Ingrese todos los datos");
        }

    }

    if (tipo === "update") {
        if (document.getElementById("txtIdsucursal").value !== "" &&
                document.getElementById("txtNombre").value !== "" &&
                document.getElementById("txtDescripcion").value !== "" &&
                document.getElementById("txtMunicipio").value !== "" &&
                document.getElementById("txtBanco").value !== "") {
            formulario.submit();
        } else {
            alert("Por favor realice una busqueda previa o ingrese todos los datos");
        }

    }

    if (tipo === "search") {
        if (document.getElementById("txtNombre").value !== "") {
            formulario.submit();

        } else {
            alert("Por favor ingrese el nombre de la sucursal a buscar");
        }
    }

    if (tipo === "delete") {
        if (document.getElementById("txtNombre").value !== "") {
            formulario.submit();
        } else {
            alert("Por favor busque el nombre de la sucursal a eliminar");
        }
    }

    if (tipo === "list") {
        formulario.submit();
    }
}


