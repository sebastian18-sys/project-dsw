<?php
session_start();
include("base_datos/db.php");
?>


<!DOCTYPE html>
<html lang="es">
<head>
<script language="javascript" type="text/javascript" src="js/util.js"></script>
<link rel="stylesheet" type="text/css" href="styles/estilo.css" />
<link rel="shortcut icon" href="images/favicon.ico"/> 
<meta http-equiv="Content-Type" content="text/html; iso-8859-7">

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-32712866-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<title>Wiñaymarca f</title>
</head>

<body onload="Util.scrlsts();">

<?php
if(isset($_GET['or']) && isset($_GET['de']) && isset($_GET['fe']) && isset($_GET['fh']))
{
	//Cargamos los valores de los datos.
	$diferencia=2;
	$origen=base64_decode($_GET['or']);
	$destino=base64_decode($_GET['de']);
	$fecha=base64_decode($_GET['fe']);
	$fechaHoy=base64_decode($_GET['fh']);
	$fechaHoy=explode("-",$fechaHoy);
	$fecha=explode("-",$fecha);
	$fechaHoy = date("Y-m-d",mktime(0,0,0,$fechaHoy[1],$fechaHoy[0],$fechaHoy[2]));
	$fecha = date("Y-m-d",mktime(0,0,0,$fecha[1],$fecha[0],$fecha[2]));
	$hora = getdate(time());
	$hora=(($hora["hours"]==0?12:$hora["hours"])-$diferencia). ":" . $hora["minutes"] . ":" . $hora["seconds"] ; 
	//Creamos la consulta SQL
	if($fecha==$fechaHoy)
		$tabla = mysqli_query($link, 
		"select b.id,b.hora_salida,b.precio,b.hora_llegada from itinerarios b where b.ciudad_salida like('$origen') and b.ciudad_llegada like('$destino') and b.fecha_salida like('$fecha') and b.hora_salida >= '$hora'");
	else if($fecha>$fechaHoy)
		$tabla = mysqli_query($link, 
		"select b.id,b.hora_salida,b.precio,b.hora_llegada from itinerarios b where b.ciudad_salida like('$origen') and b.ciudad_llegada like('$destino') and b.fecha_salida like('$fecha')");
	else
	{
?>
	<div class="error"><?php echo $excepcion;?></div><br />
	<i class="copy">&reg; 2009 -  <?php echo date('Y'); ?> Autobuses at-sqleros.herokuapp.com</i>
	<div id="adsenseHeader" align="center">

</div>

	</body>
	</html>

<?php
	return 0;
	}
?>

<div id="Cuerpo"  align="center">
	<form id="busqueda" method="post" action="">
	<table>
		<tr>
			<h1>Viajes disponibles</h1>
		</tr>
		<tr>
			<td>
				<label><?php echo "Ida";?></label>
			</td>
			<td>
				<label><?php echo "origen";?></label>
			</td>
			<td>
				<label><?php echo "Destino";?></label>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $fecha; ?>
			</td>
			<td>
				<?php echo $origen; ?>
			</td>
			<td>
				<?php echo $destino; ?>
			</td>
		</tr>
		<tr>
			<td>
				<label><?php echo "Horario";?></label>
			</td>
			<td>
				<label><?php echo "Tarifa";?></label>
			</td>
			<td>
				<label><?php echo "Tiempo del viaje";?></label>
			</td>
		</tr>
		<?php
			$fila=1;
			while ($registro = mysqli_fetch_array($tabla)) { 
		?>
		<tr class="color<?php if($fila==1){echo $fila;$fila++;}else if($fila==2){echo $fila;$fila=1;}?>" onclick="">
			<td>
				<input 
				type="radio" 
				
				name="id_corrida"
				value="<?php echo "$registro[0]"; ?>" 
				onclick=""/>
				<label ><?php echo "$registro[1]"; ?></label>
			</td>
			<td>
				<label ><?php echo "$registro[2]"; ?></label>
			</td>
			<td>
				<label ><?php echo "$registro[3]"; ?></label>
			</td>
		</tr>
		<?php
			}
		?>
		<tr>
			<td>
				<img src="images/regresar.gif" onclick="Util.Regresar();" class="links" />
			</td>
			<td>
				&nbsp;
			</td>
			<td>
				<img src="images/continuar.gif" id="continuar" onclick="Util.seleccionar();" class="links"/>
			</td>
		</tr>
	</table>
	</form>
</div>
<?php
}else{
?>
<div class="error"><?php echo "error"?></div><br />
<?php
}
?>

</div>
</body>
</html>