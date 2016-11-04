

function validarRegistro(tipo) {

    var formulario = document.getElementById("formRegistro");
    document.getElementById("txtType").value = tipo;

    if (tipo === "save") {
        if (document.getElementById("txtNombre").value !== "" &&
                document.getElementById("txtNickname").value !== "" &&
                document.getElementById("txtPassword").value !== "") {
            formulario.submit();
        } else {
            alert("ingrese todos los datos");
            
        }

    }
    
}
