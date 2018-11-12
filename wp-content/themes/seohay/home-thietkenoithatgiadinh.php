<?php
/*
Template Name: thiết kế nội gia đình
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
                <p><a href="https://xaydungvanoithat3d.vn/thiet-ke-noi-that-gia-dinh/" title="Thiết kế nội thất gia đình"><strong>Thiết kế nội thất gia đình</strong></a> là một dịch vụ tổng hợp bao gồm đầy đủ các không gian sinh hoạt chung và không gian sinh hoạt riêng của từng gia đình. Đây là cách đơn giản nhất giúp gia chủ nhanh chóng sở hữu không gian sống tiện nghi, hiện đại và hoàn mỹ.</p>
            </div>
                <?php get_template_part('loopdichvu'); ?> 
                <!-- <?php page_nav(); ?> --> 
        </div>
    </div>
<?php get_template_part('home','footer');  ?>
<?php get_footer(); ?>
