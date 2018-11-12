<?php
/*
Template Name: thiết kế nội thất
*/
?>
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
           
            <div class="col-sm-12 category-mota">
               <p><a href="https://xaydungvanoithat3d.vn/tu-van-thiet-ke-noi-that-dep-nhat/" title="Dịch vụ thiết kế nội thất"><strong>Dịch vụ thiết kế nội thất</strong></a> của 3D Exterior & Interior cung cấp đến khách hàng với đầy đủ các dịch vụ thiết kế từ Spa, showroom, shop, nội thất quán cafe, karaoke, cho đến nhà hang, khách sạn.</p>
            </div>
                <?php get_template_part('loopdichvu'); ?> 
                <!-- <?php page_nav(); ?> --> 
        </div>
    </div>
<?php get_template_part('home','footer');  ?>
<?php get_footer(); ?>
