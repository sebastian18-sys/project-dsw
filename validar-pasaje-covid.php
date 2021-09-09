<?php
session_start();
include("base_datos/db.php");
?>

<?php
    if(isset($_POST['validar'])) {
        $dni = $_POST['dni-usu'];
        $boleto = $_POST['boleto-usu']; 
        
        $_SESSION['boleto-covid'] = $boleto;


        $query = "SELECT * FROM `boletos` WHERE `codigo_boleto` = '$boleto'";
        $result = mysqli_query($link, $query);

        $validacion = 1;

        while($row = mysqli_fetch_assoc($result)) { 

            if($dni == $row['DNIPasajero'] && $boleto == $row['codigo_boleto']){
            $_SESSION['name'] = $row['nombrePasajero'];
            $_SESSION['lastname'] = $row['apellidoPasajero'];
            $_SESSION['email'] = $row['correoPasajero'];

            $validacion = 0;       
            }
    
        }

        if($validacion == 0) {

            header("Location: covid-form.php");
            // echo "entro";
        } else {
            header("Location: covid-19.php"); 
        }

    }

?>