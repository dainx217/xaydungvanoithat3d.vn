<?php
/*
Template Name: thiết kế phòng khách
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
                <p>Một <a href="https://xaydungvanoithat3d.vn/thiet-ke-phong-khach-dep/" title="Thiết kế phòng khách"><strong>thiết kế phòng khách</strong></a> sang trọng và đẳng cấp chắc hẳn là điều mà bất kỳ gia chủ nào cũng mong muốn. 3D Exterior & Interior cùng những nhà thiết kế sáng tạo của mình cam kết mang đến cho khách hàng những thiết kế phòng khách đẹp tuyệt vời nhất.</p>
            </div>
                <?php get_template_part('loopdichvu'); ?> 
                <!-- <?php page_nav(); ?> --> 
        </div>
    </div>
<?php get_template_part('home','footer');  ?>
<?php get_footer(); ?>
