<?php
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];
    $spam = $_POST["spam"];

    //Esto es para evitar spam, una pregunta de control en el formulario
    if($spam != 4): 
        header("Location: contacto.php");
    else:

  
        $para="altoribio14@gmail.com";
        $asunto="De mi formulario de la página web";
        $cabecera  = 'MIME-Version: 1.0' . "\r\n";
        $cabecera .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $cabecera .= 'From:'.$email . "\r\n";
        $mensaje="
        <html>
        <head>
        <title>Contacto desde la página web</title>
        </head>
        <body>
        <p>Hola soy $nombre</p>
        <p>Mi teléfono es el $telefono y mi email es $email </p>
        <p>Mi comentario es: <br> 
        $mensaje</p>
    
        </body>
        </html>
        ";

        //mail para la empresa
        mail($para,$asunto,$mensaje,$cabecera);

        //mail para usuario
        $cab  = 'MIME-Version: 1.0' . "\r\n";
        $cab .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $cab .= 'From:'.$para . "\r\n";
        $asuntousuario="Gracias por ponerse en contacto con nosotros, en breve tendrás ";
        $mensajeusuario="En breve nos pondremos en contacto, gracias";
        mail($email,$asuntousuario,$mensajeusuario,$cab);
        // echo "Mensaje enviado"; Si se pone el echo no se redirigirá al header
        header("Location: index.php"); //Un header nunca puede tener antes una escritura en pantalla
    endif;
    
    
?>