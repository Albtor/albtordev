<?php
	include "menu_controller.php";
    // include "bd_controller.php";
    $codigo = $_GET["cod"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Formulario</title>
	<link rel="stylesheet" type="text/css" href="css/form.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
</head>
<body>
    <div class="container">

        	<div class="oferta form">
        		<form action="bd_controller.php" class="formulario" method="POST">
					<h2 class="form-item brand">
						<a href="#" class="logo">Wild Whale Tenerife</a>
					</h2>
					<p class="oferta-item form-title">Reserva ahora</p>
					<label for="nombre">Nombre</label>
					<input type="text" name="nombre" id="nombre">
					<label for="nombre">Apellidos</label>
					<input type="text" name="apellidos" id="apellidos">
					<label for="email">Email</label>
					<input type="email" name="email" id="email">
					<label for="codigo">Codigo Descuento</label>
					<input type="text" name="codigo" id="codigo" value="<?php echo $codigo?>" readonly>
					
				
					<div class="btn">
						<button href="bd_controller.php" class="enviar-item enviar-btn" type="submit">Enviar</button>
					</div>
					
				</form>
        	</div>	

        
    </div>
</body>
</html>