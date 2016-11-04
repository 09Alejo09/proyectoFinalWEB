

function validarRegistro(tipo) {

    var formulario = document.getElementById("formRegistro");
    document.getElementById("txtType").value = tipo;

    if (tipo === "save") {
        if (document.getElementById("id_sucursal").value !== "" &&
                document.getElementById("nombre").value !== "" &&
                document.getElementById("descripcion").value !== "" &&
                document.getElementById("id_municipio").value !== "" &&
                document.getElementById("id_banco").value !== "") {
            formulario.submit();
        } else {
            alert("ingrese todos los datos");
            
        }

    }
    
}
