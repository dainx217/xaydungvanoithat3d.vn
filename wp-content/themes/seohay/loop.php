<div class="container">
<div class="row">
	<?php if (have_posts()):
		$args = array( 'post_type' => 'post','posts_per_page' => 4); 
		while (have_posts()) : the_post(); ?>
		<div class="col-sm-6 loop">
			    <div id="post-<?php the_ID(); ?>" >
					<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="nofollow">
							<?php the_post_thumbnail(array(180,120)); // Declare pixel size you need inside the array ?>
						</a>
					<?php endif; ?>
				</div>
			<div class="postcontent">
				    <div class="titleheading">
						<h2 >
						    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h2>
					</div>
				    <div class="content1">
				        <p><?php echo get_the_popular_excerpt(250); ?></p>
				    </div>
				    <div class="schema">
				    <p><?php the_time('d/m/Y'); ?></p>
				    </div>
		    </div>
		</div>
		<!-- /article -->
	<?php endwhile; ?>
	<?php else: ?>
	<!-- article -->
		<article><h2><?php _e( 'Sorry, nothing to display.', 'weblizar' ); ?></h2>
		</article>
	<?php endif; ?>
</div>
</div>
