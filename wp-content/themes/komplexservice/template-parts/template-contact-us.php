<?php /*
Template name: Контакты
 */
get_header();
?>
  <div class="sub-banner">
   
   <img class="banner-img" src="images/sub-banner.jpg" alt="">
<div class="detail">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <div class="paging">
                    <h2>Наши контакты</h2>
                    <ul>
                    <li><a href="index.html">Главная</a></li>
                    <li><a>Контакты</a></li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
</div>

</div>	
 
    
   
   <!--Start Content-->
   <div class="content">
   
   
  
  <div class="contact-us">
   		<div class="container">
        	
            <div class="row">
            	<div class="col-md-12">
				
				<div class="our-location">
					<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d9691.435485459822!2d27.436398099061705!3d53.84491198607237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sby!4v1591956531425!5m2!1sru!2sby" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
				</div>
            </div>
            
        </div>
		
		
		<div class="leave-msg dark-back">
			<div class="container">
			
			<div class="rox">
				<div class="col-md-7">
					
					<div class="main-title">
						<h2><span>Оставьте</span> Ваш <span>запрос</span></h2>
						<p>Мы занимаемся ремонтом холодильных установок любой сложности, а также их продажей. </p>
					 </div>
					
					<div class="form">
				<div class="row">
                                    <p class="success" id="success" style="display:none;"></p>
									<p class="error" id="error" style="display:none;"></p>
									<?php do_shortcode('[contact-form-7 id="51" title="Контактная форма 1"]');?>
                <form name="contact_form" id="contact_form" method="post" action="#" onSubmit="return false">
					<div class="col-md-4"><input type="text" data-delay="300" placeholder="Ваше ФИО" name="contact_name" id="contact_name" class="input"></div>
					<div class="col-md-4"><input type="text" data-delay="300" placeholder="Ваш E-mail" name="contact_email" id="contact_email" class="input"></div>
					<div class="col-md-4"><input type="text" data-delay="300" placeholder="Тема" name="contact_subject" id="contact_subject" class="input"></div>
					<div class="col-md-12"><textarea data-delay="500" class="required valid" placeholder="Сообщение" name="message" id="message"></textarea></div>
					<div class="col-md-3"><input name=" " type="submit" value="отправить" onClick="validateContact();"></div>
                    </form>
                    
				</div>
			</div>

					
				</div>
				
				<div class="col-md-5">
					
					<div class="contact-get">
					<div class="main-title">
						<h2><span>Наши</span> контакты</h2>
						<p>мы всегда на связи 24/7</p>
					 </div>
					
					<div class="get-in-touch">
					<div class="detail">
						<span><b>Телефон:</b> <?php echo $redux_demo['Phone']; ?></span>
						<span><b>Email:</b> <a href="#."> <?php echo $redux_demo['Email']; ?></a></span>
						<span><b>Сайт:</b> <a href="#.">www.remont.by</a></span>
						<span><b>Адрес:</b> 220000, Минская обл., Минский р-н,  д..Дворицкая Слобода, пом.9</span>
					 </div>
					 
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

			</div>
		</div>
		
   </div>
  
   
   </div>
   <!--End Content-->
   
   


<?php 
get_footer();
