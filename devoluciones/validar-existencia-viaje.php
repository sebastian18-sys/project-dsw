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



            while($row = mysqli_fetch_assoc($result)) { 

                $_SESSION['namePasajero'] = $row['nombrePasajero'];
                $_SESSION['lastnamePasajero'] = $row['apellidoPasajero'];
                $_SESSION['emailPasajero'] = $row['correoPasajero'];
                $_SESSION['dniPasajero'] = $row['DNIPasajero'];
        
            }
        

        if($result) {
            
    
            header("Location: ./devoluciones.php");
        } else {
            echo "ERROR EN VERIFICAR DECLARACIÓN JURADA";  
        }

    }
    // session_destroy();

?>