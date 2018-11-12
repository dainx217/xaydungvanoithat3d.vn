<div class="container">
            <?php   
$mypages = get_pages( array( 'child_of' =>1332, 'sort_order' => 'asc') );
foreach( $mypages as $page ) {    
    $content = $page->post_content;
    if ( ! $content ) // Check for empty page
      continue;
    $content = apply_filters( 'the_content', $content );?>
        <div class="mySlidesdai fade">
          <div class="numbertext"></div>
            <div class="col-sm-7">
              <h2><a title="<?php echo $page->post_title; ?>" href="<?php echo get_page_link( $page->ID ); ?>">
                      <?php echo $page->post_title; ?></a></h2>
                      <p><?php echo get_post_meta($page->ID,'mota',true)?></p>
                      <div class="xem">
                      <a title="<?php echo $page->post_title; ?>" href="<?php echo get_page_link( $page->ID ); ?>"> >> Xem Thêm <<</a></div>
            </div>
            <div class="col-sm-5">
            <img src="<?php echo get_bloginfo('template_url') ?>/images/anhdv.jpg" style="width:100%">
            </div>
          <div class="text">Caption Text</div>
        </div>
        <?php if(get_the_tag_list() != '') { ?>
            <?php } ?>
      <?php }?>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
<div style="text-align:center">
  <?php   
$mypages = get_pages( array( 'child_of' =>1332, 'sort_order' => 'asc') );
foreach( $mypages as $page ) {    
    $content = $page->post_content;
    if ( ! $content ) // Check for empty page
      continue;
    $content = apply_filters( 'the_content', $content );?>
  <span class="dot" onclick="currentSlide(<?php echo $page->ID; ?>)"></span> 
   <?php if(get_the_tag_list() != '') { ?>
            <?php } ?>
      <?php }?>
</div>
</div>
