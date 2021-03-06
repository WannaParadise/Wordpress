<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package KomplexService
 */

get_header();
?>
<?php
                                    while ( have_posts() ) :
                                        the_post();?>
<div class="sub-banner">
   	<img class="banner-img" src="<?php echo get_template_directory_uri();?>/assets/images/sub-banner.jpg" alt="">
    <div class="detail">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                    <div class="paging">
                		<h2> <?php the_title(); ?></h2>
						<ul>
						<li><a href="index.html">Главная</a></li>
						<li><a href="#.">Полезно знать</a></li>
						<li><a> <?php the_title(); ?></a></li>
						</ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
   
   </div>	
   
   <!--End Banner-->
   
    
   
   <!--Start Content-->
   <div class="content">
		
		<div class="news-posts">
			<div class="container">
				<div class="row">
					
					<div class="col-md-8">
							
							<div class="news-detail">
								<img src="<?php the_post_thumbnail('medium'); ?>
								<div class="detail">
									<span class="date"><?php the_date(); ?></span>
									<p> <?php the_content(); ?></p>
								</div>
							</div>
							
							
							
							
							<div class="comments-sec">
								<h3>4 комментария</h3>
								
								<div class="all-comments">
								
							<div class="comment-box">
									
									<div class="detail">
										<a href="#.">Ответить</a>
										<span class="name">ФИО</span>
										<span class="date">04.05.2020</span>
										<p> - Важность регистрации и записи всех аварийных кодов крайне необходима для проведения правильного обслуживания и ремонта. - Важность регистрации и записи всех аварийных кодов крайне необходима для проведения правильного обслуживания и ремонта.</p>
									</div>
									
									<div class="clear"></div>
								</div>
								
								<div class="comment-box">
									
									<div class="detail">
										<a href="#.">Ответить</a>
										<span class="name">ФИО</span>
										<span class="date">04.05.2020</span>
										<p> - Важность регистрации и записи всех аварийных кодов крайне необходима для проведения правильного обслуживания и ремонта. - Важность регистрации и записи всех аварийных кодов крайне необходима для проведения правильного обслуживания и ремонта.</p>
									</div>
									
									<div class="clear"></div>
								</div>
								
								
								<div class="comment-box">
									
									<div class="detail">
										<a href="#.">Ответить</a>
										<span class="name">ФИО</span>
										<span class="date">04.05.2020</span>
										<p> - Важность регистрации и записи всех аварийных кодов крайне необходима для проведения правильного обслуживания и ремонта. - Важность регистрации и записи всех аварийных кодов крайне необходима для проведения правильного обслуживания и ремонта.</p>
									</div>
									
									<div class="clear"></div>
								</div>
									
									
								</div>
								
								</div>
								
							
							
							
							<div class="leave-reply">
								<h3>Оставить отзыв</h3>
								
								<div class="form">
									<input type="text" data-delay="300" placeholder="Ваше имя" name=" " class="input">
									<input type="text" data-delay="300" placeholder="Ваш E-mail" name=" " class="input">
									<input type="text" data-delay="300" placeholder="Тема" name=" " class="input last">
									<textarea data-delay="500" class="required valid" placeholder="Ваш отзыв" name="message" id="message"></textarea>
									<input name=" " type="submit" value="Отправить">
								</div>
							</div>
							
							
							
					</div>
					
					<div class="col-md-4">
					
						<div class="recent-posts">
							<h6 class="bar-title">Последние статьи</h6>
							
							<div class="post-sec">
								<a href="blog-detail.html"><img src="<?php echo get_template_directory_uri();?>/assets/images/blog/side-bar/recent-post1.jpg" alt=""></a>
								<a href="blog-detail.html" class="title">1 ая новость</a>
								<span class="date">11 минут назад</span>
							</div>
							
							<div class="post-sec">
								<a href="blog-detail.html"><img src="<?php echo get_template_directory_uri();?>/assets/images/blog/side-bar/recent-post1.jpg" alt=""></a>
								<a href="blog-detail.html" class="title">1 ая новость</a>
								<span class="date">11 минут назад</span>
							</div>
							<div class="post-sec">
								<a href="blog-detail.html"><img src="<?php echo get_template_directory_uri();?>/assets/images/blog/side-bar/recent-post1.jpg" alt=""></a>
								<a href="blog-detail.html" class="title">1 ая новость</a>
								<span class="date">11 минут назад</span>
							</div>
							
						</div>
						<div class="clear"></div>
						
						
						
						
					</div>
					
				</div>
			</div>
		</div>
  
  
  
   
   </div>


   <?php
                                    endwhile; // End of the loop.
                                    ?>

<?php

get_footer();
