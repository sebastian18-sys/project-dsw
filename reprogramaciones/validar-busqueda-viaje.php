<?php
session_start();
include("../base_datos/db.php");
?>

<?php

    if(isset($_POST['validar-busqueda-viaje'])) {

        $dni = $_POST['dni-changes'];
        $boleto = $_POST['cod-reserva-changes']; 
        
        $_SESSION['boleto-changes'] = $boleto;


        $query = "SELECT * FROM boletos WHERE codigo_boleto = '$boleto'";
        $result = mysqli_query($link, $query);

        $validacion = 1;    

            while($row = mysqli_fetch_assoc($result)) {
                
                if($dni == $row['DNIPasajero'] && $boleto == $row['codigo_boleto']){

                $_SESSION['ID_ITINERARIO'] = $row['id_itinerario'];
                $_SESSION['namePasajero'] = $row['nombrePasajero'];
                $_SESSION['lastnamePasajero'] = $row['apellidoPasajero'];
                $_SESSION['emailPasajero'] = $row['correoPasajero'];
                $_SESSION['dniPasajero'] = $row['DNIPasajero'];

                $validacion = 0;
                }
        
            }
        

        if($validacion == 0) {
            
    
            header("Location: ./reprogramacion.php");
        } else {
            header("Location: ./datos-cambios-rep.php");  
        }

    }

?>