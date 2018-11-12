
<?php get_header(); ?>
	<div class="container">
		<div class="row">
            <?php if(have_posts()) :?>
            	<div class="col-sm-12">
            	   <?php get_template_part('breadcrums'); ?>
            	</div>
            <?php endif; ?>	
            <div class="post_titile">
                <h1> <?php single_cat_title ('', true); ?></h1>
            </div>
            	<?php get_template_part('loop'); ?> 
                <?php page_nav(); ?> 
        </div>
    </div>
<?php get_template_part('home','footer');  ?>
<?php get_footer(); ?>

