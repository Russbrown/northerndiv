<?php
/**
 * NorthernDiv functions and definitions
 *
 * @package NorthernDiv
 * @since NorthernDiv 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since NorthernDiv 1.0
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'northerndiv_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since NorthernDiv 1.0
 */
function northerndiv_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	//require( get_template_directory() . '/inc/tweaks.php' );

	/**
	 * Custom Theme Options
	 */
	//require( get_template_directory() . '/inc/theme-options/theme-options.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on NorthernDiv, use a find and replace
	 * to change 'northerndiv' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'northerndiv', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'northerndiv' ),
	) );

	/**
	 * Add support for the Aside Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', ) );
}
endif; // northerndiv_setup
add_action( 'after_setup_theme', 'northerndiv_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since NorthernDiv 1.0
 */
function northerndiv_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar', 'northerndiv' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );
}
add_action( 'widgets_init', 'northerndiv_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function northerndiv_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script( 'small-menu', get_template_directory_uri() . '/js/small-menu.js', array( 'jquery' ), '20120206', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'northerndiv_scripts' );

/**
 * Implement the Custom Header feature
 */
//require( get_template_directory() . '/inc/custom-header.php' );

    /* socialite js */
    
    function load_socialite() {
     
        // Register Socialite
        wp_register_script( 'socialite', get_template_directory_uri() . '/js/socialite.min.js', array(), '', true );
        
        // Register social initialiser script
        wp_register_script( 'social', get_template_directory_uri() . '/js/social.js', array('jquery', 'socialite'), '', true );
      
        // Now enqueue Socialite
        wp_enqueue_script( 'social' );
    }
    add_action( 'wp_enqueue_scripts', 'load_socialite' );


function my_init() {
	if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script('jquery'); 
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js', false, '1.5'); 
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'my_init');





