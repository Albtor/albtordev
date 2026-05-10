<?php
  session_start(); //Inicio la sesione start para que se guarde la información de cada sesión
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Contacto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400|Playfair+Display:400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">
    
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <header class="site-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-4 site-logo" data-aos="fade"><a href="index.php">Mi Mascota SA</a></div>
          <div class="col-8">


            <div class="site-menu-toggle js-site-menu-toggle"  data-aos="fade">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <!-- END menu-toggle -->

            <div class="site-navbar js-site-navbar">
              <nav role="navigation">
                <div class="container">
                  <div class="row full-height align-items-center">
                    <div class="col-md-6">
                      <ul class="list-unstyled menu">
                        <li class="active"><a href="index.php">Inicio</a></li>
                        <li><a href="about.php">Sobre nosotros</a></li>
                        <li><a href="cita.php">Cita</a></li>
                        <li><a href="tienda.php">Tienda</a></li>
                        <li><a href="contact.php">Contacto</a></li>
                        <li><a href="registro.php">Registro</a></li>
                        <li><a href="login.php">Login</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6 extra-info">
                      <div class="row">
                        <div class="col-md-6 mb-5">
                          <h3>Información de contacto</h3>
                          <p>C/ Padilla 9 <br> Santa Cruz de Tenerife</p>
                          <p>Horarios: L-v de 9 a 13 y de 16 a 19.</p>
                          <p>mimascota@gmail.com</p>
                          <p>Teléfono fijo: 922555555</p>
                          <p>Urgencias 24h: 618888888</p>
                          
                        </div>
                        <div class="col-md-6">
                          <h3>Connecta con nosotros</h3>
                          <ul class="list-unstyled">
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Instagram</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- END head -->

    <section class="site-hero overlay page-inside" style="background-image: url(img/veterinary-tests-cat.jpg)">
      <div class="container">
        <div class="row site-hero-inner align-items-center">
          <div class="col-md-7 text-left mr-auto">
            <h1 class="heading" data-aos="fade-up">Contacto</h1>
          </div>
        </div>
        <a href="#next-section" class="smoothscroll scroll-down">Deslizar hacia abajo</a>
      </div>
    </section>
    <!-- END section -->


    <section class="section bg-primary contact-section" id="next-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            
            <form action="#" method="post" class="bg-white p-md-5 p-4 mb-5" style="margin-top: -150px;">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Nombre</label>
                  <input type="text" id="name" class="form-control " required>
                </div>
                <div class="col-md-6 form-group">
                  <label for="phone">Apellidos</label>
                  <input type="text" id="phone" class="form-control " required>
                </div>
              </div>
          
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" class="form-control " required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="password">Teléfono</label>
                  <input type="password" id="password" class="form-control " required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message">Escribe tu mensaje</label>
                  <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="submit" value="Enviar mensaje" class="btn btn-primary">
                </div>
              </div>
            </form>

          </div>
          <div class="col-md-5">
            <div class="row">
              <div class="col-md-10 ml-auto contact-info">
                <p><span class="d-block">Dirección:</span> <span> C/ Padilla 9 Santa Cruz de Tenerife</span></p>
                <p><span class="d-block">Teléfono:</span> <span>922555555 </span></p>
                <p><span class="d-block">Urgencias 24h:</span> <span>618888888  </span></p>
                <p><span class="d-block">Email:</span> <span> mimascota@gmail.com</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    
    <?php
    include "Footer.php";
    ?>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
    
    
  </body>
</html>