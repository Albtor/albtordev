<?php
    include "funciones.php"; 
?>

<?php
   $data = file_get_contents("datos.json");
   $ofertas = json_decode($data, true); //true es para que cree un array, de lo contrario seria un objeto
   // var_dump($ofertas);
   // echo $ofertas[1]["descuento"];

   foreach($ofertas as $oferta){
        $descuento = $oferta["descuento"];
     }
?>

    