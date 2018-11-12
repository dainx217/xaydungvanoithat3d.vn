<?php get_header(); ?>
<div class="container">
		<div class="error" style=" width:100%;height:300px;">
			<div class="col-md-12">
				<h1><?php _e('404 Error','weblizar'); ?></h1>
				<ul class="breadcrumb">
					<li><a href="<?php echo home_url( '/' ); ?>"><?php _e('Trang chủ','weblizar'); ?></a></li>
			<li><?php _e('404 Error','weblizar'); ?></li>
				</ul>
			</div>
	<div class="row enigma_blog_wrapper">
		<div class="col-md-12 hc_404_error_section">
			<div class="error_404">
				<h2><?php _e('404','weblizar'); ?></h2>
				<p><?php _e('Trang bạn truy cập không tồn tại!
Chúng tôi xin lỗi, nhưng không có trang nào phù hợp với truy vấn của bạn !','weblizar'); ?></p>
				<p><a href="<?php echo home_url( '/' ); ?>"><button class="enigma_send_button" type="submit"><?php _e('Go To Homepage','weblizar'); ?></button></a></p>
			</div>
		</div>
	</div>
	</div>
<?php get_footer(); ?>
</div>