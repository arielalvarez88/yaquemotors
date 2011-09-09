<?php require dirname(__FILE__).'/../paths.php';?>
<?php require dirname(__FILE__).'/bigVerticalDivisor.php'?>    
<div id="workshop-services-form-container">
    


        
    
    <form id="workshop-services-form">
        <h2 id="workshop-services-form-header">TARIFAS DE MANTENIMIENTO</h2>
        <label>MARCA</label>
        <select>
            <option>Elegir Marca</option>
            
        </select>
        <label>VEHICULO</label>
        <select>
            <option>Elegir Veh&iacute;culo</option>
            
        </select>
        <a id="workshop-services-form-find" href="#">BUSCAR</a>        
    </form>    
    <a href="#" id="workshop-services-view-all">VER PRECIO DE TODOS LOS VEHICULOS</a>
    <?php
        $viewData['containerId'] = 'workshop-services-warranty-campaign-link';
        $viewData['photoPath'] = $paths->images.'/workshopServicesForm/warrantyCampaign.png';
    ?>
    
    <?php require dirname(__FILE__).'/../views/imageLinkView.php';?>
    
</div>
