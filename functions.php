<?php 

/**
 * Proper way to enqueue scripts and styles
 */

 require_once(get_theme_file_path( '/inc/kirki-one-pager-customizer.php' ));
 
function kirki_one_pager_assets() {
    wp_enqueue_style( 'bootstap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0','all' );
    wp_enqueue_style( 'lineicons-css', get_template_directory_uri() . '/assets/fonts/line-icons.css', array(),'1.0.0','all' );
    wp_enqueue_style( 'slicknav-css', get_template_directory_uri() . '/assets/css/slicknav.css', array(),'1.0.0','all' );
    wp_enqueue_style( 'owlcarosel-css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(),'1.0.0','all' );
    wp_enqueue_style( 'owltheme-css', get_template_directory_uri() . '/assets/css/owl.theme.css',array(), '1.0.0','all' );
    wp_enqueue_style( 'magnificpopup-css', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(),'1.0.0','all' );
    wp_enqueue_style( 'nivolightbox-css', get_template_directory_uri() . '/assets/css/nivo-lightbox.css', array(),'1.0.0', 'all');
    wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/js/example.jsassets/css/animate.css', array(),'1.0.0','all' );
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/main.css', array(),'1.0.0','all' );
    wp_enqueue_style( 'responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(),'1.0.0','all' );
	wp_enqueue_style( 'default-css', get_stylesheet_uri() );
  
    wp_enqueue_script('min_script', get_template_directory_uri() . '/assets/js/jquery-min.js', array('jquery'),'1.1', true);
    wp_enqueue_script('popper_script', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'),'1.1', true);
    wp_enqueue_script('bootstrap_script', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'),'1.1', true);
    wp_enqueue_script('owl_script', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'),'1.1', true);
    wp_enqueue_script('mixup_script', get_template_directory_uri() . '/assets/js/jquery.mixitup.js', array('jquery'),'1.1', true);
    wp_enqueue_script('wow_script', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'),'1.1', true);
    wp_enqueue_script('nav_script', get_template_directory_uri() . '/assets/js/jquery.nav.js', array('jquery'),'1.1', true);
    wp_enqueue_script('scroll_script', get_template_directory_uri() . '/assets/js/scrolling-nav.js', array('jquery'),'1.1', true);
    wp_enqueue_script('easy_script', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array('jquery'),'1.1', true);
    wp_enqueue_script('counterup_script', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'),'1.1', true);
    wp_enqueue_script('nivo_script', get_template_directory_uri() . '/assets/js/nivo-lightbox.js', array('jquery'),'1.1', true);
    wp_enqueue_script('magniic_script', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'),'1.1', true);
    wp_enqueue_script('waypoint_script', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'),'1.1', true);
    wp_enqueue_script('slicknav_script', get_template_directory_uri() . '/assets/js/jquery.slicknav.js', array('jquery'),'1.1', true);
    wp_enqueue_script('main_script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'),'1.1', true);	
}
add_action( 'wp_enqueue_scripts', 'kirki_one_pager_assets' );
 
