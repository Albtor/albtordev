<?php

$usuario = $_POST["user"];
$password = $_POST["contraseña"];


if ($usuario != "Alberto" || $password != "creandoescuela"){
    header('Location: e4_form.php');
    
}else {
    $loginResultado = "Acceso permitido";
    
}

/* Cuando se quiere el else se niega los dos.  En caso de incluir una pagina
 valida, se podría acceder solo poniendo la url*/

?>