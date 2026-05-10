<?php
    
    function compruebaEAN($ean){
      if(strlen($ean) != 13 || !is_numeric($ean)):
         return FALSE;
      else:
        $doceC = substr($ean,0,12);
        $suma = 0;
        $valor = 0;
        $j = 1;
        for ($i=1; $i<strlen($doceC); $i++):
            if($i%2 != 0){
               $valor= substr($doceC,$i-1,$j) * 1;
               $suma= $suma + $valor;
            }else{
               $valor= substr($doceC,$i-1,$j) * 3;
               $suma= $suma + $valor;
            }
      
        endfor;

        if($suma%10 != 0){        
            while($suma%10 != 0){
               $suma++;
            }
        }     
        $multiplo10 = $suma;
        $digitoControl = $multiplo10 - $suma;
   
        if( $digitoControl == substr($ean,-1)):
            return TRUE;
        else:
            return FALSE;
        endif;

      

      endif;
        
      }

    
?>





<?php
    
    function compruebaEAN2($ean){
       /*Comprobar longitud ean: 13

       PAR IMPAR RESTO

       */

      if(strlen($ean) != 13 || !is_numeric($ean)):
         return FALSE;
      else:
        $doceC = substr($ean,0,12);
        
        echo  "Doce primeros dígidos: ".$doceC."<br>";
        
        $suma = 0;
        $valor = 0;
        $j = 1;
        for ($i=1; $i<strlen($doceC); $i++):
            if($i%2 != 0){
               $valor= substr($doceC,$i-1,$j) * 1;
               echo("substring impar ".$valor."  multiplicado por 1: ".substr($doceC,$i-1,$j)." ".$valor."<br>");
               $suma= $suma + $valor;
               echo  "Contadores impar ".$valor." ".$i." Suma: ".$suma."<br>";
            }else{
               $valor= substr($doceC,$i-1,$j) * 3;
               echo("substring par " .$valor." multiplicado por 3: ".substr($doceC,$i-1,$j)." ".$valor."<br>");
               $suma= $suma + $valor;
               echo  "Contadores par ".$valor." ".$i." Suma: ".$suma."<br>";
            }
      
        endfor;
        echo("Suma final ".$suma."<br>");
        //Multiplo 10 suma
        
        if($suma%10 == 0){
         $multiplo10 = $suma;
        }else{
            do{
            $suma++;
            echo "Suma++ ".$suma;
            }while($suma%10 != 0);
        }   $multiplo10 = $suma;
        

        echo "Multiplo10: ". $multiplo10."<br>";
        $digitoControl = $multiplo10 - $suma;
        echo ("Digito Control calculado: ". $digitoControl."<br>");
        echo ("Digito Control introducido: ". substr($ean,-1)."<br>");
        
        if( $digitoControl == substr($ean,-1)):
            return TRUE;
        else:
            return FALSE;
        endif;

      

      endif;
        
      }

    
?>
