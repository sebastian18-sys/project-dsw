<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Reprogramaciones</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="icon" href="../images/icon-web.png" />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i"
      rel="stylesheet"
    />
    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="../css/font-awesome.min.css" />
    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" id="cpswitch" href="../css/orange.css" />
    <link rel="stylesheet" href="../css/responsive.css" />
  </head>

  <body>
    <!--====== LOADER =====-->
    <div class="loader"></div>
   
      

    <nav
      class="navbar navbar-default main-navbar navbar-custom navbar-white"
      id="mynavbar-1"
    >
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
            <a href="../covid-19.php" class="covid-button"
              ><span>
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
              <a href="../index.php" class="dropdown-toggle"
                >Inicio
                <span>
                  <!-- <i class="fa fa-angle-down"></i> -->
                </span>
              </a>
            </li>
            <li class="dropdown">
              <a href="../about-us.html" class="dropdown-toggle"
                >Nosotros
                <span>
                  <!-- <i class="fa fa-angle-down"></i> -->
                </span>
              </a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                >Servicios
                <span>
                  <i class="fa fa-angle-down"></i>
                </span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="../encomiendas/encomiendas.php">Encomiendas</a></li>
                
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                >Trayectos<span><i class="fa fa-angle-down"></i></span
              ></a>
              <ul class="dropdown-menu">
                <li><a href="../destinations.html">Destinos</a></li>
                <li><a href="../rutas.html">Rutas</a></li>
              </ul>
            </li>
            <li class="dropdown active">
              <a href="../faq.html" class="dropdown-toggle"
                >Ayuda
                <span>
                  <!-- <i class="fa fa-angle-down"></i> -->
                </span>
              </a>
            </li>
            <li class="dropdown">
              <a href="../contact-us.php" class="dropdown-toggle"
                >Contacto
                <span>
                  <!-- <i class="fa fa-angle-down"></i> -->
                </span>
              </a>
            </li>
            <li>
              <a href="../covid-19.php" class="search-button"
                ><span> Covid-19 </span>
              </a>
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
          <span><i class="fa fa-bus"></i></span>Wiñaymarca
        </h2>
        <div id="main-menu">
          <div class="closebtn">
            <button class="btn btn-default" id="closebtn">&times;</button>
          </div>
          <div class="list-group panel">
            <a
              href="../index.php"
              class="list-group-item active"
              data-parent="#main-menu"
            >
              <span><i class="fa fa-home link-icon"></i></span>Inicio
            </a>

            <a
              href="../about-us.html"
              class="list-group-item"
              data-parent="#main-menu"
            >
              <span><i class="fa fa-plane link-icon"></i></span>Nosotros
            </a>

            <a
              href="#hotels-links"
              class="list-group-item"
              data-toggle="collapse"
              data-parent="#main-menu"
            >
              <span><i class="fa fa-building link-icon"></i></span>Servicios
              <span><i class="fa fa-chevron-down arrow"></i></span>
            </a>
            <div class="collapse sub-menu" id="hotels-links">
              <a href="../encomiendas/encomiendas.php" class="list-group-item">Encomiendas</a>
            </div>

            <a
              href="#tours-links"
              class="list-group-item"
              data-toggle="collapse"
              data-parent="#main-menu"
            >
              <span><i class="fa fa-globe link-icon"></i></span>Trayectos
              <span><i class="fa fa-chevron-down arrow"></i></span>
            </a>
            <div class="collapse sub-menu" id="tours-links">
              <a href="../destinations.html" class="list-group-item">Destinos</a>
              <a href="../rutas.html" class="list-group-item"
                >Rutas</a
              >
            </div>

            <a
              href="../faq.html"
              class="list-group-item"
              data-toggle="collapse"
              data-parent="#main-menu"
            >
              <span><i class="fa fa-ship link-icon"></i></span>Ayuda
            </a>

            <a
              href="../contact-us.php"
              class="list-group-item"
              data-toggle="collapse"
              data-parent="#main-menu"
            >
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
            <h1 class="page-title">¡A Viajar Seguro!</h1>
            <ul class="breadcrumb">
              <li><a href="../index.php">Inicio</a></li>
              <li class="active">Covid-19</li>
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
            <div class="col-sm-12">
              <div class="page-heading">
                <h2>Busca tu viaje</h2>
                <p>Ingresa datos del viaje</p>
                <hr class="heading-line" />
              </div>
            </div>
            <!-- end columns -->
            <div class="col-sm-12">
              <div class="flex-content">
                <div class="custom-form custom-form-fields">
                  <h3>Ingresa tus datos aquí</h3>
                  <!-- <p>When you fill in your registered email address, you will be sent instructions on how to reset your password.</p> -->
                  <form class="form-covid" action="validar-busqueda-viaje.php" method="POST">
                    <div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                            <input autocomplete="off" type="text" class="form-control-dates" placeholder="DNI" name="dni-changes" required/>
                            <span>
                                <i class="fa fa-id-card" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                            <input autocomplete="off" type="text" class="form-control-dates" placeholder="Código de reserva" name="cod-reserva-changes" required/>
                            <span>
                                <i class="fa fa-ticket" aria-hidden="true"></i>
                            </span>
                        </div>

                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 info-changes">
                        <p>Ingresa estos datos tal cual están en <strong>tu boleto</strong></p>
                    </div>
                    <input type="submit" name="validar-busqueda-viaje" value="Siguiente" class="btn-orange-next">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 back-button-changes">
                        <a href="../faq.html"><input type="button" class="btn-orange-back" value="Volver"></a>
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
                  <img src="../images/payment-1.png" alt="master-card" />
                </div>
                <div class="list__item__img">
                  <img src="../images/payment-2.png" alt="master-card" />
                </div>
                <div class="list__item__img">
                  <img src="../images/payment-3.png" alt="master-card" />
                </div>
                <div class="list__item__img">
                  <img src="../images/payment-4.png" alt="master-card" />
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
            <div
              class="
                col-xs-12 col-sm-6 col-md-3 col-lg-3
                footer-widget
                ftr-contact
              "
            >
              <h3 class="footer-heading">Contáctanos</h3>
              <ul class="list-unstyled">
                <li>
                  <span><i class="fa fa-map-marker"></i></span>29 Land St, Lorem
                  City, CA
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
            <div
              class="
                col-xs-12 col-sm-6 col-md-2 col-lg-2
                footer-widget
                ftr-links
              "
            >
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
            <div
              class="
                col-xs-12 col-sm-6 col-md-3 col-lg-3
                footer-widget
                ftr-links ftr-pad-left
              "
            >
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
            <div
              class="
                col-xs-12 col-sm-6 col-md-4 col-lg-4
                footer-widget
                ftr-about
              "
            >
              <h3 class="footer-heading">Nosotros</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                nostrud exerci tation ullamcorper suscipit.
              </p>
              <ul class="social-links list-inline list-unstyled">
                <li>
                  <a href="#"
                    ><span><i class="fa fa-facebook"></i></span
                  ></a>
                </li>
                <li>
                  <a href="#"
                    ><span><i class="fa fa-twitter"></i></span
                  ></a>
                </li>
                <li>
                  <a href="#"
                    ><span><i class="fa fa-instagram"></i></span
                  ></a>
                </li>
                <li>
                  <a href="#"
                    ><span><i class="fa fa-linkedin"></i></span
                  ></a>
                </li>
                <li>
                  <a href="#"
                    ><span><i class="fa fa-youtube-play"></i></span
                  ></a>
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
            <div
              class="col-xs-12 col-sm-6 col-md-6 col-lg-12 copy"
              id="copyright"
            >
              <p>
                Copyright © 2021
                <a href="http://www.bootstrapmb.com/"
                  >.Todos los derechos reservados</a
                >| Wiñaymarca SAC
              </p>
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
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/custom-navigation.js"></script>
    <!-- Page Scripts Ends -->
  </body>
</html>
