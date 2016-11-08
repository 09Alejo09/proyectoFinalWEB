<html lang="en">
    <!--<![endif]-->
    <!-- HEAD SECTION -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!--[if IE]>
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <![endif]-->
        <title>Banco Intercontinental del Oro</title>
        <!--GOOGLE FONT -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <!--BOOTSTRAP MAIN STYLES -->
        <link href="Recursos/Pluggins/bootstrap.css" rel="stylesheet" />
        <!--FONTAWESOME MAIN STYLE -->
        <link href="Recursos/Pluggins/font-awesome.min.css" rel="stylesheet" />
        <!--        <link href="Recursos/css/csslogin.css" rel="stylesheet" type="text/css"/>-->


        <link href="Recursos/css/css.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>  
        <div class="loader"></div>

        <div id="header-section">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-10 col-md-offset-1 col-sm-12">
                        <h3><strong id="st"> BIENVENIDO ADMINISTRADOR <br> DEPARTAMENTO </br></strong></h3>          


                    </div>
                </div>
                <div class="contenido">
                    <div class="top">
                        <h1 id="title" class="hidden"><span id="logo">Banco <span>INTERCONTINENTAL</span> del ORO</span></h1>
                    </div>
                    <div class="login-box animated fadeInUp">
                        <div class="box-header">
                            <h4>Directivos</h4>
                        </div>
                        <form name="formularioDepartamento" method="post" id="formDepartamento" action="Controlador/GestionDepartamento.php">

                            <label for="nombre">Nombre</label>
                            <br/>
                            <input type="text" id="txtNombre" name="nombre" 
                                   value="<?php
                                   isset($_REQUEST['nombre']) ?
                                                   print $_REQUEST['nombre'] : print"";
                                   ?>">
                            <div class="oculto">
                                <div rowspan="10" class="listado">
                                    <?php
                                    if (isset($_REQUEST['info_list'])) {
                                        echo $_REQUEST['info_list'];
                                    }
                                    ?>
                                </div>
                            </div>

                            <br/>
                            <label for="descripcion">Descripción</label>
                            <br/>
                            <input type="text" id="txtDescripcion" name="descripcion" 
                                   value="<?php
                                   isset($_REQUEST['descripcion']) ?
                                                   print $_REQUEST['descripcion'] : print"";
                                   ?>">
                            <div class="oculto">
                                <div rowspan="10" class="listado">
                                    <?php
                                    if (isset($_REQUEST['info_list'])) {
                                        echo $_REQUEST['info_list'];
                                    }
                                    ?>
                                </div>
                            </div>

                            <br/>
                            <label for="pais">Pais</label>
                            <br/>
                            <input type="text" id="txtPais" name="pais" 
                                   value="<?php
                                   isset($_REQUEST['pais']) ?
                                                   print $_REQUEST['pais'] : print"";
                                   ?>">

                            <div class="oculto">
                                <div rowspan="10" class="listado">
                                    <?php
                                    if (isset($_REQUEST['info_list'])) {
                                        echo $_REQUEST['info_list'];
                                    }
                                    ?>
                                </div>
                            </div>
                    </div>
                </div>
                <br/>
                <input type="text" id="txtType" name="type" class="oculto">
                <br/>
                <input type="button" value="Guardar" id="btnGuardar" onclick="validarDepartamento('save');">
                <input type="button" value="Buscar" id="btnBuscar" onclick="validarDepartamento('search');">
                <br/>
                <input type="button" value="Editar" id="btnEditar" onclick="validarDepartamento('update');">
                <input type="button" value="Eliminar" id="btnEliminar" onclick="validarDepartamento('delete');">
                <br/>
                <input type="button" value="Listar" id="btnListar" onclick="validarDepartamento('list');">
                <br/>
                </form>

                <?php
                if (isset($_REQUEST['message'])) {
                    echo $_REQUEST['message'];
                }
                ?>

                <br/>
            </div>
        </div>


    </div>

</div> 


<div id="footer">
    <div class="container">
        <div class="row ">
            &copy; 2016 BancoIntercontinentalDelOro | All Right Reserved 				

        </div>

    </div>

</div>  

<script src="jquery.js"></script>

<script src="bootstrap.min.js"></script>

<script src="custom.js"></script>
</body>
</html>
