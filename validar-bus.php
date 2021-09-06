<?php
session_start();
include("base_datos/db.php");
?>

<?php

if(isset($_POST['pasaje-bus'])) {
    $seleccionado = $_POST['id_corrida'];
}

?>