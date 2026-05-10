<?php

function dniClase($n){
        $n = strtoupper($n);
        $letras_ex= array("X", "Y", "Z");
        $letras_dni = "TRWAGMYFPDXBNJZSQVHLCKE";
        $largo = strlen($n);

        if($largo != 9):
            return FALSE;
        else: 
            $primer_caracter = substr($n,0,1);
            if(is_numeric($primer_caracter)):
                $comprueba = Comprueba2($n);

            else:
                if(in_array($primer_caracter, $letras_ex)): //si la primera letra está en el array de EX: XYZ
                    $valor_letra_ex= array_search($primer_caracter, $letras_ex); 
                    $n = $valor_letra_ex.substr($n,1);
                    $comprueba = Comprueba2($n);
                else:
                    return FALSE;
                endif;

            endif;

        endif;
    }

    function Comprueba2($n){
        $letras_dni = "TRWAGMYFPDXBNJZSQVHLCKE";
        $ultimo_caracter = substr($n,8,1);
        $numero = substr($n,0,8);
        $resto = $numero % 23;
        $letra_del_dni_calculada = substr($letras_dni, $resto, 1);
        
            if($ultimo_caracter == $letra_del_dni_calculada):
                echo "nif Correcto";
                return TRUE;
                
            else:
                echo "nif InCorrecto";
                return FALSE;
                
            endif;
    }

    ?>