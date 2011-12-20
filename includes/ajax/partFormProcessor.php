<?php

require dirname(__FILE__).'/../formEmails.php';
$subject = "Tienda de Piezas";
$clientSubject = "Solicitud de pieza";

$clientMessage = "Gracias por contactar a El Yaque Motors.\n Usted ha solicitado una pieza con la siguiente información: \n\n";
$message = "Información del usuario: \n";

$message .= "\n" . 'Nombre: ' . $_POST['part-store-username'];
$message .= "\n" . 'Apellido: ' . $_POST['part-store-lastname'];
$message .= "\n" . 'Empresa: ' . $_POST['part-store-company'];
$message .= "\n" . 'Teléfono: ' . $_POST['part-store-tel'];
$message .= "\n" . 'Email: ' . $_POST['part-store-email'];


$message .= "\n\n" . "Información de la pieza: \n";
$message .= "\n" . "Marca: " . $_POST['part-store-part-brand'];
$message .= "\n" . "Modelo: " . $_POST['part-store-part-model'];
$message .= "\n" . "Año: " . $_POST['part-store-part-year'];
$message .= "\n" . "Chasis: " . $_POST['part-store-part-chasis'];
$message .= "\n" . "Color: " . $_POST['part-store-part-color'];
$message .= "\n" . "Pieza a cotizar: " . $_POST['part-store-part-piece'];

$message .= "\n\nComentario:" . $_POST['parts-store-part-comment'];



$clientMessage .= $message;

$clientMessage .= ".\n\n Le responderemos lo antes posible.";

$success = mail($emails['parts'], utf8_decode($subject), utf8_decode($message),$emails['partsHeaders']);
 $clientSuccess = mail($_POST['part-store-email'], utf8_decode($clientSubject), utf8_decode($clientMessage),$emails['partsClientHeaders']);

    $response = new stdClass();
    $response->success = $success;
    echo json_encode($response);



?>