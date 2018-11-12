<?php
/*
Template Name: thiết kế phòng ngủ
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
                <p>Dịch vụ tư vấn <a href="" title="Thiết kế phòng ngủ"><strong>thiết kế phòng ngủ</strong></a> tại 3D Exterior & Interior cung cấp đến khách hàng những giải pháp thiết kế thi công tuyệt vời nhất, tiết kiệm nhất, hoàn hảo nhất. Với chúng tôi, phòng ngủ không chỉ là một nơi để ngủ.</p>
            </div>
                <?php get_template_part('loopdichvu'); ?> 
                <!-- <?php page_nav(); ?> --> 
        </div>
    </div>
<?php get_template_part('home','footer');  ?>
<?php get_footer(); ?>
