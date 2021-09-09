<?php
session_start();
include("base_datos/db.php");
?>

<?php
    if(isset($_POST['Registrar_Devolucion'])) {
        
        $dni = $_POST['dni-dev'];
        $nombres = $_POST['nombres-dev'];
        $apellidos = $_POST['apellidos-dev']; 
        $correo = $_POST['correo-dev']; 
        $direccion = $_POST['address-dev']; 
        $telefono = $_POST['telefono-dev']; 
        $motivo = $_POST['text-motivo'];
        
        // $_SESSION['boleto-covid'] = $boleto;
        $boleto =  $_SESSION['boleto-changes'];
        $_SESSION['dni-dev'] = $dni;
        $_SESSION['cod-boleto-dev'] = $boleto;
        $_SESSION['email-dev'] = $correo;

        $query = "UPDATE boletos SET `estado` = '0' WHERE (`codigo_boleto` = '$boleto');";
       
        $result = mysqli_query($link, $query);

        if($result) {

            header("Location: ./confirmacion-devolucion.php");
        } else {
            echo "ERROR EN VERIFICAR DECLARACIÓN JURADA";  
        }

    }

?>