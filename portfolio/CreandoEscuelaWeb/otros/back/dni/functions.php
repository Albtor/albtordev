<?php
    //$dni= "12345678A";
    //$resultado = compruebaDni($dni);

    /*
    FUNCION PARA COMPROBAR DNI O NIF EXTRANJERO
    */ 
    
    function compruebaDni($dni){
        $dni = strtoupper($dni);
        $letrasDni = array("T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E");
        $letrasExtranjeras = array ("X", "Y", "Z");

        if (strlen($dni) != 9):
            return FALSE;

        else:
            $primerCaracter = substr($dni, 0,1);

            //DNI
            if(is_numeric($primerCaracter)):

                $comprueba = dniComprueba2($dni); 
                return $comprueba;
     
            //NIF    
            else:

                $dni = substr($dni,1,8);
                switch ($primerCaracter):
                    case "X": 
                        $primerCaracter = 0;   
                        break;
                    case "Y":
                        $primerCaracter = 1;
                        break;
                    case "Z":
                        $primerCaracter = 2;
                        break;
                    default:
                        $comprueba = false;
                        break;
                    endswitch; 
                    $dni = $primerCaracter.$dni;
                    $comprueba = dniComprueba2($dni);

            endif;           
        
        endif;
        
        return $comprueba;

    }


        function dniComprueba2($dni){
            $letrasDni = array("T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E");
            $numero = substr($dni, 0, 8);
            $letra = substr($dni, -1);

                if ($letra == $letrasDni[$numero % 23]):
                    return TRUE;
            
                else:
                    return FALSE;
                    
                endif;
            

        }


    
?>