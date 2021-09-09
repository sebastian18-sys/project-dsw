<?php

include("../../base_datos/db.php");



if(isset($_GET['codigo_itinerario'])) {
  $id_itinerario = $_GET['codigo_itinerario'];
  $query = "DELETE FROM itinerarios WHERE id = $id_itinerario" ;
  $result = mysqli_query($link, $query);
  if(!$result) {
    die("Query Failed.");
  }

  header('Location: consultar_itinerarios.php');
}

?>
