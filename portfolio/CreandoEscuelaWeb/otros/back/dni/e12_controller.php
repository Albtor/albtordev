<?php

include "functions.php";

$usuario = $_POST["nombre"];
$dni = $_POST["dni"];
$boolean = compruebaDni($dni);



if ($boolean == false){
    //header('Location: e12_form.php');
    $loginResultado = "Dni INcorrecto";
    
}else {
    $loginResultado = "Dni correcto";
    
}

/* Cuando se quiere el else se niega los dos.  En caso de incluir una pagina
 valida, se podría acceder solo poniendo la url*/

?>