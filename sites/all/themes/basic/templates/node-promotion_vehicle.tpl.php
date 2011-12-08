<?php
$vehicleReferenceNID = $node->field_prom_vehicle_reference[0]['nid'];
$vehicleNode = node_load($vehicleReferenceNID);
?>

<div class="promotion-vehicle">


    <?php if ($vehicleNode->path):?>
    <a id="promotion-vehicle-view-more" href="/<?php echo $vehicleNode->path; ?>">
        <img src="/<?php echo $node->field_prom_vehicle_photo[0]['filepath']; ?>"/>

    </a>

    <?php else: ?>
        <img src="/<?php echo $node->field_prom_vehicle_photo[0]['filepath']; ?>"/>
    <?php endif; ?>

</div>