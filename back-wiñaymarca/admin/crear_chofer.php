<?php 
session_start();
include("../base_datos/db.php");

//validamos si existe el nombre.. y el pass

$id_choferSql="select count(*) as id from chofer";
$result=mysqli_query($link, $id_choferSql);
$row=mysqli_fetch_assoc($result);
$id_chofer=$row['id'];
$nombre=$_POST['nomchofer'];
$sexo=$_POST['sexchofer'];
$edad=$_POST['edadchofer'];
$num=$_POST['numchofer'];
$sql="insert into chofer values ($id_chofer,'$nombre','$sexo',$edad,'$num')";
$resultado=mysqli_query($link, $sql);
if($resultado){

  header("Location: ../panel_principal.php");


}else{
	echo "ERROR EN INSERTAR CHOFER"; 
}
?>
