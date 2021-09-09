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
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
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
                <a href="#" class="navbar-brand">
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
                            <li class="active"><a href="encomiendas/encomiendas.php">Encomiendas</a></li>
                            <li><a href="hotel-listing-left-sidebar.html">Mudanzas</a></li>
                            <!-- <li><a href="hotel-listing-right-sidebar.html">List View Right Sidebar</a></li>
                            <li><a href="hotel-grid-left-sidebar.html">Grid View Left Sidebar</a></li>
                            <li><a href="hotel-grid-right-sidebar.html">Grid View Right Sidebar</a></li>
                            <li><a href="hotel-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                            <li><a href="hotel-detail-right-sidebar.html">Detail Right Sidebar</a></li> -->
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Trayectos<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="./destinations.html">Destinos</a></li>
                            <li><a href="tour-listing-left-sidebar.html">Rutas</a></li>
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
            <h2 id="web-name"><span><i class="fa fa-plane"></i></span>Wiñaymarca</h2>
            <div id="main-menu">
                <div class="closebtn">
                    <button class="btn btn-default" id="closebtn">&times;</button>
                </div>
                <div class="list-group panel">
                    <a href="../index.php" class="list-group-item active" data-parent="#main-menu">
                        <span><i class="fa fa-home link-icon"></i></span>Inicio
                    </a>

                    <a href="../about-us.php" class="list-group-item" data-parent="#main-menu">
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
                        <a href="../destinations.php" class="list-group-item">Destinos</a>
                        <a href="tour-listing-left-sidebar.html" class="list-group-item">Rutas</a>
                    </div>

                    <a href="../faq.php" class="list-group-item" data-toggle="collapse" data-parent="#main-menu">
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
                        <li><a href="./index.html">Inicio</a></li>
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
                    <!-- <div class="col-xs-12 col-sm-12 col-md-12 content-side">
                        <h2></h2>
                        <p>Fecha: </p>
                        <div class="page-search">
                            <h4>Ingresa tus <strong>datos</strong></h4>
                            <hr class="heading-line" />
                        </div>
                    </div> -->
                    <div class="col-xs-12 col-sm-12 col-md-12 content-side">
                        <div class="list-block main-block f-list-block">
                            <!-- <div class="container">
                                <div class="row"> -->
                            <form action="validar-encomienda.php" method="POST">
                
                                        
                                <div class="container-dates">
                                    <div class="container-dates__form col-lg-8">
                                        
                                            <div class="form-head col-lg-12">
                                                <h4>Donde quieres mandar tu paquete</h4>
                                                <hr>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Desde:</label>
                                                    <div class="group">
                                                        <i class="fa fa-map-marker"></i>
                                                        <?php
                                                        //Creamos la consulta SQL
                                                        $tabla = mysqli_query($link, "SELECT DISTINCT ciudad FROM agencias ORDER BY ciudad");

                                                        ?>
                                                        <select name="origen_encomienda" class="form-control-dates" id="origen">
                                                            <option value="-1">Origen</option>
                                                            <?php
                                                            //recorremos la tabla en busca de los registros
                                                            while ($registro = mysqli_fetch_array($tabla)) {
                                                            ?>
                                                                <option value="<?php echo $registro[0]; //a�adimos el registro 
                                                                                ?>"><?php echo $registro[0]; //a�adimos el registro
                                                                                                                                    ?></option>
                                                            <?php
                                                            }
                                                            //liberamos la tabla del bloqueo..
                                                            mysqli_free_result($tabla);
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Hasta:</label>
                                                    <div class="group">
                                                        <i class="fa fa-map-marker"></i>
                                                        <?php
                                                        //Creamos la consulta SQL
                                                        $tabla = mysqli_query($link, "select distinct ciudad from agencias order by ciudad");
                                                        ?>
                                                        <select name="destino_encomienda" class="form-control-dates" id="destino">
                                                            <option value="-1">Destino</option>
                                                            <?php
                                                            //recorremos los registros
                                                            while ($registro = mysqli_fetch_array($tabla)) {
                                                            ?>
                                                                <option value="<?php echo $registro[0]; //a�adimos el valor
                                                                                ?>"><?php echo $registro[0]; //a�adimos el valor
                                                                                                                                ?></option>
                                                            <?php
                                                            }
                                                            //liberamos la tabla...
                                                            mysqli_free_result($tabla);
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">    
                                                    <label>Fecha:</label>
                                                    <div class="group">
                                                    <i class="fa fa-calendar"></i>
                                                        <input type="text" autocomplete="off" class="form-control-dates dpd1" name="fecha_encomienda" placeholder="Fecha">
                                                    </div>
                                                </div>
                                            </div>
                    
                                    </div>
                                    
                                </div>

                                <div class="container-dates">
                                    <div class="container-dates__form col-lg-8">
                                        
                                            <div class="form-head col-lg-12">
                                                <h4>Precio</h4>
                                                <hr>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Desde:</label>
                                                    <div class="group">
                                                        <i class="fa fa-map-marker"></i>
                                                        <select id="pesoPaquete" name="peso-paquete" class="form-control-dates">
                                                            <option disabled value="-1">Peso</option>
                                                            
                                                            <option value="Menos de 5kg">Menos de 5kg</option>
                                                            <option value="Menos de 10kg">Menos de 10kg</option>
                                                            <option value="Menos de 20kg">Menos de 20kg</option>
                                                            <option value="Más de 20kg">Más de 20kg</option>
                                                          
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Desde:</label>
                                                    <div class="group">
                                                        <i class="fa fa-map-marker"></i>
                                                        <input id="pesoSeleccionado" type="text" name="precio-encomienda" class="form-control-dates" placeholder="Precio">
                                                    </div>
                                                </div>
                                            </div>
                                            
                    
                                    </div>
                                    
                                </div>
                                

                                <div class="button-container col-sm-6">
                                    <a href="#"> <input class="back-button" type="button" value="Regresar"> </a>
                                    
                                </div>
                                <div class="button-container col-sm-6">
                                    <Input class="next-button" name="Registrar_Pasajero" Type="submit" value="Continuar">
                                    
                                </div>
                                
                                
                            </form>
                        </div>
                        <!-- end f-list-block -->



                        <!-- <div class="pages">
                            <ol class="pagination">
                                <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>
                            </ol>
                        </div> -->
                        <!-- end pages -->
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

    <!--================ FORMAS DE PAGO ==============-->
    <section id="latest-blog" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-sm-12">
                    <div class="page-heading">
                        <h2>Métodos de pago</h2>
                        <hr class="heading-line" />
                    </div>

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