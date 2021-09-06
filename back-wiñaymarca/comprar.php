<?php
session_start();
include("base_datos/db.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
<script language="javascript" type="text/javascript" src="js/util.js"></script>
<link rel="stylesheet" type="text/css" href="styles/estilo.css" />

<title>Wiñaymarca</title>
</head>
<body>

<?php
if(isset($_GET['id']) && isset($_GET['as'])){

	//Cargamos los valores de los datos.
	$id_boleto=base64_decode($_GET['id']);
	$asientos=base64_decode($_GET['as']);
	$asientos=explode(",",$asientos);
	//Creamos la consulta SQL para los datos de la corrida.
	$consulta="SELECT * FROM `itinerarios` WHERE `id` = $id_boleto";
	$tabla = mysqli_query($link, $consulta);

?>

<div id="Cuerpo"  align="center">
	<form id="boleto" method="post" action="">
	<table id="opciones">
		<tr>
			<td colspan="4">
				<label><?php echo "Comprar boletos";?></label>
			</td>
		</tr>
		<tr>
			<td>
				<label><?php echo "Fecha";?></label>
			</td>
			<td>
				<label><?php echo "Hora";?></label>
			</td>
			<td>
				<label><?php echo "Origen";?></label>
			</td>
			<td>
				<label><?php echo "Destino";?></label>
			</td>
		</tr>
		<tr>
			<?php 
			while ($registro = mysqli_fetch_array($tabla))
			{
			?>
			<td>
				<?php echo $registro['fecha_salida'];?>
			</td>
			<td>
				<?php echo $registro['hora_salida'];?>
			</td> 
			<td>
				<?php echo $registro['ciudad_salida'];?>
			</td>
			<td>
				<?php echo $registro['ciudad_llegada'];?>
			</td>
			<?php
			}
			//liberamos la tabla del bloqueo..
			mysqli_free_result($tabla); 
			?>
		</tr>
		<tr>
			<td colspan="2">
				<label><?php echo "Asientos";?></label>
			</td>
			<td colspan="2">
				<label><?php echo "Nombre del pasajero";?></label>
			</td>
		</tr>
				<?php
				//Ordenamos el array.
				sort($asientos);
				for($i=0;$i<count($asientos);$i++)
				{
					$labelAsiento=substr($asientos[$i],-2);
					echo "<tr>
							<td colspan=\"1\">
								<input type=\"hidden\" id=\"asiento$i\" value=\"$labelAsiento\"/ >
								<label>$labelAsiento</label>
							</td>
							<td colspan=\"3\">
								<input type=\"text\" id=\"nombre$i\" class=\"boleto\" value=\"\" maxlength=\"65\" onfocus=\"Util.focusCampo(this);\" onblur=\"Util.blurCampo(this);\" / >
							</td>
						   </tr>";
				}
				?>
		</table>
		<!--terminan las opciones-->
</div>
</div>
	<table id="continuar" align="center">
		<tr>
			<td>
				<img src="images/regresar.gif" onclick="Util.Regresar();" class="links" />
			</td>
			<td>
				&nbsp;
			</td>
			<td>
				&nbsp;
			</td>
			<td>
				<img src="images/continuar.gif" id="continuar" onclick="Util.realizarCompra();" class="links"/>
			</td>
		</tr>
	</table>
	<input type="hidden" id="id_boleto" value="<?php echo $id_boleto; ?>" />
	</form>
</div>

</body>
</html>

<!-- Fin del IF -->
<?php
}
?>
