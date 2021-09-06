<?php

$host     = "aa1heytc7cqkgfu.cwspvo6flss8.us-east-2.rds.amazonaws.com";
$port     = 3306;
$socket   = "";
$user     = "admin123";
$password = "admin123admin123";
$dbname   = "transporte_wiñaymarca";

$link = new mysqli($host, $user, $password, $dbname, $port, $socket)
    or die ('No se puede conectar a la base de datos' . mysqli_connect_error());
    //admin123
    //admin123admin123

?>