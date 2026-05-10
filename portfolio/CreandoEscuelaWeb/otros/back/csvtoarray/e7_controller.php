<?php

//https://www.php.net/manual/es/function.str-getcsv.php

$file = "Coches.csv";
$csv = array_map('str_getcsv', file($file));

        // con este código se eliminan los header de las tablas: nombres de las columnas
    array_walk($csv, function(&$a) use ($csv) {
      $a = array_combine($csv[0], $a);
    });
    array_shift($csv); # remove column header

?>