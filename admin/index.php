<!doctype html>
<html lang="en">

<head>
    <title>Admin Module</title>
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
                    <a href="javascript:void(0)" class="search-button">
                        <span><i class="fa fa-search"></i></span>
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

    <!-- <div class="sidenav-content">
        <div id="mySidenav" class="sidenav">
            <h2 id="web-name"><span><i class="fa fa-plane"></i></span>Star Travel</h2>
            <div id="main-menu">
                <div class="closebtn"><button class="btn btn-default" id="closebtn">&times;</button></div>

                <div class="list-group panel"><a href="#home-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-home link-icon"></i></span>Home<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="home-links"><a href="index.html" class="list-group-item">Main Homepage</a><a href="flight-homepage.html" class="list-group-item">Flight Homepage</a><a href="hotel-homepage.html" class="list-group-item">Hotel Homepage</a><a href="tour-homepage.html"
                            class="list-group-item">Tour Homepage</a><a href="cruise-homepage.html" class="list-group-item">Cruise Homepage</a><a href="car-homepage.html" class="list-group-item">Car Homepage</a><a href="landing-page.html" class="list-group-item">Landing Page</a></div>
                    <a href="#flights-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-plane link-icon"></i></span>Flights<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="flights-links"><a href="flight-homepage.html" class="list-group-item">Flight Homepage</a><a href="flight-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a><a href="flight-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>
                        <a href="flight-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a><a href="flight-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a><a href="flight-detail-left-sidebar.html" class="list-group-item">Detail Left Sidebar</a>
                        <a href="flight-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>
                    </div>
                    <a href="#hotels-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-building link-icon"></i></span>Hotels<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="hotels-links"><a href="hotel-homepage.html" class="list-group-item">Hotel Homepage</a><a href="hotel-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a><a href="hotel-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>
                        <a href="hotel-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a><a href="hotel-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a><a href="hotel-detail-left-sidebar.html" class="list-group-item">Detail Left Sidebar</a>
                        <a href="hotel-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>
                    </div>
                    <a href="#tours-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-globe link-icon"></i></span>Tours<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="tours-links"><a href="tour-homepage.html" class="list-group-item">Tour Homepage</a><a href="tour-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a><a href="tour-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>
                        <a href="tour-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a><a href="tour-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a><a href="tour-detail-left-sidebar.html" class="list-group-item">Detail Left Sidebar</a>
                        <a href="tour-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>
                    </div>
                    <a href="#cruise-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-ship link-icon"></i></span>Cruise<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="cruise-links"><a href="cruise-homepage.html" class="list-group-item">Cruise Homepage</a><a href="cruise-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a><a href="cruise-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>
                        <a href="cruise-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a><a href="cruise-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a><a href="cruise-detail-left-sidebar.html" class="list-group-item">Detail Left Sidebar</a>
                        <a href="cruise-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>
                    </div>
                    <a href="#cars-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-car link-icon"></i></span>Cars<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="cars-links"><a href="car-homepage.html" class="list-group-item">Car Homepage</a><a href="car-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a><a href="car-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>
                        <a href="car-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a><a href="car-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a><a href="car-detail-left-sidebar.html" class="list-group-item">Detail Left Sidebar</a>
                        <a href="car-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>
                    </div>
                    <a href="#pages-links" class="list-group-item active" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-clone link-icon"></i></span>Pages<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="pages-links">
                        <div class="list-group-heading list-group-item">Standard <span>Pages</span></div><a href="about-us.html" class="list-group-item">About Us</a><a href="contact-us.html" class="list-group-item">Contact Us</a><a href="blog-listing-left-sidebar.html" class="list-group-item">Blog Listing Left Sidebar</a>
                        <a href="blog-listing-right-sidebar.html" class="list-group-item">Blog Listing Right Sidebar</a><a href="blog-detail-left-sidebar.html" class="list-group-item">Blog Detail Left Sidebar</a><a href="blog-detail-right-sidebar.html"
                            class="list-group-item">Blog Detail Right Sidebar</a>
                        <div class="list-group-heading list-group-item">User <span>Dashboard</span></div><a href="dashboard.html" class="list-group-item">Dashboard</a><a href="user-profile.html" class="list-group-item">User Profile</a><a href="booking.html" class="list-group-item">Booking</a>
                        <a href="wishlist.html" class="list-group-item">Wishlist</a><a href="cards.html" class="list-group-item">Cards</a>
                        <div class="list-group-heading list-group-item">Special <span>Pages</span></div><a href="#" class="list-group-item active">Login</a><a href="registration.html" class="list-group-item">Registration</a><a href="forgot-password.html" class="list-group-item">Forgot Password</a>
                        <a href="error-page.html" class="list-group-item">404 Page</a><a href="coming-soon.html" class="list-group-item">Coming Soon</a>
                        <div class="list-group-heading list-group-item">Extra <span>Pages</span></div><a href="before-you-fly.html" class="list-group-item">Before Fly</a><a href="travel-insurance.html" class="list-group-item">Travel Insurance</a><a href="holidays.html" class="list-group-item">Holidays</a>
                        <a href="thank-you.html" class="list-group-item">Thank You</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- end sidenav-content -->

    <!--============= PAGE-COVER =============-->
    <section class="page-cover" id="cover-login">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Modulo Administrador</h1>
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
        <div id="login" class="innerpage-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="flex-content">
                            <div class="form-main">
                                <div class="form-container custom-form-fields">
                                    <h3>Inicio Sesión</h3>
                                    <p>Hola, Administrador. Para acceder al sistema ingrese su usuario y <br> contraseña </p>
                                    <form method="POST" action="validar-inicio_sesion.php">
                                        <div class="form-group">
                                            <div class="group">
                                                <i class="fa fa-user"></i>
                                                <input type="text" class="form-control-dates" placeholder="Username" name="usuario-admin" required/>
                                            </div>
                                            
                                            <!-- <span>
                                                
                                            </span> -->
                                        </div>
                                        <div class="form-group">
                                            <div class="group">
                                                <i class="fa fa-lock"></i>
                                                <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
                                                <input type="password" class="form-control-dates" placeholder="Password" name="contraseña-admin" required/>
                                            </div>
                                            
                                            <!-- <span>
                                                
                                            </span> -->
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox">Recordarme</label>
                                        </div>
                                        <input type="submit" class="btn btn-orange btn-block" value="Ingresar" name="iniciar_sesion">
                                    </form>
                                </div>
                            </div>
                            <!-- end custom-form -->
                            <!-- <div class="flex-content-img custom-form-img"><img src="../images/Head/header10.jpg" class="img-responsive" alt="registration-img" /></div> -->
                            <!-- end custom-form-img -->
                        </div>
                        <!-- end form-content -->
                    </div>
                    <!-- end columns -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end login -->
    </section>
    <!-- end innerpage-wrapper -->

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
                            <li><span><i class="fa fa-envelope"></i></span>correo@wiñaymarca.com</li>
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
                            <li><a href="#">Ayuda</a></li>
                            <li><a href="#">Contacto</a></li>
                            <!-- <li><a href="#">Cars</a></li> -->
                        </ul>
                    </div>
                    <!-- end columns -->
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-about ftr-pad-left">
                        <h3 class="footer-heading">Siguenos en</h3>
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
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-widget ftr-about">
                        <h3 class="footer-heading">Nosotros</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                        
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
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/custom-navigation.js"></script>
    <!-- Page Scripts Ends -->
</body>

</html>