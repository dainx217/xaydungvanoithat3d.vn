<?php get_header(); 
?>
<div class="container">
	<?php
	get_template_part('breadcrums'); ?>
    <div class="row">
	<div class="col-sm-12">	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
		<?php get_template_part('post','content'); 
		get_template_part('author','intro');
		endwhile; 
		else : 
		get_template_part('nocontent');
		endif;
		 ?>
		 <div class="row">
		    <div class="news">
     			<div class="titile4">
				    <h2><a href="https://xaydungvanoithat3d.vn/tin-tuc/">Bài viết liên quan</a></h2>
				</div>
				    <!-- <div class="container">
				    	<div class="row"> -->
					<div class="box_news">
						<?php
							    $categories = get_the_category($post->ID);
							    if ($categories) 
							    {
							        $category_ids = array();
							        foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
							 
							        $args=array(
							        'category__in' => $category_ids,
							        'post__not_in' => array($post->ID),
							        'showposts'=>4, // Số bài viết bạn muốn hiển thị.
							        'caller_get_posts'=>1
							        );
							        $my_query = new wp_query($args);
							        if( $my_query->have_posts() ){while ($my_query->have_posts())
							            {$my_query->the_post();?>
							                <div class="col-sm-3">
							                	<div class="new-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
							                	<div class="item-list">
							                		<h4><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
							                		<?php the_excerpt(); ?>
							                	</div>
							                </div>
							                <?php
							            }
							        }
							    }
							?>
					</div>
					<!-- </div>
					</div> -->
				
			</div>
		</div>	

	</div>


    	<div class="container">
    		<div class="row">
    			<div class="col-sm-3 sidehuong">
    				<?php get_template_part('home','xemhuong'); ?>
    			</div>
    			<div class="col-sm-3 sidehuong">
    				<?php get_template_part('home','namxay'); ?>
    			</div>
    			<div class="col-sm-6 sidehuong">
    				<?php get_template_part('home','bagia'); ?>
    			</div>	
    		</div>
    	</div>
    	<div class="container">
    	<div class="row">
		    	<div class="col-sm-9 dangkytuvan">
					<div class="noidung-tuvan">
						<h2 class="tieude-tuvan">ĐĂNG KÝ TƯ VẤN MIỄN PHÍ</h2>
						<?php echo do_shortcode('[contact-form-7 id="5889" title="Contact form 1"]');?>
					</div>
				</div>
				<div class="col-sm-3">
					<img src="<?php echo get_stylesheet_directory_uri();?>/images/mienphi.jpg" alt="Tư vấn thiết kế nội thất miễn phí"/>
				</div>
		</div>
		</div>
</div>
</div>
<?php get_template_part('home','footer');  ?>
<?php get_footer(); ?>
            
   