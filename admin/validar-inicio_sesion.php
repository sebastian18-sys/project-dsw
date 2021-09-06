<?php 
// session_start();
// // if no existe la sesion se redirecciona a una pagina x.
// if(empty($_SESSION['uname']))
// 	header("Location:admin.php");	
// else
// 	header("Location:panel_principal.php");	
// //si sale se destruye la sesion current..
// if(isset($_GET['salir']))
// {
// 	session_destroy();
// 	header("Location:admin.php");
// }	
?>


<?php
session_start();
include('../base_datos/db.php');

$username = $_POST['usuario-admin'];
$contrasena = $_POST['contraseña-admin'];

if (isset($_POST['iniciar_sesion'])) {


  
    $query = "SELECT * FROM usuarios";
    $result = mysqli_query($link, $query);
    while($row = mysqli_fetch_assoc($result)) { 
      
        // descifrado    
        if($row['username']== $username &&  $row['password']==$contrasena && $username != null && $contrasena!= null){

            $_SESSION['user'] = $row['username'];
            $_SESSION['password'] = $row['password'];

            header("Location: ./main/panel_principal.php");
            break;
        } else {
            // header("Location: error_inicio_sesion.php");
            echo "F";
        }
    } 
}

?>