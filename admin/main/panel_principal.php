<?php
include("./header.php");
session_start();
// error_reporting(0);

include("../../base_datos/db.php");
?>

<!-- <!DOCTYPE html> -->
<!-- <html lang="es"> -->

<!-- <head> -->
	<!-- <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="stylesheet" href="../../css/bootstrap.min.css" />
	<link rel="stylesheet" href="../../css/font-awesome.min.css" />
	<link rel="stylesheet" href="../../css/custom.css" />
	<link rel="stylesheet" type="text/css" href="styles/admin.css" />
	<link rel="stylesheet" type="text/css" href="styles/estilo.css" /> -->
	<!-- <title>Admin Wiñaymarca</title> -->
<!-- </head> -->

<body class="nav-md">
	<div id="contenido">
	<div class="container body">
		<div class="main_container">

			<?php include "main_sidebar.php"; ?>
			<!-- top navigation -->
			<?php include "top_nav.php"; ?>
			<!-- /top navigation -->

			<!-- <style>
				label {

					color: black;
				}

				li {
					color: white;
				}

				ul {
					color: white;
				}

				#buscar {
					text-align: right;
				}
			</style> -->

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="x-panel"></div>
					</div>
					<!--end of modal-dialog-->
				</div>
				<!--end of modal-->

				<div class="box-body">
					<!-- Date range -->
				</div>

				<div class="box-header">
					<!-- TITULO -->
					<h3 class="box-title"> Bienvenido <?php echo $_SESSION['user'] ?> </h3>
				</div>
				<!-- /.box-header -->

				<div class="box-body">
					<!-- TITULO -->
					<div class="box-header with-border">
						<h3 class="box-title"></h3>
					</div><!-- /.box-header -->

					<!-- CUERPO 1 -->
					<div class="box-body">
						<div class="row">

								<!-- PRIMER CUADRO -->
								<!-- <div class="col-lg-4 col-sm-6 col-xs-12">
						
									<div class="small-box bg-aqua">
										<div class="inner">
											<i class="fa fa-calendar" aria-hidden="true"></i>
											<h3>RESERVA TU CITA</h3>
											<p>Reserva tu cita web en Medilab</p>
										</div>
										<a href="registrar_cita.php" class="small-box-footer">Reservar ahora <i class="fa fa-arrow-circle-right"></i></a>
									</div>
								</div> -->




								<!-- SEGUNDO CUADRO -->
								<!-- <div class="col-lg-3 col-xs-6"> -->
								<!-- small box -->
								<!-- <div class="small-box bg-black">
                  <div class="inner">
                    <h4> -->
								<?php
								//$num=0;
								// $select = mysqli_query($con, "SELECT * FROM usuario ") or die (mysqli_error($link));
								// $num = mysqli_num_rows($select);
								// echo $num;
								?>
								<!-- </h4> -->
								<!-- <p>usuarios</p>
                  </div>
                  <div class="icon"><img height="80" width="80" src="img/comittee.png">
                    <i class=""></i>
                  </div>
                  <?php echo ($num > 0) ? '<a href="../usuario/usuario.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer"></a>'; ?>
                </div>
              </div> -->




								<!-- TERCER CUADRO -->
								<!-- <div class="col-lg-3 col-xs-6"> -->
								<!-- small box -->
								<!-- <div class="small-box bg-orange">
                  <div class="inner">
                    <h4>
                      <?php
								// $num=1;
								// echo $num;
						?>
                    </h4>
                    <p>Configuracion empresa</p>
                  </div>

                  <div class="icon"><img height="80" width="80" src="img/setting.png">
                    <i class=""></i>
                  </div>
                </div>
              </div> -->

		

							<?php //if ($tipo=="cliente" ) { 
							?>


							<!-- <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-green">
                  <div class="inner">
                    <h4>
                      <?php
						//   $num=0;
						//       $query=mysqli_query($con,"select * from clientes ") or die(mysqli_error());
						//       $i=0;
						//       while($row=mysqli_fetch_array($query)){
						//       $num++;
						//     }
						//   echo $num;
						?>
                    </h4>
                    <p>Cliente</p>
                  </div>

                  <div class="icon"><img height="80" width="80" src="img/planes.png">
                    <i class=""></i>
                  </div>
                  <?php //echo ($num > 0) ? '<a href="../cliente/cliente.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; 
					?>
                </div>
              </div> -->

							<?php //} 
							?>



								<!-- CUARTO CUADRO -->
								<!-- <div class="col-lg-3 col-xs-6"> -->
								<!-- small box -->
								<!-- <div class="small-box bg-red">
                  <div class="inner">
                   <h4> -->
								<?php

								//$num=1;
								//     $query=mysqli_query($con,"select * from historial ")or die(mysqli_error());
								//     $i=0;
								//     while($row=mysqli_fetch_array($query)){
								//     $num++;
								//   }
								//echo $num;
								?>
								<!-- </h4>
                    <p>Historial </p>
                  </div>

                  <div class="icon"><img height="80" width="80" src="img/fair.png">
                    <i class=""></i>
                  </div>
                  <?php echo ($num > 0) ? '<a href="../cliente/cliente_historial.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer"></a>'; ?>
                </div>
              </div> -->
			
							<!-- </div> -->
							<!--row-->

						</div>
						<!-- /.col (right) -->


						<!-- CUERPO 2 -->
						<!-- <div class="box-body">
            <div class="row">
  
              <div class="col-lg-3 col-xs-6"> -->
						<!-- small box -->
						<!-- <div class="small-box bg-aqua">
                  <div class="inner">
                    <h4> -->
						<?php
						//$num=0;
						//     $query=mysqli_query($con,"select * from producto where estado='a'")or die(mysqli_error());
						//     $i=0;
						//     while($row=mysqli_fetch_array($query)){
						//     $num++;
						//   }
						// echo $num;
						?>
						<!-- </h4> -->
						<!-- <p>Productos</p>
                  </div>
                  <div class="icon"><img height="80" width="80" src="img/productos.png">
                    <i class=""></i>
                  </div>
                  <?php //echo ($num > 0) ? '<a href="../producto/producto.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
                </div>
              </div>
            </div> -->
						<!-- </div> -->

					</div>
					<!-- /.box-body -->

				</div>
				<!-- /.col -->

			</div>
			<!-- /.row -->

		</div>
		<!-- /.box-body -->
		<!-- <br/>
	<br/>
	<div id="altas" style="display:none;">
		<label id="altachofer" style="cursor:pointer;">Chofer</label>
		<label id="altaautobus" style="cursor:pointer;">Autobus</label>
		<label id="altacorridas" style="cursor:pointer;">Corridas</label>
		<label id="altaterminal" style="cursor:pointer;">Terminal</label>
		<label id="altaboleto" style="cursor:pointer;">Boleto</label>
	</div>
	<div id="consultas" style="display:none;">
		<label id="altachofer" style="cursor:pointer;">Chofer</label>
		<label id="altaautobus" style="cursor:pointer;">Autobus</label>
		<label id="altaboletos" style="cursor:pointer;">Boletos</label>
		<label id="altaCorridas" style="cursor:pointer;">Corridas</label>
	</div> -->



		<!--Inicia Form de alta chofer-->
		<!-- <div id="dac" style="display:none;border: 1px dotted; width:300px; border-color:#FF8000;">
		<form action="admin/crear_chofer.php" method="POST">
			<table>
				<tr>
					<td colspan="2">
						Nombre: <br />
						<input type="text" name="nomchofer" >  
					</td>
				</tr>
				<tr>
					<td>
						Sexo: <br />
						<select name="sexchofer">
							<option value="M" />Masculino
							<option value="M"></option>
							<option value="F"></option>
						</select>
					</td>
					<td>
						Edad: <br />
						<select name="edadchofer">
							<?php
							// for($i=18;$i<=50;$i++)
							// {
							// 	echo "<option value=\"$i\" />$i";
							// }
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						Numero Telefonico: <br />
						<input type="text" name="numchofer" > 
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" >
						<input type="reset" id="x" >
					</td>
				</tr>
			</table>
		</form>
	</div>  -->



		<!--Inicia Form de alta autobus-->
		<!-- <div id="daa" style="display:none;border: 1px dotted; width:300px; border-color:#FF8000;">
		<form action="admin/crear_bus.php" method="POST">
			<table>
				<tr>
					<td colspan="2">
						No. de autobus: <br />
						<input type="text" name="numautobus" >  
					</td>
				</tr>
				<tr>
					<td colspan="2">
						No. de asientos: <br />
						<input type="text" name="numasientos" > 
					</td>
				</tr>
				<tr>
					<td colspan="2">
						Modelo: <br />
						<input type="text" name="modautobus" > 
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						Placas: <br />
						<input type="text" name="numserie" > 
					</td>
				</tr>
				<tr>
					<td colspan="2">
						Chofer: <br />
						<select name="choferautobus">
						<?php
						// $consulta="SELECT id_chofer as id,nombre FROM chofer;";
						// $tabla=mysqli_query($link, $consulta);
						// while($registro=mysqli_fetch_array($tabla))
						// {
						// 	echo "<option value=\"".$registro['id']."\" >".$registro['nombre'];
						// }
						?>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" >
						<input type="reset" id="y">
					</td>
				</tr>
			</table>
		</form>
	</div> -->


		<!--Inicia Form de alta corridas-->
		<!-- <div id="daco" style="display:none;border: 1px dotted; width:300px; border-color:#FF8000;">
		<form action="admin/crear_corrida.php" method="POST">
			<table>
				<tr>
					<td colspan="2">
						Ciudad: <br />
						<input type="text" name="ciudad" >  
					</td>
				</tr>
				<tr>
					<td colspan="2">
						Hora de Salida: (hh:mm:ss)<br />
						<input type="text" name="hora" maxlength="8" > 
					</td>
				</tr>
				<tr>
					<td colspan="2">
						Fecha:<br />
						<input name="fecha" type="text" maxlength="10"> 
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit">
						<input type="reset" id="y" >
					</td>
				</tr>
			</table>
		</form>
	</div> -->


		<!--Inicia Form de alta terminal-->
		<!-- <div id="dat" style="display:none;border: 1px dotted; width:300px; border-color:#FF8000;">
		<form action="admin/crear_terminal.php" method="POST">
			<table>
				<tr>
					<td colspan="2">
						Nombre de la terminal: <br />
						<input type="text" name="terminal" >  
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" >
						<input type="reset" id="y" >
					</td>
				</tr>
			</table>
		</form>
	</div> -->

		<!--Inicia Form de crear el boleto-->
		<!-- <div id="dab" style="display:none;border: 1px dotted; width:300px; border-color:#FF8000;">
		<form action="admin/crear_itinerario.php" method="POST">
			<table>
				<tr>
					<td colspan="2">
						Hora de salida: <br />
						<input type="text" name="hora_salida" >  
					</td>
				</tr>
				<tr>
					<td colspan="2">
						Hora de llegada: <br />
						<input type="text" name="hora_llegada" >  
					</td>
				</tr>
				<tr>
					<td colspan="2">
						Autobus: <br />
						<input type="text" name="bus" >  
					</td>
				</tr>
				<tr>
					<td colspan="2">
						Terminal de salida<br />
						<input type="text" name="terminal_salida" >  
					</td>
				</tr>
				<tr>
					<td colspan="2">
						Ciudad de salida<br />
						<input type="text" name="ciudad_salida" >  
					</td>
				</tr>
				<tr>
					<td colspan="2">
						Fecha de salida: <br />
						<input type="text" name="fecha_salida" >  
					</td>
				</tr>
				<tr>
					<td colspan="2">
						Terminal de llegada: <br />
						<input type="text" name="terminal_llegada" >  
					</td>
				</tr>
				<tr>
					<td colspan="2">
						Ciudad de llegada: <br />
						<input type="text" name="ciudad_llegada" >  
					</td>
				</tr>
				<tr>
					<td colspan="2">
						Fecha de llegada: <br />
						<input type="text" name="fecha_llegada" >  
					</td>
				</tr>
				<tr>
					<td colspan="2">
						Precio: <br />
						<input type="text" name="precio" >  
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit">
						<input type="reset">
					</td>
				</tr>
			</table>
		</form>
	</div> -->

		<!--Inicia el div de los mensajitos Ajax.... �_�-->
		<!-- <span id="msgbox" style="display:none"></span> -->

	</div>
	<footer>

	</footer>
	<!-- <script src="../../js/jquery.js"></script>
	<script src="../../js/jquery.min.js"></script>
	
	<script src="../../js/custom.min.js"></script>
	<script src="../../js/bootstrap.js"></script> -->
							<!-- <script src="../../js/custom.js"></script> -->
							<!-- <script src="../../js/jquery.js"></script>
	<script src="../../js/jquery.min.js"></script>
	
	<script src="../../js/custom.min.js"></script>
	<script src="../../js/bootstrap.js"></script> -->
	<?php include("./scripts.php") ?>
</body>

</html>
