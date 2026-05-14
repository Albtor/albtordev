<?php
    //error_reporting(0);
    require_once "../funciones.php"; //funciones.php por defecto
    $conecta=conexionBD();

    $fraseSQL="SELECT * FROM barco_reservas";
    $resultado=mysqli_query($conecta,$fraseSQL);

    $numero_registros=mysqli_num_rows($resultado);
?>