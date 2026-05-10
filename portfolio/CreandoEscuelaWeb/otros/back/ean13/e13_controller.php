<?php

include "functions.php";

$ean = $_POST["ean"];
$boolean = compruebaEAN($ean);



if ($boolean == false){
    header('Location: e13_form.php?error=1'); //añado ?error=1
    //$loginResultado = "Ean Incorrecto";
    
}else {
    $loginResultado = "Ean correcto";
    
}

/* Cuando se quiere el else se niega los dos.  En caso de incluir una pagina
 valida, se podría acceder solo poniendo la url*/

?>