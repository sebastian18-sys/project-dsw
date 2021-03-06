<?php
session_start();
include("base_datos/db.php");

$dni_b = $_SESSION['dni'];
$nombre_b = $_SESSION['name'];
$apellidos_b = $_SESSION['lastname'];
$correo_b = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Buscar pasaje</title>
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
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" id="cpswitch" href="css/orange.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <!--Jquery UI Stylesheet-->
    <link rel="stylesheet" href="css/jquery-ui.min.css" />
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
                            <input type="text" class="form-control" placeholder="Search..." required /><span class="input-group-btn"><button type="submit" class="btn">
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
                    <a href="./covid-19.php" class="covid-button"><span>
                            <!-- <i class="fa fa-search"></i> -->
                            Covid-19
                        </span>
                    </a>
                </div>
                <a href="./index.php" class="navbar-brand">
                    <span><i class="fa fa-bus"></i>WI??AY</span>MARCA
                </a>
            </div>
            <!-- end navbar-header -->
            <div class="collapse navbar-collapse" id="myNavbar1">
                <ul class="nav navbar-nav navbar-right navbar-search-link">
                    <li class="dropdown">
                        <a href="./index.php" class="dropdown-toggle">Inicio
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
                            <li><a href="./encomiendas/encomiendas.php">Encomiendas</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Trayectos<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="./destinations.html">Destinos</a></li>
                            <li><a href="./rutas.html">Rutas</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="./faq.html" class="dropdown-toggle">Ayuda
                            <span>
                                <!-- <i class="fa fa-angle-down"></i> -->
                            </span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="./contact-us.php" class="dropdown-toggle">Contacto
                            <span> </span>
                        </a>
                    </li>
                    <li>
                        <a href="./covid-19.php" class="search-button"><span> Covid-19 </span>
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
                <span><i class="fa fa-bus"></i></span>Wi??aymarca
            </h2>
            <div id="main-menu">
                <div class="closebtn">
                    <button class="btn btn-default" id="closebtn">&times;</button>
                </div>
                <div class="list-group panel">
                    <a href="./index.php" class="list-group-item active" data-parent="#main-menu">
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
                        <a href="./encomiendas/encomiendas.php" class="list-group-item">Encomiendas</a>
                    </div>

                    <a href="#tours-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu">
                        <span><i class="fa fa-globe link-icon"></i></span>Trayectos
                        <span><i class="fa fa-chevron-down arrow"></i></span>
                    </a>
                    <div class="collapse sub-menu" id="tours-links">
                        <a href="./destinations.html" class="list-group-item">Destinos</a>
                        <a href="./rutas.html" class="list-group-item">Rutas</a>
                    </div>

                    <a href="./faq.html" class="list-group-item" data-toggle="collapse" data-parent="#main-menu">
                        <span><i class="fa fa-ship link-icon"></i></span>Ayuda
                    </a>

                    <a href="./contact-us.php" class="list-group-item" data-toggle="collapse" data-parent="#main-menu">
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
                    <h1 class="page-title">Declaraci??n Jurada</h1>
                    <ul class="breadcrumb"></ul>
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
                    <div class="col-xs-12 col-sm-12 col-md-12 content-side">
                        <div class="list-block main-block f-list-block">
                            <!-- <div class="container">
                                <div class="row"> -->
                            <div class="container-dates">
                                <div class="container-dates__form-covid col-lg-8">
                                    <form action="validar-formulario-covid.php" method="POST">
                                        <div class="form-head col-lg-12">
                                            <h4>Declaraci??n Jurada para el Embargue</h4>
                                            <hr />
                                        </div>
                                        <div class="form-text">
                                            <h4>(Ficha de sintomatolog??a COVID-19)</h4>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>DNI:</label>
                                                <div class="group">
                                                    <i class="fa fa-id-card" aria-hidden="true"></i>
                                                    <input type="text" class="form-control-dates" placeholder="DNI" readonly="readonly" name="dni-covid" required="required" value="<?php echo $dni_b ?>" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nombres:</label>
                                                <div class="group">
                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                    <input type="text" class="form-control-dates" placeholder="Nombres" readonly="readonly" name="nombres-covid" required="required" value="<?php echo $nombre_b ?>" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Apellidos:</label>
                                                <div class="group">
                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                    <input type="text" class="form-control-dates" placeholder="Apellidos" readonly="readonly" name="apellidos-covid" required="required" value="<?php echo $apellidos_b?>" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Correo:</label>
                                                <div class="group">
                                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                                    <input type="email" class="form-control-dates" placeholder="Correo" readonly="readonly" name="correo-covid" required="required" value="<?php echo $correo_b?>" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Direcci??n:</label>
                                                <div class="group">
                                                    <i class="fa fa-home" aria-hidden="true"></i>
                                                    <input type="text" class="form-control-dates" placeholder="Direcci??n" name="address" required="required" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Telefono:</label>
                                                <div class="group">
                                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                                    <input type="text" class="form-control-dates" placeholder="Telefono" name="telefono-covid" required="required" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <p>
                                                    Declaro bajo juramento que no presento en el momento
                                                    actual signos ni s??ntomas respirtorios compatibles
                                                    con COVID-19 y que no he estado expuesto a personas
                                                    con la enfermedad o con los mismos s??ntomas en los
                                                    ??ltimos 14 d??as.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="checkbox-flex">
                                                    <p>
                                                        1. P??rdida del sentido del gusto <br />
                                                        y olfato
                                                    </p>
                                                    <div class="check-radio">
                                                        <div class="si-no-check">
                                                            <p>Si&nbsp;</p>
                                                            <input type="radio" class="form-control-dates radio-inline" name="gusto-olfato" value="si" required="required" />
                                                        </div>
                                                        <div class="si-no-check">
                                                            <p>No</p>
                                                            <input type="radio" class="form-control-dates radio-inline" name="gusto-olfato" value="no" required="required" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="checkbox-flex">
                                                    <p>2. Fiebre</p>
                                                    <div class="check-radio">
                                                        <div class="si-no-check">
                                                            <p>Si&nbsp;</p>
                                                            <input type="radio" class="form-control-dates radio-inline" name="fiebre" value="si" required="required" />
                                                        </div>
                                                        <div class="si-no-check">
                                                            <p>No</p>
                                                            <input type="radio" class="form-control-dates radio-inline" name="fiebre" value="no" required="required" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="checkbox-flex">
                                                    <p>3. Dolor de garganta</p>
                                                    <div class="check-radio">
                                                        <div class="si-no-check">
                                                            <p>Si&nbsp;</p>
                                                            <input type="radio" class="form-control-dates radio-inline" name="dolor-garganta" value="si" required="required" />
                                                        </div>
                                                        <div class="si-no-check">
                                                            <p>No</p>
                                                            <input type="radio" class="form-control-dates radio-inline" name="dolor-garganta" value="no" required="required" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="checkbox-flex">
                                                    <p>4. Dolores musculares</p>
                                                    <div class="check-radio">
                                                        <div class="si-no-check">
                                                            <p>Si&nbsp;</p>
                                                            <input type="radio" class="form-control-dates radio-inline" name="dolor-muscular" value="si" required="required" />
                                                        </div>
                                                        <div class="si-no-check">
                                                            <p>No</p>
                                                            <input type="radio" class="form-control-dates radio-inline" name="dolor-muscular" value="no" required="required" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="checkbox-flex">
                                                    <p>5. Tos</p>
                                                    <div class="check-radio">
                                                        <div class="si-no-check">
                                                            <p>Si&nbsp;</p>
                                                            <input type="radio" class="form-control-dates radio-inline" name="tos" value="si" required="required" />
                                                        </div>
                                                        <div class="si-no-check">
                                                            <p>No</p>
                                                            <input type="radio" class="form-control-dates radio-inline" name="tos" value="no" required="required" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <p>
                                                    La falsedad de lo anteriormente declarado, ser??
                                                    sujeto a las medidas legales pertinentes.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <p>
                                                    DECLARO BAJO JURAMENTO que la informaci??n brindada
                                                    es verdadera y cierta, asumo la responsabilidad por
                                                    la veracidad de la informaci??n antes mencionada.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="button-container col-sm-12">
                                            <input class="next-button" name="Formulario-covid" type="submit" value="Enviar" />
                                            <a href="./covid-19.php">
                                                <input class="back-button" type="button" value="Cancelar" />
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- </div>
                            </div> -->
                            <!-- /.box-body -->
                            <!-- end list-content -->
                        </div>
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

    <!--================ FORMAS DE PAGO ==============-->
    <section id="latest-blog" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-sm-12">
                    <div class="page-heading">
                        <h2>M??todos de pago</h2>
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

    <?php include("./includes/footer.php") ?>
    <!-- end footer -->
    <!-- Page Scripts Starts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-price-slider.js"></script>
    <!-- Page Scripts Ends -->
</body>

</html>