<?php
/*
Template Name: thiết kế karaoke
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
                <p>Dịch vụ <a href="https://xaydungvanoithat3d.vn/thiet-ke-karaoke-vip-dep/" title="Thiết kế karaoke"><strong>thiết kế karaoke</strong></a> của 3D Exterior & Interior sẽ mang đến một không gian cực kỳ ấn tượng và đẳng cấp. Đã đến lúc cải tạo quán karaoke thành một thế giới giải trí tuyệt vời cho các khách hàng của mình và đổi lại bạn sẽ thu lại được nguồn lợi nhuận lớn từ họ.</p>
            </div>
                <?php get_template_part('loopdichvu'); ?> 
                <!-- <?php page_nav(); ?> --> 
        </div>
    </div>
<?php get_template_part('home','footer');  ?>
<?php get_footer(); ?>
