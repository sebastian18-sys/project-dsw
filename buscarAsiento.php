<?php
session_start();
include("base_datos/db.php");

$origin = $_SESSION['origen'];
$destiny = $_SESSION['destino'];
$date = $_SESSION['fecha'];

?>


<!doctype html>
<html lang="en">



<head>
    <title>Buscar pasaje</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="./images/icon-web.png" />
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
    <!--Jquery UI Stylesheet-->
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <!-- <script language="javascript" type="text/javascript" src="js/util.js"></script> -->
</head>



<body onload="Util.cargar();">

<?php

if(isset($_POST['pasaje-bus'])) {
    $seleccionado = $_POST['id_corrida'];

    $asientos=array(
        "fila1"=>array(
        "as04"=>"vacio",
        "as08"=>"vacio",
        "as12"=>"vacio",
        "as16"=>"vacio",
        "as20"=>"vacio",
        "as24"=>"vacio",
        "as28"=>"vacio",
        "as32"=>"vacio",
        "as36"=>"vacio",
        ),
        "fila2"=>array(
        "as03"=>"vacio",
        "as07"=>"vacio",
        "as11"=>"vacio",
        "as15"=>"vacio",
        "as19"=>"vacio",
        "as23"=>"vacio",
        "as27"=>"vacio",
        "as31"=>"vacio",
        "as35"=>"vacio",
        ),
        "filatele"=>array(
        "tv"=>"vacio",
        "tv"=>"vacio",
        "tv"=>"vacio",
        "tv"=>"vacio",
        ),
        "fila3"=>array(
        "as02"=>"vacio",
        "as06"=>"vacio",
        "as10"=>"vacio",
        "as14"=>"vacio",
        "as18"=>"vacio",
        "as22"=>"vacio",
        "as26"=>"vacio",
        "as30"=>"vacio",
        "as34"=>"vacio",
        ),
        "fila4"=>array(
        "as01"=>"vacio",
        "as05"=>"vacio",
        "as09"=>"vacio",
        "as13"=>"vacio",
        "as17"=>"vacio",
        "as21"=>"vacio",
        "as25"=>"vacio",
        "as29"=>"vacio",
        "as33"=>"vacio",
        )
    );

    //Creamos la consulta SQL para los datos de las corridas y los asientos desocupados.
	$consulta="SELECT id_itinerario, asiento from boletos where id_itinerario = $seleccionado";
	$tabla = mysqli_query($link, $consulta);
	$asientosOcupados=mysqli_num_rows($tabla);
	if($asientosOcupados >= 0 && $asientosOcupados < 36) {
		while ($registro = mysqli_fetch_array($tabla))
		{
			//variables de filas
			$i=4;
			$j=3;
			$k=2;
			$l=1;
			//Ciclos que recorren las filas de las esas.
			foreach($fila=$asientos['fila1'] as $asiento => $estado)
			{
				if($registro['asiento']==$i)
				{
						$asientos['fila1'][$asiento]="ocupado";
				}
				$i+=4;
			}
			foreach($fila=$asientos['fila2'] as $asiento => $estado)
			{
				if($registro['asiento']==$j)
				{
						$asientos['fila2'][$asiento]="ocupado";
				}
				$j+=4;
			}
			foreach($fila=$asientos['fila3'] as $asiento => $estado)
			{
				if($registro['asiento']==$k)
				{
						$asientos['fila3'][$asiento]="ocupado";
				}
				$k+=4;
			}
			foreach($fila=$asientos['fila4'] as $asiento => $estado)
			{
				if($registro['asiento']==$l)
				{
						$asientos['fila4'][$asiento]="ocupado";
				}
				$l+=4;
			}
		}
	}else{
?>
    <div class="error">
        <?php echo $corridaSinAsientos;?>
    </div><br />

<?php return 0; } 

    mysqli_free_result($tabla); 
    //Creamos la consulta SQL para los datos de la corrida.
    $consulta="SELECT * FROM `itinerarios` WHERE `id` = $id_boleto";
    $tabla = mysqli_query($link, $consulta);

    ?>
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
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Trayectos<span><i
                                    class="fa fa-angle-down"></i></span></a>
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
            <h2 id="web-name"><span><i class="fa fa-bus"></i></span>Wi??aymarca</h2>
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
                            <p>Informaci??n de tu viaje</p>
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
                                        <a href="" data-toggle="collapse"><?php echo $date ?></a>
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
                                    <a href="index.php" class="btn btn-orange" data-toggle="">Modificar B??squeda</a>
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
                                    <p>Necesitas ayuda? Si deseas mayor informaci??n sobre tu viaje, si tienes dudas sobre los servicios que ofrecemos o deseas realizar una consulta; tambi??n puedes comunicarte a nuestra l??nea de atenci??n al cliente. </p>
                                    <div class="support-contact"><span><i class="fa fa-phone"></i></span>
                                        <p>(01) 5891260</p>
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
                        <h2><?php echo $origin ?> <i class="fa fa-arrow-right" aria-hidden="true"></i> <?php echo $destiny ?></h2>
                        <p>Fecha: <?php echo $date ?></p>
                        <div class="page-search">
                            <h4>Selecciona <strong>tus asientos</strong></h4>
                            <hr class="heading-line" />
                        </div>
                        <div class="list-block main-block f-list-block">
                            <!-- <div class="container"> -->
                                <!-- <div class="row"> -->
                                    <form id="boleto" action="" method="POST">
                                        <label><?php echo "SELECCIONA EL NUMERO DE BOLETOS";?></label>
                                        
                                        <select id="num_boletos" onchange="Util.bolsMax(this.selectedIndex);">
                                            <!-- <option value="-1">seleccionar</option> -->
                                            <?php
                                                for($i=1;$i<=5;$i++){
                                            ?>
                                            <option value="<?php echo"$i";?>"> <?php echo"$i";?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                        <br />
                                        <table id="carrito" class="carro-container" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td rowspan="5">
                                                <img src="./images/asientos2/bus_top.png"/>
                                                </td>
                                                <td>
                                                <?php
                                                $fila1=$asientos['fila1'];
                                                foreach( $fila1 as $asiento => $estado )
                                                // echo $asiento;
                                                {
                                                    if($estado=="ocupado")
                                                    {
                                                        echo "<img src=\"./images/asientos2/$estado.png\" id=\"$asiento\"/>";
                                                        // echo "<input type=\"image\" src=\"./images/asientos/$estado.gif\" id=\"$asiento\"/>";
                                                        
                                                    }else if($estado=="vacio")
                                                    {
                                                        echo "<img src=\"./images/asientos2/$asiento.png\" class=\"links\" id=\"$asiento\" onclick=\"Util.swapImage(this);\"/>";
                                                        // echo "<input type=\"image\" multiple src=\"./images/asientos/$asiento.jpg\" class=\"links\" id=\"$asiento\" onclick=\"Util.swapImage(this);\"/>";
                                                        // echo "<input type=\"url\" src=\"./images/asientos/$asiento.jpg\" class=\"links\" id=\"$asiento\" onclick=\"Util.swapImage(this);\"/>";
                                                    }
                                                }
                                                ?>
                                                </td>
                                                <td rowspan="5">
                                                <img src="./images/asientos2/bus_back.png" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <?php
                                                $fila2=$asientos['fila2'];
                                                foreach( $fila2 as $asiento => $estado )
                                                // echo $estado;
                                                {
                                                    if($estado=="ocupado")
                                                    {
                                                        echo "<img src=\"./images/asientos2/$estado.png\" id=\"$asiento\" />";
                                                    }else if($estado=="vacio")
                                                    {
                                                        echo "<img src=\"./images/asientos2/$asiento.png\" class=\"links\"  id=\"$asiento\" onclick=\"Util.swapImage(this);\"/>";
                                                    }
                                                }
                                                ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fila-tv">
                                                <?php
                                                // $filatele=$asientos['filatele'];
                                                // foreach( $filatele as $tele => $estado )
                                                // echo $tele; 
                                                // {
                                                for($i = 0; $i < 4; $i++) {
                                                    // if($estado == "vacio") {
                                                        echo "<img src=\"./images/asientos2/tv.png\" id=\"\" />";   
                                                    // }
                                                }
                                                // }
                                                ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <?php
                                                $fila3=$asientos['fila3'];
                                                foreach( $fila3 as $asiento => $estado )
                                                {
                                                    if($estado=="ocupado")
                                                    {
                                                        echo "<img src=\"./images/asientos2/$estado.png\" id=\"$asiento\"/>";
                                                    }else if($estado=="vacio")
                                                    {
                                                        echo "<img src=\"./images/asientos2/$asiento.png\" class=\"links\"  id=\"$asiento\" onclick=\"Util.swapImage(this);\"/>";
                                                    }
                                                }
                                                ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <?php
                                                $fila4=$asientos['fila4'];
                                                foreach( $fila4 as $asiento => $estado )
                                                {
                                                    if($estado=="ocupado")
                                                    {
                                                        echo "<img src=\"./images/asientos2/$estado.png\" id=\"$asiento\" />";
                                                    }else if($estado=="vacio")
                                                    {
                                                        echo "<img src=\"./images/asientos2/$asiento.png\" class=\"links\"  id=\"$asiento\" onclick=\"Util.swapImage(this);\"/>";
                                                    }
                                                }
                                                ?>
                                                </td>
                                            </tr>
                                        </table>
                                        <br />
                                        <div id="ind" class="leyenda-asientos">
                                            <table id="indicaciones" cellpadding="0" cellspacing="0">
                                            <tr><td><img src="./images/asientos2/ocupado.png">&nbsp;<label class="enfasis"><?php echo "OCUPADO";?></label>&nbsp;</label><img src="./images/asientos2/asientoNormal.png">&nbsp;<label class="enfasis"><?php echo "DISPONIBLE";?>&nbsp;<img src="./images/asientos2/seleccionado.png">&nbsp;<label class="enfasis"><?php echo "SELECCIONADO";?></label></tr>
                                            </table>
                                        </div>
                                    <!-- </div> -->
                                            <!-- <table id="continuar">
                                                <tr>
                                                    <td>
                                                        <img src="./images/asientos/regresar.gif" onclick="Util.Regresar();" class="links" />
                                                    </td>
                                                    <td>
                                                        &nbsp;
                                                    </td>
                                                    <td>
                                                        &nbsp;
                                                    </td>
                                                    <td>
                                                        <img src="./images/asientos/continuar.gif" id="continuar" onclick="Util.avanzar();" class="links"/>
                                                    </td>
                                                </tr>
                                            </table> -->
                                        <input type="hidden" id="num_bol_selec" value="0" />
                                        <input type="hidden" id="bolsMax" value="0" />
                                        <input type="hidden" id="id_corrida" value="<?php echo $seleccionado; ?>" />
                                        
                                        <div class="button-container col-lg-12">
                                                <input type="submit" name="comprar-asiento" id="continuar" onclick="Util.avanzar();" class="next-button" value="Siguiente">
                                            
                                                <a href="./buscar-pasaje.php"> <input class="back-button" type="button" value="Regresar"> </a>
                                            
                                            
                                        </div>
                                        
                                    </form>
                                <!-- </div> -->
                            <!-- </div> -->
                            
                            <!-- /.box-body -->
                            <!-- end list-content -->
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
    <!-- <script src="js/util.js"></script> -->
    <!-- <script language="javascript" type="text/javascript" src="./back-wi??aymarca/js/util.js"></script> -->
    
    <!-- Page Scripts Ends -->
    <script language="javascript" type="text/javascript" src="./js/util.js"></script>
</body>

</html>

<?php } ?>