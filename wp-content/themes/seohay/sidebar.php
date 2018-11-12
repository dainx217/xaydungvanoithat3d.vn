<div class="secondary">
	<div class="form-search">
		<?php echo do_shortcode('[wpbsearch]'); ?>
	</div>
	<div class="danhmuc">
		<?php if ( is_active_sidebar( 'sidebar-primary' ) )
		{ dynamic_sidebar( 'sidebar-primary' );	}
		else  { 
		$args = array(
		'before_widget' => '<div class="enigma_sidebar">',
		'after_widget'  => '</div>');
		the_widget('WP_Widget_Archives', null, $args);
		} ?>
    </div>
    
	<div class="dangkytuvan clearfix">
		<div class="noidung-tuvan">
		<p class="tieude-tuvan">ĐĂNG KÝ TƯ VẤN MIỄN PHÍ</p>
			<?php echo do_shortcode('[contact-form-7 id="5889" title="Contact form 1"]');?>
		</div>
	</div>
		
	<div class="news clearfix">
		<div class="titile4"><h4><a href="https://xaydungvanoithat3d.vn/tin-tuc/"><span style="height:48px;line-height:48px;">Tin tức mới nhất</span></a></h4></div>
		<div class="box_news">
		<?php 	if ( have_posts()) : 			
			$args = array( 'post_type' => 'post','posts_per_page' => 5);// 'posts_per_page' gioi han bai viet hien thi		
			$post_type_data = new WP_Query( $args );?>
			<?php query_posts ('showposts=5&cat=3&orderby=DESC');?>
			<ul>
			<?php while(have_posts()) : the_post(); ?>
				<li>				
					<?php $img = array('class' => 'enigma_img_responsive');
							if(has_post_thumbnail()):?> 
					<a  title="<?php the_title(); ?>" href="<?php echo the_permalink(); ?>" rel="nofollow"><?php echo the_post_thumbnail('home_post_thumb',$img); ?></a>		
					<?php endif; ?>
                <div class="content">
				<a  title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<?php if(get_the_tag_list() != '') { ?>
				<?php } ?>
                <p>
				<?php echo get_the_popular_excerpt1(80); ?></p>
                </div>		
				</li>
			<?php  endwhile; ?>
			</ul>			
		<?php endif; ?>
		</div>
	</div>
		

 <div class="news">
	<div class="titile4">
    <h4><span style="height:48px;line-height:48px;">Category</span></h4>
    </div>
	<div id="category">
	<ul class="sub-menu"> 
		<li><a href="https://xaydungvanoithat3d.vn/thiet-ke-noi-that-nha/" title="Thiết kế nội thất nhà">Thiết kế nội thất nhà</a></li>
		<li><a href="https://xaydungvanoithat3d.vn/chuyen-tu-van-thiet-ke-noi-that-chung-cu-dep/" title="Thiết kế nội thất chung cư">Thiết kế nội thất chung cư</a></li>
		<li><a href="https://xaydungvanoithat3d.vn/thiet-ke-noi-that-gia-dinh/" title="Thiết kế nội thất gia đình">Thiết kế nội thất gia đình</a></li>
		<li><a href="https://xaydungvanoithat3d.vn/dich-vu-thiet-ke-noi-that/" title="Dịch vụ thiết kế nội thất">Dịch vụ thiết kế nội thất</a></li>
		<li><a href="https://xaydungvanoithat3d.vn/cac-phong-cach-thiet-ke-noi-that/" title="Phong cách thiết kế nội thất">Phong cách thiết kế nội thất</a></li> 
		<li><a href="https://xaydungvanoithat3d.vn/thiet-ke-kien-truc-nha-o-dep/" title="Thiết kế kiến trúc nhà">Thiết kế kiến trúc nhà</a></li>
		<li><a href="https://xaydungvanoithat3d.vn/thiet-ke-khach-san-dep/" title="Thiết kế khách sạn">Thiết kế khách sạn</a></li>
		<li><a href="https://xaydungvanoithat3d.vn/tu-van-thiet-ke-van-phong-dep/" title="Thiết kế văn phòng">Thiết kế văn phòng</a></li>
		<li><a href="https://xaydungvanoithat3d.vn/thiet-ke-phong-khach-dep/" title="Thiết kế phòng khách">Thiết kế phòng khách</a></li>
		<li><a href="https://xaydungvanoithat3d.vn/tu-van-thiet-ke-phong-ngu-dep/" title="Thiết kế phòng ngủ">Thiết kế phòng ngủ</a></li>
		<li><a href="https://xaydungvanoithat3d.vn/thiet-ke-karaoke-vip-dep/" title="Thiết kế Karaoke">Thiết kế Karaoke</a></li>
		<li><a href="https://xaydungvanoithat3d.vn/thiet-ke-shop/" title="Thiết kế Shop">Thiết kế Shop</a></li>
		<li><a href="https://xaydungvanoithat3d.vn/thiet-ke-san-vuon-dep/" title="Thiết kế sân vườn">Thiết kế sân vườn</a></li>
		<li><a href="https://xaydungvanoithat3d.vn/dich-vu-nhan-xay-nha-tron-goi/" title="Xây nhà trọn gói">Xây nhà trọn gói</a></li>
	</ul>
	</div>
</div>
</div>
<div class="mobile-danhmuc" style="display:none;">
<div class="khung">
	<div class="titile4" style="margin-bottom:20px;width:270px;"><h2><span>Dịch vụ thiết kế</span></h2></div>
        	<div class="cot"><?php dynamic_sidebar( 'menu_1-widget' );?></div>
            <div class="cot"><?php dynamic_sidebar( 'menu_2-widget' );?></div>
            <div class="cot"><?php dynamic_sidebar( 'menu_3-widget' );?></div>
            <div class="cot"><?php dynamic_sidebar( 'menu_5-widget' );?></div>
   </div>
</div>