<?php?>
<!DOCTYPE htmlspecialchars>
<html lang="es">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/admin.css" />
<meta http-equiv="Content-Type" content="text/html; iso-8859-7">
<script src="js/jquery.js" type="text/javascript" language="javascript"></script>

<title>Admin Wiñaymarca</title>

<script language="javascript">

$(document).ready(function()
{
	$("#login_form").submit(function()
	{
		//remueve las classes del fading del form
		$("#msgbox").removeClass().addClass('messagebox').text('Validando....').fadeIn(1000);
		//Checa si existe o no el usuario, via ajax
		$.post("login.php",{ user_name:$('#username').val(),password:$('#password').val(),rand:Math.random() } ,function(data)
        {
		  if(data=='yes') //si el login es correcto..
		  {
		  	$("#msgbox").fadeTo(200,0.1,function()  //inicia la caja de mensajes
			{ 
			  //a�ade la clase para poner el mensaje..
			  $(this).html('Iniciando Sesion.....').addClass('messageboxok').fadeTo(900,1,
              function()
			  { 
			  	 //redirige a una pagina segura...
				 document.location='secure.php';
			  });
			  
			});
		  }
		  else 
		  {
		  	$("#msgbox").fadeTo(200,0.1,function()
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Verifica los detalles del inicio de sesion...').addClass('messageboxerror').fadeTo(900,1);
			});		
          }
				
        });
 		return false; //no envio el form fisicamente
	});
	//llamamos la funcion ajax cuando password pierde el enfoque.. para el submit
	$("#password").blur(function()
	{
		$("#login_form").trigger('submit');
	});
});
</script>

</head>
<body>

<div id="loginForm">
	<form method="post" action="" id="login_form">
		<div align="center">
			<div>
				Usuario: <input name="username" type="text" id="username" value="" maxlength="20" />
			</div>
			<div style="margin-top:5px" >
				Clave:
				&nbsp;&nbsp;
				<input name="password" type="password" id="password" value="" maxlength="20" />
			</div>
			<div class="buttondiv">
				<input name="Submit" type="submit" id="submit" value="Login" style="margin-left:-10px; height:23px"  /> 
				<span id="msgbox" style="display:none"></span>
			</div>
		</div>
</form>
</div>

</body>
</html>