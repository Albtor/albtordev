<?php
    require_once 'functions.php';
    $conexion = conectaBD();
    // $timestamp = date('Y/m/d h:i:sa');
    $today_date_hour = date('Y/m/d H');
    $today_date = date('Y/m/d');
    $hora = date('H');
    // echo var_dump(is_string($today_timestamp));

    if (isset($_POST['Resolved'])):
        $fraseSQL = "SELECT quantity FROM tickets WHERE date_hour = '$today_date_hour' AND tipo = 1";
        $resultado = mysqli_query($conexion,$fraseSQL);
        $resultado = mysqli_fetch_assoc($resultado);
        $quantity = $resultado['quantity'];
    
        if (!$quantity):
            $fraseSQL = "INSERT INTO tickets(date_hour, quantity,tipo) VALUES ('$today_date_hour', 1, 1)";
            $resultado = mysqli_query($conexion,$fraseSQL);
        else: 
            $quantity++;
            $fraseSQL = "UPDATE tickets SET quantity = $quantity WHERE date_hour = '$today_date_hour' AND tipo = 1";
            $resultado = mysqli_query($conexion,$fraseSQL);
        endif;
        
    elseif(isset($_POST['Escalated'])):
        $fraseSQL = "SELECT quantity FROM tickets WHERE date_hour = '$today_date_hour' AND tipo = 2";
        $resultado = mysqli_query($conexion,$fraseSQL);
        $resultado = mysqli_fetch_assoc($resultado);
        $quantity = $resultado['quantity'];

        if (!$quantity):
            $fraseSQL = "INSERT INTO tickets(date_hour, quantity,tipo) VALUES ('$today_date_hour', 1, 2)";
            $resultado = mysqli_query($conexion,$fraseSQL);
        else: 
            $quantity++;
            $fraseSQL = "UPDATE tickets SET quantity= $quantity WHERE date_hour = '$today_date_hour' AND tipo = 2";
            $resultado = mysqli_query($conexion,$fraseSQL);
        endif;
    
    endif;

    $resueltosHora = 0;
    $fraseSQL = "SELECT quantity FROM tickets WHERE date_hour = '$today_date_hour' AND tipo = 1";
    $resultado = mysqli_query($conexion,$fraseSQL);
    $resultadoHora = mysqli_fetch_assoc($resultado);
    $resueltosHora = $resultadoHora['quantity'] ?? 0;

    // SABER LOST TICKETS ESCALADOS EN ESTA HORA
    $fraseSQL = "SELECT quantity FROM tickets WHERE date_hour = '$today_date_hour' AND tipo = 2";
    $resultado = mysqli_query($conexion,$fraseSQL);
    $resultadoHora = mysqli_fetch_assoc($resultado);
    $escaladoshora = $resultadoHora['quantity'] ?? 0;


    // SABER LOS TOTALES
    $fraseSQL = "SELECT quantity FROM tickets WHERE date_hour LIKE '$today_date%' AND tipo = 1";
    $resultado = mysqli_query($conexion,$fraseSQL);
    $result = 0;
    while ($resultadoDia=mysqli_fetch_assoc($resultado)):
    $result += $resultadoDia['quantity'];
    endwhile;
    $resueltosDia = $result;


    $fraseSQL = "SELECT quantity FROM tickets WHERE date_hour LIKE '$today_date%' AND tipo = 2";
    $resultado = mysqli_query($conexion,$fraseSQL);
    $result = 0;
    while ($resultadoDia=mysqli_fetch_assoc($resultado)):
    $result += $resultadoDia['quantity'];
    endwhile;
    $escaladosDia = $result;





    
    



?>