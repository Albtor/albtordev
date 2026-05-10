<?php
  
          if (empty($_SESSION['email'])){
            echo "<br>";
           }

           else{
          
          $usuarioFound = false;
          $i = 0;
          foreach ($_SESSION["email"] as $usuario){
            if ($usuario == $_POST["email"]){
              $usuarioFound = true;
              $indiceUsuario = $i;
            } 
            
            ++$i;
          }

          $passwordFound = false;
          $i = 0;
          foreach ($_SESSION["password"] as $password) {
            if (($i == $indiceUsuario) && ($password == $_POST["password"])){
              $indicePassword = $i;
              $passwordFound = true;
              Header('location: Cita.php'); //si el usuario y clave son 
            } 
              
            ++$i;
          }

          if (isset($_POST['submit'])){
            if (!(($passwordFound == true && $usuarioFound == true) && ($indiceUsuario == $indicePassword))) {
            
              echo "<h3>El usuario o password son incorrectos. Inténtalo de nuevo<h3>";
            }
          }
        } 
        ?>