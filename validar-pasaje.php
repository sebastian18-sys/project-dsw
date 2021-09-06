<?php
session_start();
include("base_datos/db.php");
?>

<?php
    if(isset($_POST['boleto'])) {
        $origen = $_POST['ticket-origin'];
        $destino = $_POST['ticket-destiny'];
        $fecha = $_POST['ticket-date'];

        $fecha =explode("/",$fecha);

        $fecha = $fecha[2]."-".$fecha[1]."-".$fecha[0];
        
        $_SESSION['origen'] = $origen;
        $_SESSION['destino'] = $destino;
        $_SESSION['fecha'] = $fecha;

        $sql = "SELECT id,hora_salida,precio,hora_llegada from itinerarios where ciudad_salida like('$origen') and ciudad_llegada like('$destino') and fecha_salida = '$fecha'";
        $tabla = mysqli_query($link, $sql);

        if($tabla) {
            header("Location: ./buscar-pasaje.php");
        } else {
            echo "ERROR EN INSERTAR CORRIDA"; 
        }
    }
// if(isset($_GET['or']) && isset($_GET['de']) && isset($_GET['fe']) && isset($_GET['fh'])) {
// 	//Cargamos los valores de los datos.
// 	$diferencia=2;
// 	$origen=base64_decode($_GET['or']);
// 	$destino=base64_decode($_GET['de']);
// 	$fecha=base64_decode($_GET['fe']);
// 	$fechaHoy=base64_decode($_GET['fh']);
// 	$fechaHoy=explode("-",$fechaHoy);
// 	$fecha=explode("-",$fecha);
// 	$fechaHoy = date("Y-m-d",mktime(0,0,0,$fechaHoy[1],$fechaHoy[0],$fechaHoy[2]));
// 	$fecha = date("Y-m-d",mktime(0,0,0,$fecha[1],$fecha[0],$fecha[2]));
// 	$hora = getdate(time());
// 	$hora=(($hora["hours"]==0?12:$hora["hours"])-$diferencia). ":" . $hora["minutes"] . ":" . $hora["seconds"] ; 
	//Creamos la consulta SQL
// 	if($fecha==$fechaHoy)
// 		$tabla = mysqli_query($link, 
// 		"select b.id,b.hora_salida,b.precio,b.hora_llegada from itinerarios b where b.ciudad_salida like('$origen') and b.ciudad_llegada like('$destino') and b.fecha_salida like('$fecha') and b.hora_salida >= '$hora'");
// 	else if($fecha>$fechaHoy)
// 		$tabla = mysqli_query($link, 
// 		"select b.id,b.hora_salida,b.precio,b.hora_llegada from itinerarios b where b.ciudad_salida like('$origen') and b.ciudad_llegada like('$destino') and b.fecha_salida like('$fecha')");
// 	else
// 	{
//         return 0;
// 	}
// }



// $ciudad=$_POST['agency-city'];
// $terminal=$_POST['agency-terminal'];

// $sql = "INSERT INTO agencias (ciudad,terminal) VALUES ('$ciudad','$terminal')";
// $result=mysqli_query($link, $sql);
// if($result)
//     header("Location: ./panel_principal.php");
// else
//     echo "ERROR EN INSERTAR CORRIDA"; 

// }


?>