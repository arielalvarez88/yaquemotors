<?php

require dirname(__FILE__).'/../formEmails.php';
$subject = "Tienda de Piezas";

$message = "Información del usuario:";

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
$message .= "\n" . "Pieza a contizar: " . $_POST['part-store-part-piece'];


$success = mail($emails['parts'], $subject, $message,$emails['partsHeaders']);
        

    $response = new stdClass();
    $response->success = $success;
    echo json_encode($response);



?>