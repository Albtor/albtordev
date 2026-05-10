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
    
    
    $a=$_POST['email'];
    $b=$_POST['password'];
    

    $consulta= "SELECT `email` FROM `clientes` WHERE `email`= '" .$a."' AND `password`= '". $b ."'";
    
    $resultado= mysqli_query($conexion, $consulta);


    if (mysqli_fetch_row($resultado)){
        Header('location: Cita.php');
    }

    else {
        print "El login no es correcto";
    }
    

     

   
?>
