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

        if($result) {
            $_SESSION['dni'] = $dni;
            $_SESSION['cod-boleto'] = $boleto;
            $_SESSION['name'] = $nombre;
            $_SESSION['lastname'] = $apellidos;
            header("Location: covid-form.php");
            // echo "entro";
        } else {
            echo "ERROR EN VERIFICAR DECLARACIÓN JURADA";  
        }

    }

?>