<?php
$slidesInfo = $node->field_front_page_slides;



?>


<?php if($node->field_front_page_slides[0]):?>
                 <div id="front-page-slideshow-container">

    <div id="front-page-slideshow">
        <?php foreach($slidesInfo as $slideInfo):?>
              <?php $slideNode = node_load($slideInfo['nid']);?>
              <?php $vehicleNode = node_load($slideNode->field_front_page_slide_vehicle[0]['nid']);?>

       
                  <?php if($slideNode->field_front_page_slide_photo[0]['filepath']):?>
                    <a class="front-page-slides" href="/<?php echo $vehicleNode->path;?>">
                        
                        <img src="/<?php echo $slideNode->field_front_page_slide_photo[0]['filepath'];?>" alt="foto-slideshow"/>
                    
                    </a>
                    <?php endif;?>
        <?php endforeach;?>

            
        

    </div>
    <div id="front-page-slideshow-next-previous"> 
        <img id="front-page-slideshow-next" src="/<?php echo file_directory_path();?>/images/frontPageSlideshow/previousArrow.png"/>
        <img id="front-page-slideshow-previous" src="/<?php echo file_directory_path();?>/images/frontPageSlideshow/nextArrow.png"/>
    </div>
    
    
</div>

<?php endif;?>
