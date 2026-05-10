
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">


</head>
<body>


<div class="div">
<form action="e3_vista.php"class="formulario" method="POST">

  <div class="form-group">
    <h3>Calculos</h3>
    <label for="n1">Numero 1:</label>
    <input name="n1" type="number" class="form-control" id="n1" required>
    
  </div>
  <div class="form-group">
    <label for="n2">Numero 2:</label>
    <input name="n2"  type="number" class="form-control" min="0.00000000001" id="n2" required>
  </div>
  
  <div class="form-group">
    <label for="operacion">Tipo de Operación: </label>
            <select class="form-control" name="operacion" id="operacion" required>
                <option value="Suma">Suma</option>
                <option value="Resta">Resta</option>
                <option value="Multiplicacion">Multiplicación</option>
                <option value="Division">División</option>
            </select>



  <button type="submit" class="btn btn-primary">Calcular</button>

  </div>
 
</form>
</body>
</html>
</div>

