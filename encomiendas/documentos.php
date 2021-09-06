<?php
session_start();
include("../base_datos/db.php");
?>

<!doctype html>
<html lang="es">

<head>
    <title>Encomienda - Documento</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="../images/favicon.png" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" id="cpswitch" href="../css/orange.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Owl Carousel Stylesheet -->
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../css/owl.theme.css">
    <!-- Flex Slider Stylesheet -->
    <link rel="stylesheet" href="../css/flexslider.css" type="text/css" />
    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="../css/datepicker.css">
    <!-- Magnific Gallery -->
    <link rel="stylesheet" href="../css/magnific-popup.css">
</head>

<body id="main-homepage">

<div class="tab-content">
        <div id="flights" class="tab-pane in active">


            <form method="POST" action="validar-encomienda.php">
                <h4>Donde quieres mandar tu paquete</h4>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <!-- <label for="">¿Dónde estás?</label> -->
                                <div class="form-group left-icon">
                                    <!-- <input type="text" class="form-control" placeholder="Origen"> -->
                                    <?php
                                    //Creamos la consulta SQL
                                    $tabla = mysqli_query($link, "SELECT DISTINCT ciudad FROM agencias ORDER BY ciudad"); 
                                        
                                    ?>
                                    <select name="origen_encomienda" class="form-control" id="origen">
                                        <option value="-1">Origen</option>
                                        <?php
                                        //recorremos la tabla en busca de los registros
                                            while ($registro = mysqli_fetch_array($tabla)) { 
                                        ?>
                                        <option value="<?php echo $registro[0]; //a�adimos el registro ?>"><?php echo $registro[0]; //a�adimos el registro?></option>
                                        <?php
                                            } 
                                            //liberamos la tabla del bloqueo..
                                            mysqli_free_result($tabla);
                                        ?>
                                    </select>
                                    <i class="fa fa-map-marker"></i>
                                </div>
                            </div>
                            <!-- end columns -->
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <!-- <label for="">¿A donde vas?</label> -->
                                <div class="form-group left-icon">
                                    <?php
                                        //Creamos la consulta SQL
                                        $tabla = mysqli_query($link, "select distinct ciudad from agencias order by ciudad"); 
                                    ?>
                                    <select name="destino_encomienda" class="form-control" id="destino">
                                        <option value="-1">Destino</option>
                                        <?php
                                        //recorremos los registros
                                            while ($registro = mysqli_fetch_array($tabla)) { 
                                        ?>
                                        <option value="<?php echo $registro[0]; //a�adimos el valor?>"><?php echo $registro[0]; //a�adimos el valor?></option>
                                        <?php
                                            } 
                                            //liberamos la tabla...
                                            mysqli_free_result($tabla);
                                        ?>
                                    </select>
                                    <i class="fa fa-map-marker"></i>
                                </div>
                            </div>
                            <!-- end columns -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end columns -->
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <!-- <label for="">¿Cuándo viajaras?</label> -->
                                <div class="form-group left-icon">
                                    <input type="text" autocomplete="off" class="form-control dpd1" name="fecha_encomienda" placeholder="Fecha"><i class="fa fa-calendar"></i>
                                </div>
                            </div>

                            
                            <!-- end columns -->
                        </div>
                        <!-- end row -->
                    </div>

                    <!-- end columns -->
                </div>
                <!-- end row -->



                <div>
                    <h4>Precio</h4>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <!-- <label for="">¿Dónde estás?</label> -->
                                    <div class="form-group left-icon">

                                        <input type="text" name = "precio-encomienda" class="form-control" placeholder="Precio"> 
                                    </div>
                                            
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>

                <div>
                    <h4>Datos del destinatario</h4>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group left-icon">
                                        <input type="text" name = "nombre-destinatario" class="form-control" placeholder="Nombre"> 
                                    </div>

                                    <div class="form-group left-icon">
                                        <input type="text" name = "apellido-destinatario" class="form-control" placeholder="Apellido"> 
                                    </div>

                                    <div class="form-group left-icon">
                                        <input type="text" name = "dni-destinatario" class="form-control" placeholder="DNI"> 
                                    </div>

                                    <div class="form-group left-icon">
                                        <input type="text" name = "celular-destinatario" class="form-control" placeholder="Celular"> 
                                    </div>

                                    <div class="form-group ">
                                        <input type="hidden" name="valor-encomienda" value="documento">
                                    </div>               
                                            
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                    <input type="submit" class="btn btn-orange" name="verificar-encomienda" value="Continuar">
                </div>
                
                
            
            </div>
            </form>
        </div>
        <!-- end flights -->
        
    </div>
    <!-- end tab-content -->
</div>



<script src="../js/jquery.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.flexslider.js"></script>
    <script src="../js/bootstrap-datepicker.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/custom-navigation.js"></script>
    <script src="../js/custom-flex.js"></script>
    <script src="../js/custom-owl.js"></script>
    <script src="../js/custom-date-picker.js"></script>
    <script src="../js/custom-video.js"></script>
    <script src="../js/util.js"></script>
    <!-- Page Scripts Ends -->
</body>

</html>