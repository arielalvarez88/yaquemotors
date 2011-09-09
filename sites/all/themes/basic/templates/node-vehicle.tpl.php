<div id="vehicle">
    
    <div id="vehicle-upper-menu">
        <h2>INFORMACI&Oacute;N DEL VEH&ICULO</h2>
        <a href="#" class="vehicle-upper-menu-item" id="vehicle-upper-menu-cotizar" class=""></a>
        <a href="#" class="vehicle-upper-menu-item" id="vehicle-upper-menu-imprimir"></a>
        <a href="#" class="vehicle-upper-menu-item" id="vehicle-upper-menu-contactar"></a>
    </div>
    <div id="vehicle-info-container">
        
        <div id="vehicle-slideshow-container">
            <div id="vehicle-slideshow">
                <?php foreach($node->field_vehicle_photos as $photo):?>
                <?php if($photo):?>
                <img alt="Foto del veh&iacute;culo" class="vehicle-slideshow-big-slide" src="/<?php echo $photo['filepath'];?>"/>
                <?php endif;?>
                <?php endforeach;?>
            </div>
            
            <img id="vehicle-available-photos-title" alt="Fotos-de-Vehiculos" src="/<?php echo file_directory_path();?>/images/vehicle/availablePhotos.png"/>
            
            <div id="vehicle-slideshow-pager">
                <?php foreach($node->field_vehicle_photos as $photo):?>
                <?php if($photo):?>
                <img alt="Foto del veh&iacute;culo" class="vehicle-slideshow-pager-item" src="/<?php echo $photo['filepath'];?>"/>
                <?php endif;?>
                <?php endforeach;?>
            </div>                                    
        </div>
        
        <?php require dirname(__FILE__).'/../../../../../includes/blocks/bigVerticalDivisor.php';?>
        
        <div id="vehicle-description">
            <h1><?php echo $node->field_vehicle_brand[0]['value'].' '.$node->field_vehicle_model[0]['value'];?></h1>
            <div id="vehicle-description-top">
                <div id="vehicle-colors">
                    <h3>Colores disponibles</h3>
                    <?php foreach ($node->field_vehicle_colors as $color):?>
                        <?php if($color):?>
                            <span class="vehicle-color-sample" style="background-color: <?php echo $color['value'];?>;">
                                 
                            </span>
                        <?php endif;?>
                    <?php endforeach;?>
                </div>
                
                <div id="vehicle-state">
                    <h3>Estado</h3>
                    <p><?php echo $node->field_vehicle_state[0]['value'];?></p>
                </div>
                
                <div id="vehicle-year">
                    <h3>A&ntilde;o</h3>
                    <p><?php echo $node->field_vehicle_year[0]['value'];?></p>
                </div>
                
                
            </div>
            
            <div id="vehicle-description-bottom">
                <ul>
                    <li><span class="bold">Versi&oacute;n: </span> <?php echo $node->field_vehicle_version[0]['value'];?></li>
                    <li><span class="bold">Transmisi&oacute;n: </span> <?php echo $node->field_vehicle_transmition[0]['value'];?></li>
                    <li><span class="bold">Combustible: </span> <?php echo $node->field_vehicle_gas[0]['value'];?></li>
                    <li><span class="bold">Precio: </span> <?php echo $node->field_vehicle_price[0]['value'];?></li>
                    <li><span class="bold">Puertas: </span> <?php echo $node->field_vehicle_doors[0]['value'];?></li>
                    <li><span class="bold">Tracci&oacute;n: </span> <?php echo $node->field_vehicle_traction[0]['value'];?></li>
                </ul>
            </div>
            <img id="vehicle-available-description-title" alt="Fotos-de-Vehiculos" src="/<?php echo file_directory_path();?>/images/vehicle/description.png"/>
            <?php if($node->field_vehicle_description[0]['value']):?>
            <p id="vehicle-description">
                <?php echo $node->field_vehicle_description[0]['value'];?>
            </p>
            <?php endif;?>
                                        
        </div>
            
    </div>
    
    <a href="/financiamiento-disponible" id="vehicle-financing" class="financing-post-sell-buttons"></a>
    <a href="#not-yet" id="vehicle-post-sell" class="financing-post-sell-buttons"></a>
    
    
</div>