<?php
session_start();
include("base_datos/db.php");	
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<script language="javascript" type="text/javascript" src="js/util.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Wiñaymarca</title>
<link rel="stylesheet" type="text/css" href="styles/estilo.css" />
</head>



<body>

<?php
if(isset($_GET['id']) && isset($_GET['as']) && isset($_GET['no']))
{
	//Cargamos los valores de los datos.
	$id_boleto=base64_decode($_GET['id']);
	$asientos=base64_decode($_GET['as']);
	$asientos=explode(",",$asientos);
	$nombres=base64_decode($_GET['no']);
	$nombres=explode(",",$nombres);
	$fechaHoy=date("Y-m-d");
	
?>

<div id="Cuerpo"  align="center">
<table id="Notificacion" >
	<tr>
		<td>
			<label><?php echo "Se han comprado"." ".count($asientos)." "."Boletos";?>  <a href="javascript:void(0);" onclick="Util.imprimirBoleto();"> <?php echo "Imprimir";?> </a><a href="javascript:void(0);" onclick="location.href='index.php';"> <?php echo "Inicio";?> </a><a href="luis.mamani16@unmsm.edu.pe"> <?php echo "Contacto";?> </a></label>
		</td>
	</tr>
</table>
<?php
	//Insertamos los datos de los boletos.
	for($i=0;$i<count($asientos);$i++)
	{
		//Creamos la consulta SQL para los datos de la corrida.
		$consulta="insert into boletos values (null,$id_boleto,$asientos[$i],'".utf8_decode($nombres[$i])."','$fechaHoy')";
		$tabla = mysqli_query($link, $consulta);
	}
	//Creamos la consulta SQL para los datos de los boletos.
	$consulta="SELECT * FROM `itinerarios` WHERE `id` = $id_boleto";
?>
<div id="boleto">
<?php
	for($i=0;$i<count($asientos);$i++)
	{
	$tabla = mysqli_query($link, $consulta);
	$registro = mysqli_fetch_array($tabla);
	
?>
	<table id="<?php echo "cuerpoBoleto$i";?>" style="border:1px dotted;">
		<tr align="center">
			
		</tr>
		<tr align="left">
			<td>
				<tt><?php echo "Origen";?>:</tt>
			</td>
			<td>
				<tt><?php echo "Terminal Salida";?></tt>
			</td>
		</tr>
		<tr align="left">
			<td>
				<tt><?php echo $registro['ciudad_salida'];?></tt>
			</td>
			<td>
				<tt><?php echo $registro['nombre_terminal_salida'];?></tt><br/><br/>
			</td>
		</tr>
		<tr align="left">
			<td>
				<tt><?php echo "Destino";?>:</tt>
			</td>
			<td>
				<tt><?php echo "Terminal Llegada";?></tt>
			</td>
		</tr>
		<tr align="left">
			<td>
				<tt><?php echo $registro['ciudad_llegada'];?></tt>
			</td>
			<td>
				<tt><?php echo $registro['nombre_terminal_llegada'];?></tt><br/><br/>
			</td>
		</tr>
		<tr align="left">
			<td>
				<tt><?php echo "Fecha de Salida";?></tt>
			</td>
			<td>
				<tt><?php echo "Asiento";?></tt>
			</td>
		</tr>
		<tr align="left">
			<td>
				<tt><?php echo $registro['fecha_salida'];?></tt>
			</td>
			<td>
				<tt><?php echo $asientos[$i];?></tt><br/><br/>
			</td>
		</tr>
		<tr align="left">
			<td>
				<tt><?php echo "Hora de Salida";?></tt>
			</td>
			<td>
				<tt><?php echo "Precio";?></tt>
			</td>
		</tr>
		<tr align="left">
			<td>
				<tt><?php echo $registro['hora_salida'];?></tt>
			</td>
			<td>
				<tt><?php echo "$".$registro['precio'];?></tt><br/><br/>
			</td>
		</tr>
		<tr align="left">
			<td colspan="2">
				<tt><?php echo "Nombre";?></tt>
			</td>
		</tr>
		<tr align="left">
			<td colspan="2">
				<tt><?php echo utf8_decode($nombres[$i]); ?></tt><br/><br/>
			</td>
		</tr>
		<tr align="left">
			<td colspan="2">
				<tt><?php echo "Lugar y fecha de ex";?></tt>
			</td>
		</tr>
		<tr align="left">
			<td colspan="2">
				<tt><?php echo $registro['ciudad_salida']." a  ".$fechaHoy; ?></tt><br/><br/>
			</td>
		</tr>
		
	</table>
<?php
		}		
?>
	</div>
</div>
<br />

<?php
}
?>

<!-- INICIO -->
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// If necessary, modify the path in the require statement below to refer to the
// location of your Composer autoload.php file.
require './vendor/autoload.php';

// Replace sender@example.com with your "From" address.
// This address must be verified with Amazon SES.
$sender = 'ventaswinaymarcasac@gmail.com';
$senderName = '-- Winaymarca --';

// Replace recipient@example.com with a "To" address. If your account
// is still in the sandbox, this address must be verified.
$recipient = 'sebastian.ccopacondori@unmsm.edu.pe';

// Replace smtp_username with your Amazon SES SMTP user name.
$usernameSmtp = 'AKIASNDTXSRALTINZIAF';

// Replace smtp_password with your Amazon SES SMTP password.
$passwordSmtp = 'BBmYEf49wQ5UuuHq8BrUGsO1A5pJxD8TStHI83vZO8Zj';

// Specify a configuration set. If you do not want to use a configuration
// set, comment or remove the next line.
//$configurationSet = 'ConfigSet';

// If you're using Amazon SES in a region other than US West (Oregon),
// replace email-smtp.us-west-2.amazonaws.com with the Amazon SES SMTP
// endpoint in the appropriate region.
$host = 'email-smtp.us-east-2.amazonaws.com';
$port = 587;

// The subject line of the email
$subject = '-- GRACIAS POR COMPRAR SU PASAJE WINAYMARCA --';

// The plain-text body of the email
$bodyText =  "-- GAAAAAAAAAAAAAAAAAAA--";

// The HTML-formatted body of the email
$bodyHtml = '-- Y MÁS GAAAAAAAAAAAAAAAAAAAAA --';

$mail = new PHPMailer(true);

try {
    // Specify the SMTP settings.
    $mail->isSMTP();
    $mail->setFrom($sender, $senderName);
    $mail->Username   = $usernameSmtp;
    $mail->Password   = $passwordSmtp;
    $mail->Host       = $host;
    $mail->Port       = $port;
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = 'tls';
  //  $mail->addCustomHeader('X-SES-CONFIGURATION-SET', $configurationSet);

    // Specify the message recipients.
    $mail->addAddress($recipient);
    // You can also add CC, BCC, and additional To recipients here.

    // Specify the content of the message.
    $mail->isHTML(true);
    $mail->Subject    = $subject;
    $mail->Body       = $bodyHtml;
    $mail->AltBody    = $bodyText;
    $mail->Send();
    echo "Email sent!" , PHP_EOL;
} catch (phpmailerException $e) {
    echo "An error occurred. {$e->errorMessage()}", PHP_EOL; //Catch errors from PHPMailer.
} catch (Exception $e) {
    echo "Email not sent. {$mail->ErrorInfo}", PHP_EOL; //Catch errors from Amazon SES.
}
?>
<!-- FIN -->

</body>
</html>


