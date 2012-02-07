<?php
$brand = ucwords($node->field_vehicle_brand[0]['value']);
$model = ucwords($node->field_vehicle_model[0]['value']);
$transmission = ucwords($node->field_vehicle_transmition[0]['value']);
$gas = ucwords($node->field_vehicle_gas[0]['value']);
$doors = ucwords($node->field_vehicle_doors[0]['value']);
$traction = ucwords($node->field_vehicle_traction[0]['value']);
$state = ucwords($node->field_vehicle_state[0]['value']);

$version = ucwords($node->field_vehicle_version[0]['value']);
$interiorColor = ucwords($node->field_vehicle_interior_color[0]['value']);

?>
<div id="vehicle">

    <div id="vehicle-upper-menu">
        <h2>INFORMACI&Oacute;N DEL VEH&Iacute;CULO</h2>

        <a  href="#vehicle-cotizar-overlay" class="vehicle-upper-menu-item" id="vehicle-upper-menu-cotizar" ></a>

        <a  class="vehicle-upper-menu-item" id="vehicle-upper-menu-imprimir"></a>
        <a  href="/contactos" class="vehicle-upper-menu-item" id="vehicle-upper-menu-contactar"></a>
    </div>
    <div id="vehicle-info-container">

        <div id="vehicle-slideshow-container">
            <div id="vehicle-slideshow">
                <?php foreach ($node->field_vehicle_photos as $photo): ?>
                    <?php if ($photo): ?>
                        <?php echo theme('imagecache', 'vehicles_slides', $photo['filepath'], 'foto-del-vehiculo', $vehicleNode->field_vehicle_model[0]['value'], array("class"=> "vehicle-slideshow-big-slide"));?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>

            <img id="vehicle-available-photos-title" alt="Fotos-de-Vehiculos" src="/<?php echo file_directory_path(); ?>/images/vehicle/availablePhotos.png"/>

            <div id="vehicle-slideshow-pager">
                <?php foreach ($node->field_vehicle_photos as $photo): ?>
                    <?php if ($photo): ?>
                <?php echo theme('imagecache', 'vehicles_pager_slides', $photo['filepath'], 'foto-del-vehiculo', $vehicleNode->field_vehicle_model[0]['value'], array("class"=> "vehicle-slideshow-pager-item"));?>
                       
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>                                    
        </div>

        <?php require dirname(__FILE__) . '/../../../../../includes/blocks/bigVerticalDivisor.php'; ?>

        <div id="vehicle-description">
            <h1><?php echo $brand . ' ' . $model; ?></h1>
            <div id="vehicle-description-top">
                <div id="vehicle-colors">
                    <h3>Colores disponibles</h3>
                    <?php foreach ($node->field_vehicle_colors as $color): ?>
                        <?php if ($color): ?>
                            <span class="vehicle-color-sample" style="background-color: <?php echo $color['value']; ?>;">
                            </span>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>

                <div id="vehicle-state">
                    <h3>Estado</h3>
                    <p><?php echo $state; ?></p>
                </div>

               


            </div>

            <div id="vehicle-description-bottom">
                <ul>
                      <?php if($state):?>
                    <li><span class="bold">Estado</span>: <?php echo $state; ?></li>
                    <?php endif;?>
            
                    
                    <?php if($version):?>
                    <li><span class="bold">Versi&oacute;n: </span> <?php echo $version; ?></li>
                    <?php endif;?>
                    
                    <?php if($transmission):?>
                    <li><span class="bold">Transmisi&oacute;n: </span> <?php echo $transmission; ?></li>
                    <?php endif;?>
                    
                    <?php if($gas):?>
                    <li><span class="bold">Combustible: </span> <?php echo $gas; ?></li>
                    <?php endif;?>
                    
                    <?php if($doors):?>
                    <li><span class="bold">Puertas: </span> <?php echo $doors; ?></li>
                    <?php endif;?>
                    
                    <?php if($traction):?>
                    <li><span class="bold">Tracci&oacute;n: </span> <?php echo $traction; ?></li>
                    <?php endif;?>
                    
                    <?php if($interiorColor):?>
                    <li><span class="bold">Color del interior: </span> <?php echo $interiorColor; ?></li>
                    <?php endif;?>
                </ul>
            </div>
            <img id="vehicle-available-description-title" alt="Fotos-de-Vehiculos" src="/<?php echo file_directory_path(); ?>/images/vehicle/description.png"/>
            <?php if ($node->field_vehicle_description[0]['value']): ?>

                <?php echo $node->field_vehicle_description[0]['value']; ?>

            <?php endif; ?>

        </div>

    </div>

    <a href="/financiamiento-disponible" id="vehicle-financing" class="financing-post-sell-buttons"></a>
    <a href="/tarifas-de-mantenimiento?marca=<?php echo urlencode(strtolower($brand));?>&modelo=<?php echo urlencode(strtolower($model));?>" id="vehicle-post-sell" class="financing-post-sell-buttons"></a>

    <div  style="display: none;">
        <div  id="vehicle-cotizar-overlay">
            
            <h1 id="vehicle-cotizar-overlay-header"></h1>
            
            <div id="vehicle-cotizar-overlay-content">
            <div id="vehicle-cotizar-overlay-form-container">
                
                
                
                <form id="vehicle-cotizar-overlay-form">
                    <h2 id="overlay-title"><?php echo $brand . ' ' . $model; ?></h2>
                    <div>
                        <label for="vehicle-cotizar-client-name" class="">Nombre </label>

                        <input type="text" id="vehicle-cotizar-client-name"/>
                    </div>
                    
                    <div>
                        <label for="vehicle-cotizar-client-company" class="">Empresa</label>

                        <input type="text" id="vehicle-cotizar-client-company"/>
                    </div>

                    <div>
                        <label for="vehicle-cotizar-client-email" class="">Departamento </label>

                        <input type="text" id="vehicle-cotizar-client-department"/>
                    </div>
                    
                    
                    <div>
                        <label for="vehicle-cotizar-client-email" class="">Persona a dirigir</label>

                        <input type="text" id="vehicle-cotizar-client-contact"/>
                    </div>
                    
                    
                    <div>
                        <label for="vehicle-cotizar-client-email" class="">Email de contacto</label>

                        <input type="text" id="vehicle-cotizar-client-email"/>
                    </div>


                    

                    <div>
                        <label for="vehicle-cotizar-client-tel" class="">Tel&eacute;fono</label>

                        <input type="text" id="vehicle-cotizar-client-tel"/>
                    </div>
                    
                    <div>
                        <label for="vehicle-cotizar-client-tel" class="">Color</label>

                        <input type="text" id="vehicle-cotizar-vehicle-color"/>
                    </div>
                    
                        <input type="hidden" id="vehicle-cotizar-vehicle-brand" value="<?php echo $brand;?>"/>
                        <input type="hidden" id="vehicle-cotizar-vehicle-model" value="<?php echo $model;?>"/>
                        <input type="hidden" id="vehicle-cotizar-vehicle-state" value="<?php echo $state;?>"/>
                        <input type="hidden" id="vehicle-cotizar-vehicle-year" value="<?php echo $year;?>"/>
                        <input type="hidden" id="vehicle-cotizar-vehicle-version" value="<?php echo $version;?>"/>
                        <input type="hidden" id="vehicle-cotizar-vehicle-transmission" value="<?php echo $transmission;?>"/>
                        <input type="hidden" id="vehicle-cotizar-vehicle-traction" value="<?php echo $traction;?>"/>
                        <input type="hidden" id="vehicle-cotizar-vehicle-gas" value="<?php echo $gas;?>"/>
                        <input type="hidden" id="vehicle-cotizar-vehicle-doors" value="<?php echo $doors;?>"/>
                        
                    
                    <a id="vehiculo-cotizar-overlay-form-send-button"><span>Enviar</span></a>
                </form>
            </div>
                
            <?php require realpath('./includes/blocks/bigVerticalDivisor.php');?>
                    
            <div id="overlay-car-info">
                <img id="overlay-photo" alt="foto-del-vehiculo" src="/<?php echo $node->field_vehicle_photos[0]['filepath'];?>"/>
                
                
                <img id="vehicle-contizar-overlay-description-title" alt="Fotos-de-Vehiculos" src="/<?php echo file_directory_path(); ?>/images/vehicle/description.png"/>
                
                <ul>
                    <?php if($state):?>
                    <li><span class="bold">Estado</span>: <?php echo $state; ?></li>
                    <?php endif;?>
                    
                  
                    
                    <?php if($version):?>
                    <li><span class="bold">Versi&oacute;n: </span> <?php echo $version; ?></li>
                    <?php endif;?>
                    
                    <?php if($transmission):?>
                    <li><span class="bold">Transmisi&oacute;n: </span> <?php echo $transmission; ?></li>
                    <?php endif;?>
                    
                    <?php if($gas):?>
                    <li><span class="bold">Combustible: </span> <?php echo $gas; ?></li>
                    <?php endif;?>
                    
                    <?php if($doors):?>
                    <li><span class="bold">Puertas: </span> <?php echo $doors; ?></li>
                    <?php endif;?>
                    
                    <?php if($traction):?>
                    <li><span class="bold">Tracci&oacute;n: </span> <?php echo $traction; ?></li>
                    <?php endif;?>
                    
                    <?php if($interiorColor):?>
                    <li><span class="bold">Color del interior: </span> <?php echo $interiorColor; ?></li>
                    <?php endif;?>
                </ul>
                
                
            </div>
            
        </div>
            
        </div>
    </div>


</div>