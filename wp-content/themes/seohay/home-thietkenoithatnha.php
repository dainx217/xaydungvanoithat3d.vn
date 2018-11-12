
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
                <p><a href="https://xaydungvanoithat3d.vn/tu-van-thiet-ke-van-phong-dep/" title="Thiết kế văn phòng"><strong>Thiết kế văn phòng</strong></a> không chỉ đơn thuần là việc sắp xếp bàn làm việc hay các khu vực chức năng cho hợp lý. Mà đối với chúng tôi đây là công việc vô cùng quan trọng giúp tạo nền móng cho mọi sự phát triển của doanh nghiệp trong tương lai.</p>
            </div>
                <?php get_template_part('loopdichvu'); ?> 
                <!-- <?php page_nav(); ?> --> 
        </div>
    </div>
<?php get_template_part('home','footer');  ?>
<?php get_footer(); ?>