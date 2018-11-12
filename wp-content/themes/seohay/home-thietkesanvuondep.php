<?php
/*
Template Name: thiết kế sân vườn đẹp
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
                <p>Một thiết kế sân vườn đẹp luôn mang lại nguồn cảm hứng vô tận cho các kiến trúc sư. Bởi đây là kỷ nguyên của những kiến trúc xanh, chính vì vậy không có lý do gì để bạn không lựa chọn một dịch vụ <a href="https://xaydungvanoithat3d.vn/thiet-ke-san-vuon-dep/" title="Thiết kế sân vườn" ><strong>thiết kế sân vườn</strong></a> hoàn hảo đến từ một đơn vị <a href="https://xaydungvanoithat3d.vn/thiet-ke-ngoai-that/" title="Thiết kế ngoại thất"><strong>thiết kế ngoại thất</strong></a> uy tín.</p>
            </div>
                <?php get_template_part('loopdichvu'); ?> 
                <!-- <?php page_nav(); ?> --> 
        </div>
    </div>
<?php get_template_part('home','footer');  ?>
<?php get_footer(); ?>
