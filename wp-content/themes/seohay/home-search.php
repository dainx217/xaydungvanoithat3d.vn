<div id="post-<?php the_ID(); ?>" <?php post_class('enigma_blog_full'); ?>>
	<div class="post-content-wrap">
		<?php if(get_the_tag_list() != '') { ?>	
		<?php } ?>
        <div class="post_titile" style="">
        <h2 class="font_search"><a  title="<?php the_title(); ?>" href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
		<?php echo get_the_popular_excerpt3(600); ?>
		<?php wp_link_pages(); ?>
	</div>
</div>
