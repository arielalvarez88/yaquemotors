<?php

require dirname(__FILE__).'/../formEmails.php';
$subject = "Mensaje de Citas";

$message = "Información del usuario:";

$message .= "\n" . 'Nombre/Empresa: ' . $_POST['appointment-name'];
$message .= "\n" . 'Empresa: ' . $_POST['appointment-company'];
$message .= "\n" . 'Teléfono: ' . $_POST['appointment-telephone'];
$message .= "\n" . 'Email: ' . $_POST['appointment-email'];

$message = "Información de la cita:";

$message .= "\n" . 'Fecha de la cita(Mes/Día/Año): ' . $_POST['appointment-date'];

$message = "Información del vehículo:";

$message .= "\n" . 'Marca:' . $_POST['appointment-brand'];
$message .= "\n" . 'Modelo:' . $_POST['appointment-model'];
$message .= "\n" . 'Color:' . $_POST['appointment-color'];
$message .= "\n" . 'No. Chassis:' . $_POST['appointment-chassis'];
$message .= "\n" . 'No. Placa:' . $_POST['appointment-plate'];
$message .= "\n" . 'Kilometers:' . $_POST['appointment-kilometers'];
$message .= "\n" . 'Servicio Solicitado:' . $_POST['appointment-service'];


$success = mail($emails['partsForm'], $subject, $message);
        

    $response = new stdClass();
    $response->success = $success;
    echo json_encode($success);


?>