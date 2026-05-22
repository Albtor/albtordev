<?php
   include "controllers/controller_new_contact.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" 
  content="I'm a front end web developer. This is a portfolio site with my previous projects, skills and ways to get in touch. Let's work together, make money and have fun">
  <meta name="keywords" content="frontend, web, development, layout, maquetador, entwickler, developeur">
  <meta name="author" content="AlbTorDev">

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/styles.css">
  <title>AlbTorDev</title>
  <link rel="shortcut icon" type="image/png" href="img/icons/laptop.png"/>
  
</head>
<body>

  <header class="full-screen-header">
    <nav class="nav nav-top mynav nav--main">
      <a href="#"><img class="logo" src="img/logos/albtordev.png" alt="Rui Albe Logo"></a>
      <ul class="nav-list" id="ocultable">
        <li class="main_menu-item"><a href="#about" class="main_menu-link">About</a></li>
        <li class="main_menu-item"><a href="#portfolio" class="main_menu-link">Work</a></li>
        <li class="main_menu-item"><a href="#section" class="main_menu-link">Skills</a></li>
        <li class="main_menu-item"><a href="#contact" class="main_menu-link">Contact</a></li>
      </ul>
      <!-- Button -->
      <button id="btnMenu" class="btnMenu btn_menu">
        <span>menu</span>
      </button>
      
    </nav>
    <h1 class="title"><span class="colortitle">Alb</span>Tor</h1>
    <span class="sub-title"><span class="colortitle">Mobile & Web</span> Development</span>
    <a class="btn btn-grow" href="#about">More</a>
    <a href="#about"><img class="scroll-down-icon" src="img/arrow_down.svg" alt="Scroll Down Icon"></a>
    <div class="credit">Photo by Nathan da Silva on Unsplash</div>
  </header>

  <main>

  <section class="section about" id="about">
      <div class="pricing-cards-container">
      
      <h2 class="aboutme_h2">About Me</h2>
      <div class="about_images">
      <div class="circle circle1">
        <img src="img/hero.jpg" alt="me">
      </div>
      <div class="circle circle2">
        <img src="img/code.jpg" alt="code">
      </div>
      </div>
        <div class="aboutme">
           
            <p>I'm Alberto. I code applications and websites.</p>
            <p>I'm passionate lately about back end and mobile development.</p>
            <p>For apps, I code Android applications with Kotlin and Android Studio.</p>
            <p>For web, I use primarily HTML, CSS, Javascript, PHP and MySQL.</p>
            <p>Currently working with API's, Data transfer and security. I also like new technologies like React and Blockchain.</p>
        </div>
        
      </div>
    </section>
    

    <section class="section section-accent portfolio" id="portfolio">
      
      <div class="pricing-cards-container">
      <h2 class="portfolio_title">Portfolio</h2>
      <div class="portfolio">

        <div class="box">
        <a href="https://vinosanaga.secretsofthejungle.com"> //  portfolio/comingsoon/index.html
            <div class="imgBox">
                <img src="img/port/vinos.png" alt="imagen web maraton de tenerife">
            </div>
            <div class="content">
                <h2>Wine Shop</h2>
                <p>A Dinamic responsive website for a wine shop with login, MySql database </p>
            </div>
        </a>
        </div>

        <div class="box">
        <a href="portfolio/Maraton/index.php">
            <div class="imgBox">
                <img src="img/port/maratontenerife.png" alt="imagen web maraton de tenerife">
            </div>
            <div class="content">
                <h2>Marathon Web</h2>
                <p>A responsive marathon website </p>
            </div>
        </a>
        </div>

        

        <div class="box">
        <a href="portfolio/BackToTheFuture/index.html">
            <div class="imgBox">
              <img src="img/port/backtothefuture.png" alt="imagen web de musica soundwaves">
            </div>
            <div class="content">
                <h2>Back to the Future</h2>
                <p>Fun responsive design of the movie and trailer</p>
            </div>
        </a>
        </div>
        <div class="box">
        <a href="portfolio/CreandoEscuelaWeb/index.php">
            <div class="imgBox">
                <img src="img/port/creandoescuela.jpg" alt="imagen master creando Escuela">
            </div>
            <div class="content">
                <h2>Creando Escuela</h2>
                <p>A website with projects from my Master in Creando Escuela</p>
            </div>
        </a>
        </div>
        

        <div class="box">
        <a href="portfolio/veterinaria/index.php">
            <div class="imgBox">
                <img src="img/port/veterinaria.jpg" alt="image vet clinic project">
            </div>
            <div class="content">
                <h2>Vet Clinic</h2>
                <p>A website of a Vet Clinic with Bootstrap</p>
            </div>
        </a>
        </div>
        <div class="box">
        <a href="portfolio/GridGallery/index.html">
            <div class="imgBox">
              <img src="img/port/responsivegrid.png" alt="imagen diseño grid responsive de varias imágenes">
            </div>
            <div class="content">
                <h2>Responsive Grid Gallery</h2>
                <p>Grid Image Gallery with different sizes that adapt to any screen </p>
            </div>
        </a>
        </div>

        <div class="box">
        <a href="portfolio/progressbar/index.html">
            <div class="imgBox">
              <img src="img/port/progressbar.png" alt="imagen web de musica soundwaves">
            </div>
            <div class="content">
                <h2>Progress Bar</h2>
                <p>Progress bar with effects, scroll down !</p>
            </div>
        </a>
        </div>

        <div class="box">
          <a href="portfolio/animatedeyes/index.html">
            <div class="imgBox">
                <img src="img/port/smiley.png" alt="">
            </div>
            <div class="content">
                <h2>Smiley and Bee</h2>
                <p>Let the emoji follow the bee cursor</p>
            </div>
            </a>
        </div>


        <div class="box">
          <a href="portfolio/leaves/index.html">
            <div class="imgBox">
                <img src="img/port/leaves.png" alt="">
            </div>
            <div class="content">
                <h2>Leaves</h2>
                <p>Falling leaves with css</p>
            </div>
            </a>
        </div>
       
      </div>
    </section>

    <section class="section skills" id="section">
      <h2 class="section-title">Skills</h2>
 
    <div class="animated">
      <div class="boxanimated">
        <div class="plane">
            <img src="img/sk-star.png" alt="">
        </div>
        <div class="cloud">
            <img src="img/sk-cloud.svg" alt="">
            <img src="img/sk-cloud.svg" alt="">
            <img src="img/sk-cloud.svg" alt="">
        </div>
      </div>
    </div>
    <!-- </div> -->
      <div class="curriculum-grid">
        <div class="curriculum-grid-item">
          <img src="img/icons/javascript.svg" alt="javascript icon">
          <p>Javascript</p>
        </div>
        <div class="curriculum-grid-item">
          <img src="img/icons/python.png" alt="python icon">
          <p>Python</p>
        </div>
        <div class="curriculum-grid-item">
          <img src="img/icons/kotlin.png" alt="kotlin icon">
          <p>Kotlin</p>
        </div>
        <div  class="curriculum-grid-item">
          <img src="img/icons/androidstudio.png" alt="android studio icon">
          <p>Android Studio</p>
        </div>
        <div class="curriculum-grid-item">
          <img src="img/icons/java.svg" alt="java page icon">
          <p>Java</p>
        </div>
        <div class="curriculum-grid-item">
          <img src="img/icons/php.png" alt="php icon">
          <p>PHP</p>
        </div>
        <div  class="curriculum-grid-item">
          <img src="img/icons/mysql.svg" alt="mysql icon">
          <p>MySQL</p>
        </div>
        <div  class="curriculum-grid-item">
          <img src="img/icons/nodejs.png" alt="node js icon">
          <p>Node JS</p>
        </div>
        <div class="curriculum-grid-item">
          <img src="img/icons/html5.png" alt="html5 icon">
          <p>HTML5</p>
        </div>
        <div class="curriculum-grid-item">
          <img src="img/icons/svg/css.svg" alt="css icon">
          <p>CSS</p>
        </div>
        <div class="curriculum-grid-item">
          <img src="img/icons/sass.png" alt="sass icon">
          <p>Sass</p>
        </div>
        <div  class="curriculum-grid-item">
          <img src="img/icons/xd.png" alt="xd icon">
          <p>Adobe XD</p>
        </div>
        
      </div>

    </section>

    

    <section class="section2 contact" id="contact">
    <form class="form" action="index.php" method="POST">
      <!-- <div class="form"> -->
        <div class="container">
            <h2>Contact me</h2>
            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="name" id="name" >
                        <span class="text">First Name *</span>
                        <span class="line"></span>
                    </div>
                </div>
            
    
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="surname" id="surname" >
                        <span class="text">Surname *</span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
    
            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="email" id="email" >
                        <span class="text">Email *</span>
                        <span class="line"></span>
                    </div>
                </div>
            
    
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="phone" id="phone" >
                        <span class="text">Mobile *</span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
    
            <div class="row100">
                <div class="col">
                    <div class="inputBox textarea">
                        <textarea  name="text" id="message"></textarea>
                        <span class="text">Write your message here *</span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
    
            <div class="row100">
                <div class="col">
                    <input type="submit" value="send" onclick="validation();">
                </div>
            </div>
    
        </div>
    </form>

    </section>

  </main>
  <footer class="footer">
    <ul class="list-social"> 
      <li class="list-social-item"><a href="https://www.linkedin.com/in/albertotoribior/"><i class="fab fa-linkedin-in"></i></a></li>
      <li class="list-social-item"><a href="https://codepen.io/Albtor"><i class="fab fa-codepen"></i></a></li>
      <!-- <li class="list-social-item"><a href="#"><i class="fab fa-instagram"></i></a></li> -->
      <li class="list-social-item"><a href="https://github.com/Albtor"><i class="fab fa-github"></i></a></li>
      <!-- <li class="list-social-item"><a href="#"><i class="fab fa-youtube"></i></a></li> -->
    </ul>

  </footer>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="main.js"></script>
</body>
</html>