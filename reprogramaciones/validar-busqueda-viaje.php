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



            while($row = mysqli_fetch_assoc($result)) { 
                $_SESSION['ID_ITINERARIO'] = $row['id_itinerario'];
                $_SESSION['namePasajero'] = $row['nombrePasajero'];
                $_SESSION['lastnamePasajero'] = $row['apellidoPasajero'];
                $_SESSION['emailPasajero'] = $row['correoPasajero'];
                $_SESSION['dniPasajero'] = $row['DNIPasajero'];
        
            }
        

        if($result) {
            
    
            header("Location: ./reprogramacion.php");
        } else {
            echo "ERROR EN VERIFICAR REPROGRAMACION";  
        }

    }

?>