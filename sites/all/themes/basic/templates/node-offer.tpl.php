
<?php if($node->field_offer_photo[0]['filepath']):?>
    <div class="offer-teaser">
        <?php if($node->title):?>
        <h3> <?php echo $node->title;?></h3>
        <?php endif;?>
        <a href="<?php echo base_path().$node->field_offer_flyer[0]['filepath'];?>"><img class="offer-image" src="/<?php echo $node->field_offer_photo[0]['filepath'];?>" alt="offerImage"/></a>
        <?php if($node->field_offer_description[0]['value']): ?>
            <div class="offer-text">
                <?php echo $node->field_offer_description[0]['value'];?>
            </div>
        <?php endif;?>
    </div>
 <?php endif;?>

