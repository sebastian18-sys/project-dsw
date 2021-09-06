<?php 
session_start();
include("../../base_datos/db.php");

if(isset($_POST['registrar-agencia'])) {

    $ciudad=$_POST['agency-city'];
    $terminal=$_POST['agency-terminal'];

    $sql = "INSERT INTO agencias (ciudad,terminal) VALUES ('$ciudad','$terminal')";
    $result=mysqli_query($link, $sql);
    if($result)
        header("Location: ./panel_principal.php");
    else
        echo "ERROR EN INSERTAR CORRIDA"; 

    }
?>