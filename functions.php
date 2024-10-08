<?php
/**
 * medicare functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package medicare
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function medicare_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on medicare, use a find and replace
		* to change 'medicare' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'medicare', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary-menu' => esc_html__( 'Primary', 'medicare' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'medicare_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'medicare_setup' );



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function medicare_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'medicare_content_width', 640 );
}
add_action( 'after_setup_theme', 'medicare_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function medicare_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'medicare' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'medicare' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	//  service sidebar widget
	register_sidebar(
		array(
			'name'          => esc_html__( 'Service Sidebar', 'medicare' ),
			'id'            => 'service-sidebar',
			'description'   => esc_html__( 'Add Service Widget Here', 'medicare' ),
			'before_widget' => '<div class="service-post">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
		)
	);

}
add_action( 'widgets_init', 'medicare_widgets_init' );


/**
 * Custom Footer Widget
 */
function register_footer_widgets() {

    register_sidebar(array(
        'name' => 'Footer Column 2',
        'id' => 'footer-2',
        'before_widget' => '<div class="footer-widget-2">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => 'Footer Column 3',
        'id' => 'footer-3',
        'before_widget' => '<div class="footer-widget-3">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
}

register_footer_widgets();


/**
 * Enqueue scripts and styles.
 */
function medicare_scripts() {
	
   //================== css style ==================//

	// Bootstrap css
	wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/assets/css/bootstrap.min.css', array(), _S_VERSION, 'all' );

	// owl carousel css
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri(). '/assets/css/owl.carousel.min.css', array(), _S_VERSION, 'all' );

	// owl carousel theme css
	wp_enqueue_style( 'owl-carousel-theme', get_template_directory_uri(). '/assets/css/owl.theme.default.min.css', array(), _S_VERSION, 'all' );

	// Date Range Picker css
	wp_enqueue_style( 'date-range-picker', get_template_directory_uri(). '/assets/css/daterangepicker.css', array(), _S_VERSION, 'all' );

	// Date Range Picker css
	wp_enqueue_style( 'date-range-picker', get_template_directory_uri(). '/assets/css/daterangepicker.css', array(), _S_VERSION, 'all' );

	// font awesome all css
	wp_enqueue_style( 'font-awesome-all-css', get_template_directory_uri(). '/assets/css/all.min.css', array(), _S_VERSION, 'all' );

	// font awesome css
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri(). '/assets/css/fontawesome.min.css', array(), _S_VERSION, 'all' );

	// Magnific Poupup css
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri(). '/assets/css/magnific-popup.css', array(), _S_VERSION, 'all' );

	// Main Css
	wp_enqueue_style( 'main', get_template_directory_uri(). '/assets/css/main.css', array(), _S_VERSION, 'all' );

    //================== Js Scripts ==================//

	// Bootstrap Js
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), _S_VERSION, true );

	// Owl carousel
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), _S_VERSION, true );

	// parallax100 js 
	wp_enqueue_script( 'parallax', get_template_directory_uri() . '/assets/js/parallax100.js', array('jquery'), _S_VERSION, true );

	// waypoints js
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.js', array('jquery'), _S_VERSION, true );

	
	// counter up js
	wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), _S_VERSION, true );

	// date range picker js
	wp_enqueue_script( 'daterangepicker', get_template_directory_uri() . '/assets/js/daterangepicker.min.js', array('jquery'), _S_VERSION, true );

	// moment js
	wp_enqueue_script( 'moment', get_template_directory_uri() . '/assets/js/moment.min.js', array('jquery'), _S_VERSION, true );

	 // main Js
	 wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), _S_VERSION, true );


	wp_enqueue_style( 'medicare-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'medicare-style', 'rtl', 'replace' );

	wp_enqueue_script( 'medicare-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'medicare_scripts' );



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 * Custom Options
 */
require get_template_directory() . '/inc/medicare-options.php';


/**
 * Metabox
 */
require get_template_directory() . '/inc/medicare-metabox.php';

