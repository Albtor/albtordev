<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Alberto - Creando Escuela</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/flickity.css" media="screen">

</head>
<body class="container">

    <?php
        include "header.php";
    ?>

    <main class="principal">
        <div class="principal-contenido">
            <div class="curso-text">
                <h1>Master finalizado</h1>
                <p>Esta es una página resumen con los detalles y proyectos del máster realizado por mi en Creando Escuela durante el curso 2019/2020.</p>
                <p>Puedes ver los trabajos realizados en la sección <a href="proyectos.php">Proyectos</a> </p>
                <div>
                    <p>Ver detalles del curso en la web de <a href="https://creandoescuela.com/cursos/diseno-y-desarrollo-de-aplicaciones-web/tecnico-en-diseno-y-desarrollo-web">Creando Escuela</a></p>
                </div>
            </div>
        
            <div>
                <img src="img/masterfoto.png" alt="" class="fotocurso">
            </div>
        </div>
    </main>

    <?php
        include "footer.php";
    ?>
    
    <script src="js/jquery-3.4.1.min.js"></script> <!-- librerias primero -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="js/modaal.js"></script>
    <script src="js/flickity.pkgd.js"></script>
    <script src="js/main.js"></script>
    
</body>
</html>