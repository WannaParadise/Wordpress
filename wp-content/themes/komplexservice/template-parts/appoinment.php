<?php /*
Template name: Online заявка
 */
get_header();
?>

   <!--Start Content-->
   <div class="content">
   
   
  
  <div class="main-appointment-form">
   		<div class="container">
        	
            <div class="row">
	        <div class="col-md-12">
            <div class="main-title text-center">
                <h2><span>Online</span> заявка</h2>
                <p>Оставьте свои данные и с Вами свяжется наш менеджер очень скоро.</p>
            </div>
            </div>
            </div>
            
            <div class="row">
				<div class="col-md-12">
					<div class="icon-center">
					<div class="appoint-icon">
						<i class="icon-clipboard"></i>
					</div></div>
					
						<div class="appointment-form">
				
				<div class="form">
				
    <section class="bgcolor-a">
        <p class="error" id="error" style="display:none;"></p>
    <p class="success" id="success" style="display:none;"></p>
    
    <form name="appointment_form" id="appointment_form" method="post" action="#" onSubmit="return false">
				<span class="input input--kohana">
					<input class="input__field input__field--kohana" type="text" id="input-29" name="input-29" />
					<label class="input__label input__label--kohana" for="input-29">
                        <i class="icon-user6 icon icon--kohana"></i>
						<span class="input__label-content input__label-content--kohana">Ваше имя</span>
					</label>
				</span>
				<span class="input input--kohana">
					<input class="input__field input__field--kohana" type="text" id="input-30" name="input-30"/>
					<label class="input__label input__label--kohana" for="input-30">
						<i class="icon-dollar icon icon--kohana"></i>
						<span class="input__label-content input__label-content--kohana">Ваш Email</span>
					</label>
				</span>
				<span class="input input--kohana last">
					<input class="input__field input__field--kohana" type="text" id="input-31" name="input-31"/>
					<label class="input__label input__label--kohana" for="input-31">
						<i class="icon-phone5 icon icon--kohana"></i>
						<span class="input__label-content input__label-content--kohana">Ваш номер</span>
					</label>
				</span>
                
               
                
                <span class="input input--kohana message">
					<textarea class="input__field input__field--kohana" id="textarea" name="textarea" ></textarea>

					<label class="input__label input__label--kohana" for="textarea">
						<i class="icon-new-message icon icon--kohana"></i>
						<span class="input__label-content input__label-content--kohana">Сообщение</span>
                    </label>
                </span>
                
                <input name="submit_appointment" type="submit" value="Оставить заявку" onClick="validateAppointment();">
                        
                        
            </form>
                
			</section>
            
            
    

   
    
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

