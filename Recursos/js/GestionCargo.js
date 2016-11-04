

function validarRegistro(tipo) {

    var formulario = document.getElementById("formRegistro");
    document.getElementById("txtType").value = tipo;

    if (tipo === "save") {
        if (    document.getElementById("idcargo").value !== "" &&
                document.getElementById("cargo").value !== "" &&
                document.getElementById("intensidadHoraria").value !== "" &&
                document.getElementById("salario").value !== "" &&
                document.getElementById("descripcion").value !== "") {
            formulario.submit();
        } else {
            alert("ingrese todos los datos");

        }

    }

}
