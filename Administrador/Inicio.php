<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="row text-center">
            <div class="col-md-10 col-md-offset-1 col-sm-12">
                <h1><strong> BANCO INTERCONTINENTAL DEL ORO</strong>          

            </div>
        </div>


        <div id="basic-info">
            <div class="container">

                <div class="row main-top-margin text-center">
                    <div class="col-md-8 col-md-offset-2 " >
                        <div class="row main-low-margin text-center">


                            <div class="col-md-8 col-sm-8   text-justify" >
                                <h3> MISION</h3>
                                <p>
                                    Entregar a nuestros clientes un servicio bancario de optima calidad en el mundo entero, sin limitaciones
                                    y con la intencion de minimizar errores de seguridad y disponibilidad en un 99 porciento.
                                </p>
                                <h3>VISION</h3>
                                <p>
                                    Crecer, para asi, poder ofrecer cada día un servicio de excelente calidad
                                    a nuestros clientes, quienes depositan todo su confianza en nosotros.

                                </p>
                            </div>
                            <form name="formularioLogOut" id="formLogOut" method="post"
                                  action="Controlador/gestionLogin.php"
                                  onsubmit="return logIn('desc');" align="center">

                                <table>
                                    <tr>
                                        <td>
                                            <input type="text" id="txtTypeLog" name="type" class="oculto">
                                        </td>
                                        <td>
                                            <button type="submit" value="desconectar" id="btnDesconectar">Desconectar</button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                            <div class="col-md-3  "  >
                                <img class="img-circle" src="assets/img/team/team1.png" alt="">
                                <h4><strong>Alejandro Sanchez, Mariana Restrepo, Gabriela Ramirez</strong> </h4>

                                <p>
                                    <a href="#"><i class="fa fa-facebook-square fa-2x color-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter-square fa-2x color-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus-square fa-2x color-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin-square fa-2x color-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-pinterest-square fa-2x color-pinterest"></i></a>

                                </p>

                            </div>
                        </div>
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

        <script src="assets/js/jquery.js"></script>
        <!-- CORE BOOTSTRAP LIBRARY -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- CUSTOM SCRIPT-->
        <script src="assets/js/custom.js"></script>
    </body>
</html>
