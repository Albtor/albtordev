<?php

    include 'conexion.php';                   
    $nombreBD = "id9854235_3_hotel"; // "3-hotel" (Xampp)
    $conexion = mysqli_connect($servidorBD, $usuarioBD, $passwordBD);

    //Otra forma
    if (mysqli_connect_errno()){
        echo "Error de conexión con la Base de Datos";
        exit();
    }

    mysqli_select_db($conexion, $nombreBD) or die ("No se encuentra la basede datos");

    mysqli_set_charset($conexion, "utf8");    
    
    $consulta = "INSERT INTO `clientes`(`id`, `nombre`, `usuario`, `password`) VALUES (NULL , '" . $_POST['nombre'] . "', '" . $_POST['usuario'] . "','"  . $_POST['password'] . "')";
    
    $resultado= mysqli_query($conexion, $consulta);
    Header('location: Loginhotel.php');

?>
