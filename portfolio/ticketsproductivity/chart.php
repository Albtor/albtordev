<?php
    require_once 'controller.php';
    $timestamp = date('d/m/Y');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart</title>
    <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/stats1.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.js"></script>
    <link rel="stylesheet" href="chart.css">
    
</head>
<body>
    <h1 class="h1_title">Charts</h1>

    <div class="container">
    <canvas id="myChartDay" style="background-color: #fff;" ></canvas>
    </div>

    <div class="container">
    <canvas id="myChartThisWeek" style="background-color: #fff;" ></canvas>
    </div>

    <div class="container">
    <canvas id="myChartThisMonth" style="background-color: #fff;" ></canvas>
    </div>



    
    <script src="main.js"></script>

</body>
</html>