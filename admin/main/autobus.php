<?php
include("./header.php");
session_start();
// error_reporting(0);
include("../../base_datos/db.php");
?>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">

            <?php include 'main_sidebar.php';?>
            <!-- top navigation -->
             <?php include 'top_nav.php';?>     
            <!-- /top navigation -->
            <style>
                label{

                color: black;
                }
                li {
                color: white;
                }
                ul {
                color: white;
                }
                #buscar{
                text-align: right;
                }
            </style>
            
            <!-- page content -->
            <div class="right_col" role="main">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class = "x-panel"></div>
                    </div><!--end of modal-dialog-->
                </div>
                <!--end of modal-->
                <div class="box-body"><!-- Date range --></div>

                <div class="box-header">
                    <h3 class="box-title text-center"><b>Registrar Autobus</b></h3>
                </div>
                <!-- /.box-header -->
                
                <div class="box-body">
                    <!-- /.box-header -->
                    <div class="box-body">
                                 
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-shadow">
                                        <div class="dates-info text-center">
                                            <!-- <i class="fas fa-user-md"></i> -->
                                            <h4>Información de los autobuses</h4>
                                        </div>
                                        <div class="text-center info-container">
                                            <div class="col-lg-8">
                                            <p class="text-center">En este módulo, usted puede registrar a los autobuses de la Empresa de Transportes Wiñaymarca.<br>Contamos con una amplia y moderna cadena de agencias a nivel nacional e internacional, con un sistema interconectado, para que nuestros clientes puedan realizar la compra de sus pasajes con la garantía, seguridad y comodidad que merecen.</p>
                                            </div>
                                            <div class="col-lg-4">
                                            <img src="../../images/autobus.jpg" class="img-responsive" alt="autobus-img">
                                            </div>
                                        </div>
                                        <div class="card-body text-center">
                                            <form action="crear_autobus.php" method="POST">   
                                                <div class="col-sm-4 col-xs-12">
                                                    <div class=" w3l-form-group input-register-date">
                                                        <label>Nro. de Autobus:</label>
                                                        <div class="group">
                                                            <i class="fa fa-bus" aria-hidden="true"></i>
                                                            <input type="text" class="form-control-dates" placeholder="Nro. bus"  name="nro-bus" required="required"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-xs-12">
                                                    <div class=" w3l-form-group input-register-date">
                                                        <label>Placa:</label>
                                                        <div class="group">
                                                            <i class="fa fa-window-maximize" aria-hidden="true"></i>
                                                            <input type="text" class="form-control-dates" placeholder="Placa"  name="placa-bus" required="required"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-xs-12">
                                                    <div class=" w3l-form-group input-register-date">
                                                        <label>Chofer:</label>
                                                        <div class="group">
                                                            <i class="fa fa-id-card" aria-hidden="true"></i>
                                                            <select name="bus-chofer" class="form-control-dates" id="">
                                                            <option value = "">Seleccionar Chofer</option>
                                                                <?php
                                                                $consulta="SELECT *  FROM chofer;";
                                                                $tabla=mysqli_query($link, $consulta);
                                                                $contador = 1;
                                                                while($registro=mysqli_fetch_array($tabla))
                                                                {
                                                                    echo "<option value=\"".$registro['nombre']."\" >".$registro['nombre'];
                                                                    $contador = $contador + 1;
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 btn-admin">
                                                <Input id="elSubmit" class="btn btn-orange mt-5 col-xs-12 col-sm-2" name= "registrar-bus" Type = "submit" value = "Registrar Autobus">                   
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                        
                            </div>


                            <!-- <script>
                                var elDate = document.getElementById('fecha');
                                var elForm = document.getElementById('elForm');
                                var elSubmit = document.getElementById('elSubmit');

                                function sinDomingos(){
                                    var day = new Date(elDate.value ).getUTCDay();
                                    // Días 0-6, 0 es Domingo 6 es Sábado
                                    elDate.setCustomValidity(''); // limpiarlo para evitar pisar el fecha inválida
                                    if( day == 0 ){
                                    elDate.setCustomValidity('Domingos no disponibles, por favor seleccione otro día');
                                    } else {
                                    elDate.setCustomValidity('');
                                    }
                                    if(!elForm.checkValidity()) {elSubmit.click()};
                                }

                                function obtenerfechafinf1(){
                                    sinDomingos();
                                }
                            </script> -->
                        </div>
                        <!-- /.box-body -->       
                    </div>
                    <!--row-->
                </div>
                <!-- /.col (right) -->
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- /.box-body -->               
    <!-- /page content -->
    <!-- footer content -->
    <footer>
                                <div>

                                </div>
    </footer>

    <?php include("./scripts.php") ?>
</body>

</html>