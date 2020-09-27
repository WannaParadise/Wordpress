<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KomplexService
 */

?>

 <!--Start Footer-->
 <footer class="footer" id="footer">
   		<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<div class="emergency">
                    	<i class="icon-phone5"></i>
                        <span class="text">Телефон 24/7</span>
                        <span class="number">+375 (29) 604-44-14</span>
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/emergency-divider.png" alt="">
                    </div>
                </div>
            </div>
            
            
            <div class="main-footer">
            	<div class="row">
                	
                    <div class="col-md-3">
                    	
                        <div class="useful-links">
                        	<div class="title">
                            	<h5>Карта сайта</h5>
                            </div>
                            
                            <div class="detail">
                            	<ul>
                                	
                                	<li><a href="#.">Главная</a></li>
                                    <li><a href="#.">О компании</a></li>
                                    <li><a href="#.">Услуги</a></li>
                                    <li><a href="#.">Магазин</a></li>
                                    <li><a href="#.">Ремонт</a></li>
                                    <li><a href="#.">Гарантия</a></li>
                                    <li><a href="#.">Полезно знать</a></li>
                                    <li><a href="#.">Прайс</a></li>
                                    <li><a href="#.">Контакты</a></li>
                                    
                                </ul>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="col-md-3">
                    	
                        
                        	<div class="title">
                            	<h5>Полезно знать</h5>
                            </div>
                            
                            <div class="detail">
                            	
                                <div class="tweets">
                                	
                                    <div class="icon">
                                    	<i class="icon-yen"></i>
                                    </div>
                                    
                                    <div class="text">
                                    	<p><a href="#.">@статьи</a> Немного об автономных воздушных отопителях <a href="#.">перейти</a></p>
                                        <span>3 дня назад</span>
                                    </div>
                                    
                                </div>
                                
                                <div class="tweets">
                                	
                                    <div class="icon">
                                    	<i class="icon-yen"></i>
                                    </div>
                                    
                                   <div class="text">
                                    	<p><a href="#.">@статьи</a> Немного об автономных воздушных отопителях <a href="#.">перейти</a></p>
                                        <span>3 дня назад</span>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        
                        
                    </div>
                    <div class="col-md-3">
                    	
                        <div class="newsletter">
                        	<div class="title">
                            	<h5>Подписка</h5>
                            </div>
                            
                            <div class="detail">
                            	
                                    <div class="signup-text">
                                    	<i class="icon-dollar"></i>
                                		<span>Оставьте свои данные и получайте свежие прайсы</span>
                                    </div>
                                    
                                    <div class="form">
                                    <p class="subscribe_success" id="subscribe_success" style="display:none;"></p>
                                    <p class="subscribe_error" id="subscribe_error" style="display:none;"></p>
                                    
                                    <form name="subscribe_form" id="subscribe_form" method="post" action="#" onSubmit="return false">
                                    	<input type="text" data-delay="300" placeholder="Ваше имя" name="subscribe_name" id="subscribe_name" onKeyPress="removeChecks();" class="input" >
                                    	<input type="text" data-delay="300" placeholder="Ваш Email" name="subscribe_email" id="subscribe_email" onKeyPress="removeChecks();" class="input" >
                                        <input name="Subscribe" type="submit" value="Отправить" onClick="validateSubscription();">
                                    </form>
                                    </div>
                                    
                                </div>
                            
                            
                        </div>
                        
                    </div>
                    <div class="col-md-3">
                    	
                        <div class="get-touch">
                        	<div class="title">
                            	<h5>Наши контакты</h5>
                            </div>
                            
                            <div class="detail">
                            	<div class="get-touch">
                                	
                                    
                                    <span class="text">ООО «КомплексГруппСервис»                                                                                                                           </span>
                                    
                                    
                                    <ul>
                                    	<li><i class="icon-location"></i> <span>Адрес: 220000, Минская обл., Минский р-н,  д..Дворицкая Слобода, пом.9</span></li>
                                        <li><i class="icon-phone4"></i> <span>+375 (29) 604-44-14</span></li>
                                        <li><a href="#."><i class="icon-dollar"></i> <span> info@remont.by</span></a></li>
                                    </ul> 
                                    
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
        <div class="footer-bottom">
        	<div class="container">
            	<div class="row">
                	
                    <div class="col-md-6">
                    	<span class="copyrights">&copy; 2020. Все права защищены.</span>
                    </div>
                    
                    <div class="col-md-6">
                    	<div class="social-icons">
                        	<a href="#." class="fb"><i class="icon-euro"></i></a>
                            <a href="#." class="tw"><i class="icon-yen"></i></a>
                            <a href="#." class="gp"><i class="icon-google-plus"></i></a>
                            <a href="#." class="vimeo"><i class="icon-vimeo4"></i></a>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
        
   </footer>

   <a href="#0" class="cd-top"></a>
   </div>
   <script>

    (function ($) {
    $('.btn-show-menu-mobile').on('click', function(){
        $(this).toggleClass('is-active');
        $('.wrap-side-menu').slideToggle();
    });

    var arrowMainMenu = $('.arrow-main-menu');

    for(var i=0; i<arrowMainMenu.length; i++){
        $(arrowMainMenu[i]).on('click', function(){
            $(this).parent().find('.sub-menu').slideToggle();
            $(this).toggleClass('turn-arrow');
        })
    }

    $(window).resize(function(){
        if($(window).width() >= 992){
            if($('.wrap-side-menu').css('display') == 'block'){
                $('.wrap-side-menu').css('display','none');
                $('.btn-show-menu-mobile').toggleClass('is-active');
            }
            if($('.sub-menu').css('display') == 'block'){
                $('.sub-menu').css('display','none');
                $('.arrow-main-menu').removeClass('turn-arrow');
            }
        }
    });
})(jQuery);

	(function () {
				"use strict";
	/* ------------------------------------------------------------------------ 
						   RANGE SLIDER [price filter]
	------------------------------------------------------------------------ */
						jQuery( "#slider-range" ).slider({
						range: true,
						min: 24781,
						max: 50000,
						values: [ 28781,45000],
						
						slide: function( event, ui ) {
							
							jQuery( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
						},
						
						stop: function(event, ui) {
						   jQuery( "#sort_price_max" ).val(ui.values[ 1 ] );
						   jQuery( "#sort_price_min" ).val(ui.values[ 0 ] );
						}
						});
						jQuery( "#amount" ).val( "$" + jQuery( "#slider-range" ).slider( "values", 0 ) +
						" - $" + jQuery( "#slider-range" ).slider( "values", 1 ) );
						})(jQuery);

            </script>
            	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<?php wp_footer(); ?>

</body>
</html>
