
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="Recursos/css/csslogin.css" rel="stylesheet" type="text/css"/>


        <title>Banco Intercontinental del Oro </title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <!--        <link href="Recursos/Pluggins/bootstrap.css" rel="stylesheet" type="text/css"/>
                <link href="Recursos/Pluggins/font-awesome.min.css" rel="stylesheet" type="text/css"/>-->
        <!--        <link href="Recursos/css/css.css" rel="stylesheet" type="text/css"/>-->

    </head>
    <!--END HEAD SECTION -->
    <body class="body">  
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


