<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CONTACTO</title>
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
    <?php
        include "header.php";
    ?>
    <!-- https://www.php.net/manual/es/function.mail.php 
https://www.teenvio.com/es/legislacion/como-adecuar-los-formularios-web-para-el-registro-de-suscriptores-al-rgpd/-->
   
<!-- <a href="mailto:"></a> -->
<div class="contact-section">

<div class="titulo">
  <h1>CONTACTAME</h1>
  </div>

<!-- <div class="border"></div> -->
<form class="contact-form" action="enviar_mail.php" method="post">
  <input type="hidden" data-form-email="true">

  <input type="text" class="contact-form-text" name="nombre" required="" placeholder="Nombre" >
  <input type="email" class="contact-form-text" name="email" required="" placeholder="Email" >
  <input type="tel" class="contact-form-text" name="telefono" placeholder="Telefono" >
  <textarea class="contact-form-text" name="mensaje" placeholder="Mensaje" ></textarea>


  <div class="rgpd-group">
  <input name="rgpd" type="checkbox" class="form-check-input" id="exampleCheck1" required>
  <label class="form-check-label" for="exampleCheck1"><span>He leido y acepto la <a href="privacidad.php" class="modaal-ajax politica">politica de privacidad</a></span></label>
  </div>

  <input type="number" class="contact-form-text" name="spam" placeholder="Resultado de 2+2"  required>
  <button type="submit" class="contact-form-btn">ENVIAR</button>

</form>


</div>


    <?php
       include "footer.php";
    ?>

    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="js/jquery-3.4.1.min.js"></script> <!-- librerias primero -->
    <script src="js/modaal.js"></script>
    <script src="js/main.js"></script>


</body>
</html>