<?php get_header(); ?>
<div id="banner">
    <div class="container">
        <div class="banner_items_wrap">
            <div class="banner_item">
                <?php
                // задаем нужные нам критерии выборки данных из БД
                $args = array(
                    'posts_per_page' =>"1",
                    'orderby' => 'date'
                );

                $query = new WP_Query($args);

                // Цикл
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        ?>
                        <a href="<?php the_permalink() ?>" class="banner_item_wrap img-hover">
                            <div class="banner_image_wrap">
                                <div class="banner_item_image"></div>
                            </div>
                            <div class="banner_items_text_wrap">
                                <h2 class="banner-item-header">
                                    <span class="text-hover text-uppercase"><?php the_title(); ?></span>
                                </h2>
                                <p class="banner-item-tag text-info">
                                    <span><img src="<?php bloginfo('template_url'); ?>/assets/images/group.png"></span>
                                    <span><?php $category = get_the_category();
                                                echo $category[0]->cat_name; ?>
                                    </span>
                                </p>
                                <p class="text-white">
                                    <span><?php the_author(); ?></span>
                                    <span>-</span>
                                    <span><?php the_time('M j, Y'); ?></span>
                                </p>
                            </div>
                        </a>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
<div class="top_ads">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="soc-wrap">
                    <div class="soc-link">
                        <a class="button facebook" href="" target="_blank">
                            <div class="icon"></div>
                            <div class="btn-text">
                                <span class="">LIKE US</span>
                            </div>
                        </a>
                        <a class="button twitter" href="" target="_blank">
                            <div class="icon"></div>
                            <div class="btn-text">
                                <span class="">FOLLOW US</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="top_two_big">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <article class="top_two_big_item">
                    <?php
                    // задаем нужные нам критерии выборки данных из БД
                    $args = array(
                        'posts_per_page' =>"1",
                        'orderby' => 'date'
                    );

                    $query = new WP_Query($args);

                    // Цикл
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                    ?>
                    <a class="top_two_big_item_wrap">
                        <div class="top_two_big_images_wrap">
                            <div class="top_two_big_item_img img-hover" id="lama"></div>
                            <p class="top_two_big_item_tag"><span>CULTURE</span></p>
                        </div>
                        <div class="top_two_big_text_wrap">
                            <h2 class="top_two_big_item_header text-hover">
                                8 INCREDIBLE PICTURES FROM THE TRAVEL PHOTOGRAPHER
                                <?php the_title(); ?>
                            </h2>
                            <div class="top_two_big_item_meta">
                                <span class="top_two_big_item_author"><?php the_author(); ?></span>
                                <span>-</span>
                                <span class="top_two_big_item_date"><?php the_time('M j, Y'); ?></span>
                            </div>
                        </div>
                    </a>
                    <?php
                        }
                    }
                    // Возвращаем оригинальные данные поста. Сбрасываем $post.
                    wp_reset_postdata();
                    ?>
                </article>
            </div>
            <div class="col-12 col-lg-6">
                <article class="top_two_big_item">
                    <?php
                    // задаем нужные нам критерии выборки данных из БД
                    $args = array(
                        'posts_per_page' =>"1",
                        'orderby' => 'date'
                    );

                    $query = new WP_Query($args);

                    // Цикл
                    if ($query->have_posts()) {
                    while ($query->have_posts()) {
                    $query->the_post();
                    ?>
                    <a class="top_two_big_item_wrap">
                        <div class="top_two_big_images_wrap">
                            <div class="top_two_big_item_img img-hover" id="boat"></div>
                            <p class="top_two_big_item_tag"><span>TRIP IDEAS</span></p>
                        </div>
                        <div class="top_two_big_text_wrap">
                            <h2 class="top_two_big_item_header text-hover">
                                8 INCREDIBLE PICTURES FROM THE TRAVEL PHOTOGRAPHER
                                <?php the_title(); ?>
                            </h2>
                            <div class="top_two_big_item_meta">
                                <span class="top_two_big_item_author"><?php the_author(); ?></span>
                                <span>-</span>
                                <span class="top_two_big_item_date"><?php the_time('M j, Y'); ?></span>
                            </div>
                        </div>
                    </a>
                        <?php
                    }
                    }
                    // Возвращаем оригинальные данные поста. Сбрасываем $post.
                    wp_reset_postdata();
                    ?>
                </article>
            </div>
        </div>
    </div>
