



function validarDepartamento(tipo) {

    var formulario = document.getElementById("formDepartamento");
    document.getElementById("txtType").value = tipo;

    if (tipo === "save") {
        if (document.getElementById("txtNombre").value !== "" &&
                document.getElementById("txtDescripcion").value !== "" &&
                document.getElementById("txtPais").value !== "") {
            formulario.submit();
        } else {
            alert("Ingrese todos los datos");

        }

    }

    if (tipo === "update") {
        if (document.getElementById("txtNombre").value !== "" &&
                document.getElementById("txtDescripcion").value !== "" &&
                document.getElementById("txtPais").value !== "") {
            formulario.submit();
        } else {
            alert("Por favor realice una busqueda previa o ingrese todos los datos");
        }

    }

    if (tipo === "search") {
        if (document.getElementById("txtNombre").value !== "") {
            formulario.submit();

        } else {
            alert("Por favor ingrese el nombre del departamento a buscar");
        }
    }

    if (tipo === "delete") {
        if (document.getElementById("txtNombre").value !== "") {
            formulario.submit();
        } else {
            alert("Por favor busque el nombre del departamento a eliminar");
        }
    }

    if (tipo === "list") {
        formulario.submit();
    }
}
