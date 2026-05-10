<?php
    
    //CONECTAR CON LOCALHOST
    function conectaBD() {
        $servername = "localhost";
        $username = "";
        $password = "";
        $database = "";
        
        // Create connection
        $conecta = mysqli_connect($servername, $username, $password, $database);
        if(mysqli_connect_errno()){
            die('<p>Error al conectar al servidor de MySQL: '.mysqli_connect_error().'</p>');
        }

        return $conecta;

    }

    //CONECTAR CON IONOS
    function conectaIonos(){
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