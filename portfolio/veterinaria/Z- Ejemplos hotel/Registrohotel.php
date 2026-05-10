<?php
  session_start(); //Inicio la sesione start para que se guarde la información de cada sesión

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="CSS/Evaluacion practica 1 css.css">
</head>
<body>
	<header>
		<img src="img/Logo.png" alt="Logo hotel" class="center" width="150"height="150"></img>
		<h1 class="titulo" align="center"><strong>Hotel Portico</strong></h1>

	</header>
  <th><a href="index.php">Home</a></th>
	<th><a href="Loginhotel.php">Login</a></th>
	<h1 align="center">Registro</h1>
	<div class="formulario" style="margin-left: 20%; margin-right: 20%; text-align: left; font-family: arial">
	<form action="mysqlreg.php" method="POST">
        <label for="">Nombre</label> <input type="text" name="nombre" required>
        <br>
        <label for="">Usuario</label> <input type="text" name="usuario" required>
        <br>
        <label for="">Password</label> <input type="password" name="password" required>
        <br>
        <input type="submit" value="Registrarse" name="submit"/>
      </form>
  </div>

  <?php
  if (empty($_SESSION["nombre"])){
    $_SESSION["nombre"] = array();
    $_SESSION["usuario"] = array();
    $_SESSION["password"] = array();
  } 

  if (isset($_POST['submit'])){
    array_push($_SESSION["nombre"], $_POST["nombre"]);
    array_push($_SESSION["usuario"], $_POST["usuario"]);
    array_push($_SESSION["password"], $_POST["password"]);
    echo "<h3>Gracias por registrarte " . $_POST["nombre"]. "</h3>"; 
  } 
?>

  <script type="text/javascript" src="js/formulario hotel.js"></script>
</body>
</html>
