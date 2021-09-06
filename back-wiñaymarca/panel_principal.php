<?php
session_start();
include("base_datos/db.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>

<!-- BOOTSTRAP 4 FECHAS-->

<link rel="stylesheet" type="text/css" href="styles/admin.css" />
<link rel="stylesheet" type="text/css" href="styles/estilo.css" />
<script language="javascript" type="text/javascript" src="js/calendario.js"></script>
<script src="js/jquery.js" type="text/javascript" language="javascript"></script>
<title>Admin Wiñaymarca</title>


<script language="javascript">
	$(document).ready(function(){
			//Menu altas callback..
			$("#menuAltas").click(function(){
				$("#altas").show("slow");
				$("#bajas").fadeOut("slow");
				$("#consultas").fadeOut("slow");
			});
			//Menu consultas callback..
			$("#menuConsultas").click(function(){
				$("#altas").fadeOut("slow");
				$("#bajas").fadeOut("slow");
				$("#consultas").show("slow");
			});
			//---------Manejadores para los menus de abajo -----------//
			$("#altachofer").click(function()
			{
					$("#dac").show("slow");
					$("#daa").hide("slow");
					
					$("#agencia").hide("slow")
					
					$("#dab").hide("slow");
			});
			$("#altaautobus").click(function()
			{
					$("#daa").show("slow");
					$("#dac").hide("slow");
					
					$("#agencia").hide("slow")
					
					$("#dab").hide("slow");
			});
			$("#altacorridas").click(function()
			{
					$("#daa").hide("slow");
					$("#dac").hide("slow");
					
					$("#agencia").hide("slow")
					
					$("#dab").hide("slow");
			});
			$("#altaagencias").click(function()
			{
					$("#daa").hide("slow");
					$("#dac").hide("slow");
					
					$("#agencia").show("slow")
					
					$("#dab").hide("slow");
			});
			$("#altaterminal").click(function()
			{
					$("#daa").hide("slow");
					$("#dac").hide("slow");
					
					$("#agencia").hide("slow")
					
					$("#dab").hide("slow");
					
			});
			$("#altaboleto").click(function()
			{
					$("#daa").hide("slow");
					$("#dac").hide("slow");
					
					$("#agencia").hide("slow")
					
					$("#dab").show("slow");
					
			});					
	});


</script>
</head>
<body>

<div id="nombreAdmin" align="center">
	<label> Bienvenido: <?php echo $_SESSION['uname'];?></label>

	<label id="menuAltas" style="cursor:pointer;"> Operaciones </label>
	<label id="menuConsultas" style="cursor:pointer;"> Consultas </label>
	<label><a href="secure.php?salir">Salir</a></label>
</div>
<div id="contenido" align="center">
	<br/>
	<br/>
	<div id="altas" style="display:none;">
		<label id="altachofer" style="cursor:pointer;">Chofer</label>
		<label id="altaautobus" style="cursor:pointer;">Autobus</label>
		<label id="altaagencias" style="cursor:pointer;">Agencias</label>
		<label id="altaboleto" style="cursor:pointer;">Boleto</label>
	</div>
	<div id="consultas" style="display:none;">
		<label id="altachofer" style="cursor:pointer;">Chofer</label>
		<label id="altaautobus" style="cursor:pointer;">Autobus</label>
		<label id="altaboletos" style="cursor:pointer;">Boletos</label>
		<label id="altaCorridas" style="cursor:pointer;">Corridas</label>
	</div>
	<!--Inicia Form de alta chofer-->
	<div id="dac" style="display:none;border: 1px dotted; width:300px; border-color:#FF8000;">
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
							<option value="F" />Femenino
						</select>
					</td>
					<td>
						Edad: <br />
						<select name="edadchofer">
							<?php 
							for($i=18;$i<=50;$i++)
							{
								echo "<option value=\"$i\" />$i";
							}
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
	</div>
	<!--Inicia Form de alta autobus-->
	<div id="daa" style="display:none;border: 1px dotted; width:300px; border-color:#FF8000;">
		<form action="admin/crear_bus.php" method="POST">
			<table>
				<tr>
					<td colspan="2">
						Nro. de autobus: <br />
						<input type="text" name="numautobus" placeholder="NXX">
						 
					</td>
				</tr>				
				
				<tr>
					<td colspan="2">
						Placa: <br />
						<input type="text" name="numserie" placeholder="XXXXXX"> 
					</td>
				</tr>
				<tr>
					<td colspan="2">
						Chofer: <br />
						<select name="choferautobus">
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
	</div>



	<!--Inicia Form de alta AGENCIAS-->
	<div id="agencia" style="display:none;border: 1px dotted; width:300px; border-color:#FF8000;">
		<form action="admin/crear_agencia.php" method="POST">
			<table>
				<tr>
					<td colspan="2">
						Ciudad: <br />
						<input type="text" name="ciudad" >  
					</td>
				</tr>
				<tr>
					<td colspan="2">
						Terminal: <br />
						<input type="text" name="terminal"> 
					</td>
				</tr>
					<td colspan="2">
						<input type="submit">
						<input type="reset" id="y" >
					</td>
				</tr>
			</table>
		</form>
	</div>


	<!--Inicia Form de alta terminal-->
	<div id="dat" style="display:none;border: 1px dotted; width:300px; border-color:#FF8000;">
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
	</div>

	<!--Inicia Form de crear el boleto-->
	<div id="dab" style="display:none;border: 1px dotted; width:300px; border-color:#FF8000;">
		<form action="admin/crear_itinerario.php" method="POST">
			
				
						<div class="form-group">
						Hora de salida: 
						<input type="text" name="hora_salida" placeholder = "HH:MM:SS">  
						</div>


						<div class="form-group">
						Hora de llegada: 
						<input type="text" name="hora_llegada" placeholder = "HH:MM:SS">
						</div>  
			
						<div class="form-group">
						Autobus: 
						<select name="bus">
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

						<hr>
						<div class="form-group">
							Ciudad de Origen:
							<select id = "id_ciudad" class="form-control"  name="ciudad_salida" required = "required">
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


						<div class = "form-group">
							Terminal de Origen
							<select  id = "id_terminal" name = "terminal_salida"  class = "form-control" disabled = "disabled"  required = "required">
								<option value = "">Seleccionar terminal</option>
							</select>
						</div>

						<div class="form-group">
						Fecha Salida
						<input type="date" name="fecha_salida" >
						</div>		
								<hr>

						<!-- Destino -->
						<div class="form-group">
							Ciudad Destino:
							<select id = "id_ciudad2" class="form-control"  name="ciudad_llegada" required = "required">
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


						<div class = "form-group">
							Terminal Destino
							<select  id = "id_terminal2" name = "terminal_llegada"  class = "form-control" disabled = "disabled"  required = "required">
								<option value = "">Seleccionar terminal</option>
							</select>
						</div>	
						
						<div class="form-group">
						Fecha de llegada: 
						<input type="date" name="fecha_llegada"> 
						</div>
						
						<hr>			

						<div class="form-group">			
						Precio: 
						<input type="text" name="precio" >  
						</div>
						
						
						<input type="submit">
						<input type="reset">

		</form>
	</div>

<!--Inicia el div de los mensajitos Ajax.... �_�-->
<span id="msgbox" style="display:none"></span>

</div>





</body>
<script src = "js/jquery-3.1.1.js"></script>
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