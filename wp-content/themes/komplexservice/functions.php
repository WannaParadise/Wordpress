<?php
/**
 * KomplexService functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package KomplexService
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'komplexservice_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function komplexservice_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on KomplexService, use a find and replace
		 * to change 'komplexservice' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'komplexservice', get_template_directory() . '/languages' );

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
				'header' => esc_html__( 'Главное меню', 'komplexservice' ),
				'header-mobile' => esc_html__( 'Mobile menu', 'komplexservice' ),
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
				'komplexservice_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'komplexservice_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function komplexservice_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'komplexservice_content_width', 640 );
}
add_action( 'after_setup_theme', 'komplexservice_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function komplexservice_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'komplexservice' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'komplexservice' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'komplexservice_widgets_init' );

/**
 * Enqueue scripts and styles.
 */


function komplexservice_scripts() {
	
	wp_enqueue_style( 'komplexservice-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style('medical-guide', get_template_directory_uri().'/assets/css/medical-guide.css');
	wp_enqueue_style('medical-guide-icons',get_template_directory_uri().'/assets/fonts/medical-guide-icons.css');
	wp_enqueue_style('default-color',get_template_directory_uri().'/assets/css/default-color.css');
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.css');
	wp_enqueue_style('dropmenu',get_template_directory_uri().'/assets/css/dropmenu.css');
	wp_enqueue_style('sticky-header',get_template_directory_uri().'/assets/css/sticky-header.css');
	wp_enqueue_style('settings',get_template_directory_uri().'/assets/css/settings.css');
	wp_enqueue_style('extralayers',get_template_directory_uri().'/assets/css/extralayers.css');
	wp_enqueue_style('accordion',get_template_directory_uri().'/assets/css/accordion.css');
	wp_enqueue_style('tabs',get_template_directory_uri().'/assets/css/tabs.css');
	wp_enqueue_style('owl.carousel',get_template_directory_uri().'/assets/css/owl.carousel.css');
	wp_enqueue_style('jquery.mmenu.all',get_template_directory_uri().'/assets/css/jquery.mmenu.all.css');
	wp_enqueue_style('demo',get_template_directory_uri().'/assets/css/demo.css');
	wp_enqueue_style('loader',get_template_directory_uri().'/assets/css/loader.css');
	wp_enqueue_style('hamburgers',get_template_directory_uri().'/assets/css/hamburgers.min.css');

	wp_style_add_data( 'komplexservice-style', 'rtl', 'replace' );
	/*
	wp_enqueue_script( 'komplexservice-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );
	*/
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	add_action( 'init', 'true_jquery_register' );

	wp_enqueue_script( 'jquery',get_template_directory_uri().'/assets/js/jquery.js',null, null, true );

	wp_enqueue_script( 'scroll-desktop',get_template_directory_uri().'/assets/js/scroll-desktop.js',null, null, true );
    wp_enqueue_script( 'scroll-desktop-smooth',get_template_directory_uri().'/assets/js/scroll-desktop-smooth.js',null, null, true );

    wp_enqueue_script( 'revolutionjquery',get_template_directory_uri().'/assets/js/jquery.themepunch.revolution.min.js',null, null, true );
    wp_enqueue_script( 'toolsjquery',get_template_directory_uri().'/assets/js/jquery.themepunch.tools.min.js',null, null, true );

    wp_enqueue_script( 'classie',get_template_directory_uri().'/assets/js/classie.js',null, null, true );
    wp_enqueue_script( 'ui',get_template_directory_uri().'/assets/js/jquery-ui-1.10.3.custom.js',null, null, true );

    wp_enqueue_script( 'counter',get_template_directory_uri().'/assets/js/counter.js',null, null, true );

    wp_enqueue_script( 'tabs',get_template_directory_uri().'/assets/js/tabs.js',null, null, true );

    wp_enqueue_script( 'owl.carousel',get_template_directory_uri().'/assets/js/owl.carousel.js',null, null, true );

    wp_enqueue_script( 'menu',get_template_directory_uri().'/assets/js/jquery.mmenu.min.all.js',null, null, true );
	wp_enqueue_script( 'rs-slides',get_template_directory_uri().'/assets/js/rs-slides.js',null, null, true );

	wp_enqueue_script( 'slider',get_template_directory_uri().'/assets/js/slider.js',null,null, true );
	wp_enqueue_script( 'custom',get_template_directory_uri().'/assets/js/custom.js',null, null, true );
}
add_action( 'wp_enqueue_scripts', 'komplexservice_scripts' );

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

