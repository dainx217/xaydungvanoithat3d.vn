<?php
/* sets predefined Post Thumbnail dimensions */
if ( function_exists( 'add_theme_support' ) ) {
	
	add_theme_support( 'post-thumbnails' );
	
	//Article image size
	add_image_size( 'article-thumb', 300, 200, true );
	
	//Article image size
	add_image_size( 'small-thumb', 100, 67, true );
	
};

function isMobile() {
	return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

 /*	*Theme Name	: Enigma
	*Theme Core Functions and Codes
*/
	/**Includes required resources here**/
	define('WL_TEMPLATE_DIR_URI', get_template_directory_uri());
	define('WL_TEMPLATE_DIR', get_template_directory());
	define('WL_TEMPLATE_DIR_CORE' , WL_TEMPLATE_DIR . '/core');
	
	require( WL_TEMPLATE_DIR_CORE . '/menu/wp_bootstrap_navwalker.php' );
	require( WL_TEMPLATE_DIR_CORE . '/scripts/css_js.php' ); //Enquiring Resources here	
	require( WL_TEMPLATE_DIR_CORE . '/image_crop.php'); //Resize Images
	require( WL_TEMPLATE_DIR_CORE . '/comment-function.php' );
	require( WL_TEMPLATE_DIR_CORE . '/flickr-widget.php' );
	//Sane Defaults
	function weblizar_default_settings()
	{
		$ImageUrl = WL_TEMPLATE_DIR_URI ."/images/1.png";
		$ImageUrl2 = WL_TEMPLATE_DIR_URI ."/images/2.png";
		$ImageUrl3 = WL_TEMPLATE_DIR_URI ."/images/3.png";
		$ImageUr20 = WL_TEMPLATE_DIR_URI ."/images/4.png";
		$ImageUr21= WL_TEMPLATE_DIR_URI."/images/5.png";
		$ImageUrl4 = WL_TEMPLATE_DIR_URI ."/images/portfolio1.png";
		$ImageUrl5 = WL_TEMPLATE_DIR_URI ."/images/portfolio2.png";
		$ImageUrl6 = WL_TEMPLATE_DIR_URI ."/images/portfolio3.png";
		$ImageUrl7 = WL_TEMPLATE_DIR_URI ."/images/portfolio4.png";
		$ImageUrl8 = WL_TEMPLATE_DIR_URI ."/images/portfolio5.png";
		$ImageUrl9 = WL_TEMPLATE_DIR_URI ."/images/portfolio6.png";
		$wl_theme_options=array(
			//Logo and Fevicon header			
			'upload_image_logo'=>'',
			'height'=>'55',
			'width'=>'150',
			'text_title'=>'off',
			'upload_image_favicon'=>'',			
			'custom_css'=>'',
			'slide_image_1' => $ImageUrl,
			'slide_title_1' => 'Slide Title',
			'slide_desc_1' => 'tudi v priljubljenih programih za namizno založništvo kot',
			'slide_btn_text_1' => 'Read More',
			'slide_btn_link_1' => '#',
			'slide_image_2' => $ImageUrl2,
			'slide_title_2' => 'Lorem Ipsuma',
			'slide_desc_2' => 'kombinacijo znakov neznani tiskar združil v vzorčno',
			'slide_btn_text_2' => 'Read More',
			'slide_btn_link_2' => '#',
			'slide_image_3' => $ImageUrl3,
			'slide_title_3' => ' zgolj naključno e',
			'slide_desc_3' => 'nenačrtovano ali namenoma, z različnimi š',
			'slide_btn_text_3' => 'Read More',
			'slide_btn_link_3' => '#',	
			'slide_image_4' => $ImageUr20,
			'slide_title_4' => 'Lorem Ipsuma',
			'slide_desc_4' => 'kombinacijo znakov neznani tiskar združil v vzorčno',
			'slide_btn_text_4' => 'Read More',
			'slide_btn_link_4' => '#',
			'slide_image_5' => $ImageUr21,
			'slide_title_5' => 'Lorem Ipsuma',
			'slide_desc_5' => 'kombinacijo znakov neznani tiskar združil v vzorčno',
			'slide_btn_text_5' => 'Read More',
			'slide_btn_link_5' => '#',		
			'blog_title'=>'Latest Blog',			
			'fc_title' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
			'fc_btn_txt' => 'More Features',
			'fc_btn_link' =>'#',
			//Social media links
			'header_social_media_in_enabled'=>'on',
			'footer_div_social_media_enbled'=>'on',
			'twitter_link' =>"https://twitter.com/",
			'fb_link' =>"https://facebook.com",
			'linkedin_link' =>"http://linkedin.com/",
			'youtube_link' =>"https://youtube.com/",
			
			'email_id' => 'enigma@mymail.com',
			'phone_no' => '0159753586',
			'footer_customizations' => ' &#169; 2014 Enigma Theme',
			'developed_by_text' => 'Theme Developed By',
			'developed_by_weblizar_text' => 'Weblizar Themes',
			'developed_by_link' => 'http://weblizar.com/',
			'home_service_heading' => 'Our Services',
			'service_1_title'=>"",
			'service_1_icons'=>"",
			'service_1_text'=>"",
			'service_1_link'=>"#",
			'service_2_title'=>"",
			'service_2_icons'=>"",
			'service_2_text'=>"",
			'service_2_link'=>"#",
			
			'service_3_title'=>"",
			'service_3_icons'=>"",
			'service_3_text'=>"",
			'service_3_link'=>"#",			

			//Portfolio Settings:
			'portfolio_home'=>'on',
			'port_heading' => 'Recent Works',
			'port_1_img'=> $ImageUrl4,
			'port_1_title'=>'modsætning',
			'port_1_link'=>'#',
			'port_2_img'=> $ImageUrl5,			
			'port_2_title'=>'udgaver',
			'port_2_link'=>'#',
			'port_3_img'=> $ImageUrl6,
			'port_3_title'=>'udgaver',
			'port_3_link'=>'#',
			'port_4_img'=> $ImageUrl7,
			'port_4_title'=>'udgaver',
			'port_4_link'=>'#'
			
		);
		return apply_filters( 'enigma_options', $wl_theme_options );
	}

// gioi han từ excerpt
	function excerpts($limit) {
		$excerpts = explode(' ', get_the_excerpt(), $limit);
		if (count($excerpts)>=$limit) {
			array_pop($excerpts);
			$excerpts = implode(" ",$excerpts).'...';
		} else {
			$excerpts = implode(" ",$excerpts);
		}
		$excerpts = preg_replace('`[[^]]*]`','',$excerpts);
		return $excerpts;
	}
	function excerpt($limit) {
		$excerpt = explode(' ', get_the_excerpt(), $limit);
		if (count($excerpt)>=$limit) {
			array_pop($excerpt);
			$excerpt = implode(" ",$excerpt).'...';
		} else {
			$excerpt = implode(" ",$excerpt);
		}
		$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
		return $excerpt;
	}
// giới hạn bài viết trong contet không có chữ xem them
	function content($limit) {
		$content = explode(' ', get_the_content(), $limit);
		if (count($content)>=$limit) {
			array_pop($content);
			$content = implode(" ",$content  ).   '...';
		} else {
			$content = implode(" ",$content);
		}
		$content = preg_replace('/[.+]/','', $content);
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]>', $content);
		return $content;
	}
