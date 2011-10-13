<?php

require dirname(__FILE__).'/../formEmails.php';
$subject = "Mensaje de Contactos";

$message = "Información del usuario: \n";

$message .= "\n" . 'Nombre: ' . $_POST['contactos-form-nombre'];
$message .= "\n" . 'Teléfono: ' . $_POST['contactos-form-tel'];
$message .= "\n" . 'Email: ' . $_POST['contactos-form-email'];
$message .= "\n" . 'Empresa: ' . $_POST['contactos-form-empresa'];


$message .= "\n Mensaje: ";

$message .= "\n" . $_POST['contacts-form-message'];



$success = mail($emails['contacts'], $subject, $message,$emails['contactsHeaders']);
        

    $response = new stdClass();
    $response->success = $success;
    echo json_encode($response);



?>