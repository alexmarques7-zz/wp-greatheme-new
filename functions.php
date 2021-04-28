<?php
	/**
	 * @package 	WordPress
	 * @autor 		Alex Marques
	 */
	


	/* ========================================================================================================================
	Required external files
	======================================================================================================================== */
	
	// Scripts and Styles
	add_action( 'wp_enqueue_scripts', 'my_assets' );

	function my_assets() {
        wp_enqueue_script( 'bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js', array('jquery'), NULL, true );
		wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/icon?family=Material+Icons');
		wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');
	}

	// Bootstrap 4 Menu
	// require_once( 'libs/bs4navwalker.php' );

	// Mobile Detect
	// require_once( 'libs/mobile-detect.php' );
	// $detect = new Mobile_Detect;


	/* ========================================================================================================================
	Add html 5 support to wordpress elements
	======================================================================================================================== */
	
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'gallery',
		'caption'
	) );

	add_theme_support('custom-logo', array(
		'header-text' => array('site-title','site-description'),
	));



	/* ========================================================================================================================
	Filter Search by Post
	======================================================================================================================== */
	
	add_filter('pre_get_posts','SearchFilter');
	function SearchFilter($query) {
		if ($query->is_search) {
			$query->set('post_type', 'post');
		}
		return $query;
	}



	/* ========================================================================================================================
	Theme specific settings
	======================================================================================================================== */

	add_theme_support('post-thumbnails');

	// Custom Thumbs

	add_image_size( 'thumb', 240, 135, false );
	add_image_size( 'med', 800, 450, false );
	add_image_size( 'big', 1280, 720, false );
	add_image_size( 'static-banner', 1920, 300, false );

	// Disable Native Thumbs
	add_filter('intermediate_image_sizes_advanced', 'add_image_insert_override' );
	function add_image_insert_override($sizes){
    unset( $sizes['thumbnail']);
    unset( $sizes['medium']);
    unset( $sizes['medium_large']);
    unset( $sizes['large']);
    return $sizes;
	}

	if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {
		function mytheme_register_nav_menu(){
			register_nav_menus( array(
				'primary_menu' => __( 'Menu primário', 'Menu de áreas localizado no topo do site, Ex. Educacional, Corporativo, etc.' ),
				'secundary_menu' => __( 'Menu Secundário', 'Menu localizado nas área interna. Ex. Sobre, serviços, etc.' ),
				'footer_menu'  => __( 'Menu rodapé', 'Menu localizado no rodapé.' )
			) );
		}
		add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
	}

	// Excerpt Class
	add_filter( "the_excerpt", "add_class_to_excerpt" );

	function add_class_to_excerpt( $excerpt ) {
	    return str_replace('<p', '<p class="c-excerpt"', $excerpt);
	}




	/* ========================================================================================================================
	Actions and Filters
	======================================================================================================================== */




	/* ========================================================================================================================
	Custom Post Types 
	======================================================================================================================== */
	
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

	function custom_excerpt_length( $length ) {
	    return 20;
	}

	

	/* ========================================================================================================================
	Security & cleanup wp admin
	======================================================================================================================== */
	
	//remove wp version
	add_filter('the_generator', 'theme_remove_version');
	function theme_remove_version() {
		return '';
	}
	
	//remove default footer text
	add_filter('admin_footer_text', 'remove_footer_admin');
	function remove_footer_admin () {
		echo "";
	}

	//remove wordpress logo from adminbar
	add_action('wp_before_admin_bar_render', 'wp_logo_admin_bar_remove', 0);

	function wp_logo_admin_bar_remove() {
		global $wp_admin_bar;
		/* Remove their stuff */
		$wp_admin_bar->remove_menu('wp-logo');
	}

	// Remove default Dashboard widgets

	add_action('admin_menu', 'disable_default_dashboard_widgets');
	function disable_default_dashboard_widgets() {

		//remove_meta_box('dashboard_right_now', 'dashboard', 'core');
		remove_meta_box('dashboard_activity', 'dashboard', 'core');
		remove_meta_box('dashboard_recent_comments', 'dashboard', 'core');
		remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');
		remove_meta_box('dashboard_plugins', 'dashboard', 'core');
	
		remove_meta_box('dashboard_quick_press', 'dashboard', 'core');
		remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');
		remove_meta_box('dashboard_primary', 'dashboard', 'core');
		remove_meta_box('dashboard_secondary', 'dashboard', 'core');
	}

	remove_action('welcome_panel', 'wp_welcome_panel');

	// Emojis
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_action('admin_print_scripts', 'print_emoji_detection_script' );
	remove_action('admin_print_styles', 'print_emoji_styles' );

	// Disable REST API link tag
	remove_action('wp_head', 'rest_output_link_wp_head', 10);

	// Disable oEmbed Discovery Links
	remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);

	// Disable REST API link in HTTP headers
	remove_action('template_redirect', 'rest_output_link_header', 11, 0);

	// Disable RSD
	remove_action ('wp_head', 'rsd_link');

	// Disable wlwmanifest
	remove_action( 'wp_head', 'wlwmanifest_link');

	// Disable DNS Prefetch
	remove_action('wp_head', 'wp_resource_hints', 2);
	


	/* ========================================================================================================================
	Custom login
	======================================================================================================================== */

	// Add custom css
	add_action('login_head', 'my_custom_login');
	function my_custom_login() {
		echo '<link rel="stylesheet" type="text/css" href="' . get_stylesheet_directory_uri() . '/style.css" />';
	}

	// Link the logo to the home of our website
	add_filter( 'login_headerurl', 'my_login_logo_url' );	
	function my_login_logo_url() {
		return esc_url( home_url() );
	}

	// Change the title text 
	add_filter( 'login_headertitle', 'my_login_logo_url_title' );
	function my_login_logo_url_title() {
		return 'Bootstrap 4 on WordPress';
	}

	add_filter( 'show_recent_comments_widget_style', '__return_false', 99 );

	add_action( 'wp_enqueue_scripts', 'custom_theme_assets', 100 );
	function custom_theme_assets() {
	    wp_dequeue_style( 'wp-block-library' );
	}

	add_action( 'wp_footer', 'my_deregister_scripts' );
	function my_deregister_scripts(){
	  wp_deregister_script( 'wp-embed' );
	}


  /* ========================================================================================================================
	Sidebars
	======================================================================================================================== */
	
	if ( function_exists('register_sidebar') ) {

		// Modelo
		register_sidebar(array(
			'name' => 'Modelo',
			'id' => 'modelo',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h2>',
			'after_title' => '</h2>'
		));

	}

function remove_gallery($content) {
	global $post;

	if($post->post_type == 'artcpt')
		remove_shortcode('gallery', $content);

	return $content;
}

add_filter( 'the_content', 'remove_gallery', 6); 

?>