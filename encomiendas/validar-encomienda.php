<?php
session_start();
include("../base_datos/db.php");

    if(isset($_POST['verificar-encomienda'])) {

        $tipo_encomienda = $_POST['valor-encomienda'];
        $origen = $_POST['origen_encomienda'];
        $destino = $_POST['destino_encomienda'];
        $fecha = $_POST['fecha_encomienda'];
        $nombre_d = $_POST['nombre-destinatario'];
        $apellido_d = $_POST['apellido-destinatario'];
        $dni_d = $_POST['dni-destinatario'];
        $celular_d =  $_POST['celular-destinatario'];
        $precio = $_POST['precio-encomienda'];

        $_SESSION['tipo'] = $tipo_encomienda;

        $_SESSION['origen'] = $origen;
        $_SESSION['destino'] = $destino;
        $_SESSION['nombre'] = $nombre_d;
        $_SESSION['apellido']  = $apellido_d;
        $_SESSION['dni'] = $dni_d;
        $_SESSION['precio-encomienda'] = $precio;

        $sql = "INSERT INTO encomiendas VALUES (
            null, '$tipo_encomienda', '$origen', '$destino','$fecha','$nombre_d','$apellido_d','$dni_d','$celular_d',$precio)";
        
        $tabla = mysqli_query($link, $sql);

        if($tabla) {
            header("Location: ./pago-tarjeta.php");
        } else {
            echo "ERROR EN REGISTRAR ENCOMIENDA"; 
        }
    }

?>