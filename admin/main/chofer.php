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
                    <h3 class="box-title text-center"><b>Registrar Chofer</b></h3>
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
                                            <h4>Información de los choferes</h4>
                                        </div>
                                        <div class="text-center info-container">
                                            <div class="col-lg-8">
                                            <p class="text-center">En este módulo, usted puede registrar a los choferes de la Empresa de Transportes Wiñaymarca. <br>Contamos con un staff de choferes calificados y con gran experiencia,los cuales son los responsables<br>de convertir su viaje en una experiencia memorable, brindándole seguridad hasta llegar a su destino.</p>
                                            </div>
                                            <div class="col-lg-4">
                                            <img src="../../images/chofer.jpg" class="img-responsive" alt="chofer-img">
                                            </div>
                                        </div>
                                        <div class="card-body text-center">
                                            <form action="crear_chofer.php" method="POST">   
                                                <div class="col-sm-6 col-xs-12">
                                                    <div class=" w3l-form-group input-register-date">
                                                        <label>Nombres:</label>
                                                        <div class="group">
                                                            <i class="fa fa-user" aria-hidden="true"></i>
                                                            <input type="text" class="form-control-dates" placeholder="Nombres"  name="nombre-chofer" required="required"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xs-12">
                                                    <div class=" w3l-form-group input-register-date">
                                                        <label>Sexo:</label>
                                                        <div class="group">
                                                            <i class="fa fa-user" aria-hidden="true"></i>
                                                            <select name="sexo-chofer" class="form-control-dates" id="">
                                                                <option value="">Masculino</option>
                                                                <option value="">Femenino</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xs-12">
                                                    <div class=" w3l-form-group input-register-date">
                                                        <label>Edad:</label>
                                                        <div class="group">
                                                            <i class="fa fa-user" aria-hidden="true"></i>
                                                            <select name="edad-chofer" class="form-control-dates" id="">
                                                                <?php 
                                                                for($i=18;$i<=65;$i++)
                                                                {
                                                                    echo "<option value=\"$i\" />$i";
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xs-12">
                                                    <div class=" w3l-form-group input-register-date">
                                                        <label>Teléfono:</label>
                                                        <div class="group">
                                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                                            <input type="text" class="form-control-dates" placeholder="Teléfono"  name="telefono-chofer" required="required"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 btn-admin">
                                                <Input id="elSubmit" class="btn btn-orange mt-5 col-xs-12 col-sm-2" name= "registrar-chofer" Type = "submit" value = "Registrar Chofer">                   
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