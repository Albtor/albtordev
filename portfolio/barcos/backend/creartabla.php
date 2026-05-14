<?php
  error_reporting(0);
//funciones
  require_once "../funciones.php"; //para usarla una sola vez
  $conecta=conexionBD();

  $fraseSQL="CREATE TABLE barco_reservas ( id INT(7) NOT NULL AUTO_INCREMENT , codigo CHAR(10 ) NOT NULL , nombre VARCHAR(60) NOT NULL, fecha TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (id)) ENGINE = InnoDB";

  $resultado=mysqli_query($conecta,$fraseSQL);

  if ($resultado):
    echo "tabla creada";
  else:
    echo "tabla ya existe o existe algún otro error";
  endif; 
  
?>