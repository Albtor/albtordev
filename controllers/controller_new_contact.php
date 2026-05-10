<?php
    
include_once "config/funciones.php";
$name='';
$surname='';
$email='';
$phone='';
$text='';


//CODIGO PARA ENVIAR MAIL
//$spam = 4;
//Esto es para evitar spam, una pregunta de control en el formulario
if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['text'])):
    $name = $_POST['name']; 
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $text = $_POST['text'];

    $para= "altoribio14@gmail.com";
    $asunto="From AlbTorDev";
    $cabecera  = 'MIME-Version: 1.0' . "\r\n";
    $cabecera .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $cabecera .= 'From:'.$email . "\r\n";
    $mensaje="
    <html>
    <head>
    <title>Contact from AlbTorDev</title>
    </head>
    <body>
    <p>Hola soy $name .' '. $surname</p>
    <p>Mi teléfono es el $phone y mi email es $email </p>
    <p>Mi mensaje es: <br> 
    $text</p>
    </body>
    </html>
    ";
    //mail para la mi, deactivated to avoid spam
    // mail($para,$asunto,$mensaje,$cabecera);

    //mail para usuario que contacta
    $cab  = 'MIME-Version: 1.0' . "\r\n";
    $cab .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $cab .= 'From:'.$para . "\r\n";
    $asuntousuario="Web AlbTorDev contact form";
    $mensajeusuario="<html>
    <head>
    <title>Contacto desde la página web AlbTorDev</title>
    </head>
    <body>
    <h3>AlbTorDev</h3>
    <p>Gracias por ponerte en contacto conmigo.</p><br>
    <p>Revisaré tu mensaje y en breve te escribiré respondiendo a tu consulta.</p><br>
    <p>Un saludo !</p>
    <p>Alberto</p>
    </body>
    </html>
    ";
    mail($email,$asuntousuario,$mensajeusuario,$cab);
    // echo "Mensaje enviado"; Si se pone el echo no se redirigirá al header
    //header("Location: index.php"); Un header nunca puede tener antes una escritura en pantalla

//INGRESAR EN BASE DE DATOS
    //Conecta con base de datos (esta dentro de funciones) si es remoto conectaIonos, local conectaBD
    // $conexion = conectaBD();

    //Deactivated to avoid Spam
    // $conexion = conectaIonos();

    // if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['text'])):
    //     $conexion = conectaIonos();
    //     $name=mysqli_real_escape_string($conexion,$_POST['name']); 
    //     $surname=mysqli_real_escape_string($conexion,$_POST['surname']);
    //     $email=mysqli_real_escape_string($conexion,$_POST['email']);
    //     $phone=mysqli_real_escape_string($conexion,$_POST['phone']);
    //     $text=mysqli_real_escape_string($conexion,$_POST['text']);

    //     $fraseSQL = "INSERT INTO contactos_web (nombre, apellido, email, telefono, mensaje) VALUES ('$name','$surname','$email','$phone','$text')";
    //     $resultado = mysqli_query($conexion,$fraseSQL);
    //     if ($resultado):
    //         header("Location: index.php");
    //     else:
    //         header("Location: ../error.php");
    //         // echo($fraseSQL);
    //     endif;
    // endif;




endif;




?>