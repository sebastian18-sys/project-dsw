<?php
session_start();
include("base_datos/db.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<script language="javascript" type="text/javascript" src="js/util.js"></script>
<script language="javascript" type="text/javascript" src='js/calendario.js'></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<title>Wiñaymarca</title>
</head>
<body onload="Util.fechaHoy();">


<div id = "Cuerpo" align="center">
	<form id="busqueda" method="post" action="">
	<table id="opciones">
		
		<tr>
			<td>
				<span class="label label-warning"><i class="icon-road icon-white"></i> <?php echo  "Origen";?></span>
			</td>
		</tr>
		<tr>
			<td>
				<?php
					//Creamos la consulta SQL
					$tabla = mysqli_query($link, "select distinct ciudad from agencias order by ciudad"); 
					
				?>
				<select id="origen">
				<option value="-1" selected="selected"><?php echo "Origen";?></option>
				<?php
				//recorremos la tabla en busca de los registros
					while ($registro = mysqli_fetch_array($tabla)) { 
				?>
				<option value="<?php echo $registro[0]; //a�adimos el registro ?>"><?php echo $registro[0]; //a�adimos el registro?></option>
				<?php
					} 
					//liberamos la tabla del bloqueo..
					mysqli_free_result($tabla);
				?>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<span class="label label-warning"><i class="icon-road icon-white"></i> <?php echo "Destino";?></span>
			</td>
		</tr>
		<tr>
			<td>
				<?php
					//Creamos la consulta SQL
					$tabla = mysqli_query($link, "select distinct ciudad from agencias order by ciudad"); 
				?>
				<select id="destino">
				<option value="-1" selected="selected"><?php echo "Destino";?></option>
				<?php
				//recorremos los registros
					while ($registro = mysqli_fetch_array($tabla)) { 
				?>
				<option value="<?php echo $registro[0]; //a�adimos el valor?>"><?php echo $registro[0]; //a�adimos el valor?></option>
				<?php
					} 
					//liberamos la tabla...
					mysqli_free_result($tabla);
				?>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<input id="fecha" type="text" maxlength="10" readonly="readonly"> 
                
				<a href="javascript:NewCal('fecha','ddmmyyyy')">
				<h1>click</h1>
                </a>
			</td>
		</tr>
		<tr>
			<td>
				<hr class="separador"/>
				<input type="hidden" id="fechahoy" value=""/>
			</td>
		</tr>
		<tr align="right">
			<td>
				<a onclick="Util.Buscar();" class="btn btn-warning" alt="�Buscar!"><i class=" icon-search icon-white"></i> Buscar</a>
			</td>
		</tr>
		<tr>
		</tr>
		</table>
	</form>
</div>

<!--jquery-->
<script src="//code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--jquery-->
<!--<?php echo date('Y-d-m, H:i:s'); ?> -->
</body>
</html>			
