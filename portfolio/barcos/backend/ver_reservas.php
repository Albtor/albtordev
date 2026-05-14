<?php
    include "ver_reservas_controller.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1600, initial-scale=1.0">
    <title>Ver reservas</title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>codigo</th>
            <th>fecha</th>
            <th>nombre</th>
        </tr>
    <?php
        if ($numero_registros==0): 
    ?>
        <tr>
            <th>0 registros</th>
        </tr>    
    <?php
        else:
            while ($fila = mysqli_fetch_array($resultado)):
    ?>
        <tr>
            <th><?php echo $fila['id'] ?></th>
            <th><?php echo $fila['codigo'] ?></th>
            <th><?php echo $fila['fecha'] ?></th>
            <th><?php echo $fila['nombre'] ?></th>
        </tr>
    <?php
            endwhile;
        endif;
    ?>
    </table>
</body>
</html>