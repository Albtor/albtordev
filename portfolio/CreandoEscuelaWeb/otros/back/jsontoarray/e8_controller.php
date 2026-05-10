<?php

//https://www.php.net/manual/es/function.json-decode.php

$data = file_get_contents("datos2.json");
$cryptos = json_decode($data, true); //true es para que cree un array, de lo contrario seria un objeto

$data1 = file_get_contents("datos.json");
$cryptos2 = json_decode($data, true);

?>