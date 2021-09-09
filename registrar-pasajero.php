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
            $id_itinerario = $_SESSION['id-boleto'];
            $fecha = $_SESSION['ciudad-fech'];
            $precio = $_SESSION['ciudad-precio'];

            $CB_0 = substr($id_itinerario,0,1);
            $CB_4 = $asiento;
            $CB_1 = substr($dni, 0, 2);  // devuelve "abcde"
            $CB_2 = substr($fecha, -2);
            $CB_3 = strtoupper(substr($lastname, 0, 2));

            $codigo_boleto = $CB_0.$CB_4.$CB_1.$CB_2.$CB_3;

            $_SESSION['CODIGO_BOLETO'] = $codigo_boleto; 

            $query = "INSERT INTO boletos VALUES (
                '$codigo_boleto', $id_itinerario, $asiento, '$fecha','$firstname','$lastname','$email','$dni' , $precio,null,1)";
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