<?php
session_start();
// include('../base_datos/db.php');



if (isset($_POST['enviar-mensaje'])) {

    if(!empty($_POST['name']) && !empty($_POST['matters']) && !empty($_POST['email'])  && !empty($_POST['message'])){
    
    $destino = 'sebastian99_19@hotmail.com';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $matters = $_POST['matters'];
    $message = $_POST['message'];
    
    $header = 'From: ' . $email . "\r\n" . 'Reply-To: ' . $email . "\r\n" . 'X-Mailer: PHP/' . phpversion();
    // $header.= "To: sebastianccv19@gmail.com" . "\r\n";
    // $header.= "X-Mailer: PHP/". phpversion();

    $mail = @mail($destino, $matters, $mensaje, $header);

    if($mail) {
        echo "¡Mail enviado con éxito!";
        header("Location: ./contact-us.php");
    } else {
        echo $header;
        // echo $mensaje;
        echo "efecillo";
    }

} 
}
?>