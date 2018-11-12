<?php
/*
Template Name: phong cách thiết kế nội thất
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
                <p>Tổng hợp các <a href="https://xaydungvanoithat3d.vn/cac-phong-cach-thiet-ke-noi-that/" title="Phong cách thiết kế nội thất"><strong>phong cách thiết kế nội thất</strong></a> được ưa chuộng nhất hiện nay. Hãy lựa chọn cho ngôi nhà của mình một phong cách thiết kế phù hợp nhất, góp phần kiến tạo nên những không gian sống hoàn hảo và ấn tượng mang phong cách riêng theo ý muốn của gia chủ.</p>
            </div>
                <?php get_template_part('loopdichvu'); ?> 
                <!-- <?php page_nav(); ?> --> 
        </div>
    </div>
<?php get_template_part('home','footer');  ?>
<?php get_footer(); ?>
