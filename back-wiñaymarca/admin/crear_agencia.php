<?php 
session_start();
include("../base_datos/db.php");
$ciudad=$_POST['ciudad'];
$terminal=$_POST['terminal'];

$sql = "insert into agencias (ciudad,terminal) values('$ciudad','$terminal')";
$result=mysqli_query($link, $sql);
if($result)
    header("Location: ../panel_principal.php");
else
	echo "ERROR EN INSERTAR CORRIDA"; 
	
?>