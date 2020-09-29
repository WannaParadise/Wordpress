<?php
/**
 * lesson functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package lesson
 */

add_filter( 'ot_theme_mode', '__return_true' );
add_filter( 'ot_show_new_layout', '__return_false' );
add_filter( 'ot_show_pages', '__return_true' );

	function lesson_setup() {
	
		add_theme_support( 'title-tag' );


		add_theme_support( 'post-thumbnails' );

	
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'lesson' ),
				'header-menu' => esc_html__( 'Header Menu' ),
				'footer-menu' => esc_html__( 'Footer Menu' ),
			)
		);


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

add_action( 'after_setup_theme', 'lesson_setup' );


function lesson_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'lesson' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'lesson' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'lesson_widgets_init' );


function lesson_style(){
	wp_enqueue_style('medical-guide', get_template_directory_uri().'/css/medical-guide.css');
	wp_enqueue_style('medical-guide.icons',get_template_directory_uri().'/fonts/medical-guide-icons.css');
	wp_enqueue_style('default-color',get_template_directory_uri().'/css/default-color.css');
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.css');
	wp_enqueue_style('dropmenu',get_template_directory_uri().'/css/dropmenu.css');
	wp_enqueue_style('sticky-header',get_template_directory_uri().'/css/sticky-header.css');
	wp_enqueue_style('lesson-style1', get_stylesheet_uri());
	wp_enqueue_style('settings',get_template_directory_uri().'/css/settings.css');
	wp_enqueue_style('extralayers',get_template_directory_uri().'/css/extralayers.css');
	wp_enqueue_style('accordion',get_template_directory_uri().'/css/accordion.css');
	wp_enqueue_style('tabs',get_template_directory_uri().'/css/tabs.css');
	wp_enqueue_style('owl.carousel',get_template_directory_uri().'/css/owl.carousel.css');
	wp_enqueue_style('jquery.mmenu.all',get_template_directory_uri().'/css/jquery.mmenu.all.css');
	wp_enqueue_style('demo',get_template_directory_uri().'/css/demo.css');
	wp_enqueue_style('loader',get_template_directory_uri().'/css/loader.css');
	wp_enqueue_scripts('$handle', '$src', array('jquery'),false,false);
}

add_action( 'wp_enqueue_scripts', 'lesson_style' );



function lesson_scripts() {
	wp_enqueue_style( 'lesson-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'lesson-style', 'rtl', 'replace' );

	wp_enqueue_script( 'lesson-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lesson_scripts' );


function lesson_filter_current_item_header ($classes, $item){
if(in_array('current_page_item',$classes)){
	$classes[] = 'item-select'; 
}
	return $classes;
}
add_filter('nav_menu_css_class','lesson_filter_current_item_header');






/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
//require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
//require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
//require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

