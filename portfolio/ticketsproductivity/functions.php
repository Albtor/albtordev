<?php
 function conectaBD() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "Paack";
    
    // Create connection
    $conecta = mysqli_connect($servername, $username, $password, $database);
    if(mysqli_connect_errno()){
        die('<p>Error al conectar al servidor de MySQL: '.mysqli_connect_error().'</p>');
    }

    return $conecta;

}

function conectaDBserver(){
    $host_name = '';
    $database = '';
    $user_name = '';
    $password = '';
    $connect = mysqli_connect($host_name, $user_name, $password, $database);

    if (mysqli_connect_errno()) {
    die('<p>Error al conectar con servidor MySQL: '.mysqli_connect_error().'</p>');
    } 
    return $connect;

}


?>