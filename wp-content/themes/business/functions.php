<?php/* 

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

    add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
    function my_scripts_method() {
        // отменяем зарегистрированный jQuery
        // вместо "jquery-core", можно вписать "jquery", тогда будет отменен еще и jquery-migrate
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.4.1.min.js');
        wp_enqueue_script( 'jquery',null,null,true );
    }

    wp_enqueue_script( 'scroll-desktop',get_template_directory().'/js/scroll-desktop.js',null, null, true );
    wp_enqueue_script( 'scroll-desktop-smooth',get_template_directory().'js/scroll-desktop-smooth.js',null, null, true );

    wp_enqueue_script( 'jquery.themepunch.revolution.min.js',get_template_directory().'/js/jquery.themepunch.revolution.min.js',null, null, true );
    wp_enqueue_script( 'jquery.themepunch.tools.min.js',get_template_directory().'/js/jquery.themepunch.tools.min.js',null, null, true );

    wp_enqueue_script( 'classie.js',get_template_directory().'/js/classie.js',null, null, true );
    wp_enqueue_script( 'jquery-ui-1.10.3.custom.js',get_template_directory().'/js/jquery-ui-1.10.3.custom.js',null, null, true );

    wp_enqueue_script( 'counter.js',get_template_directory().'/js/js/counter.js',null, null, true );

    wp_enqueue_script( 'tabs.js',get_template_directory().'/js/tabs.js',null, null, true );

    wp_enqueue_script( 'owl.carousel.js',get_template_directory().'/js/owl.carousel.js',null, null, true );

    wp_enqueue_script( 'jquery.mmenu.min.all.js',get_template_directory().'/js/jquery.mmenu.min.all.js',null, null, true );

    wp_enqueue_script( 'custom.js',get_template_directory().'/js/custom.js',null, null, true );
    wp_enqueue_script( 'slider.js',get_template_directory().'/js/slider.js',null, null, true );



    
<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'komplexservice' ); ?></a>

<header id="masthead" class="site-header">
    <div class="site-branding">
        <?php
        the_custom_logo();
        if ( is_front_page() && is_home() ) :
            ?>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php
        else :
            ?>
            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php
        endif;
        $komplexservice_description = get_bloginfo( 'description', 'display' );
        if ( $komplexservice_description || is_customize_preview() ) :
            ?>
            <p class="site-description"><?php echo $komplexservice_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
        <?php endif; ?>
    </div><!-- .site-branding -->

    <nav id="site-navigation" class="main-navigation">
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'komplexservice' ); ?></button>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
            )
        );
        ?>
    </nav><!-- #site-navigation -->
</header><!-- #masthead --> -->*/
?>