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
    
    $consulta= "INSERT INTO `reservas`(`id`, `nombre`, `personas`, `fechaentrada`, `fechasalida` ) VALUES (NULL, '" . $_POST['rooms'] . "','" . $_POST['people'] . "','"  . $_POST['entrada'] . "','" . $_POST['salida'] . "')";

    
    $resultado= mysqli_query($conexion, $consulta);
    echo "Tienes una reserva! Te hemos enviado un email a tu correo";
    //print $consulta;
    //header 

?>


