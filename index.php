<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="Recursos/css/css/animate.css">
        <link href="Recursos/css/csslogin.css" rel="stylesheet" type="text/css"/>
        <!-- Custom Stylesheet -->
        <link rel="stylesheet" href="Recursos/css/css.css">
        <link href="Recursos/css/css.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
        <script src="Recursos/js/GestionLogIn.js" type="text/javascript"></script>
        <link href="Recursos/css/estilo.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <?php
       session_start();
   
   if(isset($_REQUEST['infoLogIn'])){
       echo $_REQUEST['infoLogIn'];
   }
   if(isset($_SESSION['nameUser'])){
       echo 'Bienvenido '. $_SESSION['nameUser'];
   }
   if (isset($_SESSION['cargo']) ? $cargo = $_SESSION['cargo'] : $cargo = ""){
       
                if ($cargo === "admin") {
                    include 'Administrador/masterPageAdmin.php';
                } else if ($cargo === "asesor") {
                    include 'Vista/masterPageAsesor.php';
                } else if ($cargo === "cajero") {
                    include 'Vista/masterPageCajero.php';
                } else if ($cargo === "gerente") {
                    include 'Vista/masterPageGerente.php.php';
                } else if ($cargo === "cliente") {
                    include 'Vista/masterPageCliente.php';
                }
        } else {
            include 'Vista/logIn.php';
        }
        
        ?>
</body>
    
    
</html>



