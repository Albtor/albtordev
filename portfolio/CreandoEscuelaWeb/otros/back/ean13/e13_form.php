<?php
  $mensaje="";
  if (isset($_GET["error"])):
      if($_GET["error"]==1):
      $mensaje = "Codigo incorrecto";
      endif;
  endif;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comprobación EAN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">

</head>
<body>
<div class="div">
<form action="e13_view.php"class="formulario" method="POST">

  <div class="form-group">
  <h3>Comprobar Ean</h3>
    <label for="ean">Ean:</label>
    <input name="ean"  type="text" class="form-control"  id="ean"  required><?php echo $mensaje ?>
    
  </div>
  
  <button type="submit" class="btn btn-primary">Verificar</button>
 
  </div>

</body>
</html>