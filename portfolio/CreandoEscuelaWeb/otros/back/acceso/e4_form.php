<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acceso</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">

</head>
<body>
<div class="div">
<form action="e4_view.php"class="formulario" method="POST">

  <div class="form-group">
    <h3>Login</h3>
    <label for="user">User:</label>
    <input name="user" type="text" class="form-control" id="user" required>
    
  </div>
  <div class="form-group">
    <label for="contraseña">Password:</label>
    <input name="contraseña"  type="password" class="form-control"  id="contraseña" required>
  </div>
  

  <button type="submit" class="btn btn-primary">Acceder</button>
  <p class="message">Crea una nueva <a href="#">cuenta</a></p>
  </div>

</body>
</html>