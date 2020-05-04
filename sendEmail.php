<?php

    $nameP = $_POST['nameP'];
    $nameM = $_POST['nameM'];
    $son = $_POST['son'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    if(!empty($_POST['nameP'])){
        echo "<script> alert('no vacio')</script>";
    }else{
        echo "<script> alert('vaciooooo')</script>";
    }
    
    // Datos para el correo
    $to = "lindsandrea@gmail.com";
    $asunto = $_POST['message'];

    $carta = "De: $nameP \n";
    $carta .= "Hijos: $son \n";
    $carta .= "Edad: $age \n";
    $carta .= "Telefono: $phone \n";
    $carta .= "Mensaje: $message \n";

    // Enviando Mensaje
    mail($to, $asunto, $carta);
    echo "<script> alert('Correo enviado')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
?>    