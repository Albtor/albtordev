<?php
	include "menu_controller.php";
    // include "bd_controller.php";
    $codigo = generaCodigoDefault();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Reserva Landing Page</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
</head>
<body>
    <div class="container">

        	<div class="oferta">
        		<h2 class="oferta-item brand">
        			<a href="#" class="logo">Wild Whale Tenerife</a></h2>
        		<p class="oferta-item oferta-porcentaje"><?php echo $descuento;?></p>
        		<p class="oferta-item oferta-porcentaje_texto">de descuento en excursiones</p>
        		<a href="form.php?cod=<?php echo $codigo;?>" class="oferta-item oferta-btn">
                    <span>reservando aquí</span>
                    <i class="tiny material-icons arrow">arrow_forward</i></a>
        		<div class="oferta-item dotted-box">
        		<p class="oferta-item oferta-introduce_codigo1">Introduce el código descuento</p>
        		<p class="oferta-item oferta-codigo"><strong><?php echo $codigo;?></strong></p>
        		<p class="oferta-item oferta-introduce_codigo2">al realizar tu reserva</p>
        		</div>
        		<p class="oferta-item oferta-validez">Sólo hasta el 31 de Mayo</p>
        	</div>	

        
    </div>
</body>
</html>