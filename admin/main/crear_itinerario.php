<?php 
session_start();
include("../../base_datos/db.php");

//validamos si existe el nombre.. y el pass

if(isset($_POST['registrar-itinerario'])) {

    $hora_salida=$_POST['hour-out'];
    $hora_llegada=$_POST['hour-in'];
    $bus=$_POST['bus-itinerario'];
    $terminal_salida=$_POST['bus-terminal-origin'];
    $ciudad_salida = $_POST['bus-city-origin'];
    $fecha_salida=$_POST['date-out'];
    $terminal_llegada=$_POST['bus-terminal-destiny'];
    $ciudad_llegada = $_POST['bus-city-destiny'];
    $fecha_llegada=$_POST['date-in'];
    $precio=$_POST['price'];

    echo $hora_salida;

    $sql = "INSERT INTO itinerarios
    (hora_salida,hora_llegada,num_autobus,nombre_terminal_salida,ciudad_salida,fecha_salida,nombre_terminal_llegada,ciudad_llegada, fecha_llegada,precio) 
        VALUES (
        '$hora_salida', '$hora_llegada', '$bus','$terminal_salida','$ciudad_salida', '$fecha_salida', '$terminal_llegada', '$ciudad_llegada','$fecha_llegada', $precio)";


    // INSERT INTO itinerarios
    //     (hora_salida,hora_llegada,num_autobus,nombre_terminal_salida,ciudad_salida,fecha_salida,nombre_terminal_llegada,ciudad_llegada, fecha_llegada,precio) 
    //     VALUES ('9:00:00', '15:00:00', 1,'Plaza Norte','Lima', '2-9-2021', 'Astete', 'Cusco','3-9-2021',150);



    $resultado=mysqli_query($link,$sql);
    if($resultado){

    header("Location: ./panel_principal.php");


    }else{
        echo "ERROR EN INSERTAR ITINERARIO"; 
    }
}
?>