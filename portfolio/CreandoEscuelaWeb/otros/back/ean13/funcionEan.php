<?php
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
?>

<?php
    //WIKIPEDIA
    function ean13_checksum ($message) {
        $checksum = 0;
        foreach (str_split(strrev($message)) as $pos => $val) {
          $checksum += $val * (3 - 2 * ($pos % 2));
        }
        return ((10 - ($checksum % 10)) % 10);
      }
      
      // Valor de prueba (sin dígito de control)
      $ean = '931804231236';
      echo 'Digito de control: ', ean13_checksum($ean);
?>