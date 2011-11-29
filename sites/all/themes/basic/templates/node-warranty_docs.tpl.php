<?php 

require dirname(__FILE__).'/../../../../../includes/paths.php';

$filepaths = array();
$filepaths['nissan']= array('transmission'=> $node->field_nissan_transmission_warran[0]['filepath'], 'breaks'=> $node->field_nissan_breaks_warran[0]['filepath'],'gas'=> $node->field_nissan_gas_warran[0]['filepath']);
$filepaths['chevrolet']= array('transmission'=> $node->field_chevy_transmission_warran[0]['filepath'], 'breaks'=> $node->field_chevy_breaks_warran[0]['filepath'],'gas'=> $node->field_chevy_gas_warran[0]['filepath']);
$filepaths['suzuki'] = array('transmission'=> $node->field_suzuki_transmission_warran[0]['filepath'], 'breaks'=> $node->field_suzuki_breaks_warran[0]['filepath'],'gas'=> $node->field_suzuki_gas_warran[0]['filepath']);


$nissanFilesAndTexts = $node->field_nissan_warr_files[0]['value'];
$suzukiFilesAndTexts = $node->field_suzuki_warr_files[0]['value'];
$chevroletFilesAndTexts = $node->field_chevrolet_warr_files[0]['value'];
$filesAndTextPerBrand = array('nissan' => array('texts'=> array(), 'files'=> array()), 'chevrolet' => array('texts'=> array(), 'files'=> array()), 'suzuki' => array('texts'=> array(), 'files'=> array()));

$nissanNumberOfFiles = count($nissanFilesAndTexts['field_warran_file_field']);
$chevroletNumberOfFiles = count($chevroletFilesAndTexts['field_warran_file_field']);
$suzukiNumberOfFiles = count($suzukiFilesAndTexts['field_warran_file_field']);


for($i=0; $i < $nissanNumberOfFiles; $i++)
{
    $filesAndTextPerBrand['nissan']['texts'][] = $nissanFilesAndTexts['field_warran_text_field'][$i]['value']; 
    $filesAndTextPerBrand['nissan']['files'][] = $nissanFilesAndTexts['field_warran_file_field'][$i]['filepath']; 
    
}

for($i=0; $i < $chevroletNumberOfFiles; $i++)
{
    $filesAndTextPerBrand['chevrolet']['texts'][] = $chevroletFilesAndTexts['field_warran_text_field'][$i]['value']; 
    $filesAndTextPerBrand['chevrolet']['files'][] = $chevroletFilesAndTexts['field_warran_file_field'][$i]['filepath']; 
    
}


for($i=0; $i < $suzukiNumberOfFiles; $i++)
{
    $filesAndTextPerBrand['suzuki']['texts'][] = $suzukiFilesAndTexts['field_warran_text_field'][$i]['value']; 
    $filesAndTextPerBrand['suzuki']['files'][] = $suzukiFilesAndTexts['field_warran_file_field'][$i]['filepath']; 
    
}


?>


<div id="warranty">
    <h2 id="warranty-header" >CAMPA&Ntilde;A DE VEH&Iacute;CULOS DE GARANT&Iacute;A <img src="<?php echo $paths->images;?>/common/whiteArrow.png"/></h2>
    <p>
        Los  fabricantes de vehículo Nissan, Chevrolet y Suzuki con el objetivo de mejorar la calidad en sus productos realizan Campañas de Servicios para los modelos que lo requieran. Este tipo de trabajo no tiene ningún costo para el cliente. Si el chasis de su vehículo se encuentra entre los vehículos de la campaña actual, favor comunicarse con nosotros y hacer una cita con nuestro taller de servicios para llevar a cabo dicha campaña.
    </p>
    
    
        

        <?php foreach($filesAndTextPerBrand as $brand => $filesAndTexts):?>
             
            <?php $numberOfFilesInBrand = count($filesAndTexts['files']);?>
    
            <?php if($numberOfFilesInBrand > 0):?>
    
                <div id="warranty-<?php echo $brand?>-logo" class="brand-logo"></div>
                
                
                <ul>
                    
                    <?php for($i=0; $i<$numberOfFilesInBrand; $i++):?>

                        <li><span><?php echo $filesAndTexts['texts'][$i];?></span><a href="/<?php echo $filesAndTexts['files'][$i];?>"><img src="<?php echo $paths->images;?>/common/excelIcon.png"/>Descargar</a></li>
                        
                    <?php endfor;?>
                </ul>
            <?php endif;?>
                
        <?php endforeach;?>
        
    
</div> 