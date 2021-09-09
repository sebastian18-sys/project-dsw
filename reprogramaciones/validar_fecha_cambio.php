<?php
session_start();
include("../base_datos/db.php");
?>

<?php

    if(isset($_POST['Registrar_Fecha_Cambio'])) {

        $fecha = $_POST['ticket-date'];

        $fecha =explode("/",$fecha);

        $fecha = $fecha[2]."-".$fecha[1]."-".$fecha[0];

        $_SESSION['NUEVA_FECHA_VIAJE'] = $fecha;

        $id_itinerario = $_SESSION['ID_ITINERARIO'];

        $query = "SELECT * FROM itinerarios WHERE id = $id_itinerario";

        $result = mysqli_query($link, $query);

        while($row = mysqli_fetch_assoc($result)) { 

            $_SESSION['CIUDAD_ORIGEN'] = $row['ciudad_salida'];
            $_SESSION['CIUDAD_LLEGADA'] = $row['ciudad_llegada'];
            
        }
        

        if($result) {
            
    
            header("Location: buscar_pasaje_reprogramado.php");
        } else {
            echo "ERROR EN VERIFICAR REPROGRAMACION";  
        }

    }

?>