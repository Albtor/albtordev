<?php
  session_start(); //Inicio la sesione start para que se guarde la información de cada sesión
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Tienda</title>
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
                        <li><a href="Cita.php">Cita</a></li>
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

    <section class="site-hero overlay page-inside" style="background-image: url(img/vetmegastore.jpg)">
      <div class="container">
        <div class="row site-hero-inner align-items-center">
          <div class="col-md-7 text-left mr-auto">
            <h1 class="heading" data-aos="fade-up">Tienda</h1>
          </div>
        </div>
        <a href="#next-section" class="smoothscroll scroll-down">Deslizar hacia abajo</a>
      </div>
    </section>
    <!-- END section -->


    <section class="section bg-light post" id="next-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row mb-5">
              <div class="col-md-6">
                <div class="media media-custom d-block mb-4">
                  <a href="blog-single.html" class="mb-4 d-block"><img src="img/pettoys.jpg" alt="Image placeholder" class="img-fluid"></a>
                  <div class="media-body">
                    <span class="meta-post">Juguetes</span>
                    <h2 class="mt-0 mb-3"><a href="#">Con qué jugamos hoy?</a></h2>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                 <div class="media media-custom d-block mb-4">
                  <a href="blog-single.html" class="mb-4 d-block"><img src="img/t-food.jpg" alt="Image placeholder" class="img-fluid"></a>
                  <div class="media-body">
                    <span class="meta-post">Comida y Nutrición</span>
                    <h2 class="mt-0 mb-3"><a href="#">Para el correcto desarrollo y salud</a></h2>
                  </div>
                </div>
              </div>


              <div class="col-md-6">
                <div class="media media-custom d-block mb-4">
                  <a href="blog-single.html" class="mb-4 d-block"><img src="img/t-shampoo.jpg" alt="Image placeholder" class="img-fluid"></a>
                  <div class="media-body">
                    <span class="meta-post">Geles y Champús</span>
                    <h2 class="mt-0 mb-3"><a href="#">Los mejores productos para su limpieza</a></h2>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                 <div class="media media-custom d-block mb-4">
                  <a href="blog-single.html" class="mb-4 d-block"><img src="img/t-clothes.jpg" alt="Image placeholder" class="img-fluid"></a>
                  <div class="media-body">
                    <span class="meta-post">Moda</span>
                    <h2 class="mt-0 mb-3"><a href="#">Para estar a la última en el parque</a></h2>
                  </div>
                </div>
              </div>


              


            </div>

            <div class="row">
              <div class="col-md-12">
                <nav role="navigation">
                  <ul class="pagination custom-pagination pagination-lg">
                    <li class="page-item active">
                      <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item ">
                      <a class="page-link " href="#">2</a>
                    </li>
                    <li class="page-item ">
                      <a class="page-link" href="#">3</a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
          <!-- END content -->
          <div class="col-md-4">
            <div class="row">

              <div class="col-md-11 ml-auto">


                <form action="#" class="sidebar-search">
                  <div class="form-group">
                    <span class="fa fa-search icon-search"></span>
                    <input type="text" class="form-control search-input"  placeholder="Search...">
                  </div>
                </form>    

                <div class="side-box">
                  <h2 class="heading">Temas populares</h2>
                  <ul class="post-list list-unstyled">
                    <li>
                      <a href="blog-single.html" class="d-flex">
                        <span class="mr-3 image"><img src="img/p1.jpg" alt="Image placeholder" class="img-fluid"></span>
                        <div>
                          <span class="meta">Febrero 27, 2018</span>
                          <h3>Cinco motivos para darle lo que quiera</h3>
                        </div>
                      </a>
                    </li>  
                    <li>
                      <a href="blog-single.html" class="d-flex">
                        <span class="mr-3 image"><img src="img/pcat.jpg" alt="Image placeholder" class="img-fluid"></span>
                        <div>
                          <span class="meta">Marzo 15, 2018</span>
                          <h3>Como conquistar a nuestros amigos felinos</h3>
                        </div>
                      </a>
                    </li>  
                    
                    <li>
                      <a href="blog-single.html" class="d-flex">
                        <span class="mr-3 image"><img src="img/pbird.jpg" alt="Image placeholder" class="img-fluid"></span>
                        <div>
                          <span class="meta">Septiembre 12, 2018</span>
                          <h3>Y si realmente no quieren vivir en jaulas?</h3>
                        </div>
                      </a>
                    </li>  
                    <li>
                      <a href="blog-single.html" class="d-flex">
                        <span class="mr-3 image"><img src="img/t-horse.jpg" alt="Image placeholder" class="img-fluid"></span>
                        <div>
                          <span class="meta">Agosto 24, 2018</span>
                          <h3>El caballo que susurraba a los hombres</h3>
                        </div>
                      </a>
                    </li>  
                    <li>
                      <a href="blog-single.html" class="d-flex">
                        <span class="mr-3 image"><img src="img/t-turtle.jpg" alt="Image placeholder" class="img-fluid"></span>
                        <div>
                          <span class="meta">Abril 1, 2018</span>
                          <h3>Descubre a la nueva campeona de skate</h3>
                        </div>
                      </a>
                    </li>  
                  </ul>
                </div>

                <div class="side-box">
                  <h2 class="heading">Categorias</h2>
                  <ul class="post-categories list-unstyled">
                    <li><a href="#">Nutrición <span class="count">(12)</span></a></li>
                    <li><a href="#">Salud <span class="count">(4)</span></a></li>
                    <li><a href="#">Cuidados <span class="count">(23)</span></a></li>
                    <li><a href="#">Complementos <span class="count">(8)</span></a></li>
                  </ul>
                </div>

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