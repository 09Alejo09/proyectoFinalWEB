

function validarCargo(tipo) {

    var formulario = document.getElementById("formCargo");
    document.getElementById("txtType").value = tipo;

    if (tipo === "save") {
        if (document.getElementById("txtNombre").value !== "" &&
                document.getElementById("txtIntensidad").value !== "" &&
                document.getElementById("txtSalario").value !== "" &&
                document.getElementById("txtDescripcion").value !== "") {
            formulario.submit();
        } else {
            alert("ingrese todos los datos");

        }

    }

    if (tipo === "update") {
        if (document.getElementById("txtNombre").value !== "" &&
                document.getElementById("txtIntensidad").value !== "" &&
                document.getElementById("txtSalario").value !== "" &&
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
            alert("Por favor ingrese el nombre del cargo a buscar");
        }
    }

    if (tipo === "delete") {
        if (document.getElementById("txtNombre").value !== "") {
            formulario.submit();
        } else {
            alert("Por favor busque el nombre del cargo a eliminar");
        }
    }

    if (tipo === "list") {
        formulario.submit();
    }
}
