<?php
/*
Template Name: thiết kế nội chung cư
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
                <p>Tư vấn <a href="https://xaydungvanoithat3d.vn/chuyen-tu-van-thiet-ke-noi-that-chung-cu-dep/" title="Thiết kế nội thất chung cư"><strong>thiết kế nội thất chung cư</strong></a> là công việc giúp cho chủ đầu tư sử dụng diện tích trong các căn hộ chung cư một cách hữu ích và tối ưu. Không chỉ đơn giản là việc bố trí, sắp xếp nội thất sao cho phù hợp, giúp cải thiện không gian, tiết kiệm diện tích,v.v.</p>
            </div>
                <?php get_template_part('loopdichvu'); ?> 
                <!-- <?php page_nav(); ?> --> 
        </div>
    </div>

<?php get_footer(); ?>
