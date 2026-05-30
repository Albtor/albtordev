<?php
    // require_once 'controller.php';
    // require_once 'controller2.php';
    $timestamp = date('d/m/Y');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productivity</title>
    <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/stats1.png">
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
    <h1 class="h1_title">Daily Stats </h1>
    <h2>Date: <?php echo $timestamp ?></h2>
    <h2><a href="chart.php" class="link">Chart</a></h2>
    <div class="container2">
        <p>Total <span class="number"><?php echo $escaladosDia+$resueltosDia?></span></p>
    </div>
    
    <div class="container">

        <div class="results">
            <p><span class="number"><?php echo $resueltosDia?></span> Resolved</p>
            <p><span class="number"><?php echo $escaladosDia?></span> Escalated</p>
            
        </div>

        <form action="index.php" method="POST" class="formulario">
            <input type="submit" value="Resolved" name="Resolved">
            <input type="submit" value="Escalated" name="Escalated">
        </form>
    </div>

    <script src="main.js"></script>
</body>
</html>