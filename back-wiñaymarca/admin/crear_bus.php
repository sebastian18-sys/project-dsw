<?php 
session_start();
include("../base_datos/db.php");
$numautobus=$_POST['numautobus'];
$numserie=$_POST['numserie'];
$choferautobus=$_POST['choferautobus'];
$sql = "INSERT INTO autobus (id_autobus,num_serie, id_chofer) VALUES ('".$numautobus."','".$numserie."', '".$choferautobus."')";
$result=mysqli_query($link, $sql);
if($result)
    header("Location: ../panel_principal.php");
else
	echo "ERROR EN INSERTAR BUS, LA PLACA ES VARCHAR, LAS DEMÁS INT"; 
?>