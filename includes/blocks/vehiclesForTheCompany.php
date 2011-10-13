<?php require dirname(__FILE__) . '/../paths.php'; ?>


<?php
$viewData['photoPath'] = $paths->images."/vehiclesForTheCompany/vehiclesForTheCompany.png";
$viewData['containerId'] = "vehicles-for-the-company";
$viewData['viewText'] = "Amplia variedad de vehículos para satisfacer las necesidades empresariales";
$viewData['hrefPath'] = "/agencia-de-vehiculos?marca=todas&categoria=vehiculos+para+la+empresa";
?>
<?php require dirname(__FILE__) . '/../views/imageLinkView.php'; ?>
