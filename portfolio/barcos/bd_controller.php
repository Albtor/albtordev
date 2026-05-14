<?php
//CONECTAR CON LA BASE DE DATOS  EN MODO REMOTO

 //error_reporting(0);
//funciones
  require_once "../funciones.php"; //para usarla una sola vez
  $conecta=conexionBD();

  $cod = $POST['codigo'];
  $nombre = $POST[''];
  $apellidos = $POST[''];
  $email = $POST[''];



$fraseSQL == "INSERT INTO barco_reservas (codigo)";

$fraseSQL .= "VALUES ('$codigoFinal')";

echo $fraseSQL;
$resultado= mysqli_query($conexion,$fraseSQL);

?>