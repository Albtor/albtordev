<?php
error_reporting(E_ALL ^ E_NOTICE);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">

</head>
<body>
<div class="div">
<form action="e6_view.php"class="formulario" method="POST">

  <div class="form-group">
    <h3><label for="vino">Vino:</label></h3>
      <input type="radio" name="vino" value="blanco" checked> Blanco<br>
      <input type="radio" name="vino" value="rosado"> Rosado<br>
      <input type="radio" name="vino" value="tinto"> Tinto<br>
    
  </div>

  

  <div class="form-group">
    <h3><label for="postre">Postre:</label></h3>
      <input type="checkbox" name="postre1" value="tiramisu"> Tiramisu<br>
      <input type="checkbox" name="postre2" value="cheesecake"> Cheesecake<br>
      <input type="checkbox" name="postre3" value="tresleches"> Tres leches<br>
    
  </div>
  
  <div class="form-group">
    <h3><label for="precio">Precio:</label></h3>
    <input class="slider" type="range" name="precio" min="1" max="50"><br>
  </div>
  
  <button type="submit" class="btn btn-primary">Pedir</button>

  </div>

</body>
</html>