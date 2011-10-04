<?php
$slidesInfo = $node->field_front_page_slides;
$slidesNumber = count($slidesInfo);


?>


<?php if($node->field_front_page_slides[0]):?>
                 <div id="front-page-slideshow-container">

    <div id="front-page-slideshow">
        <?php foreach($slidesInfo as $slideInfo):?>
              <?php $slideNode = node_load($slideInfo['nid']);?>
              
        
       
                  <?php if($slideNode->field_front_page_slide_photo[0]['filepath']):?>
                    <a class="front-page-slides" href="<?php echo $slideNode->field_page_slide_link[0]['url'];?>">
                        
                        <img src="/<?php echo $slideNode->field_front_page_slide_photo[0]['filepath'];?>" alt="foto-slideshow"/>
                    
                    </a>
                    <?php endif;?>
        <?php endforeach;?>

            
        

    </div>
    <div id="front-page-slideshow-pager"> 
        <?php for($i=0; $i < $slidesNumber; $i++):?>
            <span class="front-page-slideshow-pager-item"></span>
        <?php endfor;?>        
    </div>
    
    
</div>

<?php endif;?>
