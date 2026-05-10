<?php // de esta manera guardo cookies
$sesion=isset($_COOKIE["visita"])?$_COOKIE["visita"]:null;

// Si la $sesion (la cookie) tiene ya un valor, se le incrementa el valor.
if($sesion!=null){
  $sesion+=1;
  setcookie("visita", $sesion, time()+(86400 * 30)); // 
  //echo "Hola por $sesion vez !";
}
// En cambio, si no tiene valor, es decir, no se haya accedido a la página
// nunca, se le da un valor principal a la cookie.
else{
  setcookie("visita", 1);
  //echo "Bienvenid@ a nuestra clinica por primera vez !";
}

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Mi Mascota SA</title>
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
                        <li><a href="Tienda.php">Tienda</a></li>
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
                          <h3>Conecta con nosotros</h3>
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

    <section class="site-hero overlay" style="background-image: url(img/v1.jpg)">
      <div class="container">
        <div class="row site-hero-inner align-items-center">
          <div class="col-md-7 text-left ml-auto">
            <h1 class="heading" data-aos="fade-up">Cuidamos de ellos</h1>
            <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100">Descrubre la clínica veterinaria más cool de la isla</p>
            <p data-aos="fade-up" data-aos-delay="100"><a href="Login.php" class="btn uppercase btn-primary mr-md-2 mr-0 mb-3 d-sm-inline d-block">Login</a> <a href="Cita.php" class="btn uppercase btn-outline-light d-sm-inline d-block">Cita</a></p> 
          </div>
          </div>
        </div>
        <a href="#next-section" class="smoothscroll scroll-down">Deslizar hacia abajo</a>
      </div>
    </section>
    <!-- END section -->

    <section class="section visit-section" id="next-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="heading" data-aos="fade-up">Nuestros servicios</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-up">
            <a href="Cita.php"><img src="img/dog-groomed.jpg" alt="Image placeholder" class="img-fluid rounded"> </a>
            <h3><a href="property-single.html">Peluquería</a></h3>
            <div class="reviews-star float-left">
              Será la envidia del parque con uno de nuestros modernos looks 
            </div>
          </div>
          <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-up" data-aos-delay="100">
            <a href="Cita.php"><img src="img/v-dogsurg.jpg" alt="Image placeholder" class="img-fluid rounded"> </a>
            <h3><a href="property-single.html">Diagnóstico</a></h3>
            <div class="reviews-star float-left">
              Análisis de síntomas y espacios para cirugía y curas
            </div>
          </div>
          <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-up" data-aos-delay="200">
            <a href="Tienda.php"><img src="img/pettoys.jpg" alt="Image placeholder" class="img-fluid rounded"> </a>
            <h3><a href="property-single.html">Tienda</a></h3>
            <div class="reviews-star float-left">
              Complementos, comida, ropa... aquí lo encontrarás todo
            </div>
          </div>
          <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-up" data-aos-delay="300">
            <a href="Cita.php"><img src="img/v-dogdaycare.jpg" alt="Image placeholder" class="img-fluid rounded"> </a>
            <h3><a href="property-single.html">Guardería</a></h3>
            <div class="reviews-star float-left">
              Déjale que se divierta con sus amigos y relájate
            </div>
          </div>


        

        </div>
      </div>
    </section>
    <!-- END section -->
  
    <section class="section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2>Nuestros clientes</h2>
          </div>
        </div>
        <div class="js-carousel-1 owl-carousel">

          <div class="testimonial text-center">
            <div class="author-image mb-3">
              <img src="img/person_1.jpg" alt="Image placeholder" class="rounded-circle">
            </div>
            <blockquote>

              <p>&ldquo;Súper ENCANTADA... tanto cariño con mi mascota como conocimiento y vocación evidente por lo que hace. Me sentí en confianza ya segura de saber que tengo a mi mascota con una profesional de calidad.&rdquo;</p>
            </blockquote>
            <p><em>&mdash; La Pili</em></p>
            
          </div>

          <div class="testimonial text-center">
            <div class="author-image mb-3">
              <img src="img/person_2.jpg" alt="Image placeholder" class="rounded-circle">
            </div>
            <blockquote>
              <p>&ldquo;Buenisimo atendimiento a los animales y muy buena información a los acompañantes.&rdquo;</p>
            </blockquote>
            <p><em>&mdash; El Johnatan</em></p>
          </div>

          <div class="testimonial text-center">
            <div class="author-image mb-3">
              <img src="img/person_3.jpg" alt="Image placeholder" class="rounded-circle">
            </div>
            <blockquote>

              <p>&ldquo;Lo he flipado ! Bueno bonito y barato. Además te dan de picar en la sala de espera !&rdquo;</p>
            </blockquote>
            <p><em>&mdash; Pepe Sancho</em></p>
          </div>

        </div>
      </div>
    </section>
    
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <img src="img/vet-veterinaria4.jpg" alt="Image" class="img-fluid rounded img-shadow">
          </div>
          <div class="col-lg-4 ml-auto">
            <h3 class="mb-3">Sobre la clínica</h3>
            <p> La clínica fue fundada en 1995. Desde entonces, hemos ido creciendo año a año, aumentando tanto nuestros servicios como el espacio físico para dar un servicio totalmente integral. </p>
            <p>Actualmente contamos con un equipo de veterinarios a su disposición que se encargará de darle a su mascota el trato que se merece. Un equipo profesional, cualificado y estable que día a día atiende con empeño y dedicación a nuestros fieles visitantes.</p>
            <p><img src="img/signature.jpg" alt="Image" class="img-fluid w-25"></p>
            
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4 text-center">
            <span class="ion-android-calendar display-3 text-primary"></span>
            <h3 class="card-title">Solucionamos a tiempo</h3>
            <p>Damos el 100% para volver a tu mascota a sus niveles habituales de felicidad</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4 text-center">
            <span class="ion-android-create display-3 text-primary"></span>
            <h3 class="card-title">Opiniones contrastadas</h3>
            <p>Una reputada trayectoria de avalada por nuestros clientes de toda la vida</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4 text-center">
            <span class="ion-android-hangout display-3 text-primary"></span>
            <h3 class="card-title">Emergencias 24/7</h3>
            <p>Atendemos cualquier urgencia en nuestro número de teléfono</p>
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