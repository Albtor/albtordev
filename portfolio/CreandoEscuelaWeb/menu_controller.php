<?php
   $data = file_get_contents("datos.json");
   $items_menu = json_decode($data, true); //true es para que cree un array, de lo contrario seria un objeto

   
?>

    