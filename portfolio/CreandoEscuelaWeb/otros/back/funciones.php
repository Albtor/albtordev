<?php 


///////////////////////////
//GENERAR CODIGO
///////////////////////////


function generaCodigo(){
    $semilla = rand(10000,99999);
    $resto = $semilla % 7;
    $codigo = $semilla."-".$resto;

    return $codigo;
}

//SE CAMUFLA EL CONTROL
function generaCodigo2(){
    $semilla = rand(10000,99999);
    $resto = $semilla % 7;
    $codigo = substr($semilla,0,2).$resto.substr($semilla,2);

    return $codigo;
}

//CON ALFABETO
function generaCodigo3(){
    $alfabeto = "abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $largo_alfa = strlen($alfabeto)-1; //Se resta porqie si el total es 60, se empieza a contar desde 0
    $suma= 0; //para el control
    $codigo = "";
    $contador = 0; //Contador del while

    while($contador <= 9):
        $semilla = rand(0, $largo_alfa); //se calcula desde 0 hasta la posición de Z, es un número
        $suma += $semilla; //va sumando la posicion de cada $semilla
        $caracter = substr($alfabeto,$semilla,1); //del string alfabeto, cuenta desde semilla y se coge un caracter
        $codigo .= $caracter; //se añaden los caracteres
        $contador++;
    endwhile;
    $resto = $suma % $largo_alfa; //para el control. se divide entre el largo la suma de todas las posiciones de $alfabeto y el resto
    $restoLetra = substr($alfabeto,$resto,1); 
    return $codigo."-".$restoLetra; //se quitaría el guion para camuflar el código y dónde está el dígito control
}


//CON ALFABETO Y CONTROL DE EMAIL
function generaCodigo4($email){
    $alfabeto = "abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $largo_alfa = strlen($alfabeto)-1; //Se resta porqie si el total es 60, se empieza a contar desde 0
    
    $largo_email = strlen($email);
    $a = substr($alfabeto, $largo_email, 1);
    $suma= 0; //para el control
    $codigo = "";
    $contador = 0; //Contador del while

    while($contador <= 9):
        $semilla = rand(0, $largo_alfa); //se calcula desde 0 hasta la posición de Z, es un número
        $suma += $semilla; //va sumando la posicion de cada $semilla
        $caracter = substr($alfabeto,$semilla,1); //del string alfabeto, cuenta desde semilla y se coge un caracter
        $codigo .= $caracter; //se añaden los caracteres
        $contador++;
    endwhile;
    $resto = $suma % $largo_alfa; //para el control. se divide entre el largo la suma de todas las posiciones de $alfabeto y el resto
    $restoLetra = substr($alfabeto,$resto,1); 
    return $a.$codigo."-".$restoLetra; //se quitaría el guion para camuflar el código y dónde está el dígito control
}




///////////////////////////
//DNI
///////////////////////////
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



///////////////////////////
//EAN
///////////////////////////
function ean13_bueno($n){
    if(is_numeric($n)):
        return FALSE;
    else:
        $codigoControl = substr($n,-1);
        $numero = substr($n,0,12);
        $suma = 0;
        for($i=1;$i<=11;$i++):
            $digito = substr($numero,$i,1);
            if($i%2==1):
                $suma = $suma + $digito;
            else:
                $suma = ($suma + $digito)*3;
            endif;
            $dc_calculado=((ceil($suma/10)*10))-$suma;
        endfor;
        if($codigoControl == $dc_calculado):
            return TRUE;
        else:
            return FALSE;
        endif;
    endif;
}



///////////////////////////
//RELLENAR CON ESTRELLAS
///////////////////////////
function rellena_star($n){
    $icon ="";
    while($n>0){
    $icon .= '<img src="img/star.png" alt="" width="10px", height="10px">'; 
    //La linea de arriba significa: $icon = $icon . '<img src="img/star.png" alt="" width="10px", height="10px">';
    //return str_pad("",$n,"*");
    $n--; //$n= $n-1;
    }
    return $icon;
}
?>


    