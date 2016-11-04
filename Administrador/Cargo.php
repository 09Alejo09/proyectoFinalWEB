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
        <link href="Recursos/css/bootstrap.css" rel="stylesheet" />
        <!--FONTAWESOME MAIN STYLE -->
        <link href="Recursos/css/font-awesome.min.css" rel="stylesheet" />
        <link href="Recursos/css/csslogin.css" rel="stylesheet" type="text/css"/>
        <!--CUSTOM STYLE -->
        <link href="Recursos/css/tyle.css" rel="stylesheet" />
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <link href="Recursos/css/css" rel="stylesheet" type="text/css"/>
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <!--END HEAD SECTION -->
    <body>  
        <div class="loader"></div>

        <!-- NAV SECTION -->
        <div class="navbar navbar-inverse navbar-fixed-top">
        <!--END NAV SECTION -->
        <!-- HEADER SECTION -->
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-10 col-md-offset-1 col-sm-12">
                        <h3><strong id="st"> BIENVENIDO ADMINISTRADOR <br> CARGOS </br> </strong></h3>
                                 

                    </div>
                </div>
                <div class="container">
                    <div class="top">
                        <h1 id="title" class="hidden"><span id="logo">Banco <span>INTERCONTINENTAL</span> del ORO</span></h1>
                    </div>
                    <div class="login-box animated fadeInUp">
                        <div class="box-header">
                            <h4>...</h4>
                        </div>
                        <form action="cotrolador-login.php">

                            <label for="idcargo">Id cargo</label>
                            <br/>
                            <input type="text" id="IdCargo">
                            <br/>
                            <label for="cargo">cargo</label>
                            <br/>
                            <input type="text" id="cargo">
                            <br/>
                            <label for="intensidadHoraria">Intensidad Horaria</label>
                            <br/>
                            <input type="number" id="intensidadH">
                            <br/>
                            <label for="salario">Salario</label>
                            <br/>
                            <input type="number" id="salario">
                            <br/>
                            <label for="descripcion">Descripcion</label>
                            <br/>
                            <input type="text" id="descripcion">
                            <br/>
                            <button type="submit">Registrar</button>
                            <button type="submit">Buscar</button>
                            <br/><br/>
                            <button type="submit">Modificar</button>
                            <button type="submit">Eliminar</button>
                            <br/>

                        </form>
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
       <script src="../Recursos/js/jquery.js"></script>
        <!-- CORE BOOTSTRAP LIBRARY -->
        <script src="../Recursos/js/bootstrap.min.js"></script>
        <!-- CUSTOM SCRIPT-->
        <script src="custom.js"></script>
            </div>

        </div>  

    </body>
</html>
