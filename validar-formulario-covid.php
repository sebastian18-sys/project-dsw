<?php
session_start();
include("base_datos/db.php");
?>

<?php
    if(isset($_POST['Formulario-covid'])) {

        $boleto_covid_19 = $_SESSION['boleto-covid'];

        $sql = "UPDATE `transporte_wiñaymarca`.`boletos` SET `covid` = '1' WHERE (`codigo_boleto` = '$boleto_covid_19');";
        $tabla = mysqli_query($link, $sql);

        if($tabla) {
            header("Location: ./confirmacion-covid.php");
        } else {
            echo "ERROR EN INSERTAR CORRIDA"; 
        }
    }

?>