</div>
<div class="mid_ad">
    <div class="container">
        <div class="row">
            <div class="col-12"></div>
        </div>
    </div>
</div>
<div class="middle_five_small_block">
    <div class="container">
        <div class="section-header"><h2>TRIP ADVICES</h2></div>
        <div class="main-horizontal-divider"></div>
        <div class="middle_five_small_block_wrap">
            <article class="middle_five_small_block_item">
                <?php
                // задаем нужные нам критерии выборки данных из БД
                $args = array(
                    'posts_per_page' =>"1",
                    'orderby' => 'date'
                );

                $query = new WP_Query($args);

                // Цикл
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post(); ?>
                        <a class="middle_five_small_block_item_wrap">
                            <div class="middle_five_small_block_img_wrap">
                                <div class="middle_five_small_block_img img-hover" id="pool"></div>
                            </div>
                            <div class="middle_five_small_block_text_wrap">
                                <p class="text-hover">Hotel Debuts in Costa Rica: Andaz Peninsula
                                    Papagayo<?php the_title(); ?></p>
                            </div>
                        </a>
                        <?php
                    }
                }
                // Возвращаем оригинальные данные поста. Сбрасываем $post.
                wp_reset_postdata();
                ?>
            </article>
            <article class="middle_five_small_block_item">
                <?php
                // задаем нужные нам критерии выборки данных из БД
                $args = array(
                    'posts_per_page' =>"1",
                    'orderby' => 'date'
                );

                $query = new WP_Query($args);

                // Цикл
                if ($query->have_posts()) {
                while ($query->have_posts()) {
                $query->the_post();
                ?>
                <a class="middle_five_small_block_item_wrap">
                    <div class="middle_five_small_block_img_wrap">
                        <div class="middle_five_small_block_img img-hover" id="conversation"></div>
                    </div>
                    <div class="middle_five_small_block_text_wrap">
                        <p class="text-hover">8 Can`t-Miss European Destinations<?php the_title(); ?></p>
                    </div>
                </a>
                    <?php
                }
                }
                // Возвращаем оригинальные данные поста. Сбрасываем $post.
                wp_reset_postdata();
                ?>
            </article>
            <article class="middle_five_small_block_item">
                <?php
                // задаем нужные нам критерии выборки данных из БД
                $args = array(
                    'posts_per_page' =>"1",
                    'orderby' => 'date'
                );

                $query = new WP_Query($args);

                // Цикл
                if ($query->have_posts()) {
                while ($query->have_posts()) {
                $query->the_post();
                ?>
                <a class="middle_five_small_block_item_wrap">
                    <div class="middle_five_small_block_img_wrap">
                        <div class="middle_five_small_block_img img-hover" id="tropic_architect"></div>
                    </div>
                    <div class="middle_five_small_block_text_wrap">
                        <p class="text-hover">Where Can I Learn Spanish in Madrid?<?php the_title(); ?></p>
                    </div>
                </a>
                    <?php
                }
                }
                // Возвращаем оригинальные данные поста. Сбрасываем $post.
                wp_reset_postdata();
                ?>
            </article>
            <article class="middle_five_small_block_item">
                <?php
                // задаем нужные нам критерии выборки данных из БД
                $args = array(
                    'posts_per_page' =>"1",
                    'orderby' => 'date'
                );

                $query = new WP_Query($args);

                // Цикл
                if ($query->have_posts()) {
                while ($query->have_posts()) {
                $query->the_post();
                ?>
                <a class="middle_five_small_block_item_wrap">
                    <div class="middle_five_small_block_img_wrap">
                        <div class="middle_five_small_block_img img-hover" id="aruba"></div>
                    </div>
                    <div class="middle_five_small_block_text_wrap">
                        <p class="text-hover">10 Landscapes You Won`t Have Even<?php the_title(); ?></p>
                    </div>
                </a>
                    <?php
                }
                }
                // Возвращаем оригинальные данные поста. Сбрасываем $post.
                wp_reset_postdata();
                ?>
            </article>
            <article class="middle_five_small_block_item d-none d-lg-block">
                <?php
                // задаем нужные нам критерии выборки данных из БД
                $args = array(
                    'posts_per_page' =>"1",
                    'orderby' => 'date'
                );

                $query = new WP_Query($args);

                // Цикл
                if ($query->have_posts()) {
                while ($query->have_posts()) {
                $query->the_post();
                ?>
                <a class="middle_five_small_block_item_wrap">
                    <div class="middle_five_small_block_img_wrap">
                        <div class="middle_five_small_block_img img-hover" id="fountain"></div>
                    </div>
                    <div class="middle_five_small_block_text_wrap">
                        <p class="text-hover">Top Most Beautiful Islands In The World<?php the_title(); ?></p>
                    </div>
                </a>
                    <?php
                }
                }
                // Возвращаем оригинальные данные поста. Сбрасываем $post.
                wp_reset_postdata();
                ?>
            </article>
        </div>
    </div>
