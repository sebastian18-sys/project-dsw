<?php 
session_start();
include("../base_datos/db.php");

//validamos si existe el nombre.. y el pass


$hora_salida=$_POST['hora_salida'];
$hora_llegada=$_POST['hora_llegada'];
$bus=$_POST['bus'];
$terminal_salida=$_POST['terminal_salida'];
$ciudad_salida = $_POST['ciudad_salida'];
$fecha_salida=$_POST['fecha_salida'];
$terminal_llegada=$_POST['terminal_llegada'];
$ciudad_llegada = $_POST['ciudad_llegada'];
$fecha_llegada=$_POST['fecha_llegada'];
$precio=$_POST['precio'];

echo $hora_salida;

$sql = "insert INTO itinerarios
  (hora_salida,hora_llegada,num_autobus,nombre_terminal_salida,ciudad_salida,fecha_salida,nombre_terminal_llegada,ciudad_llegada, fecha_llegada,precio) 
    values (
    '$hora_salida', '$hora_llegada', '$bus','$terminal_salida','$ciudad_salida', '$fecha_salida', '$terminal_llegada', '$ciudad_llegada','$fecha_llegada', $precio)";


// INSERT INTO itinerarios
//     (hora_salida,hora_llegada,num_autobus,nombre_terminal_salida,ciudad_salida,fecha_salida,nombre_terminal_llegada,ciudad_llegada, fecha_llegada,precio) 
//     VALUES ('9:00:00', '15:00:00', 1,'Plaza Norte','Lima', '2-9-2021', 'Astete', 'Cusco','3-9-2021',150);



$resultado=mysqli_query($link,$sql);
if($resultado){

  header("Location: ../panel_principal.php");


}else{
	echo "ERROR EN INSERTAR ITINERARIO"; 
}
?>