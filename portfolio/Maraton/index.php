<!-- MARATON DE TENERIFE -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no"> <!-- si lo amplia o encoge -->
    <title>Maraton de Tenerife</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"> <!-- animate.css para animaciones -->
</head>
<body>
    
    <header class="headroom">
        <nav class="nav--main wrapper">
            <h1 class="brand animated zoomInDown delay2s">
                <a href="#" class="logo">Maraton de Santa Cruz de Tenerife</a>
            </h1>
            
            <ul class="main_menu resetList" id="ocultable">
                <li class="main_menu-item">
                    <a href="#inscripcion" class="main_menu-link">inscripción</a>
                </li>
                <li class="main_menu-item">
                    <a href="#recorrido" class="main_menu-link">recorrido</a>
                </li>
                <li class="main_menu-item">
                    <a href="#reglamento" class="main_menu-link">reglamento</a>
                </li>
                <li class="main_menu-item">
                    <a href="#contacto" class="main_menu-link">contacto</a>
                </li>
                <li class="main_menu-item">
                    <a href="#sponsors" class="main_menu-link">sponsors</a>
                </li>                
                
                
            </ul>
                <button id="btnMenu" class="btn_menu"><span>menu</span></button>
        </nav>
        
    </header>
    
    <main class="container">
        <?php 
            include 'includes/home.php';
            include 'includes/inscripcion.php';
            include 'includes/recorrido.php';
            include 'includes/reglamento.php';
            include 'includes/contacto.php';
            include 'includes/sponsors.php';
        ?>
        
    </main>
    
    <footer class="piedepagina txt_center" >    
        <div class="end">
        Maratón de Tenerife | <?php echo date("Y"); ?>
        </div>
        
       
       
    </footer>
    
    <script src="js/jquery-3.4.1.min.js"></script> <!-- librerias primero -->
    <script src="js/modaal.min.js"></script>
    <script src="js/flickity.pkgd.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/acordeon.js"></script>
    <script src="js/stickymenu.js"></script>
    <script src="js/main.js"></script>
    
<!--    <script src="js/jquerychanges.js"></script>-->
    
    
</body>
</html>
