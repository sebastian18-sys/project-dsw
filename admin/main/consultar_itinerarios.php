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
                    <h3 class="box-title text-center"><b>Itinerarios</b></h3>
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
                                                
                                                <th style="text-align:center">Origen</th>
                                                <th style="text-align:center">Hora salida</th>
                                                <th style="text-align:center">Fecha</th>
                                                <th style="text-align:center">Destino</th>
                                                <th style="text-align:center">Hora llegada</th>
                                                <th style="text-align:center">Precio</th>
                                                <th style="text-align:center">Acciones</th>
                                                <!-- <th class="text-center">Asientos disponibles</th> -->
                                            </tr>
                                        </thead>

                                        <tbody class="table-search-content">
                                            

                                            
                                            <?php

                                            $query = "SELECT * from itinerarios";
                                            $result_tasks = mysqli_query($link, $query); 
                                            while($row = mysqli_fetch_assoc($result_tasks)) { 

                                            ?>
                                            <tr>                                                
                                                <td><?php echo $row['ciudad_salida'] ?></td>
                                                <td><?php echo $row['hora_salida'] ?></td>
                                                <td><?php echo $row['fecha_salida'] ?></td>
                                                <td><?php echo $row['ciudad_llegada'] ?></td>
                                                <td><?php echo $row['hora_llegada'] ?></td>
                                                <td><?php echo "S/. " . $row['precio'] ?></td>
                                                <td><?php echo "Acciones" ?></td>
                                                
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