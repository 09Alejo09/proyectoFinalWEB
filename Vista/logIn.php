<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="Recursos/css/css.css" rel="stylesheet" type="text/css"/>
        <title>Banco intercontinental del Oro</title>
    </head>
    <body class="body2">
        <form name="formularioLogin" id="formLogIn" method="post" 
              action="Controlador/gestionLogin.php"
              onsubmit="return logIn('con');">
            <div class="container">
                <div class="top">
                    
                <h1 id="title" class="hidden"><span id="logo">Banco <span>INTERCONTINENTAL</span> del ORO</span></h1>
            </div>
            <div class="login-box animated fadeInUp">
                <div class="box-header">
                    <h2>Bienvenidos!</h2>
                </div>
                <label for="username">Usuario</label>
                <br/>
                <input id="txtUsuario" value="admin"
                               name="nickName" required type="text">
                <br/>
                <label for="password">Password</label>
                <br/>
                <input type="password" id="txtPassword" value="123"
                               name="password" required >
                <br/>
                <button type="submit" id="btnLogin">Ingresar</button><br/>
                <br/>
                <button type="button" id="btnReg" onclick="window.location.href='Vista/Registro.php'">Registrar</button>
                <br/>
                <input type="text" id="txtTypeLog" name="type" class="oculto">
                <br/>
            </div>
        </div>
        </form>
    </body>
    
    <script>
        $(document).ready(function () {
            $('#logo').addClass('animated fadeInDown');
            $("input:text:visible:first").focus();
        });
        $('#username').focus(function () {
            $('label[for="username"]').addClass('selected');
        });
        $('#username').blur(function () {
            $('label[for="username"]').removeClass('selected');
        });
        $('#password').focus(function () {
            $('label[for="password"]').addClass('selected');
        });
        $('#password').blur(function () {
            $('label[for="password"]').removeClass('selected');
        });
    </script>

</html>