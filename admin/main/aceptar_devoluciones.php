<?php

include("../../base_datos/db.php");



if(isset($_GET['aceptar_devolucion'])) {
  $id_boleto = $_GET['aceptar_devolucion'];
  $query = "DELETE FROM boletos WHERE codigo_boleto = '$id_boleto'" ;
  $result = mysqli_query($link, $query);
  if(!$result) {
    die("Query Failed.");
  }

  header('Location: devoluciones.php');
}

?>