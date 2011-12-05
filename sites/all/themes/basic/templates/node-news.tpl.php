<?php if($teaser):?>

<h2><?php echo $title;?></h2>




<?php echo $content;?>

<?php else:?>
 


<h2 id="noticias-news-title"><?php echo $node->title;?></h2>
    <?php if($node->field_news_subtitle[0]['value']):?>
        <p id="noticias-news-subtitle"><?php echo $node->field_news_subtitle[0]['value'];?></p>
    <?php endif;?>
     <div id="noticias-news-body" class="tk-ratio">
         
         <?php if($node->field_news_photo[0]['filepath']):?>
         
            <img alt="foto-de-la-noticia" id="noticias-news-photo" src="/<?php echo $node->field_news_photo[0]['filepath'];?>"/>
         <?php endif;?>
            
         
         <?php if($node->content['body']['#value']):?>
            <?php echo trim($node->content['body']['#value']);?>
         <?php endif;?>
            
     </div>        
        
        
<?php endif; ?>

