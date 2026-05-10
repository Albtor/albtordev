<?php
    require "e8_controller.php";
    error_reporting(E_ALL ^ E_NOTICE);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manejo de archivos JSON</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
 <div class="container">
<h3 class="titulo">Se importa un archivo JSON</h3>
<?php 
    //print_r($cryptos);
  
    foreach($cryptos as $crypto):

?>
    <div class="coches_active">
        <a href="<?php echo $crypto["enlace"]?>"><?php $n?><strong><?php echo $crypto["nombre"]?></strong> <?php echo $crypto["descripcion"]?></a>
    </div>
       
<?php
    $n++;
    endforeach;
?>
</div>


</body>
</html>


