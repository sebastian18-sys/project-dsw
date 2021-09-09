<?php
session_start();
include("../base_datos/db.php");

$origin = $_SESSION['CIUDAD_ORIGEN'];
$destiny = $_SESSION['CIUDAD_LLEGADA'];
$date = $_SESSION['NUEVA_FECHA_VIAJE'];

?>

<!doctype html>
<html lang="es">

<head>
    <title>Buscar pasaje</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="../images/icon-web.png" />
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
    <!--Jquery UI Stylesheet-->
    <link rel="stylesheet" href="../css/jquery-ui.min.css">
</head>

<body>
    <!--====== LOADER =====-->
    <div class="loader"></div>
    <!--======== SEARCH-OVERLAY =========-->
    <div class="overlay"><a href="javascript:void(0)" id="close-button" class="closebtn">&times;</a>
        <div class="overlay-content">
            <div class="form-center">
                <form>
                    <div class="form-group">
                        <div class="input-group"><input type="text" class="form-control" placeholder="Search..." required /><span class="input-group-btn"><button type="submit" class="btn"><span><i class="fa fa-search"></i></span></button>
                            </span>
                        </div>
                        <!-- end input-group -->
                    </div>
                    <!-- end form-group -->
                </form>
            </div>
            <!-- end form-center -->
        </div>
        <!-- end overlay-content -->
    </div>
    <!-- end overlay -->


    <nav class="navbar navbar-default main-navbar navbar-custom navbar-white" id="mynavbar-1">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" id="menu-button">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="header-search hidden-lg">
                    <!-- <a href="javascript:void(0)" class="search-button">
                        <span><i class="fa fa-search"></i></span>
                    </a> -->
                    <a href="../covid-19.php" class="covid-button"><span>
                        <!-- <i class="fa fa-search"></i> -->
                        Covid-19
                    </span>
                    </a>
                </div>
                <a href="../index.php" class="navbar-brand">
                    <span><i class="fa fa-bus"></i>WIÑAY</span>MARCA
                </a>
            </div>
            <!-- end navbar-header -->
            <div class="collapse navbar-collapse" id="myNavbar1">
                <ul class="nav navbar-nav navbar-right navbar-search-link">
                    <li class="dropdown">
                        <a href="../index.php" class="dropdown-toggle">Inicio
                            <span>
                                <!-- <i class="fa fa-angle-down"></i> -->
                            </span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="../about-us.html" class="dropdown-toggle">Nosotros
                            <span>
                                <!-- <i class="fa fa-angle-down"></i> -->
                            </span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios
                            <span>
                                <i class="fa fa-angle-down"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="../encomiendas/encomiendas.php">Encomiendas</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Trayectos<span><i
                                    class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../destinations.html">Destinos</a></li>
                            <li><a href="../rutas.html">Rutas</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="../faq.html" class="dropdown-toggle">Ayuda
                            <span>
                                <!-- <i class="fa fa-angle-down"></i> -->
                            </span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="../contact-us.php" class="dropdown-toggle">Contacto
                            <span>
                            </span>
                        </a>
                    </li>
                    <li><a href="../covid-19.php" class="search-button"><span>
                        Covid-19
                    </span>
                    </a></li>
                </ul>
            </div>
            <!-- end navbar collapse -->
        </div>
        <!-- end container -->
    </nav>
    <!-- end navbar -->
    <div class="sidenav-content">
        <div id="mySidenav" class="sidenav">
            <h2 id="web-name"><span><i class="fa fa-bus"></i></span>Wiñaymarca</h2>
            <div id="main-menu">
                <div class="closebtn">
                    <button class="btn btn-default" id="closebtn">&times;</button>
                </div>
                <div class="list-group panel">
                    <a href="../index.php" class="list-group-item active" data-parent="#main-menu">
                        <span><i class="fa fa-home link-icon"></i></span>Inicio
                    </a>

                    <a href="../about-us.html" class="list-group-item" data-parent="#main-menu">
                        <span><i class="fa fa-plane link-icon"></i></span>Nosotros
                    </a>

                    <a href="#hotels-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu">
                        <span><i class="fa fa-building link-icon"></i></span>Servicios
                        <span><i class="fa fa-chevron-down arrow"></i></span>
                    </a>
                    <div class="collapse sub-menu" id="hotels-links">
                        <a href="../encomiendas/encomiendas.php" class="list-group-item">Encomiendas</a>
                    </div>


                    <a href="#tours-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu">
                        <span><i class="fa fa-globe link-icon"></i></span>Trayectos
                        <span><i class="fa fa-chevron-down arrow"></i></span>
                    </a>
                    <div class="collapse sub-menu" id="tours-links">
                        <a href="../destinations.html" class="list-group-item">Destinos</a>
                        <a href="../rutas.html" class="list-group-item">Rutas</a>
                    </div>

                    <a href="../faq.html" class="list-group-item" data-toggle="collapse" data-parent="#main-menu">
                        <span><i class="fa fa-ship link-icon"></i></span>Ayuda
                    </a>

                    <a href="../contact-us.php" class="list-group-item" data-toggle="collapse" data-parent="#main-menu">
                        <span><i class="fa fa-car link-icon"></i></span>Contacto
                    </a>
                </div>

            </div>

        </div>

    </div>
    <!-- end sidenav-content -->
    <!--========================= PAGE-COVER ======================-->
    <section class="page-cover back-size" id="cover-flight-grid-list">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Selecciona tu viaje!</h1>
                    <ul class="breadcrumb">
                    </ul>
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end page-cover -->
    <!--===== INNERPAGE-WRAPPER ====-->
    <section class="innerpage-wrapper">
        <div id="flight-listings" class="innerpage-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3 side-bar left-side-bar">
                        <div class="side-bar-block filter-block">
                            <h3>Filtro</h3>
                            <p>Información de tu viaje</p>
                            <div class="panels-group">
                                <label for="">Origen</label>
                                <div class="panel panel-default">
                                    <div class="panel-heading">

                                        <a href="" data-toggle="collapse"> <?php echo $origin ?> </a>
                                    </div>
                                    <!-- end panel-heading -->
                                </div>
                                <!-- end panel-default -->
                                <label for="">Destino</label>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a href="" data-toggle="collapse"> <?php echo $destiny ?> </a>
                                    </div>
                                    <!-- end panel-heading -->
                                </div>
                                <!-- end panel-default -->
                                <label for="">Ida</label>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a href="" data-toggle="collapse"> <?php echo $date ?></a>
                                    </div>
                                    <!-- end panel-heading -->
                                </div>
                                <!-- end panel-default -->
                                <label for="">Vuelta</label>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a href="" data-toggle="collapse">-</a>
                                    </div>
                                    <!-- end panel-heading -->
                                </div>
                                <!-- end panel-default -->
                            </div>
                            <!-- end panel-group -->
                            <!-- <div class="price-slider">
                                <p><input type="text" id="amount" readonly></p>
                                <div id="slider-range"></div>
                            </div> -->

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a href="datos-cambios-rep.php" class="btn btn-orange" data-toggle="">Modificar Búsqueda</a>
                                </div>
                                <!-- end panel-heading -->
                            </div>
                            <!-- end price-slider -->
                        </div>
                        <!-- end side-bar-block -->

                        <div class="row">
                            <!-- end columns -->
                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="side-bar-block support-block">
                                    <h3>Necesitas ayuda?</h3>
                                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum.</p>
                                    <div class="support-contact"><span><i class="fa fa-phone"></i></span>
                                        <p>+1 123 1234567</p>
                                    </div>
                                    <!-- end support-contact -->
                                </div>
                                <!-- end side-bar-block -->
                            </div>
                            <!-- end columns -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end columns -->

                    <div class="col-xs-12 col-sm-12 col-md-9 content-side">
                        <H2> <?php echo $origin ?> <i class="fa fa-arrow-right" aria-hidden="true"></i> <?php echo $destiny ?> </H2>
                        <p>Fecha: <?php echo $date ?></p>

                        <?php 
                         $sql = "SELECT count(*) as conteo from itinerarios b where b.ciudad_salida like('$origin') and b.ciudad_llegada like('$destiny') and b.fecha_salida like('$date')";
                         $resultado = mysqli_query($link, $sql); 
                         $fila = mysqli_fetch_assoc($resultado);

                         $buses_disponibles = $fila['conteo'];
                        ?>

                        <div class="page-search">
                            <h4><strong> <?php echo $buses_disponibles ?> bus(es)</strong> encontrados</h4>
                            <hr class="heading-line" />
                        </div>
                        <div class="list-block main-block f-list-block">
                            <!-- <div class="list-content">
                                <div class="main-img list-img f-list-img">
                                    <a href="flight-detail-left-sidebar.html">
                                        <div class="f-img"><img src="images/flight-1.jpg" class="img-responsive" alt="flight-img" /></div>
                    
                                    </a>
                                    <ul class="list-unstyled list-inline offer-price-1">
                                        <li class="duration"><i class="fa fa-clock-o"></i><span>6 hours - 30 minutes</span></li>
                                        <li class="price">$568.00<span class="divider">|</span><span class="pkg">2 Stay</span></li>
                                    </ul>
                                    <ul class="list-unstyled flight-timing">
                                        <li><span><i class="fa fa-plane"></i></span><span class="date">Aug, 02-2017 </span>(8:40 PM)</li>
                                        <li><span><i class="fa fa-plane"></i></span><span class="date">Aug, 03-2017 </span>(8:40 PM)</li>
                                    </ul>
                                </div>
               
                                <div class="list-info f-list-info">
                                    <h3 class="block-title"><a href="flight-detail-left-sidebar.html">Sydney to Paris</a></h3>
                                    <p class="block-minor"><span>Fr 5379,</span>Oneway Flight</p>
                                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p><a href="flight-detail-left-sidebar.html"
                                        class="btn btn-orange">View More</a></div>
         
                            </div> -->
                            <div class="table-responsive">
                                <table tabindex="0" class="table table-bordered table-striped">

                                    <form action="buscarAsiento.php" method="POST">
                                        <!-- Cabecera de la tabla -->
                                        <thead class="table-search-head">
                                            <tr>
                                                <th>N°</th>
                                                <th>Origen</th>
                                                <th>Hora salida</th>
                                                <th>Fecha</th>
                                                <th>Destino</th>
                                                <th>Hora llegada</th>
                                                <th>Precio</th>
                                                <!-- <th class="text-center">Asientos disponibles</th> -->
                                            </tr>
                                        </thead>

                                        <tbody class="table-search-content">
                                            

                                            
                                            <?php

                                            $query = "SELECT b.id, b.ciudad_salida ,b.hora_salida,b.precio,b.hora_llegada, b.fecha_salida, b.ciudad_llegada from itinerarios b where b.ciudad_salida like('$origin') and b.ciudad_llegada like('$destiny') and b.fecha_salida like('$date')";
                                            $result_tasks = mysqli_query($link, $query); 
                                            while($row = mysqli_fetch_assoc($result_tasks)) { 

                                            ?>
                                            <tr>
                                                <td><input type="radio" name="id_corrida" value="<?php echo $row['id'] ?>" onclick=""/></td>
                                                <td><?php echo $row['ciudad_salida'] ?></td>
                                                <td><?php echo $row['hora_salida'] ?></td>
                                                <td><?php echo $row['fecha_salida'] ?></td>
                                                <td><?php echo $row['ciudad_llegada'] ?></td>
                                                <td><?php echo $row['hora_llegada'] ?></td>
                                                <td><?php echo "S/. " . $row['precio'] ?></td>
                                                <!-- <td class="text-center">
                                                    <a href="./buscarAsiento.php" class="btn btn-orange" data-toggle="">Ver asientos</a>
                                                </td> -->
                                            </tr>

                                            <?php } ?>
                                            
                                        </tbody>
                                        <input type="submit" name="pasaje-bus" class="btn btn-orange" value="Ver asientos">
                                    </form>
                                </table>




                            </div>
                            <!-- /.box-body -->
                            <!-- end list-content -->
                        </div>
                        
                        
                        <?php 
                        // En caso no se encuentren buses se coloca la siguiente etiqueta
                        if($buses_disponibles==0){ ?>

                            <h3><center>No hay buses disponibles para su viaje</center></h3>

                        <?php        
                        }
                        ?>


                        <div class="pages">
                            <ol class="pagination">
                                <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>
                            </ol>
                        </div>
                        <!-- end pages -->
                    </div>
                    <!-- end columns -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end flight-listings -->
    </section>
    <!-- end innerpage-wrapper -->

    <!--================ FORMAS DE PAGO ==============-->
    <section id="latest-blog" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-sm-12">
                    <div class="page-heading">
                        <h2>Métodos de pago</h2>
                        <hr class="heading-line" />
                    </div>

                    <!-- <div class="row"> -->

                    <!-- <div class="col-sm-6 col-md-4">
                            <div class="main-block latest-block">
                                <div class="main-img latest-img">
                                    <a href="#"><img src="images/master-card.png" class="img-responsive" alt="blog-img" /></a>
                                </div>

                                <div class="latest-info">
                                    <ul class="list-unstyled">
                                        <li><span><i class="fa fa-calendar-minus-o"></i></span>29 April,2017<span class="author">by: <a href="#">Jhon Smith</a></span></li>
                                    </ul>
                                </div>

                                <div class="main-info latest-desc">
                                    <div class="row">
                                        <div class="col-xs-10 col-sm-10 main-title"><a href="#">Travel Insuranve
                                                Benefits</a>
                                            <p>Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                        </div>
                                    </div>
                                    <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                                </div>
                            </div>
                        </div> -->

                    <div class="list-container">
                        <div class="list__item">
                            <div class="list__item__img">
                                <img src="../images/payment-1.png" alt="master-card">
                            </div>
                            <div class="list__item__img">
                                <img src="../images/payment-2.png" alt="master-card">
                            </div>
                            <div class="list__item__img">
                                <img src="../images/payment-3.png" alt="master-card">
                            </div>
                            <div class="list__item__img">
                                <img src="../images/payment-4.png" alt="master-card">
                            </div>

                        </div>

                    </div>

                    <!-- <div class="col-sm-6 col-md-4">
                            <div class="main-block latest-block">
                                <div class="main-img latest-img">
                                    <a href="#"><img src="images/latest-blog-2.jpg" class="img-responsive" alt="blog-img" /></a>
                                </div>

                                <div class="latest-info">
                                    <ul class="list-unstyled">
                                        <li><span><i class="fa fa-calendar-minus-o"></i></span>29 April,2017<span class="author">by: <a href="#">Jhon Smith</a></span></li>
                                    </ul>
                                </div>

                                <div class="main-info latest-desc">
                                    <div class="row">
                                        <div class="col-xs-10 col-sm-10 main-title"><a href="#">Travel Guideline
                                                Agents</a>
                                            <p>Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                        </div>

                                    </div>
                                    <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                                </div>
                            </div>
                        </div> -->

                    <!-- <div class="col-sm-6 col-md-4">
                            <div class="main-block latest-block">
                                <div class="main-img latest-img">
                                    <a href="#"><img src="images/latest-blog-3.jpg" class="img-responsive" alt="blog-img" /></a>
                                </div>

                                <div class="latest-info">
                                    <ul class="list-unstyled">
                                        <li><span><i class="fa fa-calendar-minus-o"></i></span>29 April,2017<span class="author">by: <a href="#">Jhon Smith</a></span></li>
                                    </ul>
                                </div>

                                <div class="main-info latest-desc">
                                    <div class="row">
                                        <div class="col-xs-10 col-sm-10 main-title"><a href="#">Secure Travel Tips</a>
                                            <p>Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                        </div>

                                    </div>
                                    <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                                </div>
                            </div>
                        </div> -->

                    <!-- </div> -->

                </div>

            </div>

        </div>

    </section>


    <section id="footer" class="ftr-heading-o ftr-heading-mgn-1">
        <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-contact">
                        <h3 class="footer-heading">Contáctanos</h3>
                        <ul class="list-unstyled">
                            <li><span><i class="fa fa-map-marker"></i></span>29 Land St, Lorem City, CA</li>
                            <li><span><i class="fa fa-phone"></i></span>+00 123 4567</li>
                            <li><span><i class="fa fa-envelope"></i></span>info@starhotel.com</li>
                        </ul>
                    </div>
                    <!-- end columns -->
                    <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 footer-widget ftr-links">
                        <h3 class="footer-heading">Wiñaymarca</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Nosotros</a></li>
                            <li><a href="#">Servicios</a></li>
                            <li><a href="#">Trayectos</a></li>
                            <li><a href="#">Contacto</a></li>
                            <!-- <li><a href="#">Cars</a></li> -->
                        </ul>
                    </div>
                    <!-- end columns -->
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-links ftr-pad-left">
                        <h3 class="footer-heading">RESOURCES</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Blogs</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Register</a></li>
                            <li><a href="#">Site Map</a></li>
                        </ul>
                    </div>
                    <!-- end columns -->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-widget ftr-about">
                        <h3 class="footer-heading">Nosotros</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                        <ul class="social-links list-inline list-unstyled">
                            <li><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                            <!-- <li><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li> -->
                            <!-- <li><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a></li> -->
                            <li><a href="#"><span><i class="fa fa-instagram"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-linkedin"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-youtube-play"></i></span></a></li>
                        </ul>
                    </div>
                    <!-- end columns -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end footer-top -->
        <div id="footer-bottom" class="ftr-bot-black">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12 copy" id="copyright">
                        <p>Copyright © 2021 <a href="http://www.bootstrapmb.com/">.Todos los derechos reservados</a>| Wiñaymarca SAC</p>
                    </div>
                    <!-- end columns -->
                    <!-- <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="terms">
                        <ul class="list-unstyled list-inline">
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div> -->
                    <!-- end columns -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end footer-bottom -->
    </section>
    <!-- end footer -->
    <!-- Page Scripts Starts -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/custom-navigation.js"></script>
    <script src="../js/custom-price-slider.js"></script>
    <script src="../js/util.js"></script>
    <!-- Page Scripts Ends -->
</body>

</html>