<!-- <button class="" onclick="plusDivs(-1)">&#10094;</button> -->

<div class="tongslider">
<div class="container">

          <?php   
$mypages = get_pages( array( 'child_of' =>1332, 'sort_order' => 'asc') );
foreach( $mypages as $page ) {    
    $content = $page->post_content;
    if ( ! $content ) // Check for empty page
      continue;
    $content = apply_filters( 'the_content', $content );?>
      <div class="slidertong">
        <div class="mySlidess">
          <div class="row">
            <div class="col-sm-1 slider1"><div id="" class="enigma_carousel-prev" ></div></div>
            <div class="col-sm-5 titleslider">
                    <h2><a title="<?php echo $page->post_title; ?>" href="<?php echo get_page_link( $page->ID ); ?>">
                      <?php echo $page->post_title; ?></a></h2>
                      <p><?php echo get_post_meta($page->ID,'mota',true)?></p>
                      <div class="xem">
                      <a title="<?php echo $page->post_title; ?>" href="<?php echo get_page_link( $page->ID ); ?>"> >> Xem Thêm <<</a></div>
            </div>
            <div class="col-sm-5 titleim">
              <img class="imagpage" src="<?php echo get_bloginfo('template_url') ?>/images/anhdv.jpg">
            </div>
            <div class="col-sm-1 slider1"><div id="" class="enigma_carousel-next" ></div> </div>
          </div>
          <?php if(get_the_tag_list() != '') { ?>
            <?php } ?>
        </div></div>
  <?php }?>

</div>
</div>
<!-- <button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button> -->