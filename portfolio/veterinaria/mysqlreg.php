<?php

    include 'conexion.php';                   
    $nombreBD = "veterinaria"; 
    $conexion = mysqli_connect($servidorBD, $usuarioBD, $passwordBD);

    
    if (mysqli_connect_errno()){
        echo "Error de conexión con la Base de Datos";
        exit();
    }

    mysqli_select_db($conexion, $nombreBD) or die ("No se encuentra la basede datos");

    mysqli_set_charset($conexion, "utf8");    

    $n=$_POST['nombre'];
    $u=$_POST['apellidos'];
    $m=$_POST['email'];
    $k=$_POST['password'];
    
    $consulta = "INSERT INTO `clientes`(`id`, `password`, `nombre`, `apellidos`, `email` ) VALUES (NULL , '" . $k . "', '" . $n . "','" . $u . "','"  . $m . "')";

    //var_dump ($consulta);
    $resultado= mysqli_query($conexion, $consulta);
    Header('location: Login.php');

?>
