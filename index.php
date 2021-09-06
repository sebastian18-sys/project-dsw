<?php
session_start();
include("./base_datos/db.php");
?>

<!doctype html>
<html lang="en">

<head>
    <title>Index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" id="cpswitch" href="css/orange.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Owl Carousel Stylesheet -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <!-- Flex Slider Stylesheet -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" />
    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="css/datepicker.css">
    <!-- Magnific Gallery -->
    <link rel="stylesheet" href="css/magnific-popup.css">
</head>

<body id="main-homepage">
    <!--====== LOADER =====-->
    <div class="loader"></div>
    <!--======== SEARCH-OVERLAY =========-->
    <div class="overlay"><a href="javascript:void(0)" id="close-button" class="closebtn">&times;</a>
        <div class="overlay-content">
            <div class="form-center">
                <form>
                    <div class="form-group">
                        <div class="input-group"><input type="text" class="form-control" placeholder="Search..." required /><span class="input-group-btn"><button type="submit" class="btn"><span><i
                                            class="fa fa-search"></i></span></button>
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
                <!-- CAMBIOS -->
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
                <!-- cCAMBIOS -->
                <a href="#" class="navbar-brand">
                    <span><i class="fa fa-bus"></i>WIÑAY</span>MARCA
                </a>
                <!-- -------- -->
            </div>
            <!-- end navbar-header -->
            <div class="collapse navbar-collapse" id="myNavbar1">
                <ul class="nav navbar-nav navbar-right navbar-search-link">
                    <li class="dropdown active">
                        <a href="./index.php" class="dropdown-toggle">Inicio
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
                        <a href="./about-us.html" class="dropdown-toggle">Nosotros
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
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios
                            <span>
                                <i class="fa fa-angle-down"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="hotel-homepage.html">Encomiendas</a></li>
                            <li><a href="hotel-listing-left-sidebar.html">Mudanzas</a></li>
                            <!-- <li><a href="hotel-listing-right-sidebar.html">List View Right Sidebar</a></li>
                            <li><a href="hotel-grid-left-sidebar.html">Grid View Left Sidebar</a></li>
                            <li><a href="hotel-grid-right-sidebar.html">Grid View Right Sidebar</a></li>
                            <li><a href="hotel-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                            <li><a href="hotel-detail-right-sidebar.html">Detail Right Sidebar</a></li> -->
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Trayectos<span><i
                                    class="fa fa-angle-down"></i></span></a>
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
                        <a href="./faq.html" class="dropdown-toggle">Ayuda
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
                        <a href="./contact-us.php" class="dropdown-toggle">Contacto
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
                    <li><a href="./covid-19.html" class="search-button"><span>
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
    <!--========================= FLEX SLIDER =====================-->
    <section class="flexslider-container" id="flexslider-container-1">
        <div class="flexslider slider" id="slider-1">
            <ul class="slides">
                <li class="item-1" style="background: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.3)),url(images/hero-imgs/hero-titicaca.jpg) 50% 0%; background-position: center; background-size:cover;	height:100%;">
                    <div class=" meta">
                        <div class="container">
                            <h1>¿A donde deseas viajar hoy?</h1>
                            <!-- <h1>Australia</h1><a href="#" class="btn btn-default">View More</a> -->
                        </div>
                        <!-- end container -->
                    </div>
                    <!-- end meta -->
                </li>
                <!-- end item-1 -->
                <li class="item-2" style="background: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.3)),url(images/hero-imgs/hero-machu2.jpeg) 50% 0%; background-position: center;	background-size:cover;	height:100%;">
                    <div class=" meta">
                        <div class="container">
                            <!-- <h2>Discover</h2> -->
                            <h1>Viaja. Siente. Disfruta</h1>
                            <!-- <a href="#" class="btn btn-default">View More</a> -->
                        </div>
                    </div>
                </li>
                <!-- end item-2 -->
                <li class="item-2" style="background: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.3)),url(images/hero-imgs/hero-lima2.jpeg) 50% 0%; background-position: center;	background-size:cover;	height:100%;">
                    <div class=" meta">
                        <div class="container">
                            <!-- <h2>Discover</h2> -->
                            <h1>Viaja seguro</h1>
                            <!-- <a href="#" class="btn btn-default">View More</a> -->
                        </div>
                    </div>
                </li>
                <!-- end item-3 -->
                <li class="item-2" style="background: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.3)),url(images/hero-imgs/hero-arequipa.jpeg) 50% 0%; background-position: center;	background-size:cover;	height:100%;">
                    <div class=" meta">
                        <div class="container">
                            <!-- <h2>Discover</h2> -->
                            <h1>Viajes a menor precio</h1>
                            <!-- <a href="#" class="btn btn-default">View More</a> -->
                        </div>
                    </div>
                </li>
                <!-- end item-4 -->
                <li class="item-2" style="background: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.3)),url(images/hero-imgs/hero-amazonas.jpeg) 50% 0%; background-position: center;	background-size:cover;	height:100%;">
                    <div class=" meta">
                        <div class="container">
                            <!-- <h2>Discover</h2> -->
                            <h1>Descubre el Peru</h1>
                            <!-- <a href="#" class="btn btn-default">View More</a> -->
                        </div>
                    </div>
                </li>
                <!-- end item-5 -->
            </ul>
        </div>
        <!-- end slider -->
        <div class="search-tabs" id="search-tabs-1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- <ul class="nav nav-tabs center-tabs">
                            <li class="active"><a href="#flights" data-toggle="tab"><span><i
                                            class="fa fa-plane"></i></span><span class="st-text">Flights</span></a></li>
                            <li><a href="#hotels" data-toggle="tab"><span><i class="fa fa-building"></i></span><span
                                        class="st-text">Hotels</span></a></li>
                            <li><a href="#tours" data-toggle="tab"><span><i class="fa fa-suitcase"></i></span><span
                                        class="st-text">Tours</span></a></li>
                            <li><a href="#cruise" data-toggle="tab"><span><i class="fa fa-ship"></i></span><span
                                        class="st-text">Cruise</span></a></li>
                            <li><a href="#cars" data-toggle="tab"><span><i class="fa fa-car"></i></span><span
                                        class="st-text">Cars</span></a></li>
                        </ul> -->
                        <div class="tab-content">
                            <div id="flights" class="tab-pane in active">
                                <form method="POST" action="validar-pasaje.php">
                                    <h4>Busca tu pasaje</h4>
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
                                                        <select name="ticket-origin" class="form-control" id="origen">
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
                                                        <select name="ticket-destiny" class="form-control" id="destino">
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
                                                        <input type="text" autocomplete="off" class="form-control dpd1" name="ticket-date" placeholder="Ida"><i class="fa fa-calendar"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->
                                                <!-- <div class="col-xs-6 col-sm-6 col-md-6"> -->

                                                    <!-- <label for="">Retorno (opcional)</label> -->
                                                    <!-- <div class="form-group left-icon"> -->
                                                        <!-- <input type="text" class="form-control dpd2" name="ticket-date2" placeholder="Vuelta"><i class="fa fa-calendar"></i> -->
                                                        <!-- <input type="hidden" id="fechahoy" value=""/> -->
                                                    <!-- </div> -->
                                                <!-- </div> -->
                                                <!-- <div class="col-xs-6 col-sm-6 col-md-6"> -->
                                                    <!-- <label for="">Retorno (opcional)</label> -->
                                                    <!-- <div class="form-group left-icon"> -->
                                                        <!-- <input type="text" class="form-control dpd2" name="ticket-date2" placeholder="Vuelta"><i class="fa fa-calendar"></i> -->
                                                        <!-- <input type="hidden" id="fechahoy" value=""/> -->
                                                    <!-- </div> -->
                                                <!-- </div> -->
                                                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-5">
                                                    <div class="form-group right-icon">
                                                        <select class="form-control">
                                                            <option selected>Pasajeros</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select><i class="fa fa-angle-down"></i>
                                                    </div>
                                                </div>
                                                <!-- end columns -->
                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end columns -->
                                        <!-- <div class="col-xs-12 col-sm-12 col-md-2 col-lg-5">
                                            <div class="form-group right-icon">
                                                <select class="form-control">
                                                    <option selected>Pasajeros</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select><i class="fa fa-angle-down"></i>
                                            </div>
                                        </div> -->
                                        <!-- end columns -->
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                            <input type="submit" class="btn btn-orange" name="boleto" value="Buscar">
                                        </div>
                                        <!-- end columns -->
                                    </div>
                                    <!-- end row -->
                                </form>
                            </div>
                            <!-- end flights -->
                            
                        </div>
                        <!-- end tab-content -->
                    </div>
                    <!-- end columns -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end search-tabs -->
    </section>
    <!-- end flexslider-container -->

    <!--=============== ¡Encuentra tu destino! ===============-->
    <section id="hotel-offers" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-heading">
                        <h2>¡Encuentra tu destino!</h2>
                        <hr class="heading-line" />
                    </div>
                    <!-- end page-heading -->
                    <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-hotel-offers">
                        <div class="item">
                            <div class="main-block hotel-block">
                                <div class="main-img">
                                    <a href="#"><img src="images/Destinos/15Lima.jpg" class="img-responsive" alt="lima-img" /></a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">S/. 80.00<span class="divider">|</span><span class="pkg"></span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end main-mask -->
                                </div>
                                <!-- end offer-img -->
                                <div class="main-info hotel-info">
                                    <div class="arrow">
                                        <a href="#"><span><i class="fa fa-angle-right"></i></span></a>
                                    </div>
                                    <!-- end arrow -->
                                    <div class="main-title hotel-title">
                                        <a href="#">Lima</a>
                                        <!-- <p>From: Scotland</p> -->
                                    </div>
                                    <!-- end hotel-title -->
                                </div>
                                <!-- end hotel-info -->
                            </div>
                            <!-- end hotel-block -->
                        </div>
                        <!-- end item -->
                        <div class="item">
                            <div class="main-block hotel-block">
                                <div class="main-img">
                                    <a href="#"><img src="images/Destinos/4Arequipa.jpg" class="img-responsive" alt="arequipa-img" /></a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">S/. 90.00<span class="divider">|</span><span class="pkg"></span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end main-mask -->
                                </div>
                                <!-- end offer-img -->
                                <div class="main-info hotel-info">
                                    <div class="arrow">
                                        <a href="#"><span><i class="fa fa-angle-right"></i></span></a>
                                    </div>
                                    <!-- end arrow -->
                                    <div class="main-title hotel-title">
                                        <a href="#">Arequipa</a>
                                        <!-- <p>From: Germany</p> -->
                                    </div>
                                    <!-- end hotel-title -->
                                </div>
                                <!-- end hotel-info -->
                            </div>
                            <!-- end hotel-block -->
                        </div>
                        <!-- end item -->
                        <div class="item">
                            <div class="main-block hotel-block">
                                <div class="main-img">
                                    <a href="#"><img src="images/Destinos/11Ica.jpg" class="img-responsive" alt="ica-img" /></a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">S/. 85.00<span class="divider">|</span><span class="pkg"></span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end main-mask -->
                                </div>
                                <!-- end offer-img -->
                                <div class="main-info hotel-info">
                                    <div class="arrow">
                                        <a href="#"><span><i class="fa fa-angle-right"></i></span></a>
                                    </div>
                                    <!-- end arrow -->
                                    <div class="main-title hotel-title">
                                        <a href="#">Ica</a>
                                        <!-- <p>From: Austria</p> -->
                                    </div>
                                    <!-- end hotel-title -->
                                </div>
                                <!-- end hotel-info -->
                            </div>
                            <!-- end hotel-block -->
                        </div>
                        <!-- end item -->
                        <div class="item">
                            <div class="main-block hotel-block">
                                <div class="main-img">
                                    <a href="#"><img src="images/Destinos/21Puno.jpg" class="img-responsive" alt="puno-img" /></a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">S/. 150.00<span class="divider">|</span><span class="pkg"></span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end main-mask -->
                                </div>
                                <!-- end offer-img -->
                                <div class="main-info hotel-info">
                                    <div class="arrow">
                                        <a href="#"><span><i class="fa fa-angle-right"></i></span></a>
                                    </div>
                                    <!-- end arrow -->
                                    <div class="main-title hotel-title">
                                        <a href="#">Puno</a>
                                        <!-- <p>From: Germany</p> -->
                                    </div>
                                    <!-- end hotel-title -->
                                </div>
                                <!-- end hotel-info -->
                            </div>
                            <!-- end hotel-block -->
                        </div>
                        <!-- end item -->
                    </div>
                    <!-- end owl-hotel-offers -->
                    <div class="view-all text-center"><a href="./destinations.html" class="btn btn-orange">Ver más destinos!</a></div>
                    <!-- end view-all -->
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end hotel-offers -->

    <!--======================= LO QUE OFRECEMOS =====================-->
    <section id="best-features" class="banner-padding black-features">
        <div class="container">
            <div class="page-services">
                <h2>¿Por qué elegirnos?</h2>
                <hr class="heading-line" />
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block"><span><i class="fa fa-bed"></i></span>
                        <h3>Asientos ergonómicos</h3>
                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                    </div>
                    <!-- end b-feature-block -->
                </div>
                <!-- end columns -->
                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block"><span><i class="fa fa-line-chart"></i></span>
                        <h3>10 años de experiencia</h3>
                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                    </div>
                    <!-- end b-feature-block -->
                </div>
                <!-- end columns -->
                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block"><span><i class="fa fa-bus"></i></span>
                        <h3>Flota moderna</h3>
                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                    </div>
                    <!-- end b-feature-block -->
                </div>
                <!-- end columns -->
                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block"><span><i class="fa fa-wifi"></i></span>
                        <h3>Zona Wifi</h3>
                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                    </div>
                    <!-- end b-feature-block -->
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end best-features -->

    <!--=============== Rutas más visitadas ===============-->
    <section id="tour-offers" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-heading">
                        <h2>Rutas más visitadas</h2>
                        <hr class="heading-line" />
                    </div>
                    <!-- end page-heading -->
                    <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-tour-offers">
                        <div class="item">
                            <div class="main-block tour-block">
                                <div class="main-img">
                                    <a href="#"><img src="images/tour-1.jpg" class="img-responsive" alt="tour-img" /></a>
                                </div>
                                <!-- end offer-img -->
                                <div class="offer-price-2">
                                    <ul class="list-unstyled">
                                        <li class="price">$568.00<a href="#"><span class="arrow"><i
                                                        class="fa fa-angle-right"></i></span></a></li>
                                    </ul>
                                </div>
                                <!-- end offer-price-2 -->
                                <div class="main-info tour-info">
                                    <div class="main-title tour-title"><a href="#">China Temple Tour</a>
                                        <p>From: China</p>
                                        <div class="rating"><span><i class="fa fa-star orange"></i></span><span><i
                                                    class="fa fa-star orange"></i></span><span><i
                                                    class="fa fa-star orange"></i></span><span><i
                                                    class="fa fa-star orange"></i></span><span><i
                                                    class="fa fa-star grey"></i></span></div>
                                    </div>
                                    <!-- end tour-title -->
                                </div>
                                <!-- end tour-info -->
                            </div>
                            <!-- end tour-block -->
                        </div>
                        <!-- end item -->
                        <div class="item">
                            <div class="main-block tour-block">
                                <div class="main-img">
                                    <a href="#"><img src="images/tour-2.jpg" class="img-responsive" alt="tour-img" /></a>
                                </div>
                                <!-- end offer-img -->
                                <div class="offer-price-2">
                                    <ul class="list-unstyled">
                                        <li class="price">$745.00<a href="#"><span class="arrow"><i
                                                        class="fa fa-angle-right"></i></span></a></li>
                                    </ul>
                                </div>
                                <!-- end offer-price-2 -->
                                <div class="main-info tour-info">
                                    <div class="main-title tour-title"><a href="#">African Safari Tour</a>
                                        <p>From: Africa</p>
                                        <div class="rating"><span><i class="fa fa-star orange"></i></span><span><i
                                                    class="fa fa-star orange"></i></span><span><i
                                                    class="fa fa-star orange"></i></span><span><i
                                                    class="fa fa-star orange"></i></span><span><i
                                                    class="fa fa-star grey"></i></span></div>
                                    </div>
                                    <!-- end tour-title -->
                                </div>
                                <!-- end tour-info -->
                            </div>
                            <!-- end tour-block -->
                        </div>
                        <!-- end item -->
                        <div class="item">
                            <div class="main-block tour-block">
                                <div class="main-img">
                                    <a href="#"><img src="images/tour-3.jpg" class="img-responsive" alt="tour-img" /></a>
                                </div>
                                <!-- end offer-img -->
                                <div class="offer-price-2">
                                    <ul class="list-unstyled">
                                        <li class="price">$459.00<a href="#"><span class="arrow"><i
                                                        class="fa fa-angle-right"></i></span></a></li>
                                    </ul>
                                </div>
                                <!-- end offer-price-2 -->
                                <div class="main-info tour-info">
                                    <div class="main-title tour-title"><a href="#">Paris City Tour</a>
                                        <p>From: Paris</p>
                                        <div class="rating"><span><i class="fa fa-star orange"></i></span><span><i
                                                    class="fa fa-star orange"></i></span><span><i
                                                    class="fa fa-star orange"></i></span><span><i
                                                    class="fa fa-star orange"></i></span><span><i
                                                    class="fa fa-star grey"></i></span></div>
                                    </div>
                                    <!-- end tour-title -->
                                </div>
                                <!-- end tour-info -->
                            </div>
                            <!-- end tour-block -->
                        </div>
                        <!-- end item -->
                        <div class="item">
                            <div class="main-block tour-block">
                                <div class="main-img">
                                    <a href="#"><img src="images/tour-4.jpg" class="img-responsive" alt="tour-img" /></a>
                                </div>
                                <!-- end offer-img -->
                                <div class="offer-price-2">
                                    <ul class="list-unstyled">
                                        <li class="price">$745.00<a href="#"><span class="arrow"><i
                                                        class="fa fa-angle-right"></i></span></a></li>
                                    </ul>
                                </div>
                                <!-- end offer-price-2 -->
                                <div class="main-info tour-info">
                                    <div class="main-title tour-title"><a href="#">China Temple Tour</a>
                                        <p>From: China</p>
                                        <div class="rating"><span><i class="fa fa-star orange"></i></span><span><i
                                                    class="fa fa-star orange"></i></span><span><i
                                                    class="fa fa-star orange"></i></span><span><i
                                                    class="fa fa-star orange"></i></span><span><i
                                                    class="fa fa-star grey"></i></span></div>
                                    </div>
                                    <!-- end tour-title -->
                                </div>
                                <!-- end tour-info -->
                            </div>
                            <!-- end tour-block -->
                        </div>
                        <!-- end item -->
                    </div>
                    <!-- end owl-tour-offers -->
                    <div class="view-all text-center"><a href="#" class="btn btn-orange">Ver mejores rutas!</a></div>
                    <!-- end view-all -->
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end tour-offers -->
    <!--=============== CRUISE OFFERS ===============-->
    <!-- <section id="cruise-offers" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-heading">
                        <h2>Cruise Offers</h2>
                        <hr class="heading-line" />
                    </div>
               
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="main-block cruise-block">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-md-push-6 no-pd-l">
                                        <div class="main-img cruise-img">
                                            <a href="#"><img src="images/cruise-1.jpg" class="img-responsive" alt="cruise-img" />
                                                <div class="cruise-mask">
                                                    <p>7 Nights, 6 Days</p>
                                                </div>
                                            
                                            </a>
                                        </div>
                                
                                    </div>
                    
                                    <div class="col-sm-12 col-md-6 col-md-pull-6 no-pd-r">
                                        <div class=" main-info cruise-info">
                                            <div class="main-title cruise-title"><a href="#">Spain Boat Tour</a>
                                                <p>From: Italy to Spain</p>
                                                <div class="rating"><span><i
                                                            class="fa fa-star orange"></i></span><span><i
                                                            class="fa fa-star orange"></i></span><span><i
                                                            class="fa fa-star orange"></i></span><span><i
                                                            class="fa fa-star orange"></i></span><span><i
                                                            class="fa fa-star grey"></i></span>
                                                </div>
                                                <span class="cruise-price">$950.00</span>
                                            </div>
                                
                                        </div>
                            
                                    </div>
                         
                                </div>
                  
                            </div>
                
                        </div>
         
                        <div class="col-sm-6 col-md-6">
                            <div class="main-block cruise-block">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-md-push-6 no-pd-l">
                                        <div class="main-img cruise-img">
                                            <a href="#"><img src="images/cruise-2.jpg" class="img-responsive" alt="cruise-img" />
                                                <div class="cruise-mask">
                                                    <p>7 Nights, 6 Days</p>
                                                </div>
                                
                                            </a>
                                        </div>
                           
                                    </div>
                         
                                    <div class="col-sm-12 col-md-6 col-md-pull-6 no-pd-r">
                                        <div class=" main-info cruise-info">
                                            <div class="main-title cruise-title"><a href="#">Spain Boat Tour</a>
                                                <p>From: Italy to Spain</p>
                                                <div class="rating"><span><i
                                                            class="fa fa-star orange"></i></span><span><i
                                                            class="fa fa-star orange"></i></span><span><i
                                                            class="fa fa-star orange"></i></span><span><i
                                                            class="fa fa-star orange"></i></span><span><i
                                                            class="fa fa-star grey"></i></span>
                                                </div>
                                                <span class="cruise-price">$950.00</span>
                                            </div>
                                   
                                        </div>
                              
                                    </div>
                               
                                </div>
                 
                            </div>
             
                        </div>
             
                        <div class="col-sm-6 col-md-6">
                            <div class="main-block cruise-block">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-md-push-6 no-pd-l">
                                        <div class="main-img cruise-img">
                                            <a href="#"><img src="images/cruise-3.jpg" class="img-responsive" alt="cruise-img" />
                                                <div class="cruise-mask">
                                                    <p>7 Nights, 6 Days</p>
                                                </div>
                                   
                                            </a>
                                        </div>
                           
                                    </div>
                          
                                    <div class="col-sm-12 col-md-6 col-md-pull-6 no-pd-r">
                                        <div class=" main-info cruise-info">
                                            <div class="main-title cruise-title"><a href="#">Spain Boat Tour</a>
                                                <p>From: Italy to Spain</p>
                                                <div class="rating"><span><i
                                                            class="fa fa-star orange"></i></span><span><i
                                                            class="fa fa-star orange"></i></span><span><i
                                                            class="fa fa-star orange"></i></span><span><i
                                                            class="fa fa-star orange"></i></span><span><i
                                                            class="fa fa-star grey"></i></span>
                                                </div>
                                                <span class="cruise-price">$950.00</span>
                                            </div>
                                   
                                        </div>
                              
                                    </div>
                            
                                </div>
                           
                            </div>
                      
                        </div>
                   
                        <div class="col-sm-6 col-md-6">
                            <div class="main-block cruise-block">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-md-push-6 no-pd-l">
                                        <div class="main-img cruise-img">
                                            <a href="#"><img src="images/cruise-4.jpg" class="img-responsive" alt="cruise-img" />
                                                <div class="cruise-mask">
                                                    <p>7 Nights, 6 Days</p>
                                                </div>
                                    
                                            </a>
                                        </div>
                         
                                    </div>
                    
                                    <div class="col-sm-12 col-md-6 col-md-pull-6 no-pd-r">
                                        <div class=" main-info cruise-info">
                                            <div class="main-title cruise-title"><a href="#">Spain Boat Tour</a>
                                                <p>From: Italy to Spain</p>
                                                <div class="rating"><span><i
                                                            class="fa fa-star orange"></i></span><span><i
                                                            class="fa fa-star orange"></i></span><span><i
                                                            class="fa fa-star orange"></i></span><span><i
                                                            class="fa fa-star orange"></i></span><span><i
                                                            class="fa fa-star grey"></i></span>
                                                </div>
                                                <span class="cruise-price">$950.00</span>
                                            </div>
                                    
                                        </div>
                      
                                    </div>
                     
                                </div>
             
                            </div>
             
                        </div>
             
                    </div>
        
                    <div class="view-all text-center"><a href="#" class="btn btn-orange">View All</a></div>
    
                </div>
 
            </div>
 
        </div>

    </section> -->
    <!-- end cruise-offers -->
    <!--==================== VIDEO BANNER ===================-->

    <!-- <section id="video-banner" class="banner-padding back-size">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Take a Video Tour</h2>
                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p><a href="https://youtube.com/watch?v=0O2aH4XLbto" class="popup-youtube"
                        id="play-button"><span><i
                                class="fa fa-play"></i></span></a>
                </div>

            </div>

        </div>

    </section> -->

    <!--================= FLIGHT OFFERS =============-->
    <!-- <section id="flight-offers" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-heading">
                        <h2>Flight Offers</h2>
                        <hr class="heading-line" />
                    </div>
           
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="main-block flight-block">
                                <a href="#">
                                    <div class="flight-img"><img src="images/flight-1.jpg" class="img-responsive" alt="flight-img" /></div>
                         
                                    <div class="flight-info">
                                        <div class="flight-title">
                                            <h3><span class="flight-destination">Spain</span>|<span class="flight-type">OneWay Flight</span></h3>
                                        </div>
                             
                                        <div class=" flight-timing">
                                            <ul class="list-unstyled">
                                                <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                        02-2017 </span>(8:40 PM)</li>
                                                <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                        03-2017 </span>(8:40 PM)</li>
                                            </ul>
                                        </div>
                          
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">$568.00<span class="pkg">Avg/Person</span></li>
                                            <li class="rating"><span><i class="fa fa-star orange"></i></span><span><i
                                                        class="fa fa-star orange"></i></span><span><i
                                                        class="fa fa-star orange"></i></span><span><i
                                                        class="fa fa-star orange"></i></span><span><i
                                                        class="fa fa-star lightgrey"></i></span></li>
                                        </ul>
                                    </div>
                      
                                </a>
                            </div>
              
                        </div>
             
                        <div class="col-sm-6 col-md-4">
                            <div class="main-block flight-block">
                                <a href="#">
                                    <div class="flight-img"><img src="images/flight-2.jpg" class="img-responsive" alt="flight-img" /></div>
                      
                                    <div class="flight-info">
                                        <div class="flight-title">
                                            <h3><span class="flight-destination">Spain</span>|<span class="flight-type">OneWay Flight</span></h3>
                                        </div>
                             
                                        <div class=" flight-timing">
                                            <ul class="list-unstyled">
                                                <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                        02-2017 </span>(8:40 PM)</li>
                                                <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                        03-2017 </span>(8:40 PM)</li>
                                            </ul>
                                        </div>
                            
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">$568.00<span class="pkg">Avg/Person</span></li>
                                            <li class="rating"><span><i class="fa fa-star orange"></i></span><span><i
                                                        class="fa fa-star orange"></i></span><span><i
                                                        class="fa fa-star orange"></i></span><span><i
                                                        class="fa fa-star orange"></i></span><span><i
                                                        class="fa fa-star lightgrey"></i></span></li>
                                        </ul>
                                    </div>
                       
                                </a>
                            </div>
             
                        </div>
          
                        <div class="col-sm-6 col-md-4">
                            <div class="main-block flight-block">
                                <a href="#">
                                    <div class="flight-img"><img src="images/flight-3.jpg" class="img-responsive" alt="flight-img" /></div>
                            
                                    <div class="flight-info">
                                        <div class="flight-title">
                                            <h3><span class="flight-destination">Spain</span>|<span class="flight-type">OneWay Flight</span></h3>
                                        </div>
                                
                                        <div class=" flight-timing">
                                            <ul class="list-unstyled">
                                                <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                        02-2017 </span>(8:40 PM)</li>
                                                <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                        03-2017 </span>(8:40 PM)</li>
                                            </ul>
                                        </div>
                       
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">$568.00<span class="pkg">Avg/Person</span></li>
                                            <li class="rating"><span><i class="fa fa-star orange"></i></span><span><i
                                                        class="fa fa-star orange"></i></span><span><i
                                                        class="fa fa-star orange"></i></span><span><i
                                                        class="fa fa-star orange"></i></span><span><i
                                                        class="fa fa-star lightgrey"></i></span></li>
                                        </ul>
                                    </div>
                       
                                </a>
                            </div>
           
                        </div>
             
                        <div class="col-sm-6 col-md-4">
                            <div class="main-block flight-block">
                                <a href="#">
                                    <div class="flight-img"><img src="images/flight-4.jpg" class="img-responsive" alt="flight-img" /></div>
                   
                                    <div class="flight-info">
                                        <div class="flight-title">
                                            <h3><span class="flight-destination">Spain</span>|<span class="flight-type">OneWay Flight</span></h3>
                                        </div>
                      
                                        <div class=" flight-timing">
                                            <ul class="list-unstyled">
                                                <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                        02-2017 </span>(8:40 PM)</li>
                                                <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                        03-2017 </span>(8:40 PM)</li>
                                            </ul>
                                        </div>
                          
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">$568.00<span class="pkg">Avg/Person</span></li>
                                            <li class="rating"><span><i class="fa fa-star orange"></i></span><span><i
                                                        class="fa fa-star orange"></i></span><span><i
                                                        class="fa fa-star orange"></i></span><span><i
                                                        class="fa fa-star orange"></i></span><span><i
                                                        class="fa fa-star lightgrey"></i></span></li>
                                        </ul>
                                    </div>
                     
                                </a>
                            </div>
                  
                        </div>
              
                        <div class="col-sm-6 col-md-4">
                            <div class="main-block flight-block">
                                <a href="#">
                                    <div class="flight-img"><img src="images/flight-5.jpg" class="img-responsive" alt="flight-img" /></div>
                              
                                    <div class="flight-info">
                                        <div class="flight-title">
                                            <h3><span class="flight-destination">Spain</span>|<span class="flight-type">OneWay Flight</span></h3>
                                        </div>
                                
                                        <div class=" flight-timing">
                                            <ul class="list-unstyled">
                                                <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                        02-2017 </span>(8:40 PM)</li>
                                                <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                        03-2017 </span>(8:40 PM)</li>
                                            </ul>
                                        </div>
                                  
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">$568.00<span class="pkg">Avg/Person</span></li>
                                            <li class="rating"><span><i class="fa fa-star orange"></i></span><span><i
                                                        class="fa fa-star orange"></i></span><span><i
                                                        class="fa fa-star orange"></i></span><span><i
                                                        class="fa fa-star orange"></i></span><span><i
                                                        class="fa fa-star lightgrey"></i></span></li>
                                        </ul>
                                    </div>
                          
                                </a>
                            </div>
               
                        </div>
          
                        <div class="col-sm-6 col-md-4">
                            <div class="main-block flight-block">
                                <a href="#">
                                    <div class="flight-img"><img src="images/flight-6.jpg" class="img-responsive" alt="flight-img" /></div>
                        
                                    <div class="flight-info">
                                        <div class="flight-title">
                                            <h3><span class="flight-destination">Spain</span>|<span class="flight-type">OneWay Flight</span></h3>
                                        </div>
                        
                                        <div class=" flight-timing">
                                            <ul class="list-unstyled">
                                                <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                        02-2017 </span>(8:40 PM)</li>
                                                <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                        03-2017 </span>(8:40 PM)</li>
                                            </ul>
                                        </div>
                             
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">$568.00<span class="pkg">Avg/Person</span></li>
                                            <li class="rating"><span><i class="fa fa-star orange"></i></span><span><i
                                                        class="fa fa-star orange"></i></span><span><i
                                                        class="fa fa-star orange"></i></span><span><i
                                                        class="fa fa-star orange"></i></span><span><i
                                                        class="fa fa-star lightgrey"></i></span></li>
                                        </ul>
                                    </div>
                   
                                </a>
                            </div>
                
                        </div>
        
                    </div>
      
                    <div class="view-all text-center"><a href="#" class="btn btn-orange">Ver mejores rutas!</a></div>

                </div>

            </div>

        </div>

    </section> -->
    <!-- end flight-offers -->
    <!--==================== HIGHLIGHTS ====================-->
    <!-- <section id="highlights" class="section-padding back-size">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div id="boxes">
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="highlight-box">
                                    <div class="h-icon"><span><i class="fa fa-plane"></i></span></div>
              
                                    <div class="h-text"><span class="numbers">2496</span>
                                        <p>Outstanding Tours</p>
                                    </div>
                  
                                </div>
               
                            </div>
              
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="highlight-box">
                                    <div class="h-icon"><span><i class="fa fa-ship"></i></span></div>
                      
                                    <div class="h-text cruise"><span class="numbers">1906</span>
                                        <p>Worldwide Cruise</p>
                                    </div>
                     
                                </div>
               
                            </div>
            
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="highlight-box">
                                    <div class="h-icon"><span><i class="fa fa-taxi"></i></span></div>
                     
                                    <div class="h-text taxi"><span class="numbers">2033</span>
                                        <p>Luxury Car Booking</p>
                                    </div>
                 
                                </div>
               
                            </div>
       
                        </div>
          
                    </div>
           
                </div>

            </div>

        </div>

    </section> -->
    <!-- end highlights -->
   

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
                                <img src="./images/payment-1.png" alt="master-card">
                            </div>
                            <div class="list__item__img">
                                <img src="./images/payment-2.png" alt="master-card">
                            </div>
                            <div class="list__item__img">
                                <img src="./images/payment-3.png" alt="master-card">
                            </div>
                            <div class="list__item__img">
                                <img src="./images/payment-4.png" alt="master-card">
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
    <!-- end latest-blog -->

    <!--========================= NEWSLETTER-1 ==========================-->
    <!-- <section id="newsletter-1" class="section-padding back-size newsletter">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <h2>Subscribe Our Newsletter</h2>
                    <p>Subscibe to receive our interesting updates</p>
                    <form>
                        <div class="form-group">
                            <div class="input-group"><input type="email" class="form-control input-lg" placeholder="Enter your email address" required /><span class="input-group-btn"><button class="btn btn-lg"><i
                                            class="fa fa-envelope"></i></button></span></div>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </section> -->
    <!-- end newsletter-1 -->
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
    <!-- Page Scripts Starts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-flex.js"></script>
    <script src="js/custom-owl.js"></script>
    <script src="js/custom-date-picker.js"></script>
    <script src="js/custom-video.js"></script>
    <script src="js/util.js"></script>
    <!-- Page Scripts Ends -->
</body>

</html>