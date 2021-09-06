<?php
    
	include("base_datos/db.php");
	$id_departamento=$_REQUEST['id_ciudad2'];

  
    $consulta="SELECT terminal FROM agencias WHERE ciudad = '$id_departamento'";
    
    $tabla=mysqli_query($link, $consulta);

    $contador = 1;
    while($registro=mysqli_fetch_array($tabla))
    {?>
        <option value = "<?php echo $registro['terminal']?>"><?php echo utf8_encode($registro['terminal'])?></option>
        
        <?php	
        $contador = $contador+1;
    }
?>