<?php
$slidesInfo = db_query("SELECT * FROM {node} WHERE type = 'front_page_slide'");
$slideNodes = array();
    

while ($slide = db_fetch_object($slidesInfo)) {

    $slideNode = node_load($slide->nid);
    if($slideNode->field_front_page_slide_photo[0]['filepath'])
        $slideNodes [] = $slideNode;
}

$slidesNumber = count($slideNodes);
?>


<?php if ($node->field_front_page_slides[0]): ?>
    <div id="front-page-slideshow-container">

        <div id="front-page-slideshow">
    <?php foreach ($slideNodes as $slideNode): ?>

                <?php if ($slideNode->field_front_page_slide_photo[0]['filepath'] && $slideNode->field_front_page_slide_link[0]['url']): ?>
                    <a  href="<?php echo $slideNode->field_front_page_slide_link[0]['url']; ?>">

                        <img class="front-page-slides" src="/<?php echo $slideNode->field_front_page_slide_photo[0]['filepath']; ?>" alt="foto-slideshow"/>

                    </a>
            
                    <?php elseif ($slideNode->field_front_page_slide_photo[0]['filepath']): ?>
                        

                            <img class="front-page-slides" src="/<?php echo $slideNode->field_front_page_slide_photo[0]['filepath']; ?>" alt="foto-slideshow"/>

                        
            
                <?php endif; ?>


                
                
            
    <?php endforeach; ?>




        </div>
        <div id="front-page-slideshow-pager"> 
    <?php for ($i = 0; $i < $slidesNumber; $i++): ?>
                <span class="front-page-slideshow-pager-item"></span>
            <?php endfor; ?>        
        </div>


    </div>

<?php endif; ?>
