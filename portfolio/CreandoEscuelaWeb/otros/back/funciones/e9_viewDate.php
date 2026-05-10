<?php 

    //FUNCIONES DATE https://www.php.net/manual/es/ref.datetime.php
    date_default_timezone_set ('UTC');
    $hoy_array = localtime();
    $hoy_arrayAsoc = getdate();
    $hoy = $hoy_arrayAsoc['mday']."/".$hoy_arrayAsoc['mon']."/".$hoy_arrayAsoc['year']." ".$hoy_arrayAsoc['hours'].":".$hoy_arrayAsoc['minutes'];
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title>Funciones</title>
</head>
<body>

<h2>Funciones de Date</h2>
Hoy <?php print_r($hoy_array);?><br> 
Hoy2 <?php print_r($hoy_arrayAsoc);?><br> 
Hoy es:  <?php echo $hoy;?><br> 
<?php 

?>

</body>
</html>