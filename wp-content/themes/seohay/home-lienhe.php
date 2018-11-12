<?php
/*
Template Name: liên hệ
*/
?>
<?php get_header(); ?>
<?php
/*
Template Name: thiết kế nội thất
*/
?>
<?php get_header(); ?>
	<div class="container">
		<div class="row">
		<?php if(have_posts()) :?>
			<div class="col-md-12">
			<?php
				get_template_part('breadcrums'); ?>
			</div>
		<?php endif; ?>	
		</div>
		<div class="container">
		<div class="row">
        	<div class="col-md-8">
        		<div class="formlienhe"><h2>Bản đồ chỉ đường</h2></div>
        		<p>Mọi thông tin liên lạc, hỏi đáp và tư vấn dịch vụ của 3D INTERIOR vui lòng liên hệ trực tiếp theo thông tin bên dưới. Hoặc bạn cũng có thể nhập thông tin vào khung bên cạnh rồi gửi cho chúng tôi.</p>
				
        		<div id="map" style="width:100%;height:100%;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3729.227644514011!2d106.63649121492679!3d20.822512000163094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a70b0e7db957b%3A0x2950cb7723d901a1!2zMzEwIEzDqiBEdeG6qW4sIELhuq9jIFPGoW4sIEtp4bq_biBBbiwgSOG6o2kgUGjDsm5nLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1538639373675" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
        		</div>
	     	<div class="col-md-4">
	     		<div class="formlienhe"><h2>Thông tin liên hệ</h2></div>
	     		<h3>Địa chỉ</h3>
	     		<p>Số 310 Đường Lê Duẩn, Bắc Sơn, Kiến An, Hải Phòng</p>
	     		<h3>Điện thoại</h3>
	     		<p>0984.366.668</p>
	     		<h3>Email</h3>
	     		<a href="">xaydungnoithat3d.com</a><br>
	     		<a href="">xaydungnoithat3d.vn</a><br>
	     		<a href="">xaydungnoithat3d.com.vn</a>
	     		<h3>Thời gian làm việc</h3>
	     		<p>Thứ 2 -> Thứ 7<br>Sáng 7:30 -> 11;30<br>Chiều 13:00 -> 17:00</p>
	     	</div>
	     </div>
	     </div>
	     <div class="container">
		<div class="row"><div class="col-md-8"><div class=" dangkytuvan">
					<div class="noidung-tuvan"><h2 class="tie">ĐĂNG KÝ TƯ VẤN MIỄN PHÍ</h2>
						<?php echo do_shortcode('[contact-form-7 id="5889" title="Contact form 1"]');?></div></div></div></div></div>
	</div>

<?php get_footer(); ?>