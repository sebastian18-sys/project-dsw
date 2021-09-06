<?php
session_start();
include("base_datos/db.php");
?>

<?php
    if(isset($_POST['Registrar_Devolucion'])) {
        
        $dni = $_POST['dni-dev'];
        $nombres = $_POST['nombres-dev'];
        $nombres = $_POST['apellidos-dev']; 
        $nombres = $_POST['correo-dev']; 
        $nombres = $_POST['address-dev']; 
        $nombres = $_POST['telefono-dev']; 
        
        // $_SESSION['boleto-covid'] = $boleto;


        $query = "SELECT * FROM boletos WHERE codigo_boleto = '$boleto'";
        $result = mysqli_query($link, $query);

        if($result) {
            $_SESSION['dni'] = $dni;
            $_SESSION['cod-boleto'] = $boleto;
            $_SESSION['name'] = $nombre;
            $_SESSION['lastname'] = $apellidos;
            header("Location: ./covid-form.php");
        } else {
            echo "ERROR EN VERIFICAR DECLARACIÓN JURADA";  
        }

    }

?>