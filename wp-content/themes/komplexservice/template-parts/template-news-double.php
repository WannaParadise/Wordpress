<?php /*
Template name: Статьи
 */
get_header();
?>

<div class="sub-banner">
   
   <img class="banner-img" src="<?php echo get_template_directory_uri();?>/assets/images/sub-banner.jpg" alt="">
<div class="detail">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <div class="paging">
                    <h2>Полезно знать</h2>
                    <ul>
                    <li><a href="index.html">Главная</a></li>
                    <li><a>Полезно знать</a></li>
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
            <?php $args = array(
                                'post_type'     => 'news',
                                'post_per_page' => -1,

                            );
                            $news = new WP_Query( $args );?>

                            <?php
                                    while ( $news->have_posts() ) :
                                        $news->the_post();?>
                <div class="col-md-6">
                        <div class="news-sec">
                            <img src="<?php the_post_thumbnail('medium');?>
                            <div class="detail">
                                <span><?php the_date();?></span>
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="read-more">подробнее</a>
                            </div>
                        </div>
                </div>


                              <?php
                                    endwhile; // End of the loop.
                                    ?>
                
                
            </div>
        </div>
    </div>




</div>
   
<?php 
get_footer();

