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
                    <h3 class="box-title text-center"><b>Solicitudes de devoluciones</b></h3>
                </div>
                <!-- /.box-header -->
                
                <div class="box-body">
                    <!-- /.box-header -->
                    <div class="box-body">                                 
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-shadow">                               
                                        
                                        <div class="card-body text-center">
                                            
                                        <!-- INICIO -->
                                        <div class="table-responsive">
                                    <table tabindex="0" class="table table-bordered table-striped">

                                    
                                        <!-- Cabecera de la tabla -->
                                        <thead class="table-search-head">
                                            <tr>
                                                
                                                <th style="text-align:center">Codigo</th>
                                                <th style="text-align:center">Nro. Itinerario</th>
                                                <th style="text-align:center">Asiento</th>
                                                <th style="text-align:center">Fecha</th>
                                                <th style="text-align:center">DNI</th>
                                                <th style="text-align:center">Nombre</th>
                                                <th style="text-align:center">Apellido</th>
                                                <th style="text-align:center">Monto</th>
                                                <th style="text-align:center">Acciones</th>
                                                <!-- <th class="text-center">Asientos disponibles</th> -->
                                            </tr>
                                        </thead>

                                        <tbody class="table-search-content">
                                            

                                            
                                            <?php

                                            $query = "SELECT * from boletos where estado = 0";
                                            $result_tasks = mysqli_query($link, $query); 
                                            while($row = mysqli_fetch_assoc($result_tasks)) { 

                                            ?>
                                            <tr>                                                
                                                <td><?php echo $row['codigo_boleto'] ?></td>
                                                <td><?php echo $row['id_itinerario'] ?></td>
                                                <td><?php echo $row['asiento'] ?></td>
                                                <td><?php echo $row['fecha_venta'] ?></td>
                                                <td><?php echo $row['DNIPasajero'] ?></td>
                                                <td><?php echo $row['nombrePasajero'] ?></td>
                                                <td><?php echo $row['apellidoPasajero'] ?></td>
                                                <td><?php echo "S/. " . $row['precio'] ?></td>
                                                
                                                <td class  ="text-center">
                                                    <a href="aceptar_devoluciones.php?aceptar_devolucion=<?php echo $row['codigo_boleto']?>">
                                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                                    </a>
                                                </td>
                                                
                                            </tr>

                                            <?php } ?>
                                            
                                        </tbody>
                                        
                                </table>

                                        <!-- FIN -->
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

</html>