<?php
/*
Template Name: thiết kế kiến trúc nhà
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
                <p>Khi đến với các dịch vụ <a href="https://xaydungvanoithat3d.vn/thiet-ke-kien-truc-nha-o-dep/" title="Thiết kế kiến trúc nhà"><strong>thiết kế kiến trúc nhà</strong></a> của công ty chúng tôi khách hàng sẽ nhận được rất nhiều những ưu đãi hấp dẫn về chi phí thiết kế cũng như sự hỗ trợ tuyệt vời từ các kiến trúc sư hàng đầu về thiết kế kiến trúc nhà ở tại 3D Exterior & Interior.</p>
            </div>
                <?php get_template_part('loopdichvu'); ?> 
                <!-- <?php page_nav(); ?> --> 
        </div>
    </div>
<?php get_template_part('home','footer');  ?>
<?php get_footer(); ?>
