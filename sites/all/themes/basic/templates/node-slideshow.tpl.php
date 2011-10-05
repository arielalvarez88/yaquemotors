<div id="slideshow-container">

    <div id="slideshow">
        <?php foreach ($node->field_slideshow_slides as $slide): ?>
            <img class="slideshow-big-slide" src="/<?php echo $slide['filepath']; ?>"/>
        <?php endforeach; ?>
    </div>
    <div id="slideshow-pager">
        <?php foreach ($node->field_slideshow_slides as $slide): ?>
            <img class="slideshow-pager-picture" src="/<?php echo $slide['filepath']; ?>"/>
        <?php endforeach; ?>
    </div>
    
    <img src="/<?php echo file_directory_path();?>/images/nosotros/misionVision.png" alt="mision-vision"/>

</div>