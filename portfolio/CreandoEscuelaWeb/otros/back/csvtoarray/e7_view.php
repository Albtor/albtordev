<?php
    require "e7_controller.php";
    error_reporting(E_ALL ^ E_NOTICE);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manejo de archivos CSV</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
 <div class="container">
<h3 class="titulo">Se muestra un listado de coches con atributos desde un csv usando un foreach</h3>
<?php 
    /*
    print_r($csv);  
    echo "<br>".$csv[1]["marca"] . "<br>";
    */

    $contador = 0;
    foreach($csv as $car):
        if($car["activo"]==1):
?>
    <div class="coches_active">
        La marca <strong><?php echo $car["marca"]?></strong> tiene en stock  <strong><?php echo $car["stock"]?></strong>  unidades y se han vendido  <strong><?php echo $car["vendido"]?></strong>  unidades - active.
    </div>

        <?php else:?>

    <div class="coches_inactive">
        La marca <strong><?php echo $car["marca"]?></strong> tiene en stock  <strong><?php echo $car["stock"]?></strong>  unidades y se han vendido  <strong><?php echo $car["vendido"]?></strong>  unidades - inactive.
    </div>
<?php
    endif;
    endforeach;


    /*
    echo $car["marca"]
    echo $car["stock"]
    echo $car["vendido"]*/ 
?>
</div>

<div class="container">
<h3 class="titulo2">Se muestra un listado de coches con atributos con cada linea de un color</h3>
<?php 
    $contador = 0;
    foreach($csv as $car):
        if($contador%2 == 0):
?>
    <div class="color1">
        La marca <strong><?php echo $car["marca"]?></strong> tiene en stock  <strong><?php echo $car["stock"]?></strong>  unidades y se han vendido  <strong><?php echo $car["vendido"]?></strong>  unidades - active.
    </div>

        <?php else:?>

    <div class="color2">
        La marca <strong><?php echo $car["marca"]?></strong> tiene en stock  <strong><?php echo $car["stock"]?></strong>  unidades y se han vendido  <strong><?php echo $car["vendido"]?></strong>  unidades - inactive.
    </div>
<?php
    endif;
    $contador++;
    endforeach;
?>
</div>


<div class="container">
<h3 class="titulo2">Se muestra un listado de coches con atributos desde un csv usando un foreach</h3>
<?php 


    $contador = 0;
    foreach($csv as $car):
        if($contador%2 == 0):
?>
    <div class="color1">
        La marca <strong><?php echo $car["marca"]?></strong> tiene en stock  <strong><?php echo $car["stock"]?></strong>  unidades y se han vendido  <strong><?php echo $car["vendido"]?></strong>  unidades - active.
    </div>

        <?php else:?>

    <div class="color2">
        La marca <strong><?php echo $car["marca"]?></strong> tiene en stock  <strong><?php echo $car["stock"]?></strong>  unidades y se han vendido  <strong><?php echo $car["vendido"]?></strong>  unidades - inactive.
    </div>
<?php
    
    endif;
    $current = 
    $contador++;
    endforeach;
?>
</div>

</body>
</html>


