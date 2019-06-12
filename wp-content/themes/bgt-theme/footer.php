</main>

<footer id="main_footer">
    <div class="container footer_widgets_wrap">
        <div class="row footer-widgets">
            <div class="col-12 col-md-6 col-lg-4 widget-hot-1">
                <div class="widget">
                    <h2 class="widget_title">HOT POSTS</h2>
                    <article class="footer_widget_item">
                        <a href="">
                            <div class="footer_widget_item_img_wrap">
                                <div class="footer_widget_item_img img-hover" id="car"></div>
                            </div>
                            <div class="footer_widget_item_text">
                                <p class="text-hover">10 Landscapes You Won`t Have Even Imagined Exist<?php the_title(); ?></p>
                                <p><?php the_time('M j, Y'); ?></p>
                            </div>
                        </a>
                    </article>
                    <article class="footer_widget_item">
                        <a href="">
                            <div class="footer_widget_item_img_wrap">
                                <div class="footer_widget_item_img img-hover" id="sea_view"></div>
                            </div>
                            <div class="footer_widget_item_text">
                                <p class="text-hover">Decorating to Celebrate the Great Outdoor Space<?php the_title(); ?></p>
                                <p><?php the_time('M j, Y'); ?></p>
                            </div>
                        </a>
                    </article>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col widget-hot-2">
                <div class="widget">
                    <h2 class="widget_title">POPULAR POSTS</h2>
                    <article class="footer_widget_item">
                        <a href="">
                            <div class="footer_widget_item_img_wrap">
                                <div class="footer_widget_item_img img-hover" id="footer_lama"></div>
                            </div>
                            <div class="footer_widget_item_text">
                                <p class="text-hover">10 Landscapes You Won`t Have Even Imagined Exist<?php the_title(); ?></p>
                                <p><?php the_time('M j, Y'); ?></p>
                            </div>
                        </a>
                    </article>
                    <article class="footer_widget_item">
                        <a href="">
                            <div class="footer_widget_item_img_wrap">
                                <div class="footer_widget_item_img img-hover" id="mntn_tent"></div>
                            </div>
                            <div class="footer_widget_item_text">
                                <p class="text-hover">Decorating to Celebrate the Great Outdoor Space<?php the_title(); ?></p>
                                <p><?php the_time('M j, Y'); ?></p>
                            </div>
                        </a>
                    </article>
                </div>
            </div>
            <div class="col-lg-4 widget-hot-3">
                <div class="widget">
                    <h2 class="widget_title">TRENDING NOW</h2>
                    <article class="footer_widget_item">
                        <a href="">
                            <div class="footer_widget_item_img_wrap">
                                <div class="footer_widget_item_img img-hover" id="footer_eur_architect"></div>
                            </div>
                            <div class="footer_widget_item_text">
                                <p class="text-hover">10 Landscapes You Won`t Have Even Imagined Exist<?php the_title(); ?></p>
                                <p><?php the_time('M j, Y'); ?></p>
                            </div>
                        </a>
                    </article>
                    <article class="footer_widget_item">
                        <a href="">
                            <div class="footer_widget_item_img_wrap">
                                <div class="footer_widget_item_img img-hover" id="girl_bridge"></div>
                            </div>
                            <div class="footer_widget_item_text">
                                <p class="text-hover">Decorating to Celebrate the Great Outdoor Space<?php the_title(); ?></p>
                                <p><?php the_time('M j, Y'); ?></p>
                            </div>
                        </a>
                    </article>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="footer_about">
                    <div class="horizontal-divider"></div>
                    <div class="footer_about_item">
                        <div class="footer-logo">
                            <a href="#"><img class="footer-logo-img img-fluid" src="<?php bloginfo ('template_url'); ?>/assets/images/bgt-logo.png" alt="logo"></a>
                        </div>
                        <div class="footer-text-wrap">
                            <p class="footer-text">BigGlobalTravel is your news, entertainment, music fashion website.
                                We provide you with the latest breaking news and videos
                                straight from the entertainment industry.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-aligned">
                        <div class="footer-social">
                            <div class="flex-wrap">
                                <ul class="list-inline d-flex footer-soc-block px-auto justify-content-center">
                                    <li class="p-3 px-lg-3 py-lg-0">
                                        <a href="#">
                                            <span class="icon icon-facebook">
                                                <img src="<?php bloginfo ('template_url'); ?>/assets/images/social-facebook-circular-button.png">
                                            </span>
                                        </a>
                                    </li>
                                    <li class="p-3 px-lg-3 py-lg-0">
                                        <a href="#">
                                            <span class="icon icon-twitter">
                                                <img src="<?php bloginfo ('template_url'); ?>/assets/images/social-twitter-circular-button.png">
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-menu-wrap">
                            <div class="flex-wrap">
                                <?php
                                    wp_nav_menu( array(
                                        'theme_location'    => 'footer-menu',
                                        'depth'             => 1,
                                        'container'         => false,
                                        'container_class'   => 'flex-wrap',
                                        'menu_class'        => 'footer-menu-block list-inline d-flex justify-content-around',
                                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                        'walker'            => new WP_Bootstrap_Navwalker(),
                                    ) );
                                ?>
<!--                                <ul class="footer-menu-block list-inline d-flex justify-content-around">-->
<!--                                    <li class="footer-menu-item p-1 d-inline-block text-center"><a class="text-hover" href="#">Terms of Service</a></li>-->
<!--                                    <li class="footer-menu-item p-1 d-inline-block text-center"><a class="text-hover" href="#">Privacy Policy</a></li>-->
<!--                                    <li class="footer-menu-item p-1 d-inline-block text-center"><a class="text-hover" href="#">DMCA Policy</a></li>-->
<!--                                    <li class="footer-menu-item p-1 d-inline-block text-center"><a class="text-hover" href="#">Cookie Policy</a></li>-->
<!--                                    <li class="footer-menu-item p-1 d-inline-block text-center"><a class="text-hover" href="#">Contact Us</a></li>-->
<!--                                    <li class="footer-menu-item p-1 d-inline-block text-center"><a class="text-hover" href="#">Work With Us</a></li>-->
<!--                                    <li class="footer-menu-item p-1 d-inline-block text-center"><a class="text-hover" href="#">Advertise With Us</a></li>-->
<!--                                </ul>-->
                            </div>
                        </div>
                        <p class="footer-copy text-center">
                            <a class="text-hover" href="#">BigGlobalTravel 2017</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>