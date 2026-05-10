<?php
    require "e6_controller.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="productos wrapper grid_100 grid_m_50-50 grid_l_25-25-25-25 gap_1">
   
    <div class="wrapper2 producto1">
        <img src="img/<?php echo $img1?>" alt="">
        <h4><?php echo $titu1?></h4>
        <p><?php echo $desc1?></p>
        <a href="<?php echo $enlace1?>">MAS INFORMACION</a>
    </div>
    <div class="wrapper2 producto2">
        <img src="img/<?php echo $img2?>" alt="">
        <h4><?php echo $titu2?></h4>
        <p><?php echo $desc2?></p>
        <a href="<?php echo $enlace2?>">MAS INFORMACION</a>
    </div>
    <div class="wrapper2 producto3">
    <img src="img/<?php echo $img3?>" alt="">
        <h4><?php echo $titu3?></h4>
        <p><?php echo $desc3?></p>
        <a href="<?php echo $enlace3?>">MAS INFORMACION</a>
    </div>
    <div class="wrapper2 producto4">
        <img src="img/<?php echo $img4?>" alt="">
        <h4><?php echo $titu4?></h4>
        <p><?php echo $desc4?></p>
        <a href="<?php echo $enlace4?>">MAS INFORMACION</a>
    </div>

    <div class="wrapper2 producto5">
        <div class="img5"></div>
        <h4><?php echo $titu4?></h4>
        <p><?php echo $desc4?></p>
        <a href="<?php echo $enlace4?>">MAS INFORMACION</a>
    </div>

</div>

</body>
</html>