// gioi hạn nội dung trong content có chữ xem thêm 
	function get_the_popular_excerpt($limit){
		$excerpt = get_the_content();
//$excerpt = preg_replace(" ([.*?])",'',$excerpt);
		$excerpt = strip_shortcodes($excerpt);
		$excerpt = strip_tags($excerpt);
		$excerpt = substr($excerpt, 0, $limit);
		$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
//$excerpt = trim(preg_replace( '/s+/', ' ', $excerpt));
		$excerpt = $excerpt.'<a href="'.get_permalink().'" rel="nofollow"> [...]</a>';
		return $excerpt;
	}
	function get_the_popular_excerpt3($limit){
		$excerpt = get_the_content();
//$excerpt = preg_replace(" ([.*?])",'',$excerpt);
		$excerpt = strip_shortcodes($excerpt);
		$excerpt = strip_tags($excerpt);
		$excerpt = substr($excerpt, 0, $limit);
		$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
//$excerpt = trim(preg_replace( '/s+/', ' ', $excerpt));
		$excerpt = $excerpt.'<a style="color:#f60;font-weight:bold;" href="'.get_permalink($page->ID).'" rel="nofollow"> Xem Thêm...</a>';
		return $excerpt;
	}
	add_action( 'init', 'polygon_excerpt_to_page' );
	function get_the_popular_excerpt1($limit){
		$excerpt = get_the_content();
//$excerpt = preg_replace(" ([.*?])",'',$excerpt);
		$excerpt = strip_shortcodes($excerpt);
		$excerpt = strip_tags($excerpt);
		$excerpt = substr($excerpt, 0, $limit);
		$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
//$excerpt = trim(preg_replace( '/s+/', ' ', $excerpt));
//$excerpt = $excerpt.'<a href="'.$permalink.'" rel="nofollow"></a>';
		return $excerpt;
	}
