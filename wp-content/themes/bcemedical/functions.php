<?php
/**
 * bcemedical functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bcemedical
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
function bcemedical_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on bcemedical, use a find and replace
		* to change 'bcemedical' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'bcemedical', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'bcemedical' ),
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
			'bcemedical_custom_background_args',
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
add_action( 'after_setup_theme', 'bcemedical_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bcemedical_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bcemedical_content_width', 640 );
}
add_action( 'after_setup_theme', 'bcemedical_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bcemedical_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'bcemedical' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'bcemedical' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'bcemedical_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bcemedical_scripts() {
	wp_enqueue_style( 'bcemedical-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_style( 'bcemedical-bootstrap-css', get_template_directory_uri().'/front/css/bootstrap.min.css', array(), _S_VERSION );
    wp_enqueue_style( 'bcemedical-owl.carousel.min-css', get_template_directory_uri().'/front/css/owl.carousel.min.css', array(), _S_VERSION );
    wp_enqueue_style( 'bcemedical-animate-css', get_template_directory_uri().'/front/css/animate.min.css', array(), _S_VERSION );
    wp_enqueue_style( 'bcemedical-nice-select-css', get_template_directory_uri().'/front/css/nice-select.css', array(), _S_VERSION );
    wp_enqueue_style( 'bcemedical-magnific-css', get_template_directory_uri().'/front/css/magnific-popup.css', array(), _S_VERSION );
    wp_enqueue_style( 'bcemedical-all-css', get_template_directory_uri().'/front/css/all.min.css', array(), _S_VERSION );
    wp_enqueue_style( 'bcemedical-meanmenu-css', get_template_directory_uri().'/front/css/meanmenu.css', array(), _S_VERSION );
    wp_enqueue_style( 'bcemedical-slick-css', get_template_directory_uri().'/front/css/slick.css', array(), _S_VERSION );
    wp_enqueue_style( 'bcemedical-default-css', get_template_directory_uri().'/front/css/default.css', array(), _S_VERSION );
    wp_enqueue_style( 'bcemedical-style-css', get_template_directory_uri().'/front/css/style.css', array(), _S_VERSION );
    wp_enqueue_style( 'bcemedical-responsive-css', get_template_directory_uri().'/front/css/responsive.css', array(), _S_VERSION );
	wp_style_add_data( 'bcemedical-style', 'rtl', 'replace' );

	wp_enqueue_script( 'bcemedical-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bcemedical-modernizr', get_template_directory_uri() . '/front/js/vendor/modernizr-3.5.0.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bcemedical-jquery-1.12.4', get_template_directory_uri() . '/front/js/vendor/jquery-1.12.4.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bcemedical-popper', get_template_directory_uri() . '/front/js/popper.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bcemedical-bootstrap', get_template_directory_uri() . '/front/js/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bcemedical-carousel', get_template_directory_uri() . '/front/js/owl.carousel.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bcemedical-isotope', get_template_directory_uri() . '/front/js/isotope.pkgd.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bcemedical-one-page', get_template_directory_uri() . '/front/js/one-page-nav-min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bcemedical-slick', get_template_directory_uri() . '/front/js/slick.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bcemedical-ajax-form', get_template_directory_uri() . '/front/js/ajax-form.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bcemedical-wow', get_template_directory_uri() . '/front/js/wow.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bcemedical-nice-select', get_template_directory_uri() . '/front/js/jquery.nice-select.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bcemedical-scrollUp', get_template_directory_uri() . '/front/js/jquery.scrollUp.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bcemedical-meanmenu', get_template_directory_uri() . '/front/js/jquery.meanmenu.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bcemedical-counterup', get_template_directory_uri() . '/front/js/jquery.counterup.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bcemedical-waypoints', get_template_directory_uri() . '/front/js/waypoints.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bcemedical-imagesloaded', get_template_directory_uri() . '/front/js/imagesloaded.pkgd.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bcemedical-magnific-popup', get_template_directory_uri() . '/front/js/jquery.magnific-popup.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bcemedical-plugins', get_template_directory_uri() . '/front/js/plugins.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bcemedical-main', get_template_directory_uri() . '/front/js/main.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bcemedical_scripts' );

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

require get_template_directory() . '/framework/codestar/codestar-framework.php';
require get_template_directory() . '/framework/codestar/sport-options.php';
require get_template_directory() . '/framework/codestar/home-options.php';


require get_template_directory() . '/libs/My_Walker_Nav_Menu.php';
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

