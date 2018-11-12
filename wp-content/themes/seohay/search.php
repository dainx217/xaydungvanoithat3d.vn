<?php get_header(); ?>

	<div class="container">
		<div class="row">
        <?php get_template_part('breadcrums');?>
		<?php if(have_posts()) :?>
		<div class="col-md-12">
		<div class="titile_search">
			<h2><?php printf( __( 'Kết quả tìm kiếm: "%s"', 'weblizar' ), '<span>' . get_search_query() . '</span>'  ); ?></h2>
		</div>
		</div>	
		<?php endif; ?>
		<?php rewind_posts(); ?>
	<div class="col-md-8">
	<?php 
	if ( have_posts()): 
	while ( have_posts() ): the_post();
	get_template_part('home','search'); ?>	
	<?php endwhile;
	weblizar_navigation();
	else :
	get_template_part('nocontent');
	endif; ?>	 
	</div>	

	<?php get_sidebar(); ?>
	</div>
	</div>
<div class="clear" style="clear:both;"></div>
<?php get_footer(); ?>