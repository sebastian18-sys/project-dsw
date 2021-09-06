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

<title>Wiñaymarca</title>
</head>


<body onload="Util.cargar();">

<?php
if(isset($_GET['id']))
{
	//Cargamos los valores de los datos.
	$id_boleto=base64_decode($_GET['id']);
	//Creamos un arreglo para ver los asientos totales y los que todavia estan disponibles.
	$asientos=array(
	"fila1"=>array(
	"as04"=>"vacio",
	"as08"=>"vacio",
	"as12"=>"vacio",
	"as16"=>"vacio",
	"as20"=>"vacio",
	"as24"=>"vacio",
	"as28"=>"vacio",
	"as32"=>"vacio",
	"as36"=>"vacio",
	),
	"fila2"=>array(
	"as03"=>"vacio",
	"as07"=>"vacio",
	"as11"=>"vacio",
	"as15"=>"vacio",
	"as19"=>"vacio",
	"as23"=>"vacio",
	"as27"=>"vacio",
	"as31"=>"vacio",
	"as35"=>"vacio",
	),
	"fila3"=>array(
	"as02"=>"vacio",
	"as06"=>"vacio",
	"as10"=>"vacio",
	"as14"=>"vacio",
	"as18"=>"vacio",
	"as22"=>"vacio",
	"as26"=>"vacio",
	"as30"=>"vacio",
	"as34"=>"vacio",
	),
	"fila4"=>array(
	"as01"=>"vacio",
	"as05"=>"vacio",
	"as09"=>"vacio",
	"as13"=>"vacio",
	"as17"=>"vacio",
	"as21"=>"vacio",
	"as25"=>"vacio",
	"as29"=>"vacio",
	"as33"=>"vacio",
	)
	);


	//Creamos la consulta SQL para los datos de las corridas y los asientos desocupados.
	$consulta="select id_boleto,asiento from boletos where id_boleto=$id_boleto";
	$tabla = mysqli_query($link, $consulta);
	$asientosOcupados=mysqli_num_rows($tabla);
	if($asientosOcupados >= 0 && $asientosOcupados < 36)
	{
		while ($registro = mysqli_fetch_array($tabla))
		{
			//variables de filas
			$i=4;
			$j=3;
			$k=2;
			$l=1;
			//Ciclos que recorren las filas de las esas.
			foreach($fila=$asientos['fila1'] as $asiento => $estado)
			{
				if($registro['asiento']==$i)
				{
						$asientos['fila1'][$asiento]="ocupado";
				}
				$i+=4;
			}
			foreach($fila=$asientos['fila2'] as $asiento => $estado)
			{
				if($registro['asiento']==$j)
				{
						$asientos['fila2'][$asiento]="ocupado";
				}
				$j+=4;
			}
			foreach($fila=$asientos['fila3'] as $asiento => $estado)
			{
				if($registro['asiento']==$k)
				{
						$asientos['fila3'][$asiento]="ocupado";
				}
				$k+=4;
			}
			foreach($fila=$asientos['fila4'] as $asiento => $estado)
			{
				if($registro['asiento']==$l)
				{
						$asientos['fila4'][$asiento]="ocupado";
				}
				$l+=4;
			}
		}
	}else{
	?>
<div class="error">
<?php echo $corridaSinAsientos;?>
</div><br />


</div>
</body>
</html>
	<?php
	return 0;
	}
	//liberamos la tabla del bloqueo..
	mysqli_free_result($tabla); 
	//Creamos la consulta SQL para los datos de la corrida.
	$consulta="SELECT * FROM `itinerarios` WHERE `id` = $id_boleto";
	$tabla = mysqli_query($link, $consulta);
?>
<div id="Cuerpo"  align="center">
	<form id="boleto" method="post" action="">
	<table id="opciones">
		<tr>
			<td colspan="4">
				<label><h1>SELECCIONAR ASIENTOS</h1></label>
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
				<label><?php echo "Desde";?></label>
			</td>
			<td>
				<label><?php echo "Hasta";?></label>
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
			<td colspan="3">
				<label><?php echo "SELECCIONA EL NUMERO DE BOLETOS";?></label>
			</td>
			<td colspan="1">
				<select id="num_boletos" onchange="Util.bolsMax(this.selectedIndex);">
					<?php
						for($i=1;$i<=5;$i++){
					?>
					<option value="<?php echo"$i";?>"> <?php echo"$i";?></option>
					<?php
					}
					?>
				</select>
			</td>
		</tr>
	</table>
		<!--terminan las opciones-->
		
		<!--Inicia el carrito-->
		<br />
<table id="carrito" cellspacing="0" cellpadding="0">
	<tr>
		<td rowspan="5">
		<img src="images/bus_top.gif"/>
		</td>
		<td>
		<?php
		$fila1=$asientos['fila1'];
		foreach( $fila1 as $asiento => $estado )
		{
			if($estado=="ocupado")
			{
				echo "<img src=\"images/$estado.gif\" id=\"$asiento\"/>";
			}else if($estado=="vacio")
			{
				echo "<img src=\"images/$asiento.jpg\" class=\"links\" id=\"$asiento\" onclick=\"Util.swapImage(this);\"/>";
			}
		}
		?>
		</td>
		<td rowspan="5">
		<img src="images/bus_back.gif" />
		</td>
	</tr>
	<tr>
		<td>
		<?php
		$fila2=$asientos['fila2'];
		foreach( $fila2 as $asiento => $estado )
		{
			if($estado=="ocupado")
			{
				echo "<img src=\"images/$estado.gif\" id=\"$asiento\" />";
			}else if($estado=="vacio")
			{
				echo "<img src=\"images/$asiento.jpg\" class=\"links\"  id=\"$asiento\" onclick=\"Util.swapImage(this);\"/>";
			}
		}
		?>
		</td>
	</tr>
	<tr>
		<td>
		<?php
		$fila3=$asientos['fila3'];
		foreach( $fila3 as $asiento => $estado )
		{
			if($estado=="ocupado")
			{
				echo "<img src=\"images/$estado.gif\" id=\"$asiento\"/>";
			}else if($estado=="vacio")
			{
				echo "<img src=\"images/$asiento.jpg\" class=\"links\"  id=\"$asiento\" onclick=\"Util.swapImage(this);\"/>";
			}
		}
		?>
		</td>
	</tr>
	<tr>
		<td>
		<?php
		$fila4=$asientos['fila4'];
		foreach( $fila4 as $asiento => $estado )
		{
			if($estado=="ocupado")
			{
				echo "<img src=\"images/$estado.gif\" id=\"$asiento\" />";
			}else if($estado=="vacio")
			{
				echo "<img src=\"images/$asiento.jpg\" class=\"links\"  id=\"$asiento\" onclick=\"Util.swapImage(this);\"/>";
			}
		}
		?>
		</td>
	</tr>
</table>
<br />
<div id="ind">
	<table id="indicaciones" cellpadding="0" cellspacing="0">
	<tr><td><img src="images/ocupado.gif">&nbsp;<label class="enfasis"><?php echo "OCUPADO";?></label>&nbsp;</label><img src="images/asientoNormal.gif">&nbsp;<label class="enfasis"><?php echo "DISPONIBLE";?>&nbsp;<img src="images/seleccionado.gif">&nbsp;<label class="enfasis"><?php echo "SELECCIONADO";?></label></tr>
	</table>
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
				<img src="images/continuar.gif" id="continuar" onclick="Util.avanzar();" class="links"/>
			</td>
		</tr>
	</table>
	<input type="hidden" id="num_bol_selec" value="0" />
	<input type="hidden" id="bolsMax" value="0" />
	<input type="hidden" id="id_corrida" value="<?php echo $id_boleto; ?>" />
	</form>
</div><br />



</div>
</body>
</html>
<?php
}else{
?>

<div class="error">
	<?php echo $excepcion;?>
</div><br />

</div>
</body>
</html>
<?php
}
?>