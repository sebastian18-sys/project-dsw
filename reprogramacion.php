<?php
session_start();
include("base_datos/db.php");

    $id_boleto = $_SESSION['boleto-changes'];

    $nombre = $_SESSION['namePasajero'];
    $apellidos = $_SESSION['lastnamePasajero'];
    $correo = $_SESSION['emailPasajero'];
    $dni = $_SESSION['dniPasajero'];




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Covid-19</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="icon" href="images/icon-web.png" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" id="cpswitch" href="css/orange.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
</head>

<body>
    <!--====== LOADER =====-->
    <div class="loader"></div>
    <!--======== SEARCH-OVERLAY =========-->
    <div class="overlay">
        <a href="javascript:void(0)" id="close-button" class="closebtn">&times;</a>
        <div class="overlay-content">
            <div class="form-center">
            <form>
                <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search..." required/><span class="input-group-btn">
                        <button type="submit" class="btn">
                        <span><i class="fa fa-search"></i></span>
                    </button>
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
                    <a href="./covid-19.html" class="covid-button"><span>
                        <!-- <i class="fa fa-search"></i> -->
                            Covid-19
                        </span>
                    </a>
                </div>
                <a href="#" class="navbar-brand">
                    <span><i class="fa fa-plane"></i>WIÑAY</span>MARCA
                </a>
            </div>
            <!-- end navbar-header -->
            <div class="collapse navbar-collapse" id="myNavbar1">
                <ul class="nav navbar-nav navbar-right navbar-search-link">
                    <li class="dropdown">
                        <a href="./index.html" class="dropdown-toggle">Inicio
                            <span>
                            <!-- <i class="fa fa-angle-down"></i> -->
                            </span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="./about-us.html" class="dropdown-toggle">Nosotros
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
                            <li><a href="hotel-homepage.html">Encomiendas</a></li>
                            <li><a href="hotel-listing-left-sidebar.html">Mudanzas</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Trayectos<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="./destinations.html">Destinos</a></li>
                            <li><a href="tour-listing-left-sidebar.html">Rutas</a></li>
                        </ul>
                    </li>
                    <li class="dropdown active">
                        <a href="./faq.html" class="dropdown-toggle">Ayuda
                            <span>
                            <!-- <i class="fa fa-angle-down"></i> -->
                            </span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="./contact-us.html" class="dropdown-toggle">Contacto
                            <span>
                            <!-- <i class="fa fa-angle-down"></i> -->
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="./covid-19.php" class="search-button"><span> Covid-19 </span></a>
                    </li>
                </ul>
            </div>
        <!-- end navbar collapse -->
        </div>
    <!-- end container -->
    </nav>
    <!-- end navbar -->
    <div class="sidenav-content">
        <div id="mySidenav" class="sidenav">
            <h2 id="web-name">
                <span><i class="fa fa-plane"></i></span>Wiñaymarca
            </h2>
            <div id="main-menu">
                <div class="closebtn">
                    <button class="btn btn-default" id="closebtn">&times;</button>
                </div>
                <div class="list-group panel">
                    <a href="./index.html" class="list-group-item active" data-parent="#main-menu">
                        <span><i class="fa fa-home link-icon"></i></span>Inicio
                    </a>

                    <a href="./about-us.html" class="list-group-item" data-parent="#main-menu">
                        <span><i class="fa fa-plane link-icon"></i></span>Nosotros
                    </a>

                    <a href="#hotels-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu">
                        <span><i class="fa fa-building link-icon"></i></span>Servicios
                        <span><i class="fa fa-chevron-down arrow"></i></span>
                    </a>
                    <div class="collapse sub-menu" id="hotels-links">
                        <a href="" class="list-group-item">Encomiendas</a>
                        <a href="" class="list-group-item">Mudanzas</a>
                    </div>

                    <a href="#tours-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu">
                        <span><i class="fa fa-globe link-icon"></i></span>Trayectos
                        <span><i class="fa fa-chevron-down arrow"></i></span>
                    </a>
                    <div class="collapse sub-menu" id="tours-links">
                        <a href="./destinations.html" class="list-group-item">Destinos</a>
                        <a href="tour-listing-left-sidebar.html" class="list-group-item">Rutas</a>
                    </div>

                    <a href="./faq.html" class="list-group-item" data-toggle="collapse" data-parent="#main-menu">
                        <span><i class="fa fa-ship link-icon"></i></span>Ayuda
                    </a>

                    <a href="./contact-us.html" class="list-group-item" data-toggle="collapse" data-parent="#main-menu">
                        <span><i class="fa fa-car link-icon"></i></span>Contacto
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- end sidenav-content -->
    <!--================== PAGE-COVER ==================-->
    <section class="page-cover" id="cover-forgot-password">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Devoluciones</h1>
                    <ul class="breadcrumb">
                        <li><a href="./index.html">Inicio</a></li>
                        <li class="active">Ayuda</li>
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
    <!-- <p>HAZ ALGO PE TROLGIO</p> -->
    <section class="innerpage-wrapper">
        <div id="forgot-password" class="innerpage-section-padding">
            <div class="container">
                <div class="row">
                    <!-- end columns -->
                    <div class="col-sm-12">
                        <div class="flex-content">
                            <div class="custom-form custom-form-fields">
                                <h3>Ingresa tus datos aquí</h3>
                                <!-- <p>When you fill in your registered email address, you will be sent instructions on how to reset your password.</p> -->
                                <!-- end columns -->
                                <div class="col-sm-12">
                                    <div class="flex-content">
                                        <div class="custom-form custom-form-fields">
                                            <div class="container-dates">
                                                <div class="container-dates__form-covid col-lg-8">
                                                    <div class="form-head col-lg-12">
                                                        <h4>Motivo por el cual estas reprogramando tu viaje</h4>
                                                        <hr>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Motivo:</label>
                                                            <div class="group">
                                                                <i class="fa fa-id-card" aria-hidden="true"></i>
                                                                <select class="form-control-dates" name="opcion-motivo" id="">
                                                                    <option value="">Seleccionar</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Mensaje:</label>
                                                            <div class="group">
                                                                <i class="fa fa-id-card" aria-hidden="true"></i>
                                                                <textarea name="text-motivo" id="" class="form-control-dates" cols="30" rows="10"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container-dates">
                                                <div class="container-dates__form-covid col-lg-8">
                                                    <form action="">
                                                        <div class="form-head col-lg-12">
                                                            <h4>Nuevo horario</h4>
                                                            <hr>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Fecha:</label>
                                                                <div class="group right-icon">
                                                                    <input type="text" autocomplete="off" class="form-control dpd1" name="ticket-date" placeholder="Fecha"><i class="fa fa-calendar"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="button-container col-sm-12">
                                                            <Input class="next-button" name="Registrar_Formulario" Type="submit" value="Buscar viajes">
                                                            <a href="./covid-19.php"> <input class="back-button" type="button" value="Volver"> </a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end custom-form -->
                                    </div>
                                    <!-- end form-content -->
                                </div>
                                </form>
                            </div>
                            <!-- end custom-form -->
                        </div>
                        <!-- end form-content -->
                    </div>
                    <!-- end columns -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end forgot-password -->
    </section>
    <!-- end innerpage-wrapper -->

    <section id="latest-blog" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-heading">
                        <h2>Métodos de pago</h2>
                        <hr class="heading-line" />
                    </div>
                    <div class="list-container">
                        <div class="list__item">
                            <div class="list__item__img">
                                <img src="./images/payment-1.png" alt="master-card" />
                            </div>
                            <div class="list__item__img">
                                <img src="./images/payment-2.png" alt="master-card" />
                            </div>
                            <div class="list__item__img">
                                <img src="./images/payment-3.png" alt="master-card" />
                            </div>
                            <div class="list__item__img">
                                <img src="./images/payment-4.png" alt="master-card" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--======================= FOOTER =======================-->
    <section id="footer" class="ftr-heading-o ftr-heading-mgn-1">
        <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-contact">
                        <h3 class="footer-heading">Contáctanos</h3>
                        <ul class="list-unstyled">
                            <li>
                                <span><i class="fa fa-map-marker"></i></span>29 Land St, Lorem City, CA
                            </li>
                            <li>
                                <span><i class="fa fa-phone"></i></span>+00 123 4567
                            </li>
                            <li>
                                <span><i class="fa fa-envelope"></i></span>info@starhotel.com
                            </li>
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
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.
                        </p>
                        <ul class="social-links list-inline list-unstyled">
                            <li>
                                <a href="#"><span><i class="fa fa-facebook"></i></span></a>
                            </li>
                            <li>
                                <a href="#"><span><i class="fa fa-twitter"></i></span></a>
                            </li>
                            <li>
                                <a href="#"><span><i class="fa fa-instagram"></i></span></a>
                            </li>
                            <li>
                                <a href="#"><span><i class="fa fa-linkedin"></i></span></a>
                            </li>
                            <li>
                                <a href="#"><span><i class="fa fa-youtube-play"></i></span></a>
                            </li>
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
                        <p>Copyright © 2021<a href="http://www.bootstrapmb.com/">.Todos los derechos reservados</a>| Wiñaymarca SAC</p>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end footer-bottom -->
    </section>
    <!-- end footer -->
    <!-- Page Scripts Starts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <!-- Page Scripts Ends -->
</body>

</html>
