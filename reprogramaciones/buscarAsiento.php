<?php
session_start();
include("base_datos/db.php");

$origin = $_SESSION['CIUDAD_ORIGEN'];
$destiny = $_SESSION['CIUDAD_LLEGADA'];
$date = $_SESSION['NUEVA_FECHA_VIAJE'];
?>

