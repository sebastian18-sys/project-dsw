<?php 

session_start();
include("../base_datos/db.php");
$boletodev = $_SESSION['cod-boleto-dev'];
// $tarjetafinal = $_SESSION['tarjeta'];
$correodev = $_SESSION['email-dev'];
$dnidev = $_SESSION['dni-dev'];

?>


<!doctype html>
<html lang="en">

<head>
    <title>Confirmación devolución</title>
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
                    <li><a href="./covid-19.php" class="search-button"><span>
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
                    <h1 class="page-title">Solicitud Registrada</h1>
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

                    <!-- end columns -->
                    <div id="boleto" class="col-xs-12 col-sm-12 col-md-12 content-side">
                        <div class="list-block main-block f-list-block">
                            <!-- <div class="container">
                                <div class="row"> -->
                            <div class="container-text">
                                <div class="text-datos">
                                    <!-- <h3>Hola,&nbsp; </h3> -->
                                    <h3>Recibimos tu solicitud</h3>
                                </div>
                                <p>Nuestro equipo te informará de los avances de la devolución <br>a través de tu <strong>correo electrónico</strong></p>
                                <div class="container-monto">
                                    <h3>Detalles de la operación</h3>
                                    <div class="text-datos">
                                        <p>Correo electrónico:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                        <p><?php echo $correodev ?></p>
                                    </div>
                                    <div class="text-datos">
                                        <p>DNI:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                        <p><?php echo $dnidev ?></p>
                                    </div>
                                    <div class="text-datos">
                                        <p>Medio de devolución:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                        <p><?php echo "Tarjeta de crédito" ?></p>
                                    </div>
                                    <div class="text-datos">
                                        <p>Código del boleto:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                        <p><?php echo $boletodev ?></p>
                                    </div>
                                </div>
                            </div>

                            <!-- </div>
                            </div> -->
                            <!-- /.box-body -->
                            <!-- end list-content -->
                        </div>
                        <!--    <div class="view-all text-center"><a href="javascript:void(0);" onclick="Util.imprimirBoleto();">Imprimir Boleto</div> -->
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


    <?php include("./includes/footer.php") ?>  
    <!-- end footer -->
    <!-- Page Scripts Starts -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/custom-navigation.js"></script>
    <script src="../js/custom-price-slider.js"></script>
    <script src="../js/util.js"></script>
    <!-- Page Scripts Ends -->

    <!-- INICIO -->
    <?php
    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    // If necessary, modify the path in the require statement below to refer to the
    // location of your Composer autoload.php file.
    require '../email/vendor/autoload.php';

    // Replace sender@example.com with your "From" address.
    // This address must be verified with Amazon SES.
    $sender = 'ventaswinaymarcasac@gmail.com';
    $senderName = '-- Winaymarca --';

    // Replace recipient@example.com with a "To" address. If your account
    // is still in the sandbox, this address must be verified.
    $recipient = 'sebastian.ccopacondori@unmsm.edu.pe';

    // Replace smtp_username with your Amazon SES SMTP user name.
    $usernameSmtp = 'AKIASNDTXSRALTINZIAF';

    // Replace smtp_password with your Amazon SES SMTP password.
    $passwordSmtp = 'BBmYEf49wQ5UuuHq8BrUGsO1A5pJxD8TStHI83vZO8Zj';

    // Specify a configuration set. If you do not want to use a configuration
    // set, comment or remove the next line.
    //$configurationSet = 'ConfigSet';

    // If you're using Amazon SES in a region other than US West (Oregon),
    // replace email-smtp.us-west-2.amazonaws.com with the Amazon SES SMTP
    // endpoint in the appropriate region.
    $host = 'email-smtp.us-east-2.amazonaws.com';
    $port = 587;

    // The subject line of the email
    $subject = '-- GRACIAS POR COMPRAR SU PASAJE WINAYMARCA --';

    // The plain-text body of the email
    $bodyText =  "-- GAAAAAAAAAAAAAAAAAAA--";

    // The HTML-formatted body of the email
    $bodyHtml = '-- Y MÁS GAAAAAAAAAAAAAAAAAAAAA --';

    $mail = new PHPMailer(true);

    try {
        // Specify the SMTP settings.
        $mail->isSMTP();
        $mail->setFrom($sender, $senderName);
        $mail->Username   = $usernameSmtp;
        $mail->Password   = $passwordSmtp;
        $mail->Host       = $host;
        $mail->Port       = $port;
        $mail->SMTPAuth   = true;
        $mail->SMTPSecure = 'tls';
    //  $mail->addCustomHeader('X-SES-CONFIGURATION-SET', $configurationSet);

        // Specify the message recipients.
        $mail->addAddress($recipient);
        // You can also add CC, BCC, and additional To recipients here.

        // Specify the content of the message.
        $mail->isHTML(true);
        $mail->Subject    = $subject;
        $mail->Body       = $bodyHtml;
        $mail->AltBody    = $bodyText;
        $mail->Send();
        echo "Email sent!" , PHP_EOL;
    } catch (phpmailerException $e) {
        echo "An error occurred. {$e->errorMessage()}", PHP_EOL; //Catch errors from PHPMailer.
    } catch (Exception $e) {
        echo "Email not sent. {$mail->ErrorInfo}", PHP_EOL; //Catch errors from Amazon SES.
    }
    ?>
    <!-- FIN -->
    </body>

</html>