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
                    <h3 class="box-title text-center"><b>Registrar Itinerario</b></h3>
                </div>
                <!-- /.box-header -->
                
                <div class="box-body">
                    <!-- /.box-header -->
                    <div class="box-body">                                 
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-shadow">
                                        <div class="text-center">
                                            <p class="text-center">En este módulo, usted puede registrar los itinerarios que maneja la Empresa de Transportes Wiñaymarca.</p>
                                        </div>
                                        <div class="card-body text-center">
                                            <form action="crear_itinerario.php" method="POST">   
                                                <div class="col-sm-3 col-xs-12">
                                                    <div class=" w3l-form-group input-register-date">
                                                        <label>Hora de Salida:</label>
                                                        <div class="group">
                                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                            <input type="time" id="appt-time" step="2" class="form-control-dates" name="hour-out" required="required"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-xs-12">
                                                    <div class=" w3l-form-group input-register-date">
                                                        <label>Hora de Llegada:</label>
                                                        <div class="group">
                                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                            <input type="time" id="appt-time" step="2" class="form-control-dates" name="hour-in" required="required"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-xs-12">
                                                    <div class=" w3l-form-group input-register-date">
                                                        <label>Autobus:</label>
                                                        <div class="group">
                                                            <i class="fa fa-bus" aria-hidden="true"></i>
                                                            <select name="bus-itinerario" class="form-control-dates" id="">
                                                                <option value = "">Seleccionar bus</option>
                                                                    <?php
                                                                    $consulta="SELECT id_autobus  FROM autobus;";
                                                                    $tabla=mysqli_query($link, $consulta);
                                                                    
                                                                    $contador = 1;
                                                                    while($registro=mysqli_fetch_array($tabla))
                                                                    {
                                                                        echo "<option value=\"".$registro['id_autobus']."\" >".$registro['id_autobus'];
                                                                        $contador = $contador + 1;
                                                                    }
                                                                    ?> 
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>                                                
                                                <div class="col-sm-3 col-xs-12">
                                                    <div class=" w3l-form-group input-register-date">
                                                        <label>Precio:</label>
                                                        <div class="group">
                                                            <i class="fa fa-money" aria-hidden="true"></i>
                                                            <input type="text" class="form-control-dates" placeholder="Precio"  name="price" required="required"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-xs-12">
                                                    <div class=" w3l-form-group input-register-date">
                                                        <label>Ciudad de Origen:</label>
                                                        <div class="group">
                                                            <i class="fa fa-building-o" aria-hidden="true"></i>
                                                            <select id="id_ciudad" name="bus-city-origin" class="form-control-dates">
                                                                <option value = "">Seleccionar Origen</option>
                                                                    <?php
                                                                    $consulta="SELECT DISTINCT ciudad FROM agencias;";
                                                                    $tabla=mysqli_query($link, $consulta);
                                                                    $contador = 1;
                                                                    while($registro=mysqli_fetch_array($tabla))
                                                                    {?>
                                                                        <option value = "<?php echo $registro['ciudad']?>"><?php echo utf8_encode($registro['ciudad'])?></option>
                                                                        
                                                                        <?php	
                                                                        $contador = $contador+1;
                                                                    }
                                                                    ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-xs-12">
                                                    <div class=" w3l-form-group input-register-date">
                                                        <label>Terminal de Origen:</label>
                                                        <div class="group">
                                                            <i class="fa fa-building-o" aria-hidden="true"></i>
                                                            <select id = "id_terminal" name="bus-terminal-origin" class="form-control-dates" disabled = "disabled">
                                                                <option value = "">Seleccionar terminal</option>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-xs-12">
                                                    <div class=" w3l-form-group input-register-date">
                                                        <label>Fecha Salida:</label>
                                                        <div class="group">
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            <input type="date" class="form-control-dates" name="date-out" required="required"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-xs-12">
                                                    <div class=" w3l-form-group input-register-date">
                                                        <label>Ciudad Destino:</label>
                                                        <div class="group">
                                                            <i class="fa fa-building" aria-hidden="true"></i>
                                                            <select id="id_ciudad2" name="bus-city-destiny" class="form-control-dates">
                                                                <option value = "">Seleccionar Destino</option>
                                                                    <?php
                                                                    $consulta="SELECT DISTINCT ciudad FROM agencias;";
                                                                    $tabla=mysqli_query($link, $consulta);

                                                                    $contador = 1;
                                                                    while($registro=mysqli_fetch_array($tabla))
                                                                    {?>
                                                                        <option value = "<?php echo $registro['ciudad']?>"><?php echo utf8_encode($registro['ciudad'])?></option>
                                                                        
                                                                        <?php	
                                                                        $contador = $contador+1;
                                                                    }
                                                                    ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-xs-12">
                                                    <div class=" w3l-form-group input-register-date">
                                                        <label>Terminal Destino:</label>
                                                        <div class="group">
                                                            <i class="fa fa-building" aria-hidden="true"></i>
                                                            <select id = "id_terminal2" name="bus-terminal-destiny" class="form-control-dates" disabled = "disabled">
                                                                <option value = "">Seleccionar terminal</option>                                                     
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-xs-12">
                                                    <div class=" w3l-form-group input-register-date">
                                                        <label>Fecha Llegada:</label>
                                                        <div class="group">
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            <input type="date" class="form-control-dates" name="date-in" required="required"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 btn-admin">
                                                <Input id="elSubmit" class="btn btn-orange mt-5 col-xs-12 col-sm-2" name= "registrar-itinerario" Type = "submit" value = "Registrar Agencia">                   
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                        
                            </div>

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
<script src="../../js/jquery-3.1.1.js"></script>
    <script type = "text/javascript">
        $(document).ready(function(){
            $('#id_ciudad').on('change', function(){
                if($('#id_ciudad').val() == ""){
                    $('#id_terminal').empty();
                    $('<option value = "">Selecciona un municipio</option>').appendTo('#id_terminal');
                    $('#id_terminal').attr('disabled', 'disabled');
                }else{
                    $('#id_terminal').removeAttr('disabled', 'disabled');
                    $('#id_terminal').load('terminal_ida.php?id_ciudad=' + $('#id_ciudad').val());
                }
            });

        });
        $(document).ready(function(){
            $('#id_ciudad2').on('change', function(){
                if($('#id_ciudad2').val() == ""){
                    $('#id_terminal2').empty();
                    $('<option value = "">Selecciona un municipio</option>').appendTo('#id_terminal2');
                    $('#id_terminal2').attr('disabled', 'disabled');
                }else{
                    $('#id_terminal2').removeAttr('disabled', 'disabled');
                    $('#id_terminal2').load('terminal_ida2.php?id_ciudad2=' + $('#id_ciudad2').val());
                }
            });
        });
    </script>

</html>