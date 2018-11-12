<div class="container">
  <div class="row">
    <div class="home-title">
          <h2>Ý kiến khách hàng</h2>
    </div>
<div class=" boxnoigi">
    <div class="khung" >
      <?php $aray = array( 
        'post_type' =>  'khach-hang',
        'posts_per_page'    =>  '3',
         ); 
      $post_new = new WP_Query($aray);
     if($post_new->have_posts()):
        while($post_new->have_posts()):$post_new->the_post();?>
    <div class="col-sm-4 box-hinhanh">
    	<div class="item-hinhanh">
        	<div class="thumb">
          <?php echo the_post_thumbnail(); ?>
            </div>
            <div class="bloc"><h3><?php echo get_the_title(); ?></h3>
              <p><?php echo the_content(); ?></p>
            </div>    
        </div>
    </div>
    <?php  endwhile;
    endif; ?>
</div>
      
</div>
</div>
</div>