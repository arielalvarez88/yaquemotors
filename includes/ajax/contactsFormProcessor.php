<?php

require dirname(__FILE__).'/../formEmails.php';


$subject = "Mensaje de Contactos";
$clientSubject = "Mensaje enviado a través de la sección de contactos";



$clientMessage = "Gracias por contactar a El Yaque Motors.\n Usted ha enviado un mensaje con la siguiente información a través de nuestra página: \n\n";
$message = "Información del usuario: \n";

$message .= "\n" . 'Nombre: ' . $_POST['contactos-form-nombre'];
$message .= "\n" . 'Teléfono: ' . $_POST['contactos-form-tel'];
$message .= "\n" . 'Email: ' . $_POST['contactos-form-email'];
$message .= "\n" . 'Empresa: ' . $_POST['contactos-form-empresa'];


$message .= "\n Mensaje: ";

$message .= "\n" . $_POST['contacts-form-message'];

$clientMessage .= $message;

$clientMessage .= ".\n\n Le responderemos lo antes posible.";

$success = mail($emails['contacts'], $subject, $message,$emails['contactsHeaders']);

$clientSuccess = mail($_POST['contactos-form-email'], $clientSubject, $clientMessage,$emails['contactsClientHeaders']);
        

    $response = new stdClass();
    $response->success = $success;
    echo json_encode($response);



?>