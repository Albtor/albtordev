<?php
  session_start(); //Inicio la sesione start para que se guarde la información de cada sesión
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="CSS/Evaluacion practica 1 css.css">
</head>
<body>
	<header>
		<img src="img/Logo.png" alt="Logo hotel" class="center" width="150"height="150"></img>
		<h1 class="titulo" align="center"><strong>Hotel Portico</strong></h1>
	</header>
  <th><a href="index.php">Home</a></th>
  <th><a href="Registrohotel.php">Registro</a></th>
	<h1 align="center">Login</h1>
	<div class="formulario" style="margin-left: 20%; margin-right: 20%; text-align: left; font-family: arial">

  <form action="mysqllog.php" method="POST">
    <label for="">Usuario</label> <input type="text" name="usuario" required>
    <br>
    <label for="">Password</label> <input type="password" name="password" required>
    <br>
    <input type="submit" value="Login" name="submit1"/>
  </form>
  </div>

 <?php
  
   if (empty($_SESSION['usuario'])){
    echo "<hr>";
   }
  
  $usuarioFound = false;
  $i = 0;
  foreach ($_SESSION["usuario"] as $usuario){
    if ($usuario == $_POST["usuario"]){
      $usuarioFound = true;
      $indiceUsuario = $i;
    } 
    
    ++$i;
  }

  $passwordFound = false;
  $i = 0;
  foreach ($_SESSION["password"] as $password) {
    if (($i == $indiceUsuario) && ($password == $_POST["password"])){
      $indicePassword = $i;
      $passwordFound = true;
      Header('location: Reservas.html'); //si el usuario y clave son 
    } 
      
    ++$i;
  }

  if (isset($_POST['submit1'])){
    if (!(($passwordFound == true && $usuarioFound == true) && ($indiceUsuario == $indicePassword))) {
    
      echo "<h3>El usuario o password son incorrectos. Inténtalo de nuevo<h3>";
    }
  } 
?>

  <script type="text/javascript" src="js/formulario hotel.js"></script>
</body>
</html>
