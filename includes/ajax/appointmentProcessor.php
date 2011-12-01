<?php

require dirname(__FILE__).'/../formEmails.php';
$subject = "Mensaje de Citas";

$message = "Información del usuario: \n";

$message .= "\n" . 'Nombre/Empresa: ' . $_POST['appointment-name'];
$message .= "\n" . 'Empresa: ' . $_POST['appointment-company'];
$message .= "\n" . 'Teléfono: ' . $_POST['appointment-telephone'];
$message .= "\n" . 'Email: ' . $_POST['appointment-email'];

$message .= "\n\n Información de la cita: \n";

$message .= "\n" . 'Fecha de la cita(Mes/Día/Año): ' . $_POST['appointment-date'];

$message .= "\n\n Información del vehículo: \n";

$message .= "\n" . 'Marca: ' . $_POST['appointment-brand'];
$message .= "\n" . 'Modelo: ' . $_POST['appointment-model'];
$message .= "\n" . 'Color: ' . $_POST['appointment-color'];
$message .= "\n" . 'No. Chassis: ' . $_POST['appointment-chasis'];
$message .= "\n" . 'No. Placa: ' . $_POST['appointment-plate'];
$message .= "\n" . 'Kilometers: ' . $_POST['appointment-kilometers'];
$message .= "\n" . 'Servicio Solicitado: ' . $_POST['appointment-service'];


$success = mail($emails['appointments'], utf8_decode($subject), utf8_decode($message),$emails['appointmentsHeaders']);
        

    $response = new stdClass();
    $response->success = $success;
    echo json_encode($response);


?>
