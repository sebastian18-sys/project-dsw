<?php
session_start();
include("base_datos/db.php");

$count = $_SESSION['number'];

?>

<?php
    if(isset($_POST['validar-pago'])) {
        
        $tarjeta = $_POST['numtarjeta'];
        $correo = $_POST['correo-pago'];
        $dni = $_POST['dni-pago'];
        $precio = $_SESSION['ciudad-precio'];
        $preciof = $precio*($count);



        $_SESSION['dni'] = $dni;
        $_SESSION['tarjeta'] = $tarjeta;
        $_SESSION['precio-total'] = $preciof;
        $_SESSION['correo-email'] = $correo;

        header("Location: ./confirmacion-pago.php");
    
    }

?>