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
        <title>Banco Interconinental del Oro</title>
        <!--GOOGLE FONT -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <!--BOOTSTRAP MAIN STYLES -->
        <link href="Recursos/Pluggins/bootstrap.css" rel="stylesheet" />
        <!--FONTAWESOME MAIN STYLE -->
        <link href="Recursos/Pluggins/font-awesome.min.css" rel="stylesheet" />
        <link href="Recursos/css/csslogin.css" rel="stylesheet" type="text/css"/>
        <!--CUSTOM STYLE -->
        <link href="assets/css/style.css" rel="stylesheet" />
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <link href="Recursos/css/css.css" rel="stylesheet" type="text/css"/>
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <!--END HEAD SECTION -->
    <body>  
        <div class="loader"></div>
        <!--END NAV SECTION -->
        <!-- HEADER SECTION -->
        <div id="header-section">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-10 col-md-offset-1 col-sm-12">
                        <h3><strong id="st"> BIENVENIDO ADMINISTRADOR <br> JUNTA DIRECTIVA </br></strong></h3>          

                           
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
               <form name="formularioDirectivo" method="post" id="formDirectivo" action="Controlador/GestionDirectivo.php">
                    
                   <label for="nombreDirectivo">Nombre</label>
                   <br/>
                   <input type="text" id="txtNombreDirectivo" name="nombreDirectivo" 
                        value="<?php isset($_REQUEST['nombreDirectivo']) ?
                                     print $_REQUEST['nombreDirectivo'] : print"";
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
                 <label for="apellidoDirectivo">Apellido</label>
                 <br/>
                 <input type="text" id="txtApellidoDirectivo" name="apellidoDirectivo" 
                        value="<?php isset($_REQUEST['apellidoDirectivo']) ?
                                     print $_REQUEST['apellidoDirectivo'] : print"";
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
                <label for="cedula">Cedula</label>
                <br/>
                <input type="text" id="txtCedulaDirectivo" name="cedulaDirectivo" 
                        value="<?php isset($_REQUEST['cedulaDirectivo']) ?
                                     print $_REQUEST['cedulaDirectivo'] : print"";
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
                 <label for="telefono">Telefono</label>
                <br/>
                <input type="text" id="txtTelefonoDirectivo" name="telefonoDirectivo" 
                        value="<?php isset($_REQUEST['telefonoDirectivo']) ?
                                     print $_REQUEST['telefonoDirectivo'] : print"";
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
                <label for="fechaNacimiento">Fecha de Nacimiento</label>
                <br/>
                <input type="text" id="txtFechaDeNacimiento" name="fechaDeNacimiento" 
                        value="<?php isset($_REQUEST['fechaDeNacimiento']) ?
                                     print $_REQUEST['fechaDeNacimiento'] : print"";
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
                 <input type="text" id="txtType" name="type" class="oculto">
                <br/>
                <input type="button" value="Guardar" id="btnGuardar" onclick="validarDirectivo('save');">
                <input type="button" value="Buscar" id="btnBuscar" onclick="validarDirectivo('search');">
                <br/>
                <input type="button" value="Editar" id="btnEditar" onclick="validarDirectivo('update');">
                <input type="button" value="Eliminar" id="btnEliminar" onclick="validarDirectivo('delete');">
                <br/>
                <input type="button" value="Listar" id="btnListar" onclick="validarDirectivo('list');">
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
      
        <!--END BASIC INFO SECTION -->
        <!--FOOTER SECTION -->
        <div id="footer">
            <div class="container">
                <div class="row ">
                    &copy; 2016 BancoIntercontinentalDelOro | All Right Reserved 				

                </div>

            </div>

        </div>  
       
        <script src="jquery.js"></script>
        <!-- CORE BOOTSTRAP LIBRARY -->
        <script src="bootstrap.min.js"></script>
        <!-- CUSTOM SCRIPT-->
        <script src="custom.js"></script>
    </body>
</html>
