<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KomplexService
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">


	<style> @media (min-width: 991px) {
	.disp-1{
		display: none;
	}
}
@media (min-width: 991px) {
	.side-menu{
		display: none;
	}
}
</style>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrap">
   
   <!--
   <div id="preloader">
		<div id="status">&nbsp;</div>
		<div class="loader">
			<h1>Подождите...</h1>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	-->

   <!--Start Top Bar-->
   <div class="top-bar">
   		<div class="container">
    		<div class="row">
            	
                <div class="col-md-6">
                	<span >Обслуживание и продажа холодильных установок и  рефрижераторов</span>
                </div>
                
                <div class="col-md-6">
                
                
                	
    
    
                	<div class="get-touch">
                    	
						<ul>
                        <li><a><i class="icon-phone4"></i> +375 (29) 604-44-14</a></li>
                        <li><a href="#."><i class="icon-mail"></i> info@remont.by</a></li>
						</ul>
						
                        <ul  class="social-icons">
                        <li><a href="#." class="fb"><i class="icon-euro"></i> </a></li>
                        <li><a href="#." class="tw"><i class="icon-yen"></i> </a></li>
                        <li><a href="#." class="gp"><i class="icon-caddieshoppingstreamline"></i> </a></li>
						</ul>
                        
                    </div>	
                </div>
                
            </div>
    	</div>
   </div> 
  
   
   <header class="header">
		<div class="container">
   		
   		
        <div class="row">
        	
            <div class="col-lg-3 col-md-3 col-xs-6">
            	<a href="index.html" class="logo"><img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt=""></a>
            </div>
            
            <div class="col-lg-9 col-md-9 col-xs-3">
                <nav class="menu-2">
				<?php wp_nav_menu( [
					'theme_location'  => 'header',
					'container'       => false, 
					'container_class' => '', 
					'menu_class'      => 'nav wtf-menu',
						] ); ?>
						</nav>

				
       
                	
			</div>
			<div class="disp-1 col-md-4 col-xs-3  ">		<div class="btn-show-menu-mobile hamburger hamburger--squeeze s">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </div> </div>
		
        </div>
        
        
		</div>	
    </header>
   
   
	<div class="container">

			<div class="wrap-side-menu" >
            <div class="side-menu">
                
				<?php wp_nav_menu( [
					'theme_location'  => 'header-mobile',
					'container'       => 'nav',
					'menu_class'     => 'main-menu',
					'container_class' => 'side-menu', 
						] ); ?>
				
			</div>
        	</div>
			
		</div>
		</div>
   
	
	





























