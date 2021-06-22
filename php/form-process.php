<?php

$errorMSG = "";

// Nombre
if (empty($_POST['nombre'])) {
    $errorMSG = "Por favor, ingresa un nombre.";
} else {
    $name = $_POST['nombre'];
}

// Correo Electronico
if (empty($_POST['correoElectronico'])) {
    $errorMSG .= "Por favor, ingresa un correo electrónico";
} else {
    $email = $_POST['correoElectronico'];
}

// Numero Telefonico
if (empty($_POST['telefono'])) {
    $errorMSG .= "Por favor, ingresa un numero telefónico";
} else {
    $phone_number = $_POST['telefono'];
}

// Mensaje
if (empty($_POST['mensaje'])) {
    $errorMSG .= "No haz ingresado tu mensaje y/o comentario";
} else {
    $message = $_POST['mensaje'];
}


$EmailTo = "informes@universidaddeensenada.edu.mx";
$Subject = "Nueva solicitud de información";

// prepare email body text
$Body = "";
$Body .= "Nombre: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Correo Electrónico: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Numero Telefónico: ";
$Body .= $phone_number;
$Body .= "\n";
$Body .= "Mensaje: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Hubo un error :(";
    } else {
        echo $errorMSG;
    }
}

?>
