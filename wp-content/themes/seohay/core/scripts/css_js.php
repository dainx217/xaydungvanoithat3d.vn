<?php function weblizar_scripts()
        {       wp_enqueue_style('stylsheet', WL_TEMPLATE_DIR_URI . '/style.css');
                //wp_enqueue_style('default', WL_TEMPLATE_DIR_URI . '/css/default.css');
				//wp_enqueue_style('default', WL_TEMPLATE_DIR_URI . '/custom/css/customer.css');
                //wp_enqueue_style('enigma-theme', WL_TEMPLATE_DIR_URI . '/css/enigma-theme.css');
               // wp_enqueue_style('media-responsive', WL_TEMPLATE_DIR_URI . '/css/media-responsive.css');
                //wp_enqueue_style('animations', WL_TEMPLATE_DIR_URI . '/css/animations.css');
                //wp_enqueue_style('theme-animtae', WL_TEMPLATE_DIR_URI . '/css/theme-animtae.css');
                //wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'); 
                //wp_enqueue_style('componet',WL_TEMPLATE_DIR_URI.'/css/component.css');             
                //wp_enqueue_style('mega_menu',WL_TEMPLATE_DIR_URI.'/css/menu_mega.css');
                // Js
                //wp_enqueue_script('menu', WL_TEMPLATE_DIR_URI .'/js/menu.js', array('jquery'));
                 wp_enqueue_script('jquery-3.2.1.slim.min.js', WL_TEMPLATE_DIR_URI .'/js/jquery-3.2.1.slim.min.js');
                 wp_enqueue_script('jquery-2.0.0.min.js', WL_TEMPLATE_DIR_URI .'/js/jquery-2.0.0.min.js');
                 
                // wp_enqueue_script('popper.min.js', WL_TEMPLATE_DIR_URI .'/js/popper.min.js');
                wp_enqueue_script('bootstrap-min-js', WL_TEMPLATE_DIR_URI .'/js/bootstrap.min.js');
                //wp_enqueue_script('enigma-theme-script', WL_TEMPLATE_DIR_URI .'/js/enigma_theme_script.js');
               // if(is_front_page()){
                /*Carofredsul Slides*/
                //wp_enqueue_script('jquery.carouFredSel', WL_TEMPLATE_DIR_URI .'/js/carouFredSel-6.2.1/jquery.carouFredSel-6.2.1.js');
                //wp_enqueue_script('carouFredSel-element', WL_TEMPLATE_DIR_URI .'/js/carouFredSel-6.2.1/caroufredsel-element.js');
                /*PhotoBox JS*/
                //}
                if ( is_singular() ) wp_enqueue_script( "comment-reply" );
        }
        add_action('wp_enqueue_scripts', 'weblizar_scripts');
        /********* footer js *********/
       
?>