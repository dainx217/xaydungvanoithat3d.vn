<?php get_header(); ?>
<div class="container">	
<?php
get_template_part('breadcrums'); ?>

	<div class="row enigma_blog_wrapper">
	<div class="col-md-8">
	<?php 
	if ( have_posts()): 
	while ( have_posts() ): the_post();
	get_template_part('post','content'); ?>	
	<?php endwhile; 
	endif; 
	weblizar_navigation(); ?>
	</div>	
	<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>
</div>