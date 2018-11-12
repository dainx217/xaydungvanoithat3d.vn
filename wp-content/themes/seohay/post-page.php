<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
<div class="enigma_blog_full">
<?php  if(has_post_thumbnail()): 
		$defalt_arg = array('class' => "enigma_img_responsive"); 
		?>
		<?php endif; ?>
        <div class="post_titile" style="">
         <h1><?php the_title(); ?></h1>	</div>
<div class="fb-like"></div>
         <div class="g-plusone" data-annotation="inline" data-width="300"></div>
		<div class="enigma_blog_post_content">
			<?php the_content( __( 'Read More' , 'weblizar' ) ); ?>
            <div class=" contact">
            </div>
		</div>
</div>	
<?php
endwhile;
endif; ?>