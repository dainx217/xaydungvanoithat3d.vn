<?php
/*
Template Name: thiết kế khách sạn
*/
?><?php get_header(); ?>
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
           
            <div class="col-sm-12 category-mota">
                <p><a href="https://xaydungvanoithat3d.vn/thiet-ke-khach-san-dep/" title="Thiết kế khách sạn"><strong>Thiết kế khách sạn</strong></a> bao gồm các dịch vụ thiết kế khách sạn 5 sao, 3 sao, sảnh khách sạn, phòng khách sạn,v.v. với đầy đủ các tiêu chuẩn về thiết kế, ghi dấu ấn kiến trúc ấn tượng nhất của một công trình kiến trúc hoàn hảo.</p>
            </div>
                <?php get_template_part('loopdichvu'); ?> 
                <!-- <?php page_nav(); ?> --> 
        </div>
    </div>
<?php get_template_part('home','footer');  ?>
<?php get_footer(); ?>
