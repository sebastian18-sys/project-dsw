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

        while($row = mysqli_fetch_assoc($result)) { 

            $_SESSION['name'] = $row['nombrePasajero'];
            $_SESSION['lastname'] = $row['apellidoPasajero'];
            $_SESSION['email'] = $row['correoPasajero'];
    
        }

        if($result) {

            header("Location: covid-form.php");
            // echo "entro";
        } else {
            echo "ERROR EN VERIFICAR DECLARACIÓN JURADA";  
        }

    }

?>