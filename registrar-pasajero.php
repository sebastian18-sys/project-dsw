<?php
session_start();
include("base_datos/db.php");

    $count = $_SESSION['number'];

?>

<?php
    if(isset($_POST['Registrar_Pasajero'])) {

        for($d = 0; $d < $count; $d++) {

            $firstname = $_POST['nombres'.$d];
            $lastname = $_POST['apellidos'.$d];
            $dni = $_POST['dni'.$d];
            $gender = $_POST['genero'.$d];
            $phone = $_POST['telefono'.$d];
            $email = $_POST['correo'.$d];

            $asiento = $_SESSION['asiento'.$d];
            $id = $_SESSION['id-boleto'];
            $fecha = $_SESSION['ciudad-fech'];
            $precio = $_SESSION['ciudad-precio'];


            $query = "INSERT INTO boletos VALUES (null, $id, $asiento, '$firstname  ', '$fecha', '$precio')";
            $result = mysqli_query($link, $query);  //Query


        }

        // $_SESSION['origen'] = $origen;
        // $_SESSION['destino'] = $destino;
        // $_SESSION['fecha'] = $fecha;

        
        if(!$result) {
            die("Query Failed.");
            // include('./register-error.php');
        } else {
            // $_SESSION['dni_fa'] = $dni_family;
            header("Location: pago-tarjeta.php");
        }
    }
?>