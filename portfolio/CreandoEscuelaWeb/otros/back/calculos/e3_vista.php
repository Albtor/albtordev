<?php
    require_once "e3_datos.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operaciones</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

<div class="resultado">
<?php 
 echo "El resultado de la $operacion es <span class='result'>$resultado</span>" ;
?>
</div>

<div class="resultado">
    <?php if($resultado != "incorrecto"){?>
        El resultado de la <?php echo $operacion?> <?php echo $n1?> y <?php echo $n2?> es <?php echo $resultado?>;
    <?php }else {?>
    <div>
    No se puede dividir por 0
    </div>
    <?php }?>
</div>





    <!-- <div>
        <form class="formulario" action="" method="POST" >
            <title>Calculos</title>
            <label for="num1">Introduce un numero</label>
            <input type="text" name="num1" required>

            <label for="num2"></label>
            <input type="text" name="num2"required>

            <label for="operacion"></label>
            <select name="operacion" id="operacion">
                <option value="">Suma</option>
                <option value="">Resta</option>
                <option value="">Multiplicacion</option>
                <option value="">Division</option>
            </select>
                <button type="submit" name="enviar" id="enviar">Calcular</button>
        </form>
    </div> -->
    
</body>
</html>