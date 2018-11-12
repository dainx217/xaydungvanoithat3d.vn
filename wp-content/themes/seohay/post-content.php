<div id="post-<?php the_ID(); ?>" <?php post_class('enigma_blog_full'); ?>>
	<div class="post-content-wrap">
		<?php if(get_the_tag_list() != '') { ?>	
		<?php } ?>
        <div class="post_titile" style="">
        <h1><?php the_title(); ?></h1>	</div>
		<div class="fb-like"></div>
        <div class="g-plusone" data-annotation="inline" data-width="300"></div>
		<?php the_content( __( 'Read More' , 'weblizar' ) ); ?>		
		<?php wp_link_pages(); ?>
	</div>
</div>			
