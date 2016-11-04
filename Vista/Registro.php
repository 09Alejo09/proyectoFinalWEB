<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../Recursos/css/estilo.css" rel="stylesheet" type="text/css"/>
        <script src="../Recursos/js/GestionCliente.js" type="text/javascript"></script>
        <link href="../Recursos/css/css.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body class="body2">
        <form name="formularioRegistro" id="formRegistro" 
              method="post" action="../Controlador/GestionCliente.php"
              onsubmit="return logIn('con');">

            <body>
        <div class="container">
            
            <div class="login-box animated fadeInUp">
                <div class="box-header">
                    <h2>Registro</h2>
                </div>
                <label for="nombre">Nombre</label>
                <br/>
                <input type="text" id="txtNombre" name="nombre" value="">
                <br/>
                <label for="nickname">Nickname</label>
                <br/>
                <input type="text" id="txtNickname" name="nickname" value="">
                <br/>
                <label for="password">Password</label>
                <br/>
                <input type="passwword" id="txtPassword" name="password" value="">
                <br/>
                <br>
                <input type="number" id="txtId" name="id" value="" class="oculto">
                <br/>
                <br>
                <input type="text" id="txtType" name="type" class="oculto"/>
                <br/>
                <button type="submit" value="Registrar" id="BRegistrar" onclick="validarRegistro('save');">Registrar</button>
                <br/>
            </div>
        </div>
      </form>
        
         <?php
        if (isset($_REQUEST['message'])) {
            echo $_REQUEST['message'];
        }
        ?>
    </body>
    
    