//
	function get_the_popular_excerpt4($limit){
		$excerpt = get_the_content();
		$excerpt = strip_shortcodes($excerpt);
		$excerpt = strip_tags($excerpt);
		$excerpt = substr($excerpt, 0, $limit);
		$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
		$excerpt = $excerpt.'<a style="color:#f60;font-weight:bold;" href="'.get_permalink().'" rel="nofollow"> Xem Thêm...</a>';
		return $excerpt;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

	add_theme_support( 'post-thumbnails' );  
	set_post_thumbnail_size( 1000, 300, true );
	function catch_that_image() {
		global $post, $posts;
		$first_img = '';
		ob_start();
		ob_end_clean();
		$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
		$first_img = $matches[1][0];

		if(empty($first_img)) {
			$first_img = get_template_directory_uri()."/images/no_images.jpg";/** Hình ảnh mặc định khi trong bài viết không có bất kỳ hỉnh ảnh nào. **/
		}
		return $first_img;
	}
	function weblizar_get_options() {
    // Options API
		return wp_parse_args( 
			get_option( 'enigma_options', array() ), 
			weblizar_default_settings() 
		);    
	}
	//wp title tag starts here
	function weblizar_head( $title, $sep )
	{	global $paged, $page;		
		if ( is_feed() )
			return $title;
		// Add the site name.
		$title .= get_bloginfo( 'name' );
		// Add the site description for the home/front page.
		$site_description = get_bloginfo( 'description' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			$title = "$title $sep $site_description";
		// Add a page number if necessary.
		if ( $paged >= 2 || $page >= 2 )
			$title = "$title $sep " . sprintf( _e( 'Page', 'weblizar' ), max( $paged, $page ) );
		return $title;
	}	
	add_filter( 'wp_title', 'weblizar_head', 10,2 );
	/*After Theme Setup*/
	add_action( 'after_setup_theme', 'weblizar_head_setup' ); 	
	function weblizar_head_setup()
	{	
		global $content_width;
		//content width
		if ( ! isset( $content_width ) ) $content_width = 550; //px

		// Load text domain for translation-ready
		load_theme_textdomain( 'weblizar', WL_TEMPLATE_DIR_CORE . '/lang' );	
		
		add_theme_support( 'post-thumbnails' ); //supports featured image
		// This theme uses wp_nav_menu() in one location.
		register_nav_menu( 'primary', __( 'Primary Menu', 'weblizar' ) );
		// theme support 	
		$args = array('default-color' => '000000',);
		add_theme_support( 'custom-background', $args); 
		add_theme_support( 'automatic-feed-links'); 
		require_once('options-reset.php');//Reset Theme Options Here
		require( WL_TEMPLATE_DIR_CORE . '/theme-options/option-panel.php' ); // for Options Panel		
	}
	// Read more tag to formatting in blog page 
	function weblizar_content_more($more)
	{  global $post;							
		return '<div class="blog-post-details-item"><a class="enigma_blog_read_btn" href="'.get_permalink().'"><i class="fa fa-plus-circle"></i>[...] target=_blank</a></div>';
	}   
	add_filter( 'the_content_more_link', 'weblizar_content_more' );
	
	
	// Replaces the excerpt "more" text by a link
	function weblizar_excerpt_more($more) {
		global $post;
		return '';
	}
	add_filter('excerpt_more', 'weblizar_excerpt_more');
	/*
	* Weblizar widget area
	*/
	add_action( 'widgets_init', 'weblizar_widgets_init');
	function weblizar_widgets_init() {
		/*sidebar*/
		register_sidebar( array(
			'name' => __( 'Sidebar', 'weblizar' ),
			'id' => 'sidebar-primary',
			'description' => __( 'The primary widget area', 'weblizar' ),
			'before_widget' => '<div class="enigma_sidebar_widget">',
			'after_widget' => '</div>',
			'before_title' => '<div class="enigma_sidebar_widget_title"><h2>',
			'after_title' => '</h2></div>'
		) );
		register_sidebar( array(
			'name' => __( 'Footer Widget Area', 'weblizar' ),
			'id' => 'footer-widget-area',
			'description' => __( 'Footer widget area', 'weblizar' ),
			'before_widget' => '<div class="col-md-12 col-sm-6 enigma_footer_widget_column">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="enigma_footer_widget_title">',
			'after_title' => '<div class="enigma-footer-separator"></div></h2>',
		) );             
		register_sidebar( array(
			'name' =>__(' y kiên Widget','welizar'),
			'id' =>'y-kien-widget',
			'description'=>__('y kien widget area','weblizar'),
			'before_widget' => '<div class="y-kien">',
			'after_widget'=>'</div>',
			'before_title' => '<h2 class="y_kien_title"><span>',
			'after_title' => '</span></h2>',
		));
		register_sidebar( array(
			'name' =>__('slick slider Widget','welizar'),
			'id' =>'slick-slider-widget',
			'description'=>__('slick slider widget area','weblizar'),
			'before_widget' => '<div class="slick-slider">',
			'after_widget'=>'</div>',
			'before_title' => '<h2 class="slick_slider_title">',
			'after_title' => '</h2>',
		));
		register_sidebar( array(
			'name' =>__('footer widget','weblizar'),
			'id' =>'footer-widget',
			'description' =>__('footer widget','weblizar'),
			'before_widget' => '<div class="footer_info">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="thong_tin">',
			'after_title' =>'</h3>',
		));
	}
	register_sidebar( array(
		'name'          => __( 'Home Slider', 'stheme' ),
		'id'            => 'main-slider-module',
		'description'   => __( 'Main slider below primary menu.', 'stheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));
	register_sidebar( array(
		'name'          => __( 'Hinh anh widget', 'stheme' ),
		'id'            => 'hinh-anh-widget',
		'description'   => __( 'Main slider below primary menu.', 'stheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));
	register_sidebar( array(
		'name'          => __( 'menu_1_widget', 'stheme' ),
		'id'            => 'menu_1-widget',
		'description'   => __( 'Main slider below primary menu.', 'stheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));
	register_sidebar( array(
		'name'          => __( 'menu_2_widget', 'stheme' ),
		'id'            => 'menu_2-widget',
		'description'   => __( 'Main slider below primary menu.', 'stheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));
	register_sidebar( array(
		'name'          => __( 'menu_3_widget', 'stheme' ),
		'id'            => 'menu_3-widget',
		'description'   => __( 'Main slider below primary menu.', 'stheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));
	register_sidebar( array(
		'name'          => __( 'menu_5_widget', 'stheme' ),
		'id'            => 'menu_5-widget',
		'description'   => __( 'Main slider below primary menu.', 'stheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));
	/* Breadcrumbs  */
	function weblizar_breadcrumbs() {
		$delimiter = '';
    $home = 'Trang chủ'; // text for the 'Home' link
    $before = '<li>'; // tag before the current crumb
    $after = '</li>'; // tag after the current crumb
    echo '<ul class="breadcrumb">';
    global $post;
    $homeLink = home_url();
    echo '<li><a href="' . $homeLink . '">' . $home . '</a></li>' . $delimiter . ' ';
    if (is_category()) {
    	global $wp_query;
    	$cat_obj = $wp_query->get_queried_object();
    	$thisCat = $cat_obj->term_id;
    	$thisCat = get_category($thisCat);
    	$parentCat = get_category($thisCat->parent);
    	if ($thisCat->parent != 0)
    		echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
    	echo $before . single_cat_title('', false) . '' . $after;
    } elseif (is_day()) {
    	echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
    	echo '<li><a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a></li> ' . $delimiter . ' ';
    	echo $before . get_the_time('d') . $after;
    } elseif (is_month()) {
    	echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
    	echo $before . get_the_time('F') . $after;
    } elseif (is_year()) {
    	echo $before . get_the_time('Y') . $after;
    } elseif (is_single() && !is_attachment()) {
    	if (get_post_type() != 'post') {
    		$post_type = get_post_type_object(get_post_type());
    		$slug = $post_type->rewrite;
    		echo '<li><a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a></li> ' . $delimiter . ' ';
    		echo $before . get_the_title() . $after;
    	} else {
    		$cat = get_the_category();
    		$cat = $cat[0];
    		echo $before .get_category_parents($cat, TRUE, ' ' . $delimiter . ' '). $after;
            //echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
    		echo $before . get_the_title() . $after;
    	}
    } elseif (!is_single() && !is_page() && get_post_type() != 'post') {
    	$post_type = get_post_type_object(get_post_type());
    	echo $before . $post_type->labels->singular_name . $after;
    } elseif (is_attachment()) {
    	$parent = get_post($post->post_parent);
    	$cat = get_the_category($parent->ID);
    	$cat = $cat[0];
    	echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
    	echo '<li><a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a></li> ' . $delimiter . ' ';
    	echo $before . get_the_title() . $after;
    } elseif (is_page() && !$post->post_parent) {
    	echo $before . get_the_title() . $after;
    } elseif (is_page() && $post->post_parent) {
    	$parent_id = $post->post_parent;
    	$breadcrumbs = array();
    	while ($parent_id) {
    		$page = get_page($parent_id);
    		$breadcrumbs[] = '';
    		$parent_id = $page->post_parent;
    	}
    	$breadcrumbs = array_reverse($breadcrumbs);
    	foreach ($breadcrumbs as $crumb)
    		echo $crumb . ' ' . $delimiter . ' ';
    	echo $before . get_the_title() . $after;
    } elseif (is_search()) {
    	echo $before . ''. get_search_query() .'' . $after;
    } elseif (is_tag()) {
    	echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
    } elseif (is_author()) {
    	global $author;
    	$userdata = get_userdata($author);
    	echo $before . 'Articles posted by ' . $userdata->display_name . $after;
    } elseif (is_404()) {
    	echo $before . 'Error 404' . $after;
    }
    
    echo '</ul>';
}


	/*===================================================================================
	* Add Author Links
	* =================================================================================*/
	function weblizar_author_profile( $contactmethods ) {	

		$contactmethods['youtube_profile'] = 'Youtube Profile URL';	
		$contactmethods['twitter_profile'] = 'Twitter Profile URL';
		$contactmethods['facebook_profile'] = 'Facebook Profile URL';
		$contactmethods['linkedin_profile'] = 'Linkedin Profile URL';

		return $contactmethods;
	}
	add_filter( 'user_contactmethods', 'weblizar_author_profile', 10, 1);
	/*===================================================================================
	* Add Class Gravtar
	* =================================================================================*/
	add_filter('get_avatar','weblizar_gravatar_class');

	function weblizar_gravatar_class($class) {
		$class = str_replace("class='avatar", "class='author_detail_img", $class);
		return $class;
	}	

	function ilc_mce_buttons($buttons){
		array_push($buttons,
			"backcolor",
			"anchor",
			"hr",
			"sub",
			"sup",
			"fontselect",
			"fontsizeselect",
			"styleselect",
			"cleanup"
		);
		return $buttons;
	}
	add_filter("mce_buttons", "ilc_mce_buttons");
	function get_samepost_category() {
		$categories = get_the_category($post->ID);
		if ($categories): 
			$category_ids = array();
			foreach($categories as $individual_category): 
				$category_ids[] = $individual_category->term_id;
				$args=array(
					'category__in' => $category_ids,
					'post__not_in' => array($post->ID),
					'showposts'=>5,
					'ignore_sticky_posts'=>1,
					'orderby'=>rand);
				$my_query = new wp_query($args);
			endforeach;
			if( $my_query->have_posts() ): 
				if( is_single() ):?>
					<div class="sametitle">Có thể bạn chưa xem</div>
					<div class="same"> 
						<ul>
							<?php while ($my_query->have_posts()): 
								$my_query->the_post();?>
								<li>
									<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
								</li>
							<?php endwhile; ?>
						</ul>
					</div>
				<?php  endif; endif; endif; wp_reset_query(); }


				function wpbsearchform( $form ) {

					$form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
					<div><label class="screen-reader-text" for="s">' . __('Search for:') . '</label>
					<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Search form" style="height:30px;width:70%;padding:5px;"/>
					<input style="height:30px;float:right;" type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" />
					</div>
					</form>';

					return $form;
				}

				add_shortcode('wpbsearch', 'wpbsearchform');
//chèn css 
				function style(){
					wp_register_style('main-style', get_template_directory_uri()."/css/bootstrap.min.css",'all');
					/* goi no ra*/
					wp_enqueue_style('main-style');


				}
				add_action('wp_enqueue_scripts','style');
//vất hết js xuống footer
				function remove_head_scripts() { 
					remove_action('wp_head', 'wp_print_scripts'); 
					remove_action('wp_head', 'wp_print_head_scripts', 9); 
					remove_action('wp_head', 'wp_enqueue_scripts', 1);

					add_action('wp_footer', 'wp_print_scripts', 5);
					add_action('wp_footer', 'wp_enqueue_scripts', 5);
					add_action('wp_footer', 'wp_print_head_scripts', 5); 
				} 
				add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );

//phân trang
				function page_nav() {

					if( is_singular() )
						return;

					global $wp_query;

					/** Stop execution if there's only 1 page */
					if( $wp_query->max_num_pages <= 1 ) return; $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1; $max = intval( $wp_query->max_num_pages );

					/** Add current page to the array */
					if ( $paged >= 1 )
						$links[] = $paged;

					/** Add the pages around the current page to the array */
					if ( $paged >= 3 ) {
						$links[] = $paged - 1;
						$links[] = $paged - 2;
					}

					if ( ( $paged + 2 ) <= $max ) {
						$links[] = $paged + 2;
						$links[] = $paged + 1;
					}

					echo ' <div class="container"><div class="row"><div class="col-sm-6 offset-sm-6">
					<div class="navigation">
					<ul>' . "\n";

					/** Previous Post Link */
					if ( get_previous_posts_link() )
						printf( '
							<li>%s</li>

							' . "\n", get_previous_posts_link('<< Trang trước') );

					/** Link to first page, plus ellipses if necessary */
					if ( ! in_array( 1, $links ) ) {
						$class = 1 == $paged ? ' class="active"' : '';

						printf( '<li%s><a href="%s">%s</a></li>

							' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

						if ( ! in_array( 2, $links ) )
							echo '
						<li>…</li>

						';
					}

					/** Link to current page, plus 2 pages in either direction if necessary */
					sort( $links );
					foreach ( (array) $links as $link ) {
						$class = $paged == $link ? ' class="active"' : '';
						printf( '<li%s><a href="%s">%s</a></li>

							' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
					}

					/** Link to last page, plus ellipses if necessary */
					if ( ! in_array( $max, $links ) ) {
						if ( ! in_array( $max - 1, $links ) )
							echo '
						<li>…</li>

						' . "\n";

						$class = $paged == $max ? ' class="active"' : '';
						printf( '<li%s><a href="%s">%s</a></li>

							' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
					}

					/** Next Post Link */
					if ( get_next_posts_link() )
						printf( '
							<li>%s</li>

							' . "\n", get_next_posts_link('Tang sau >>') );

					echo '</ul>
					</div></div>
					</div></div>
					' . "\n";

				}
//tạo single giao diện tin tức
				add_filter('single_template', 'add_single_template');
				function add_single_template( $t )
				{
					foreach( (array) get_the_category() as $cat )
					{
						if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-{$cat->slug}.php";
						if($cat->parent)
						{
							$cat = get_the_category_by_ID( $cat->parent );
							if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-{$cat->slug}.php";
						}
					}
					return $t;
}//kết thúc single giao diện tin tức

// tạo Custom Post Type Xem hướng nhà
function tao_custom_post_type()
{

    /*
     * Biến $label để chứa các text liên quan đến tên hiển thị của Post Type trong Admin
     */
    $label = array(
        'name' => 'Xem hướng nhà', //Tên post type dạng số nhiều
        'singular_name' => 'xem hướng', //Tên post type dạng số ít
        'singular_name' => 'Tuổi',
        'singular_name' => 'năm sinh'
    );

    /*
     * Biến $args là những tham số quan trọng trong Post Type
     */
    $args = array(
        'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => 'Post type đăng sản phẩm', //Mô tả của post type
        'supports' => array(
        	'title',
        	'editor',
        	'excerpt',
        	'author',
        	'thumbnail',
        	'comments',
        	'trackbacks',
        	'revisions',
        	'custom-fields'
        ), //Các tính năng được hỗ trợ trong post type
        'taxonomies' => array( 'category', 'post_tag' ), //Các taxonomy được phép sử dụng để phân loại nội dung
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
        'public' => true, //Kích hoạt post type
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'menu_icon' => '', //Đường dẫn tới icon sẽ hiển thị
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post', //
    );

    register_post_type('huongnha', $args); //Tạo post type với slug tên là sanpham và các tham số trong biến $args ở trên

}
/* Kích hoạt hàm tạo custom post type */
add_action('init', 'tao_custom_post_type');
// tạo custom post type dự toán
function cptui_register_my_cpts_du_toan() {
  /**
   * Post Type: Nhà đất.
   */
  $labels = array(
    "name" => __( "Thiết kế", "bds" ),
    "singular_name" => __( "Thiết kế", "bds" ),
  );
  $args = array(
    "label" => __( "Thiết kế", "bds" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "delete_with_user" => false,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => true,
    "rewrite" => array( "slug" => "thiet-ke", "with_front" => true ),
    "query_var" => true,
    "supports" => array( "title", "editor", "thumbnail", "excerpt", "revisions", "page-attributes" ),
  );
  register_post_type( "thiet_ke", $args );
}
add_action( 'init', 'cptui_register_my_cpts_du_toan' );
function cptui_register_my_cpts_khach_hang() {
  /**
   * Post Type: Nhà đất.
   */
  $labels = array(
    "name" => __( "Khách hàng", "bds" ),
    "singular_name" => __( "Khách hàng", "bds" ),
  );
  $args = array(
    "label" => __( "Khách hàng", "bds" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "delete_with_user" => false,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => true,
    "rewrite" => array( "slug" => "khach-hang", "with_front" => true ),
    "query_var" => true,
    "supports" => array( "title", "editor", "thumbnail", "excerpt", "revisions", "page-attributes" ),
  );
  register_post_type( "khach-hang", $args );
}
add_action( 'init', 'cptui_register_my_cpts_khach_hang' );
//taxonomy
function cptui_register_my_taxes() {
  /**
   * Taxonomy: Loại nhà đất.
   */
  $labels = array(
    "name" => __( "Loại thiết kế", "bds" ),
    "singular_name" => __( "Loại thiết kế", "bds" ),
  );
  $args = array(
    "label" => __( "Loại thiết kế", "bds" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => true,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => array( 'slug' => 'loai_thiet_ke', 'with_front' => true,  'hierarchical' => true, ),
    "show_admin_column" => true,
    "show_in_rest" => true,
    "rest_base" => "loai_thiet_ke",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => true,
    );
  register_taxonomy( "loai_thiet_ke", array( "thiet_ke" ), $args );
  /**
   * Taxonomy: Địa điểm.
   */
  $labels = array(
    "name" => __( "Địa điểm", "bds" ),
    "singular_name" => __( "Địa điểm", "bds" ),
  );
  $args = array(
    "label" => __( "Địa điểm", "bds" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => true,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => array( 'slug' => 'dia_diem', 'with_front' => true,  'hierarchical' => true, ),
    "show_admin_column" => true,
    "show_in_rest" => true,
    "rest_base" => "dia_diem",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => true,
    );
  register_taxonomy( "dia_diem", array( "thiet_ke" ), $args );
  
}
add_action( 'init', 'cptui_register_my_taxes' );

// kết thúc custom post type dự toán
// cái này để đổi font trong bài viết
function more_editor_register_tinymce_fonts( $settings ) {
	global $settings_list_font;
	$settings['font_formats'] =
	"roboto='roboto';".
	"Clear Font='Clear Font'".
	$settings_list_font = $settings;
	return $settings;
}
add_filter('tiny_mce_before_init', 'more_editor_register_tinymce_fonts');
// cái này để đổi font trong bài viết

//code ajax xem huong
 function my_scripts_method() {
 	wp_enqueue_script(
 		'ajax_script',
 		get_stylesheet_directory_uri() . '/vendor/ajax-script.js',
 		array( 'jquery' )
 	);
 	wp_localize_script('ajax_script', 'WPURLS', array(
 		'siteurl' => admin_url( 'admin-ajax.php' ),
'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
'max_page' => $wp_query->max_num_pages
));
 }
 add_action( 'wp_enqueue_scripts', 'my_scripts_method' );


 add_action( 'wp_ajax_laykq', 'laykq' );
 add_action( 'wp_ajax_nopriv_laykq', 'laykq' );
 function laykq()
 {
 	    ob_start(); //bắt đầu bộ nhớ đệm
 	    ?>
 	    <?php 
 	    if ($_POST['namsinh']) {
 	    	$chuoinam=$_POST['namsinh'];
 	    	$dem = 0;
 	    	for ($i = 0; $i < strlen($_POST['namsinh']) ; $i++) {
 	    		$dem +=(int)$chuoinam[$i] ;
 	    	}
 	    	$dem1  =0;
 	    	if (strlen($dem) > 1 ) {
 	    		$dem = (string)$dem ;
 	    		for ($i = 0; $i < strlen($dem) ; $i++) {
 	    			$dem1 +=(int)$dem[$i] ;
 	    		}
 	    	}
 	    	$sothuc =0;
 	    	$sothuc1 = 0;
 	    	if ($_POST['namsinh'] < 2000) {
 	    		if ($_POST['gioitinh'] == 'nam') {
 	    			$sothuc1 =  11 - $dem1;

 	    			if ($sothuc1 > 9) {
 	    				$sothuc1 = (string)$sothuc1;

 	    				for ($i = 0; $i < strlen($sothuc1) ; $i++) {
 	    					$sothuc +=(int)$sothuc1[$i];
 	    				}
 	    			}else
 	    			{
 	    				$sothuc=$sothuc1;
 	    			}
 	    		}else
 	    		{
 	    			$sothuc1 =  4 + $dem1;
 	    			if ($sothuc1 > 9) {
 	    				$sothuc1 = (string)$sothuc1;

 	    				for ($i = 0; $i < strlen($sothuc1) ; $i++) {
 	    					$sothuc +=(int)$sothuc1[$i];
 	    				}
 	    			}else
 	    			{
 	    				$sothuc=$sothuc1;
 	    			}

 	    		}

 	    	}else
 	    	{
 	    		if ($_POST['gioitinh'] == 'nam') {
 	    			$sothuc =  10 - $dem1;

 	    		}else
 	    		{
 	    			$sothuc1 =  5 + $dem1;
 	    			if ($sothuc1 > 9) {
 	    				$sothuc1 = (string)$sothuc1;

 	    				for ($i = 0; $i < strlen($sothuc1) ; $i++) {
 	    					$sothuc +=(int)$sothuc1[$i];
 	    				}
 	    			}else
 	    			{
 	    				$sothuc=$sothuc1;
 	    			}

 	    		}
 	    	}
 	    }

 	    $arg = array(
 	    	'post_type' => 'huongnha',
 	    	'order' => 'DESC',
 	    	'orderby' => 'date',
 	    	'posts_per_page' => 1,
 	    		'meta_query' => array(
				array(
					'key' => 'stt',
					'value' => $sothuc,
					'compare' 	=> '=',
				),
			)
 	    );
 	    if ($_POST['gioitinh']== 'nam') {
 	    	$gt = 'Nam';
 	    	
 	    }else
 	    {
 	    	$gt = 'Nữ';
 	    }
 	    query_posts($arg);
 	    if( have_posts() )
 	    {
 	    	the_post();?>
 	    	<?php 
      $labels = array();
      $field = get_field_object('huongtot');
      $values = get_field('huongtot');
      foreach ($values as $value) {
      	if ($_POST['huong'] == $value) {
      		$huongdau = 'Hướng Tốt';
      		
      	}else
      	{
      		
      		$huongdau = 'Hướng xấu';
      	} 
  }    
?>
 	    	<div><p>Hướng xây nhà cho gia chủ là : <?php echo $_POST['gioitinh'];?></p></div>
 	    	<div><p>Sinh năm : <?php echo $_POST['namsinh'];?></p></div>
 	    	<div><p>Hướng Xây Nhà : <?php echo $_POST['huongtext'];?> (<?=$huongdau?>)</p></div>
 	    	<div class="col-sm-12">
 	    		<div class="new-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
 	    		<div class="item-list">
 	    			<h4><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
 	    			<?php the_content(); ?>
 	    		</div>
 	    	</div>
 	    	<?php
 	    }
  $result = ob_get_clean(); //cho hết bộ nhớ đệm vào biến $result
     wp_send_json_success($result); // trả về giá trị dạng json
     die();//bắt buộc phải có khi kết thúc
 }
//code kết thúc ajax xem huong
// sử lý quận huyện
function ajax_danhmuc()
{
  ob_start();
  echo '<option value="all">Chọn xã phường</option>';
  if ($_POST['id'] == -1) {
  }
  else
  {
    $terms = get_terms( array(
      'taxonomy' => 'dia_diem',
      'hide_empty' => false, // có dữ liệu thì mới in ra
      'parent' => $_POST['id'] // id danh mục cha
      // 'exclude' => array($_POST['id']),
    ) );  
  }
  foreach ($terms  as $term ) {
    ?>
    <option value="<?php echo $term->slug ?>"><?php echo $term->name ?></option>
    <?php 
  }
  $result = ob_get_clean();
  wp_send_json_success($result);
  die();
}
add_action('wp_ajax_ajax_danhmuc', 'ajax_danhmuc'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_ajax_danhmuc', 'ajax_danhmuc'); // wp_ajax_nopriv_{action}
//kết thúc sử lý quận huyện
//code xem tuổi xây nhà
add_action( 'wp_ajax_xemkq', 'xemkq' );
add_action( 'wp_ajax_nopriv_xemkq', 'xemkq' );
 function xemkq()
 {
 	    ob_start(); //bắt đầu bộ nhớ đệm
 	    ?>
<?php 
	$namsinhxay=$_POST['namsinhxay'];
	$namxay=$_POST['namxay'];
	$x = $namxay - $namsinhxay + 1;
	$b = $x % 9;
	$ab = (string)$x;
	for ($i = 0; $i < $ab ; $i++) {
 	    	$c +=$ab[$i] ;
 	    		}    		
    $dia = $c % 6;
    $can = array(
                '0' => 'Canh',
                '1' => 'Tân',
                '2' => 'Nhâm',
                '3' => 'Quý',
                '4' => 'Giáp',
                '5' => 'Ất',
                '6' => 'Bính',
                '7' => 'Đinh',
                '8' => 'Mậu',
                '9' => 'Kỷ'
            );

            $chi = array(
                '0' => 'Thân',
                '1' => 'Dậu',
                '2' => 'Tuất',
                '3' => 'Hợi',
                '4' => 'Tý',
                '5' => 'Sửu',
                '6' => 'Dần',
                '7' => 'Mão',
                '8' => 'Thìn',
                '9' => 'Tị',
                '10' => 'Ngọ',
                '11' => 'Mùi'
            );
            $tamtai = array(
            	'0' =>'Dần-Mão-Thìn',
            	'1' =>'Hợi-Tý-sửu',
            	'2' =>'Thân-Dậu-Tuất',
            	'3' =>'Tị-Ngọ-Mùi',
            	'4' =>'Dần-Mão-Thìn',
            	'5' =>'Hợi-Tý-sửu',
            	'6' =>'Thân-Dậu-Tuất',
            	'7' =>'Tị-Ngọ-Mùi',
            	'8' =>'Dần-Mão-Thìn',
            	'9' =>'Hợi-Tý-sửu',
            	'10' =>'Thân-Dậu-Tuất',
            	'11' =>'Tị-Ngọ-Mùi',
            );
    $cen = $can[$namsinhxay % 10];
    $che = $chi[$namsinhxay % 12];
    $canchi = $cen.' '.$che;
    $cin = $can[$namxay % 10];
    $cie = $chi[$namxay % 12];
    $canchixay = $cin.' '.$cie;
    $tam = $tamtai[$namsinhxay % 12];
?>
<div><p>Năm xây nhà cho gia chủ là : <?php echo $_POST['gioitinhxay'];?></p></div>
<div><p> Năm sinh dương lịch : <?php echo $_POST['namsinhxay'];?></p></div>
<div><p> Năm sinh âm lịch : <?php echo $canchi; ?></p></div>
<div><p> Năm dự kiến khởi công : <?php echo $_POST['namxay'];?></p>
<p>Năm xây âm lịch: <?php echo $canchixay; ?></p></div>
<div><h2>Phân tích các yếu tố Tam tai, Kim lâu, Hoang ốc</h2></div>
<div><p>Tam tai:Gia chủ tuổi <?php echo $canchi; ?>, cần tránh các năm tam tai: <?php echo $tam; ?> </p></div>
<div><p>Kim Lâu: Gia chủ <?php if ($b == 1 ){
 echo "phạm vào kim lâu thân: Kị bản thân";
}elseif($b ==3){
echo "phạm vào kim lâu thê: Kị vợ";
}elseif($b ==6){
echo "phạm vào kim lâu tử: Kị con";
}elseif($b ==8){
echo "phạm vào kim lâu súc: Kị chăn nuôi gia súc";
}else{
	echo "không phạm vào kim lâu";
} ?></p></div>
<div><p>Địa ốc: Gia chủ <?php if ($dia == 1 ){
 echo "phạm vào địa ốc Nhất cát";
}elseif($dia ==2){
echo "phạm vào địa ốc Nhị nghi";
}elseif($dia ==3){
echo "phạm vào địa ốc Tam địa sát";
}elseif($dia ==4){
echo "phạm vào địa ốc Tứ tấn tài";
}elseif($dia ==5){
echo "phạm vào địa ốc Ngũ thọ tử";
}elseif($dia ==6){
echo "phạm vào địa ốc Lục Hoang ốc";
}else{
	echo "không phạm vào địa ốc";
} ?></p></div>
<div><p>LƯU Ý :<BR>
- Nếu cả ba yếu tố trên đều không bị phạm là tốt nhất.<BR>
- Nếu phạm Tam Tai mà không phạm Kim Lâu, Hoàng Ốc thì cũng có thể chấp nhận được.<BR>
- Phạm vào Kim Lâu hoặc Hoàng Ốc thì tuyệt đối không nên tiến hành xây dựng, sửa chữa nhà cửa, mà nên đợi năm khác, hoặc tiến hành thủ tục mượn tuổi.</p></div>
<?php
  $result = ob_get_clean(); //cho hết bộ nhớ đệm vào biến $result
     wp_send_json_success($result); // trả về giá trị dạng json
     die();//bắt buộc phải có khi kết thúc
 }
//code kết thúc xem tuổi xây nhà
// sử lý ajax dự toán
add_action( 'wp_ajax_laydutoan', 'laydutoan' );
add_action( 'wp_ajax_nopriv_laydutoan', 'laydutoan' );
 function laydutoan()
 {
 	    ob_start(); //bắt đầu bộ nhớ đệm
 	    ?>
<div class="col-sm-12">
<div><p>Loại nhà : <?php echo $_POST['loainhatext'];?></p></div>
<div><p>Dịch vụ : <?php echo $_POST['giaidoantext'];?></p></div>
<div><p>Diện tích : <?php echo $_POST['dientich'];?>(m2)</p></div>
<div><p>Số tầng : <?php echo $_POST['sotang'];?></div>
<div><p>Vị trí xây dựng : <?php echo $_POST['xa_huyentext'];?>-<?php echo $_POST['tinh_tptext'];?></p></div>
<div><p>Chúng tôi xin gửi đơn giá khái tính : <?php 
	$loainha = $_POST['loainha'];
 	$dichvu = $_POST['giaidoan'];
 	$dientich = $_POST['dientich'];
 	$sotang = $_POST['sotang'];
 	$errors = array(
    'error' => 0
);
 
// BƯỚC 1: LẤY THÔNG TIN
$dientich   = isset($_POST['dientich']) ? trim($_POST['dientich']) : '';
$sotang   = isset($_POST['sotang']) ? trim($_POST['sotang']) : '';

 
// BƯỚC 2: VALIATE THÔNG TIN ĐƠN GIẢN
if (empty($dientich)){
    $errors['dientich'] = 'Bạn chưa nhập diện tích';
}
 
if (empty($sotang)){
    $errors['sotang'] = 'Bạn chưa nhập mật số tầng';
}
 

 
// BƯỚC 3: KIỂM TRA CÓ LỖI KHÔNG, NẾU CÓ LỖI THÌ TRẢ VỀ LUÔN, CÒN KHÔNG THÌ TIẾP TỤC KIỂM TRA
if (count($errors) > 1){
    $errors['error'] = 1;
    die (json_encode($errors));
}
 	$tongdutoan = ($loainha + $dichvu) * $dientich * $sotang;
 	
 	if($tongdutoan <= 1000000000){
 		echo '<strong>'.$tongdutoan.''.'triệu</strong>';
 		
 	}else{
 		echo '<strong>'.$tongdutoan.'</strong>'.'tỷ ';
 	}

?></p></div>
<div><p>Quý khách vui lòng liên hệ theo hotline 0986366668 để được tư vấn chi tiết và dự toán chính xác nhất. Hoặc gửi thông tin tại đây để chúng tôi được liên hệ lại. Trân trọng cám ơn.</p></div>
 </div>
<?php
 
  $result = ob_get_clean(); //cho hết bộ nhớ đệm vào biến $result
     wp_send_json_success($result); // trả về giá trị dạng json
     die();//bắt buộc phải có khi kết thúc
 }
// kết thúc sử lý ajax dự toán
//sử lý ajax xem hình ảnh
add_action( 'wp_ajax_xemhinhanh', 'xemhinhanh' );
add_action( 'wp_ajax_nopriv_xemhinhanh', 'xemhinhanh' );
 function xemhinhanh()
 {
 	    ob_start(); //bắt đầu bộ nhớ đệm
 	    ?>
<?php  
$aryy = array(
        'post_type' =>  'thiet_ke',
        'posts_per_page'    =>  '1',
        'p' => $_POST['id'], 
    );
 	    
?>
<div class="container">
	<div class="row">
		<div class="col-sm-8">  
		<?php   
	$post_new = new WP_Query($aryy);
     if($post_new->have_posts()):
        while($post_new->have_posts()):$post_new->the_post();
        	    echo '<div class="xemanh">';
                echo '<h2>'.get_the_title().'</h2>';
                echo '</div>';
        endwhile;
    endif; wp_reset_query();?>           
		  <?php if( have_rows('nhap_anh') ): ?>
		  <?php while( have_rows('nhap_anh') ): the_row(); 
		    $image = get_sub_field('image');
		    $Stt = get_sub_field('stt');
		    ?> 
		    	<div class="mySlides">
		    		<div class="numbertext"><?php echo $Stt; ?></div>
		   				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" style="width:100%">
		  		</div>
		    <?php endwhile; ?>
			<?php endif; ?>
<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>
				  	<?php if( have_rows('nhap_anh') ): ?>
		  <?php while( have_rows('nhap_anh') ): the_row(); 
		    $image = get_sub_field('image');
		    $Stt = get_sub_field('stt');
		    ?> 
				    <div class="column">
				      <img class="demo cursor" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" style="width:100%" onclick="currentSlidevv(<?php echo $Stt; ?>)" >
				    </div>
				     <?php endwhile; ?>
			<?php endif; ?>	    
		</div>
	    <div class="col-sm-4">
	    	<div class="xemanh">
	    	<h2>Mô tả</h2>
	    	  	<?php the_field('mo_ta'); ?>
	    	</div>
	    </div>
	</div>
</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlidevv(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  
}
</script>
    <?php 
  $result = ob_get_clean(); //cho hết bộ nhớ đệm vào biến $result
     wp_send_json_success($result); // trả về giá trị dạng json
     die();//bắt buộc phải có khi kết thúc
 }
//kết thúcsử lý ajax xem hình ảnh