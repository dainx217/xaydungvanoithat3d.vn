<div class="row">
      <?php 
	if ( has_post_thumbnail() ){ 
	?><div class="show" style="width:100%;height:auto;">
    <?php the_post_thumbnail(array('1000','300')); ?>    
    </div><?php }else { ?>
	<a href="<?php the_permalink(); ?>"></a><?php } ?>
</div>