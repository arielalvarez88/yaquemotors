<?php

require dirname(__FILE__).'/../formEmails.php';
$subject = "Mensaje de Cotizar Veh&iacute;culos";

$message = "Información del usuario: \n";

$message .= "\n" . 'Nombre: ' . $_POST['vehicle-cotizar-client-name'];
$message .= "\n" . 'Empresa: ' . $_POST['vehicle-cotizar-client-company'];
$message .= "\n" . 'Departamento: ' . $_POST['vehicle-cotizar-client-department'];
$message .= "\n" . 'Persona a dirigir: ' . $_POST['vehicle-cotizar-client-contact'];
$message .= "\n" . 'Email: ' . $_POST['vehicle-cotizar-client-email'];
$message .= "\n" . 'Teléfono: ' . $_POST['vehicle-cotizar-client-tel'];





$message .= "\n\n Información del vehículo: \n";

$message .= "\n Marca: " . $_POST['vehicle-cotizar-vehicle-brand'];
$message .= "\n Modelo: " . $_POST['vehicle-cotizar-vehicle-model'];
$message .= "\n Estad: " . $_POST['vehicle-cotizar-vehicle-state'];
$message .= "\n Año: " . $_POST['vehicle-cotizar-vehicle-year'];
$message .= "\n Versión: " . $_POST['vehicle-cotizar-vehicle-version'];
$message .= "\n Transmisión: " . $_POST['vehicle-cotizar-vehicle-transmission'];
$message .= "\n Tracción: " . $_POST['vehicle-cotizar-vehicle-traction'];
$message .= "\n Combustible: " . $_POST['vehicle-cotizar-vehicle-gas'];
$message .= "\n Puertas: " . $_POST['vehicle-cotizar-vehicle-doors'];
$message .= "\n" . 'Color: ' . $_POST['vehicle-cotizar-vehicle-color'];

$success = mail($emails['cotizar'], $subject, $message,$emails['cotizarHeaders']);
        

    $response = new stdClass();
    $response->success = $success;
    echo json_encode($response);



?>