</div>
<div class="middle_two_big">
    <div class="container">
        <div class="section-header">
            <h2>WORLD WIDE</h2>
            <div class="main-horizontal-divider"></div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-4 middle_two_big_block">
                <div class="middle_two_big__block_wrap">
                    <div class="middle_two_big_item">
                        <?php
                        // задаем нужные нам критерии выборки данных из БД
                        $args = array(
                            'posts_per_page' =>"1",
                            'orderby' => 'date'
                        );

                        $query = new WP_Query($args);

                        // Цикл
                        if ($query->have_posts()) {
                        while ($query->have_posts()) {
                        $query->the_post();
                        ?>
                        <a href="http://" class="middle_two_big_item_link">
                            <div class="middle_two_big_img">
                                <div class="middle_two_big_item_img_wrap">
                                    <div class="middle_two_big_item_img img-hover" id="bay"></div>
                                </div>
                            </div>
                            <div class="middle_two_big_item_text_wrap">
                                <p class="middle_two_big_cat">TRAVEL BLOG</p>
                                <h2 class="middle_two_big_item_header text-hover">
                                    8 INCREDIBLE PICTURES FROM THE TRAVEL PHOTOGRAPHER
                                    <?php the_title(); ?>
                                </h2>
                                <p class="middle_two_big_item_text">More off this less hello salamander lied porpoise
                                    much over tightly circa horse taped so innocuously outside crud mightly
                                    rigorous...</p>
                                <p class="middle_two_big_item_read_more">Read more>></p>
                            </div>
                        </a>
                            <?php
                        }
                        }
                        // Возвращаем оригинальные данные поста. Сбрасываем $post.
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 middle_two_big_block">
                <div class="middle_two_big__block_wrap">
                    <div class="middle_two_big_item">
                        <?php
                        // задаем нужные нам критерии выборки данных из БД
                        $args = array(
                            'posts_per_page' =>"1",
                            'orderby' => 'date'
                        );

                        $query = new WP_Query($args);

                        // Цикл
                        if ($query->have_posts()) {
                        while ($query->have_posts()) {
                        $query->the_post();
                        ?>
                        <a href="http://" class="middle_two_big_item_link">
                            <div class="middle_two_big_img">
                                <div class="middle_two_big_item_img_wrap">
                                    <div class="middle_two_big_item_img img-hover" id="eur_architect"></div>
                                </div>
                            </div>
                            <div class="middle_two_big_item_text_wrap">
                                <p class="middle_two_big_cat">TRAVEL BLOG</p>
                                <h2 class="middle_two_big_item_header text-hover">
                                    8 INCREDIBLE PICTURES FROM THE TRAVEL PHOTOGRAPHER
                                    <?php the_title(); ?>
                                </h2>
                                <p class="middle_two_big_item_text">More off this less hello salamander lied porpoise
                                    much over tightly circa horse taped so innocuously outside crud mightly
                                    rigorous...</p>
                                <p class="middle_two_big_item_read_more">Read more>></p>
                            </div>
                        </a>
                            <?php
                        }
                        }
                        // Возвращаем оригинальные данные поста. Сбрасываем $post.
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-none d-lg-block">
                <div id="bot_ads">
                    <div class="soc-wrap">
                        <div class="middle_two_big_right_ad">
                            <a href="http://" class="middle_two_big_item_link">
                                <div class="middle_two_big_img">
                                    <div class="middle_two_big_item_img_wrap">
                                        <div id="WP_news_ad"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="soc-link">
                            <a class="button facebook mt-4" href="" target="_blank">
                                <div class="icon"></div>
                                <div class="btn-text">
                                    <span class="">LIKE US</span>
                                </div>
                            </a>
                            <a class="button twitter mt-4" href="" target="_blank">
                                <div class="icon"></div>
                                <div class="btn-text">
                                    <span class="">FOLLOW US</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bottom_block">
    <div class="container">
        <div class="section-header"><h2>CULTURE</h2></div>
        <div class="main-horizontal-divider"></div>
        <div class="row">
            <div class="col-12 col-lg-8 bottom_block_left">
                <div class="bottom_block_left_wrap">
                    <article class="bottom_block_left_item">
                        <?php
                        // задаем нужные нам критерии выборки данных из БД
                        $args = array(
                            'posts_per_page' =>"1",
                            'orderby' => 'date'
                        );

                        $query = new WP_Query($args);

                        // Цикл
                        if ($query->have_posts()) {
                        while ($query->have_posts()) {
                        $query->the_post();
                        ?>
                        <a class="bottom_block_left_item_wrap">
                            <div class="bottom_block_left_images_wrap">
                                <div class="bottom_block_left_item_image img-hover" id="bridge"></div>
                            </div>
                            <div class="bottom_block_left_item_text_wrap">
                                <div class="bottom_block_left_item_header">
                                    <h2 class="text-hover">Hard time ahead for Hodgson as England start Euro
                                        2017<?php the_title(); ?></h2>
                                </div>
                                <div class="bottom_block_left_item_meta">
                                    <span class="bottom_block_left_item_meta_cat">WORLD WIDE</span>
                                    <span class="bottom_block_left_item_meta_author"><?php the_author(); ?></span>
                                    <span>-</span>
                                    <span class="bottom_block_left_item_meta_date"><?php the_time('M j, Y'); ?></span>
                                </div>
                            </div>
                        </a>
                            <?php
                        }
                        }
                        // Возвращаем оригинальные данные поста. Сбрасываем $post.
                        wp_reset_postdata();
                        ?>
                    </article>
                    <article class="bottom_block_left_item">
                        <?php
                        // задаем нужные нам критерии выборки данных из БД
                        $args = array(
                            'posts_per_page' =>"1",
                            'orderby' => 'date'
                        );

                        $query = new WP_Query($args);

                        // Цикл
                        if ($query->have_posts()) {
                        while ($query->have_posts()) {
                        $query->the_post();
                        ?>
                        <a class="bottom_block_left_item_wrap">
                            <div class="bottom_block_left_images_wrap">
                                <div class="bottom_block_left_item_image img-hover" id="fahwerk"></div>
                            </div>
                            <div class="bottom_block_left_item_text_wrap">
                                <div class="bottom_block_left_item_header">
                                    <h2 class="text-hover">Hard time ahead for Hodgson as England start Euro
                                        2017<?php the_title(); ?></h2>
                                </div>
                                <div class="bottom_block_left_item_meta">
                                    <span class="bottom_block_left_item_meta_cat">WORLD WIDE</span>
                                    <span class="bottom_block_left_item_meta_author"><?php the_author(); ?></span>
                                    <span>-</span>
                                    <span class="bottom_block_left_item_meta_date"><?php the_time('M j, Y'); ?></span>
                                </div>
                            </div>
                        </a>
                            <?php
                        }
                        }
                        // Возвращаем оригинальные данные поста. Сбрасываем $post.
                        wp_reset_postdata();
                        ?>
                    </article>
                    <article class="bottom_block_left_item">
                        <?php
                        // задаем нужные нам критерии выборки данных из БД
                        $args = array(
                            'posts_per_page' =>"1",
                            'orderby' => 'date'
                        );

                        $query = new WP_Query($args);

                        // Цикл
                        if ($query->have_posts()) {
                        while ($query->have_posts()) {
                        $query->the_post();
                        ?>
                        <a class="bottom_block_left_item_wrap">
                            <div class="bottom_block_left_images_wrap">
                                <div class="bottom_block_left_item_image img-hover" id="lake"></div>
                            </div>
                            <div class="bottom_block_left_item_text_wrap">
                                <div class="bottom_block_left_item_header">
                                    <h2 class="text-hover">Hard time ahead for Hodgson as England start Euro
                                        2017<?php the_title(); ?></h2>
                                </div>
                                <div class="bottom_block_left_item_meta">
                                    <span class="bottom_block_left_item_meta_cat">WORLD WIDE</span>
                                    <span class="bottom_block_left_item_meta_author">M<?php the_author(); ?></span>
                                    <span>-</span>
                                    <span class="bottom_block_left_item_meta_date"><?php the_time('M j, Y'); ?></span>
                                </div>
                            </div>
                        </a>
                            <?php
                        }
                        }
                        // Возвращаем оригинальные данные поста. Сбрасываем $post.
                        wp_reset_postdata();
                        ?>
                    </article>
                    <article class="bottom_block_left_item">
                        <?php
                        // задаем нужные нам критерии выборки данных из БД
                        $args = array(
                            'posts_per_page' =>"1",
                            'orderby' => 'date'
                        );

                        $query = new WP_Query($args);

                        // Цикл
                        if ($query->have_posts()) {
                        while ($query->have_posts()) {
                        $query->the_post();
                        ?>
                        <a class="bottom_block_left_item_wrap">
                            <div class="bottom_block_left_images_wrap">
                                <div class="bottom_block_left_item_image img-hover" id="boys"></div>
                            </div>
                            <div class="bottom_block_left_item_text_wrap">
                                <div class="bottom_block_left_item_header">
                                    <h2 class="text-hover">Hard time ahead for Hodgson as England start Euro
                                        2017<?php the_title(); ?></h2>
                                </div>
                                <div class="bottom_block_left_item_meta">
                                    <span class="bottom_block_left_item_meta_cat">WORLD WIDE</span>
                                    <span class="bottom_block_left_item_meta_author"><?php the_author(); ?></span>
                                    <span>-</span>
                                    <span class="bottom_block_left_item_meta_date"><?php the_time('M j, Y'); ?></span>
                                </div>
                            </div>
                        </a>
                            <?php
                        }
                        }
                        // Возвращаем оригинальные данные поста. Сбрасываем $post.
                        wp_reset_postdata();
                        ?>
                    </article>
                </div>
            </div>
            <div class="col-12 col-lg-4 bottom_block_right">
                <div class="bottom_block_right_wrap">
                    <div class="bottom_block_right_no_img">
                        <article class="bottom_block_right_no_img_item">
                            <?php
                            // задаем нужные нам критерии выборки данных из БД
                            $args = array(
                                'posts_per_page' =>"1",
                                'orderby' => 'date'
                            );

                            $query = new WP_Query($args);

                            // Цикл
                            if ($query->have_posts()) {
                            while ($query->have_posts()) {
                            $query->the_post();
                            ?>
                            <a class="bottom_block_right_no_img_item_wrap">
                                <div class="bottom_block_right_no_img_item_text_wrap">
                                    <div class="bottom_block_right_no_img_item_header">
                                        <h2 class="text-hover">Pedal power sees Amy complete World toughest
                                            challenge<?php the_title(); ?></h2>
                                    </div>
                                    <div class="bottom_block_right_item_meta">
                                        <span class="bottom_block_right_item_cat">TRIP IDEAS</span>
                                        <span class="bottom_block_right_item_author"><?php the_author(); ?></span>
                                        <span>-</span>
                                        <span class="bottom_block_right_item_date"><?php the_time('M j, Y'); ?></span>
                                    </div>
                                </div>
                            </a>
                                <?php
                            }
                            }
                            // Возвращаем оригинальные данные поста. Сбрасываем $post.
                            wp_reset_postdata();
                            ?>
                        </article>
                        <article class="bottom_block_right_no_img_item">
                            <?php
                            // задаем нужные нам критерии выборки данных из БД
                            $args = array(
                                'posts_per_page' =>"1",
                                'orderby' => 'date'
                            );

                            $query = new WP_Query($args);

                            // Цикл
                            if ($query->have_posts()) {
                            while ($query->have_posts()) {
                            $query->the_post();
                            ?>
                            <a class="bottom_block_right_no_img_item_wrap">
                                <div class="bottom_block_right_no_img_item_text_wrap">
                                    <div class="bottom_block_right_no_img_item_header">
                                        <h2 class="text-hover">Pedal power sees Amy complete World toughest
                                            challenge<?php the_title(); ?></h2>
                                    </div>
                                    <div class="bottom_block_right_item_meta">
                                        <span class="bottom_block_right_item_cat">CULTURE</span>
                                        <span class="bottom_block_right_item_author"><?php the_author(); ?></span>
                                        <span>-</span>
                                        <span class="bottom_block_right_item_date"><?php the_time('M j, Y'); ?></span>
                                    </div>
                                </div>
                            </a>
                                <?php
                            }
                            }
                            // Возвращаем оригинальные данные поста. Сбрасываем $post.
                            wp_reset_postdata();
                            ?>
                        </article>
                        <article class="bottom_block_right_no_img_item">
                            <?php
                            // задаем нужные нам критерии выборки данных из БД
                            $args = array(
                                'posts_per_page' =>"1",
                                'orderby' => 'date'
                            );

                            $query = new WP_Query($args);

                            // Цикл
                            if ($query->have_posts()) {
                            while ($query->have_posts()) {
                            $query->the_post();
                            ?>
                            <a class="bottom_block_right_no_img_item_wrap">
                                <div class="bottom_block_right_no_img_item_text_wrap">
                                    <div class="bottom_block_right_no_img_item_header">
                                        <h2 class="text-hover">Pedal power sees Amy complete World toughest
                                            challenge<?php the_title(); ?></h2>
                                    </div>
                                    <div class="bottom_block_right_item_meta">
                                        <span class="bottom_block_right_item_cat">CULTURE</span>
                                        <span class="bottom_block_right_item_author"><?php the_author(); ?></span>
                                        <span>-</span>
                                        <span class="bottom_block_right_item_date"><?php the_time('M j, Y'); ?></span>
                                    </div>
                                </div>
                            </a>
                                <?php
                            }
                            }
                            // Возвращаем оригинальные данные поста. Сбрасываем $post.
                            wp_reset_postdata();
                            ?>
                        </article>
                    </div>
                    <div class="bottom_block_right_img">
                        <article class="bottom_block_right_item">
                            <?php
                            // задаем нужные нам критерии выборки данных из БД
                            $args = array(
                                'posts_per_page' =>"1",
                                'orderby' => 'date'
                            );

                            $query = new WP_Query($args);

                            // Цикл
                            if ($query->have_posts()) {
                            while ($query->have_posts()) {
                            $query->the_post();
                            ?>
                            <a class="bottom_block_right_item_wrap">
                                <div class="bottom_block_right_item_images_wrap">
                                    <div class="bottom_block_right_item_image woman_in_hat img-hover"></div>
                                </div>
                                <div class="bottom_block_right_item_text_wrap">
                                    <div class="bottom_block_right_item_header">
                                        <h2 class="text-hover">Pedal power sees Amy complete World toughest
                                            challenge<?php the_title(); ?></h2>
                                    </div>
                                    <div class="bottom_block_right_item_meta">
                                        <span class="bottom_block_right_item_cat">TRAVEL BLOG</span>
                                        <span class="bottom_block_right_item_author"><?php the_author(); ?></span>
                                        <span>-</span>
                                        <span class="bottom_block_right_item_date"><?php the_time('M j, Y'); ?></span>
                                    </div>
                                </div>
                            </a>
                                <?php
                            }
                            }
                            // Возвращаем оригинальные данные поста. Сбрасываем $post.
                            wp_reset_postdata();
                            ?>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
