<?php /*
Template name: Магазин
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
                    <h2>Магазин</h2>
                    <ul>
                    <li><a href="index.html">Главная</a></li>
                    <li><a>Магазин</a></li>
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



<div class="services-content">
       <div class="container">
        
        
        <div class="row">
        
        <div class="col-md-3">
                    <aside>
                        <div class="sidebar-widget no-margin">
                            <h3>Фильтр по цене</h3>
                            <div id="slider-range" class="ui-slider"></div>
                            <div class="price-range clearfix">
                                <p>Фильтр</p>
                                <input type="text" readonly="" id="amount">
                            </div>
                        </div>
                        <hr class="margin-top-40 margin-bottom-40">
                        <div class="sidebar-widget">
                            <h3>Категории</h3>
                            <ul class="list-arrow list-unstyled">
                                <li><a href="#."><i class="fa fa-angle-right"></i>Рефрежераторы</a></li>
                                <li><a href="#."><i class="fa fa-angle-right"></i>Рефрежераторы б/у</a></li>
                                <li><a href="#."><i class="fa fa-angle-right"></i>Запчасти</a></li>
                                <li><a href="#."><i class="fa fa-angle-right"></i>Компрессоры</a></li>
                                <li><a href="#."><i class="fa fa-angle-right"></i>Датчики и выключатели</a></li>
                                <li><a href="#."><i class="fa fa-angle-right"></i>Фильтры, маслоотделители</a></li>
                                <li><a href="#."><i class="fa fa-angle-right"></i>Пульты управления и электроника</a></li>
                                <li><a href="#."><i class="fa fa-angle-right"></i>Вентиляторы</a></li>
                            </ul>
                        </div>
                        <hr class="margin-top-40 margin-bottom-40">
                        <div class="sidebar-widget">
                            <h3>ТОП товары</h3>
                            <div class="top-products clearfix">
                                <a href="#."><img src="<?php echo get_template_directory_uri();?>/assets/images/shop/top-products-1.jpg" alt=""></a>
                                <div class="top-products-detail">
                                    <h4><a href="#.">Компрессор TM16 HD
</a></h4>
                                    <p>648 BYN</p>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="top-products clearfix">
                                <a href="#."><img src="<?php echo get_template_directory_uri();?>/assets/images/shop/top-products-2.jpg" alt=""></a>
                                <div class="top-products-detail">
                                    <h4><a href="#.">Маслоотделитель Carrier</a></h4>
                                    <p>264 BYN</p>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="top-products clearfix">
                                <a href="#."><img src="<?php echo get_template_directory_uri();?>/assets/images/shop/top-products-3.jpg" alt=""></a>
                                <div class="top-products-detail">
                                    <h4><a href="#.">Фильтр-осушитель Thermo King 61-0800</a></h4>
                                    <p>78 BYN</p>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-md-9">
                    <ul class="shop clearfix list-unstyled">
                        <li>
                            <div class="product">
                                <div class="product-thumb">
                                    <a><img src="<?php echo get_template_directory_uri();?>/assets/images/shop/1.jpg" alt=""></a>
                                </div>
                                <div class="product-description clearfix">
                                    <h3><a href="shop-detail.html">Датчик давления масла Thermo </a></h3>
                                    <p class="price">55 BYN</p>
                                    <span class="double-border"></span>
                                    <a href="#." class="product-cart-btn pull-left"><i class="icon-basket"></i> Заказать</a>
                                    <a href="shop-detail.html" class="product-detail-btn pull-right"><i class="icon-browser"></i> Подробнее</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product">
                                <div class="product-thumb">
                                    <label>Акция</label>
                                    <a><img src="<?php echo get_template_directory_uri();?>/assets/images/shop/2.jpg" alt=""></a>
                                </div>
                                <div class="product-description clearfix">
                                    <h3><a href="shop-detail.html">Датчик давления масла Thermo </a></h3>
                                    <p class="price">55 BYN</p>
                                    <span class="double-border"></span>
                                    <a href="#." class="product-cart-btn pull-left"><i class="icon-basket"></i> Заказать</a>
                                    <a href="shop-detail.html" class="product-detail-btn pull-right"><i class="icon-browser"></i> Подробнее</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product">
                                <div class="product-thumb">
                                    <a><img src="<?php echo get_template_directory_uri();?>/assets/images/shop/3.jpg" alt=""></a>
                                </div>
                                <div class="product-description clearfix">
                                    <h3><a href="shop-detail.html">Датчик давления масла </a></h3>
                                    <p class="price">55 BYN</p>
                                    <span class="double-border"></span>
                                    <a href="#." class="product-cart-btn pull-left"><i class="icon-basket"></i> Заказать</a>
                                    <a href="shop-detail.html" class="product-detail-btn pull-right"><i class="icon-browser"></i> Подробнее</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product">
                                <div class="product-thumb">
                                    <a><img src="<?php echo get_template_directory_uri();?>/assets/images/shop/1.jpg" alt=""></a>
                                </div>
                                <div class="product-description clearfix">
                                    <h3><a href="shop-detail.html">Датчик давления масла Thermo </a></h3>
                                    <p class="price">55 BYN</p>
                                    <span class="double-border"></span>
                                    <a href="#." class="product-cart-btn pull-left"><i class="icon-basket"></i> Заказать</a>
                                    <a href="shop-detail.html" class="product-detail-btn pull-right"><i class="icon-browser"></i> Подробнее</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product">
                                <div class="product-thumb">
                                    <label>Акция</label>
                                    <a><img src="<?php echo get_template_directory_uri();?>/assets/images/shop/2.jpg" alt=""></a>
                                </div>
                                <div class="product-description clearfix">
                                    <h3><a href="shop-detail.html">Датчик давления масла Thermo </a></h3>
                                    <p class="price">55 BYN</p>
                                    <span class="double-border"></span>
                                    <a href="#." class="product-cart-btn pull-left"><i class="icon-basket"></i> Заказать</a>
                                    <a href="shop-detail.html" class="product-detail-btn pull-right"><i class="icon-browser"></i> Подробнее</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product">
                                <div class="product-thumb">
                                    <a><img src="<?php echo get_template_directory_uri();?>/assets/images/shop/3.jpg" alt=""></a>
                                </div>
                                <div class="product-description clearfix">
                                    <h3><a href="shop-detail.html">Датчик давления масла </a></h3>
                                    <p class="price">55 BYN</p>
                                    <span class="double-border"></span>
                                    <a href="#." class="product-cart-btn pull-left"><i class="icon-basket"></i> Заказать</a>
                                    <a href="shop-detail.html" class="product-detail-btn pull-right"><i class="icon-browser"></i> Подробнее</a>
                                </div>
                            </div>
                        </li>
                        
                        <li>
                            <div class="product">
                                <div class="product-thumb">
                                    <a><img src="<?php echo get_template_directory_uri();?>/assets/images/shop/1.jpg" alt=""></a>
                                </div>
                                <div class="product-description clearfix">
                                    <h3><a href="shop-detail.html">Датчик давления масла Thermo </a></h3>
                                    <p class="price">55 BYN</p>
                                    <span class="double-border"></span>
                                    <a href="#." class="product-cart-btn pull-left"><i class="icon-basket"></i> Заказать</a>
                                    <a href="shop-detail.html" class="product-detail-btn pull-right"><i class="icon-browser"></i> Подробнее</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product">
                                <div class="product-thumb">
                                    <label>Акция</label>
                                    <a><img src="<?php echo get_template_directory_uri();?>/assets/images/shop/2.jpg" alt=""></a>
                                </div>
                                <div class="product-description clearfix">
                                    <h3><a href="shop-detail.html">Датчик давления масла Thermo </a></h3>
                                    <p class="price">55 BYN</p>
                                    <span class="double-border"></span>
                                    <a href="#." class="product-cart-btn pull-left"><i class="icon-basket"></i>Заказать</a>
                                    <a href="shop-detail.html" class="product-detail-btn pull-right"><i class="icon-browser"></i> Подробнее</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product">
                                <div class="product-thumb">
                                    <a><img src="<?php echo get_template_directory_uri();?>/assets/images/shop/3.jpg" alt=""></a>
                                </div>
                                <div class="product-description clearfix">
                                    <h3><a href="shop-detail.html">Датчик давления масла </a></h3>
                                    <p class="price">55 BYN</p>
                                    <span class="double-border"></span>
                                    <a href="#." class="product-cart-btn pull-left"><i class="icon-basket"></i> Заказать</a>
                                    <a href="shop-detail.html" class="product-detail-btn pull-right"><i class="icon-browser"></i> Подробнее</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                
            </div>
        
        
    </div>
</div>


</div>
<!--End Content-->



<?php 
get_footer();

