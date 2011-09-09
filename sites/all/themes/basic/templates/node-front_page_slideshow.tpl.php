<?php
$slides = $node->field_front_page_slides;
$vehicleNodeInfo = $node->field_front_slide_vehicle_link;
$vehicleNode = node_load($vehicleNodeInfo[0]['nid']);

?>
<div id="front-page-slideshow-container">

    <div id="front-page-slideshow">

        <?php foreach ($slides as $slide): ?>
            <img class="front-page-slides" src="<?php echo $slide['filepath'] ?>"/>
        <?php endforeach; ?>

    </div>
    <div id="front-page-slideshow-next-previous"> 
        <img id="front-page-slideshow-next" src="/<?php echo file_directory_path();?>/images/frontPageSlideshow/previousArrow.png"/>
        <img id="front-page-slideshow-previous" src="/<?php echo file_directory_path();?>/images/frontPageSlideshow/nextArrow.png"/>
    </div>
    <a id="front-page-slideshow-view-more" href="/<?php echo $vehicleNode->path;?>"> <img src="/<?php echo file_directory_path();?>/images/frontPageSlideshow/moreButton.png"/> </a>
    <div id="front-page-bottom-text">
        <?php echo $node->field_front_slideshow_text[0]['value'];?>
    </div>
</div>
