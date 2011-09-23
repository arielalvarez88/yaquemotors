<?php require dirname(__FILE__).'/../paths.php';?>
<?php require dirname(__FILE__).'/../blocks/bigVerticalDivisor.php'?>    
<div id="workshop-services-form-container">
             
    <form id="workshop-services-form">
        <h2 id="workshop-services-form-header">TARIFAS DE MANTENIMIENTO</h2>
        <label>MARCA</label>
        
        <select>
              <?php foreach ($brandsAndModels as $brand => $models): ?>

                <?php $selected = $brand == 'nissan' ? 'selected="selected"' : ''; ?>

                <option  value="<?php echo $brand; ?>"  <?php echo $selected;?>>
                    <?php echo ucwords($brand); ?>
                </option>


            <?php endforeach; ?>
            
        </select>
        
        
        <label>VEHICULO</label>
        
        <?php foreach ($brandsAndModels as $brand => $models): ?>

            <?php $visible = $brand == 'nissan' ? ' visible' : ' hidden'; ?>
            <select class="maintenance-finder-model <?php echo $visible; ?>" name="modelo" id="maintenance-finder-model-<?php echo $brand; ?>" >;
                <?php foreach ($models as $model): ?>


                    <option value="<?php echo $model; ?>">
                        <?php echo ucwords($model); ?>
                    </option>
                <?php endforeach; ?>

            </select>

        <?php endforeach; ?>
        
        
        <a id="workshop-services-form-find" href="#">BUSCAR</a>        
    </form>    
    <a href="#" id="workshop-services-view-all">VER PRECIO DE TODOS LOS VEHICULOS</a>
    <?php
        $viewData['containerId'] = 'workshop-services-warranty-campaign-link';
        $viewData['photoPath'] = $paths->images.'/workshopServicesForm/warrantyCampaign.png';
        
        $viewData['hrefPath'] = '/vehiculos-con-garantia' ;
    ?>
    
    <?php require dirname(__FILE__).'/../views/imageLinkView.php';?>
    
</div>