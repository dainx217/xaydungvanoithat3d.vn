<?php
/*
Template Name: thiết kế shop
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
                <p>Một <a href="https://xaydungvanoithat3d.vn/thiet-ke-shop/" title="Thiết kế shop"><strong>thiết kế shop</strong></a> đẹp và mô tả đúng sản phẩm của bạn không chỉ giúp chủ đầu tư nâng cao hiệu quả kinh doanh, thu hút khách hàng mà còn khẳng định hình ảnh thương hiệu của shop vào trong tâm trí khách hàng.</p>
            </div>
                <?php get_template_part('loopdichvu'); ?> 
                <!-- <?php page_nav(); ?> --> 
        </div>
    </div>
<?php get_template_part('home','footer');  ?>
<?php get_footer(); ?>
