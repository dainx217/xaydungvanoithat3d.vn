<div class="container"><div class="row">
	      	<div class="home-title">
	        	<h2>THIẾT KẾ KIẾN TRÚC VÀ NỘI THẤT</h2>
	    	</div>
	        <div class="single" id="khung">
				<?php 	if ( have_posts()) : 			
					$args = array( 'post_type' => 'thiet_ke','posts_per_page' => 4 ,'orderby' =>'DESC');// 'posts_per_page' gioi han bai viet hien thi		
					$post_type_data = new WP_Query( $args );?>
					<?php while($post_type_data->have_posts()) :$post_type_data->the_post(); ?>
				    <div class="col-sm-3 khunghinh " data-idp="<?php the_ID(); ?>">
					    <div class=" box-hinhanh">
					    	<div class="item-hinhanh">
					        	<div class="thumb">
					           		<div class="image" >	
									<?php $img = array('class' => 'enigma_img_responsive');	if(has_post_thumbnail()):?> 
									<a title="<?php the_title(); ?>"data-toggle="modal"  data-target=".bd-example-modal-lg" ><?php echo the_post_thumbnail('home_post_thumb',$img); ?> </a><?php endif; ?></div>
					            </div>
    
					            <div class="bloc" type="text" data-toggle="modal" data-target=".bd-example-modal-lg">
											 <h3 type="text"   href="<?php echo get_page_link( $post_type_data->ID ); ?>"><?php the_title(); ?></h3>								
								</div>
								
					        </div>
					    </div>
					</div>

	<?php  endwhile; ?>
					<?php endif; ?></div>
					
									<div class="modal fade bd-example-modal-lg"  role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
							  <div class="modal-dialog modal-lg">
							    <div class="modal-content">
							       		<div class="modal-header">
									        
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									          <span aria-hidden="true">&times;</span>
									        </button>
									      </div>									   
									       		<div id="xemhinhanh">									       			
									       		</div>									       
									      <div class="modal-footer">
									        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									      </div>
								    </div>
								  </div>
								</div>

</div></div>

