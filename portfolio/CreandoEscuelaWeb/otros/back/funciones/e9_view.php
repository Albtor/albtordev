<?php 
    //FUNCIONES STRING https://www.php.net/manual/es/ref.strings.php
    $texto = " Lo que el viento se llevó";
    $letras = strlen($texto); //Strlen:  devuelve la longitud de un string con espacios incluidos
    $espacios = substr_count($texto, " "); //substr_count: muestra el número de veces que se repite un substring, en este caso el espacio
    $caracteres = $letras - $espacios;
    $texto_trim = trim($texto, " \t."); //trim() elimina espacios al principio y final de un string

    //FUNCIONES NUMBERS https://www.php.net/manual/es/ref.math.php

    $lang= "en";
    if($lang =="en")
        $decimal=".";
    else{
        $decimal=",";
    }

    $precio = 125.35;
    $dto = 0.15;
    $descontar= round($precio * $dto,2);
    $porcentaje = round($dto * 100);
    $precio_dto = $precio - ($precio * $dto);
    $precio_formateado = str_replace(".",",", $precio_dto);
    $precio_formateado2 = str_replace(".",$decimal, $precio_dto);

    //FUNCIONES DATE https://www.php.net/manual/es/ref.datetime.php
    $hoy_array = localtime();
    $hoy_arrayAsoc = getdate();
    $diaHoy = $hoy_arrayAsoc['mday']."/".$hoy_arrayAsoc['mon']."/".$hoy_arrayAsoc['year']." ".$hoy_arrayAsoc['hours'].":".$hoy_arrayAsoc['minutes'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title>Funciones</title>
</head>
<body>

<h2>Funciones de String</h2>
La frase "<?php echo $texto;?>" tiene <?php echo $letras;?> letras y <?php echo $espacios;?> espacios. <br>
Total: <?php echo $caracteres;?> caracteres (sin espacios).<br>
<?php echo $texto_trim;?>


<h2>Funciones de Numeros</h2>
El precio redondeado con ceil() de <?php echo $precio;?>  es : <?php echo ceil($precio);?><br>
El precio redondeado con floor() de <?php echo $precio;?>  es : <?php echo floor($precio);?><br>
El precio redondeado con round() de <?php echo $precio;?>  es : <?php echo round($precio);?><br>
El descuento que se aplica de <?php echo $porcentaje;?>% es de:  <?php echo $descontar;?>€<br> 
El precio final con descuento aplicado es de: <?php echo $precio_dto;?>€<br> 
El precio final con descuento aplicado y redondeado es de: <?php echo round($precio_dto,2);?>€<br> 
El precio final con descuento aplicado y formateado con coma (,) es de: <?php echo $precio_formateado;?>€<br> 
The final price for english, with $decimal: <?php echo $precio_formateado2;?>€<br> <br> 

El producto tiene un precio de: <?php echo $precio;?>€<br> 
Le aplico un descuento de <?php echo $porcentaje;?>%<br> 
Y se me queda en <?php echo round($precio_dto,2);?>€<br>


<h2>Funciones de Date</h2>
Hoy <?php print_r($hoy_array);?><br> 
Hoy2 <?php print_r($hoy_arrayAsoc);?><br> 
Hoy es:  <?php echo $diaHoy;?><br> 
<?php 

?>

</body>
</html>