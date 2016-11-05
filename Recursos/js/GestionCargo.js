

function validarRegistro(tipo) {

    var formulario = document.getElementById("formCargo");
    document.getElementById("txtType").value = tipo;

    if (tipo === "save") {
        if (    document.getElementById("txtNombreCargo").value !== "" &&
                document.getElementById("txtIntensidadCargo").value !== "" &&
                document.getElementById("salario").value !== "" &&
                document.getElementById("descripcion").value !== "") {
            formulario.submit();
        } else {
            alert("ingrese todos los datos");

        }

    }

}
