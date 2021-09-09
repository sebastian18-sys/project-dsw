<?php 
// session_start();
include("../../base_datos/db.php");

//validamos si existe el nombre.. y el pass
if(isset($_POST['registrar-chofer'])) {

    $id_choferSql="SELECT count(*) as id from chofer";
    $result=mysqli_query($link, $id_choferSql);
    $row=mysqli_fetch_assoc($result);
    $id_chofer=$row['id'];
    $nombre=$_POST['nombre-chofer'];
    $sexo=$_POST['sexo-chofer'];
    $edad=$_POST['edad-chofer'];
    $num=$_POST['telefono-chofer'];
    $sql="INSERT INTO chofer values ($id_chofer,'$nombre','$sexo',$edad,  '$num')";
    $resultado=mysqli_query($link, $sql);
    if(!$resultado){
        
        echo "ERROR EN INSERTAR CHOFER"; 

    }else{
        header("Location: ./panel_principal.php");
    }
}
?>