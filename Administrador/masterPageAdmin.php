<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- HEAD SECTION -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="Recursos/css/csslogin.css" rel="stylesheet" type="text/css"/>
        <meta name="description" content="">
        <meta name="author" content="">
        <!--[if IE]>
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <![endif]-->
        <title>Banco Intercontinental del Oro </title>
        <!--GOOGLE FONT -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <!--BOOTSTRAP MAIN STYLES -->
        <link href="Recursos/Pluggins/bootstrap.css" rel="stylesheet" type="text/css"/>
        <!--FONTAWESOME MAIN STYLE -->
        <link href="Recursos/Pluggins/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="Recursos/css/css.css" rel="stylesheet" type="text/css"/>
        <!--CUSTOM STYLE -->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <!--END HEAD SECTION -->
    <body class="body2">  
        <div class="loader"></div>

        <!-- NAV SECTION -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">BIO</a>
                </div>
                <div class="menu">
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php?page=Inicio">Inicio</a></li>
                        <li><a href="index.php?page=Directivo">Directivos</a></li>
                        <li><a href="index.php?page=Cargo">Cargos</a></li>
                        <li><a href="index.php?page=Empleado">Empleados</a></li>
                        <li><a href="index.php?page=Sucursal">Sucursales</a></li>
                        <li><a href="index.php?page=Pais">Paises</a></li>
                        <li><a href="index.php?page=Departamento">Departamentos</a></li>
                        <li><a href="index.php?page=Municipio">Municipios</a></li>
                    </ul>
                </div>
              </div>
            </div>
        </div>
        <!--END NAV SECTION -->
        <!-- HEADER SECTION -->
        <div id="header-section">
            <div class="container">
                <div class="contenido">
                    <?php
                    if (isset($_REQUEST['page'])) {
                        include $_REQUEST['page'] . ".php";
                    } else {
                        include 'Administrador/inicio.php';
                    }
                    ?>
                </div>
            </div>
        </div>
       <script src="Recursos/Pluggins/jquery.js"></script>
        <!-- CORE BOOTSTRAP LIBRARY -->
        <script src="Recursos/Pluggins/bootstrap.min.js"></script>
        <!-- CUSTOM SCRIPT-->
        <script src="Recursos/Pluggins/custom.js"></script>
       
    </body>
</html>
 

