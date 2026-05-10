<?php 


//obtener datos del formulario e2_form
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$tipoOperacion = ['suma', 'resta', 'multiplicación', 'división'];

$eleccion = $_POST["operacion"];

if($eleccion == "Suma"){
    $resultado = $n1 + $n2;;
    $operacion = $tipoOperacion[0];
}else if ($eleccion == "Resta"){
    $resultado = $n1 - $n2;
    $operacion = $tipoOperacion[1];
}else if ($eleccion == "Multiplicacion"){
    $resultado = $n1 * $n2;
    $operacion = $tipoOperacion[2];
}else if ($eleccion == "Division"){
    $operacion = $tipoOperacion[3];
    if($n2 != 0){
        $resultado = $n1 / $n2;
        }else{
        $resultado = "incorrecto";
        }

}else{
    $resultado = "Error";
}



?>