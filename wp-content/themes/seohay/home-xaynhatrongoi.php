<?php
/*
Template Name: Xây nhà trọn gói
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
                <p>Dịch vụ <a href="https://xaydungvanoithat3d.vn/dich-vu-nhan-xay-nha-tron-goi/" title="Xây nhà trọn gói"><strong>Xây nhà trọn gói</strong></a> là một trong những dịch vụ <a href="https://xaydungvanoithat3d.vn/thi-cong-xay-dung-nha-o/" title="Thi công xây dựng"><strong>thi công xây dựng</strong></a> tổng hợp tiện ích mà 3D Exterior & Interior muốn giới thiệu với khách hàng. Nhằm giúp chủ đầu tư giảm thiểu mọi vấn đề phát sinh trong quá trình xây dựng, giảm thiểu chi phí đầu tư, rút ngắn thời gian thực hiện công trình.</p>
            </div>
                <?php get_template_part('loopdichvu'); ?> 
                <!-- <?php page_nav(); ?> --> 
        </div>
    </div>
<?php get_template_part('home','footer');  ?>
<?php get_footer(); ?>
