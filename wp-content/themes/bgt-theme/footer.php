</main>

<footer id="main_footer">
    <div class="container footer_widgets_wrap">
        <div class="row footer-widgets">
            <div class="col-12 col-md-6 col-lg-4 widget-hot-1">
                <div class="widget">
                    <h2 class="widget_title">HOT POSTS</h2>
                    <?php
                    // задаем нужные нам критерии выборки данных из БД
                    $args8 = array(
                        'tag' => 'hot-posts',
                        'numberposts' => 2,
                        'posts_per_page' => 2,
                        'orderby' => 'date',
                    );

                    $query8 = new WP_Query($args8);

                    // Цикл
                    if ($query8->have_posts()) {
                        while ($query8->have_posts()) {
                        $query8->the_post();
                    ?>
                    <article class="footer_widget_item">
                        <a href="<?php the_permalink(); ?>">
                            <div class="footer_widget_item_img_wrap">
                                <?php
                                $imageArray = get_post_thumbnail_id()
                                    ? wp_get_attachment_image_src(get_post_thumbnail_id(), '')
                                    : [];
                                $imageSrc = array_key_exists(0, $imageArray)
                                    ? $imageArray[0]
                                    : '';
                                ?>
                                <div class="footer_widget_item_img img-hover" style="background-image: url('<?php echo $imageSrc ?>');"></div>
                            </div>
                            <div class="footer_widget_item_text">
                                <p class="text-hover"><?php the_title(); ?></p>
                                <p><?php the_time('M j, Y'); ?></p>
                            </div>
                        </a>
                    </article>
                        <?php
                        }//конец while
                        wp_reset_postdata();
                    }//конец if
                    ?>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col widget-hot-2">
                <div class="widget">
                    <h2 class="widget_title">POPULAR POSTS</h2>
                    <?php
                    // задаем нужные нам критерии выборки данных из БД
                    $args9 = array(
                        'tag' => 'popular-posts',
                        'numberposts' => 2,
                        'posts_per_page' => 2,
                        'orderby' => 'date',
                    );

                    $query9 = new WP_Query($args9);

                    // Цикл
                    if ($query9->have_posts()) {
                    while ($query9->have_posts()) {
                    $query9->the_post();
                    ?>
                    <article class="footer_widget_item">
                        <a href="<?php the_permalink(); ?>">
                            <div class="footer_widget_item_img_wrap">
                                <?php
                                $imageArray = get_post_thumbnail_id()
                                    ? wp_get_attachment_image_src(get_post_thumbnail_id(), '')
                                    : [];
                                $imageSrc = array_key_exists(0, $imageArray)
                                    ? $imageArray[0]
                                    : '';
                                ?>
                                <div class="footer_widget_item_img img-hover" style="background-image: url('<?php echo $imageSrc ?>');"></div>
                            </div>
                            <div class="footer_widget_item_text">
                                <p class="text-hover"><?php the_title(); ?></p>
                                <p><?php the_time('M j, Y'); ?></p>
                            </div>
                        </a>
                    </article>
                        <?php
                        }//конец while
                        wp_reset_postdata();
                    }//конец if
                    ?>
                </div>
            </div>
            <div class="col-lg-4 widget-hot-3">
                <div class="widget">
                    <h2 class="widget_title">TRENDING NOW</h2>
                    <?php
                    // задаем нужные нам критерии выборки данных из БД
                    $args10 = array(
                        'tag' => 'trending-now',
                        'numberposts' => 2,
                        'posts_per_page' => 2,
                        'orderby' => 'date',
                    );

                    $query10 = new WP_Query($args10);

                    // Цикл
                    if ($query10->have_posts()) {
                    while ($query10->have_posts()) {
                    $query10->the_post();
                    ?>
                    <article class="footer_widget_item">
                        <a href="<?php the_permalink(); ?>">
                            <div class="footer_widget_item_img_wrap">
                                <?php
                                $imageArray = get_post_thumbnail_id()
                                    ? wp_get_attachment_image_src(get_post_thumbnail_id(), '')
                                    : [];
                                $imageSrc = array_key_exists(0, $imageArray)
                                    ? $imageArray[0]
                                    : '';
                                ?>
                                <div class="footer_widget_item_img img-hover" style="background-image: url('<?php echo $imageSrc ?>');"></div>
                            </div>
                            <div class="footer_widget_item_text">
                                <p class="text-hover"><?php the_title(); ?></p>
                                <p><?php the_time('M j, Y'); ?></p>
                            </div>
                        </a>
                    </article>
                        <?php
                        }//конец while
                        wp_reset_postdata();
                    }//конец if
                    ?>
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
                            </div>
                        </div>
                        <p class="footer-copy text-center">
                            <a class="text-hover" href="#">BigGlobalTravel <?php echo the_date('Y')?></a>
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