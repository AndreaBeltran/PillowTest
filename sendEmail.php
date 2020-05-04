<?php

$nameP = $_POST['nameP'];
// $nameM = $_POST['nameM'];
// $son = $_POST['son'];
$age = $_POST['age'];
// $phone = $_POST['phone'];
$phone = $_POST['email'];
$message = $_POST['message'];


// Datos para el correo
$to = "ajbb961111@gmail.com";
$asunto = "TEST";

$carta = "De: $nameP \n";
// $carta .= "Hijos: $son \n";
$carta .= "Edad: $age \n";
// $carta .= "Telefono: $phone \n";
$carta .= "Mensaje: $message \n";

    // Enviando Mensaje
    mail($to, $asunto, $carta);
    echo "<script> alert('Correo enviado')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
?>    