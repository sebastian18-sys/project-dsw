<?php
session_start();
include("../base_datos/db.php");

$origen_d = $_SESSION['origen'];
$destino_d = $_SESSION['destino'];
$nombre_d = $_SESSION['nombre'];
$apellido_d = $_SESSION['apellido'];
$dni_d = $_SESSION['dni'];
$precio = $_SESSION['precio-encomienda'];
$fecha_d = $_SESSION['fecha'];

?>

<!doctype html>
<html lang="es">

<head>
    <title>Encomienda - Documento</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <link rel="icon" href="images/icon-web.png" />
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

    <!--====== LOADER =====-->
    <div class="loader"></div>

    <nav class="navbar navbar-default main-navbar navbar-custom navbar-white" id="mynavbar-1">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" id="menu-button">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- CAMBIOS -->
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
                <!-- cCAMBIOS -->
                <a href="../index.php" class="navbar-brand">
                    <span><i class="fa fa-bus"></i>WIÑAY</span>MARCA
                </a>
                <!-- -------- -->
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
                        <!-- <ul class="dropdown-menu">
                            <li class="active"><a href="#">Main Homepage</a></li>
                            <li><a href="flight-homepage.html">Flight Homepage</a></li>
                            <li><a href="hotel-homepage.html">Hotel Homepage</a></li>
                            <li><a href="tour-homepage.html">Tour Homepage</a></li>
                            <li><a href="cruise-homepage.html">Cruise Homepage</a></li>
                            <li><a href="car-homepage.html">Car Homepage</a></li>
                            <li><a href="landing-page.html">Landing Page</a></li>
                        </ul> -->
                    </li>
                    <li class="dropdown">
                        <a href="../about-us.html" class="dropdown-toggle">Nosotros
                            <span>
                                <!-- <i class="fa fa-angle-down"></i> -->
                            </span>
                        </a>
                        <!-- <ul class="dropdown-menu">
                            <li><a href="flight-homepage.html">Flight Homepage</a></li>
                            <li><a href="flight-listing-left-sidebar.html">List View Left Sidebar</a></li>
                            <li><a href="flight-listing-right-sidebar.html">List View Right Sidebar</a></li>
                            <li><a href="flight-grid-left-sidebar.html">Grid View Left Sidebar</a></li>
                            <li><a href="flight-grid-right-sidebar.html">Grid View Right Sidebar</a></li>
                            <li><a href="flight-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                            <li><a href="flight-detail-right-sidebar.html">Detail Right Sidebar</a></li>
                        </ul> -->
                    </li>
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios
                            <span>
                                <i class="fa fa-angle-down"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="./encomiendas.php">Encomiendas</a></li>
                            <!-- <li><a href="hotel-listing-right-sidebar.html">List View Right Sidebar</a></li>
                            <li><a href="hotel-grid-left-sidebar.html">Grid View Left Sidebar</a></li>
                            <li><a href="hotel-grid-right-sidebar.html">Grid View Right Sidebar</a></li>
                            <li><a href="hotel-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                            <li><a href="hotel-detail-right-sidebar.html">Detail Right Sidebar</a></li> -->
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Trayectos<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../destinations.html">Destinos</a></li>
                            <li><a href="../rutas.html">Rutas</a></li>
                            <!-- <li><a href="tour-listing-right-sidebar.html">List View Right Sidebar</a></li>
                            <li><a href="tour-grid-left-sidebar.html">Grid View Left Sidebar</a></li>
                            <li><a href="tour-grid-right-sidebar.html">Grid View Right Sidebar</a></li>
                            <li><a href="tour-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                            <li><a href="tour-detail-right-sidebar.html">Detail Right Sidebar</a></li> -->
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="../faq.html" class="dropdown-toggle">Ayuda
                            <span>
                                <!-- <i class="fa fa-angle-down"></i> -->
                            </span>
                        </a>
                        <!-- <ul class="dropdown-menu"> -->
                        <!-- <li><a href="tour-homepage.html">Destinos</a></li>
                            <li><a href="tour-listing-left-sidebar.html">Rutas</a></li> -->
                        <!-- <li><a href="tour-listing-right-sidebar.html">List View Right Sidebar</a></li>
                            <li><a href="tour-grid-left-sidebar.html">Grid View Left Sidebar</a></li>
                            <li><a href="tour-grid-right-sidebar.html">Grid View Right Sidebar</a></li>
                            <li><a href="tour-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                            <li><a href="tour-detail-right-sidebar.html">Detail Right Sidebar</a></li> -->
                        <!-- </ul> -->
                    </li>
                    <!-- <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Cruise<span><i
                                    class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="cruise-homepage.html">Cruise Homepage</a></li>
                            <li><a href="cruise-listing-left-sidebar.html">List View Left Sidebar</a></li>
                            <li><a href="cruise-listing-right-sidebar.html">List View Right Sidebar</a></li>
                            <li><a href="cruise-grid-left-sidebar.html">Grid View Left Sidebar</a></li>
                            <li><a href="cruise-grid-right-sidebar.html">Grid View Right Sidebar</a></li>
                            <li><a href="cruise-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                            <li><a href="cruise-detail-right-sidebar.html">Detail Right Sidebar</a></li>
                        </ul>
                    </li> -->
                    <li class="dropdown">
                        <a href="../contact-us.php" class="dropdown-toggle">Contacto
                            <span>
                                <!-- <i class="fa fa-angle-down"></i> -->
                            </span>
                        </a>
                        <!-- <ul class="dropdown-menu">
                            <li><a href="car-homepage.html">Car Homepage</a></li>
                            <li><a href="car-listing-left-sidebar.html">List View Left Sidebar</a></li>
                            <li><a href="car-listing-right-sidebar.html">List View Right Sidebar</a></li>
                            <li><a href="car-grid-left-sidebar.html">Grid View Left Sidebar</a></li>
                            <li><a href="car-grid-right-sidebar.html">Grid View Right Sidebar</a></li>
                            <li><a href="car-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                            <li><a href="car-detail-right-sidebar.html">Detail Right Sidebar</a></li>
                        </ul> -->
                    </li>
                    <!-- <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages<span><i
                                    class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu mega-dropdown-menu row">
                            <li>
                                <div class="row">
                                    <div class="col-md-3">
                                        <ul class="list-unstyled">
                                            <li class="dropdown-header">Standard <span>Pages</span></li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="contact-us.html">Contact Us</a></li>
                                            <li><a href="blog-listing-left-sidebar.html">Blog Listing Left Sidebar</a>
                                            </li>
                                            <li><a href="blog-listing-right-sidebar.html">Blog Listing Right Sidebar</a>
                                            </li>
                                            <li><a href="blog-detail-left-sidebar.html">Blog Detail Left Sidebar</a>
                                            </li>
                                            <li><a href="blog-detail-right-sidebar.html">Blog Detail Right Sidebar</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <ul class="list-unstyled">
                                            <li class="dropdown-header">User <span>Dashboard</span></li>
                                            <li><a href="dashboard.html">Dashboard</a></li>
                                            <li><a href="user-profile.html">User Profile</a></li>
                                            <li><a href="booking.html">Booking</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="cards.html">Cards</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <ul class="list-unstyled">
                                            <li class="dropdown-header">Special <span>Pages</span></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="registration.html">Registration</a></li>
                                            <li><a href="forgot-password.html">Forgot Password</a></li>
                                            <li><a href="error-page.html">404 Page</a></li>
                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <ul class="list-unstyled">
                                            <li class="dropdown-header">Extra <span>Pages</span></li>
                                            <li><a href="before-you-fly.html">Before Fly</a></li>
                                            <li><a href="travel-insurance.html">Travel Insurance</a></li>
                                            <li><a href="holidays.html">Holidays</a></li>
                                            <li><a href="thank-you.html">Thank You</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li> -->
                    <!-- <li><a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a></li> -->
                    <li><a href="../covid-19.php" class="search-button"><span>
                                <!-- <i class="fa fa-search"></i> -->
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
                        <a href="./encomiendas.php" class="list-group-item">Encomiendas</a>
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

    <!--================== PAGE-COVER ==================-->
    <section class="page-cover" id="cover-forgot-encomiendas">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Cargo de postal encomiendas y paqueterias</h1>
                    <ul class="breadcrumb">
                        <li><a href="../index.php">Inicio</a></li>
                        <li class="active">Servicios / Encomiendas</li>
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

                    <!-- end columns -->
                    <div id="boleto" class="col-xs-12 col-sm-12 col-md-12 content-side">
                        <div class="list-block main-block f-list-block">
                            <!-- <div class="container">
                                <div class="row"> -->
                            <div class="container-head">
                                <h2>Wiñaymarca</h2>
                            </div>
                            <div class="container-text">
                                <div class="text-datos">
                                    <h3>Hola,&nbsp; </h3>
                                    <h3>gracias por tu pago</h3>
                                </div>
                                <p>Tu envío ha sido exitoso.</p>
                                <div class="container-monto">
                                    <h3>Monto Pagado</h3>
                                    <h2><strong>S/.<?php echo $precio ?></strong></h2>
                                </div>
                                <div class="container-monto">
                                    <h3>Detalles de la operación</h3>
                                    <div class="text-datos">
                                        <p>Origen:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                        <p><?php echo $origen_d ?></p>
                                    </div>
                                    <div class="text-datos">
                                        <p>Destino:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                        <p><?php echo $destino_d ?></p>
                                    </div>
                                    <div class="text-datos">
                                        <p>Fecha:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                        <p><?php echo $fecha_d ?></p>
                                    </div>
                                    <div class="text-datos">
                                        <p>DNI destinatario:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                        <p><?php echo $dni_d ?></p>
                                    </div>
                                    <div class="text-datos">
                                        <p>Nombre destinatario:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                        <p><?php echo $nombre_d ?></p>
                                    </div>
                                    <div class="text-datos">
                                        <p>Apellido destinatario:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                        <p><?php echo $apellido_d ?></p>
                                    </div>
                                </div>
                            </div>

                            <!-- </div>
                            </div> -->
                            <!-- /.box-body -->
                            <!-- end list-content -->
                        </div>
                        <div class="view-all text-center"><a href="javascript:void(0);" onclick="Util.imprimirBoleto();">Imprimir Boleto</div>
                        <div class="view-all text-center"><a href="../index.php" class="btn btn-orange">Ir al inicio</a></div>
                        <!-- end f-list-block -->
                    </div>
                    <!-- FIN -->
                    <!-- end columns -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end flight-listings -->
    </section>
    <!-- end innerpage-wrapper -->

    <!--======================= FOOTER =======================-->
    <!--======================= FOOTER =======================-->
    <?php include("../includes/footer.php") ?>                                                       
    
    <!-- end footer -->
    <!-- end footer -->



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
    <script src="../js/precio.js"></script>
    <!-- Page Scripts Ends -->
</body>

</html>