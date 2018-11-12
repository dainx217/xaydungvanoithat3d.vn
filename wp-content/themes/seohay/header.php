<!DOCTYPE html>
<html <?php language_attributes(); ?>><!--<![endif]-->
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>" charset="<?php bloginfo('charset'); ?>" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>	
	<?php $wl_theme_options = weblizar_get_options(); ?>
	<link href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" rel="shortcut icon">
	<?php wp_head(); ?>
<!-- <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-60717685-1', 'auto');
  ga('send', 'pageview');
</script>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'vi'}
</script> -->


<body>
<header>
<div class="card bg-dark text-white">
	<?php if(is_front_page() && is_home()){ ?>
  <img class="card-img" src="<?php echo get_bloginfo('template_url') ?>/images/banner20.jpg" alt="Card image">
  <?php } else { ?> 
 <img class="card-img" src="<?php echo get_bloginfo('template_url') ?>/images/banner22.jpg" alt="Card image"><?php } ?></a></div>
  <div class="card-img-overlay" style="padding:0 !important;">
    	<div class="container">
		<div class="row">
			<div class="col-xl-5">		
				<div class="logo">						
					<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php if($wl_theme_options['text_title'] =="on")
					{ echo get_bloginfo('name'); }
					else if($wl_theme_options['upload_image_logo']!='') 
					{ ?>
					<img class="img-responsive" alt="Thiết kế kiến trúc nội thất" src="<?php echo get_stylesheet_directory_uri();?>/images/logo_1.png" style="height:<?php if($wl_theme_options['height']!='') { echo $wl_theme_options['height']; }  else { "80"; } ?>px; width:<?php if($wl_theme_options['width']!='') { echo $wl_theme_options['width']; }  else { "200"; } ?>px;" />
					<?php } else { ?> 
					Công ty cổ phần xây dựng và nội thất 3D <?php } ?></a></div>
			</div>
			<div class="col-xl-7">	
					<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					    <div class="navbar-nav">
					      <a class="nav-item nav-link" href="http://xaydungvanoithat3d.com/thong-tin/gioi-thieu-doi-net-ve-cong-ty-3d/4/">Giới thiệu</a>
					      <a class="nav-item nav-link" href="http://xaydungvanoithat3d.com/">công trình thực tế</a>
					      <a class="nav-item nav-link" href="https://xaydungvanoithat3d.vn/tin-tuc/">Tin tức</a>
					      <a class="nav-item nav-link" href="https://xaydungvanoithat3d.vn/lien-he/">Liên Hệ</a>
					    </div>
					</div>
			</div>
		</div>
	</div>
	<div class="sticky-top">
		<div class="nenmenu">
			<div class="container">
				<div class="row">
					<nav id="nav-menu-container">
				        <ul class="nav-menu">
				          	<div class="navigation_menu ">
								<?php wp_nav_menu( array(
									'menu'              => 'primary',
									'theme_location'    => 'primary',               
									'container'         => 'div',
									'container_id'      => 'menu'
									)
								); ?>			
							</div>
				        </ul>
		      		</nav>
				</div>
			</div>
		</div>
	</div>
  </div>

</header>
<!-- <header class="header">
	<div class="container">
		<div class="row">
			<div class="col-xl-5">		
				<div class="logo">						
					<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php if($wl_theme_options['text_title'] =="on")
					{ echo get_bloginfo('name'); }
					else if($wl_theme_options['upload_image_logo']!='') 
					{ ?>
					<img class="img-responsive" alt="Thiết kế kiến trúc nội thất" src="<?php echo get_stylesheet_directory_uri();?>/images/logo_1.png" style="height:<?php if($wl_theme_options['height']!='') { echo $wl_theme_options['height']; }  else { "80"; } ?>px; width:<?php if($wl_theme_options['width']!='') { echo $wl_theme_options['width']; }  else { "200"; } ?>px;" />
					<?php } else { ?> 
					Công ty cổ phần xây dựng và nội thất 3D <?php } ?></a></div>
			</div>
			<div class="col-xl-7">	
					<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					    <div class="navbar-nav">
					      <a class="nav-item nav-link" href="#">Giới thiệu</a>
					      <a class="nav-item nav-link" href="#">công trình thực tế</a>
					      <a class="nav-item nav-link" href="#">Tin tức</a>
					      <a class="nav-item nav-link" href="#">Liên Hệ</a>
					    </div>
					</div>
			</div>
		</div>
	</div>
	<div id="navbarr">
		<div class="nenmenu">
			<div class="container">
				<div class="row">
					<nav id="nav-menu-container">
				        <ul class="nav-menu">
				          	<div class="navigation_menu ">
								<?php wp_nav_menu( array(
									'menu'              => 'primary',
									'theme_location'    => 'primary',               
									'container'         => 'div',
									'container_id'      => 'menu'
									)
								); ?>			
							</div>
				        </ul>
		      		</nav>
				</div>
			</div>
		</div>
	</div>
</header> -->
<!-- <?php get_template_part('home','quangcao'); ?> -->
