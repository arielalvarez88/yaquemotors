<?php
$vehicleReferenceNID = $node->field_prom_vehicle_reference[0]['nid'];
$vehicleNode = node_load($vehicleReferenceNID);

?>

<div class="promotion-vehicle">
    <img src="/<?php echo $node->field_prom_vehicle_photo[0]['filepath'];?>"/>
    
    <a id="promotion-vehicle-view-more" href="<?php echo $vehicleNode->path;?>">
            <span id="promotion-vehicle-upper-link-color" style="background-color: <?php echo $node->field_prom_vehicle_upper_color[0]['value'];?>;"></span>   
            <span id="promotion-vehicle-bottom-link-color" style="background-color: <?php echo $node->field_prom_vehicle_bottom_color[0]['value'];?>;"></span>
            
            <span id="promotion-vehicle-link-text">Ver m&aacute;s detalles         <img id="promotion-vehicle-view-more-arrow" src="/<?php echo file_directory_path();?>/images/common/whiteArrow.png"/></span>
    
    </a>
</div>