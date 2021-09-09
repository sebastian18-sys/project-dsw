<?php
session_start();
// error_reporting(0);
include("../base_datos/db.php");
?>

<?php

    $dni = $_POST['dni-changes'];
    $boleto = $_POST['cod-reserva-changes']; 

    if(isset($_POST['validar-pasaje'])) {


        
        $_SESSION['boleto-changes'] = $boleto;


        $query = "SELECT * FROM boletos WHERE codigo_boleto = '$boleto'";
        $result = mysqli_query($link, $query);

        $validacion = 1;

        while($row = mysqli_fetch_assoc($result)) { 

            if($dni == $row['DNIPasajero'] && $boleto == $row['codigo_boleto']){

                $_SESSION['namePasajero'] = $row['nombrePasajero'];
                $_SESSION['lastnamePasajero'] = $row['apellidoPasajero'];
                $_SESSION['emailPasajero'] = $row['correoPasajero'];
                $_SESSION['dniPasajero'] = $row['DNIPasajero'];

                $validacion = 0;
            }
    
        }
        

        if($validacion == 0) {
            
    
            header("Location: ./devoluciones.php");
        } else {
            header("Location: ./datos-cambios-dev.php");  
        }

    }
    // session_destroy();

?>