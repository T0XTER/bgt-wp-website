<?php get_header(); ?>
<div id="banner">
    <div class="container">
        <div class="banner_items_wrap">
            <div class="banner_item">
                <?php
                // задаем нужные нам критерии выборки данных из БД
                $args = array(
                        'posts_per_page' => '1',
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
                                <?php
                                $imageArray = get_post_thumbnail_id()
                                    ? wp_get_attachment_image_src(get_post_thumbnail_id(), '1171x433')
                                    : [];
                                $imageSrc = array_key_exists(0, $imageArray)
                                    ? $imageArray[0]
                                    : '';
                                ?>
                                <div class="banner_item_image" style="background-image: url('<?php echo $imageSrc ?>');"></div>
                            </div>
                            <div class="banner_items_text_wrap">
                                <h2 class="banner-item-header">
                                    <span class="text-hover text-uppercase"><?php the_title(); ?></span>
                                </h2>
                                <p class="banner-item-tag text-info">
                                    <span><img src="<?php bloginfo('template_url'); ?>/assets/images/group.png" alt=""></span>
                                    <span>
                                        <?php
                                        $category = get_the_category();
                                        echo $category[0]->cat_name;
                                        ?>
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
                    }//конец while
                    wp_reset_postdata();
                }//конец if
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
            <?php
            // задаем нужные нам критерии выборки данных из БД
            $args2 = array(
                'posts_per_page' => '2',
                'orderby' => 'date',
                'post__not_in' => ['50']
            );

            $query2 = new WP_Query($args2);

            // Цикл
            if ($query2->have_posts()) {
                while ($query2->have_posts()) {
                    $query2->the_post();
            ?>
            <div class="col-12 col-lg-6">
                <article class="top_two_big_item">
                    <a class="top_two_big_item_wrap">
                        <div class="top_two_big_images_wrap">
                            <?php
                            $imageArray = get_post_thumbnail_id()
                                ? wp_get_attachment_image_src(get_post_thumbnail_id(), '589x483')
                                : [];
                            $imageSrc = array_key_exists(0, $imageArray)
                                ? $imageArray[0]
                                : '';
                            ?>
                            <div class="top_two_big_item_img img-hover" id="lama" style="background-image: url('<?php echo $imageSrc ?>');"></div>
                            <p class="top_two_big_item_tag">
                                <span>
                                    <?php
                                    $category = get_the_category();
                                    echo $category[0]->cat_name;
                                    ?>
                                </span>
                            </p>
                        </div>
                        <div class="top_two_big_text_wrap">
                            <h2 class="top_two_big_item_header text-hover">
                                <?php the_title(); ?>
                            </h2>
                            <div class="top_two_big_item_meta">
                                <span class="top_two_big_item_author"><?php the_author(); ?></span>
                                <span>-</span>
                                <span class="top_two_big_item_date"><?php the_time('M j, Y'); ?></span>
                            </div>
                        </div>
                    </a>
                </article>
            </div>
            <?php
            }//конец while
                wp_reset_postdata();
            }//конец if
            ?>
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
            <?php
            // задаем нужные нам критерии выборки данных из БД
            $args3 = array(
                    'category_name' => 'без-рубрики',
                'tag' => 'trip-advices',
                'numberposts' => 5,
                'posts_per_page' => 5,
                'orderby' => 'date',
            );

            $query3 = new WP_Query($args3);

            // Цикл
            if ($query3->have_posts()) {
                while ($query3->have_posts()) {
                $query3->the_post();
            ?>
            <article class="middle_five_small_block_item">
                <a class="middle_five_small_block_item_wrap">
                    <div class="middle_five_small_block_img_wrap">
                        <?php
                        $imageArray = get_post_thumbnail_id()
                            ? wp_get_attachment_image_src(get_post_thumbnail_id(), '325x181')
                            : [];
                        $imageSrc = array_key_exists(0, $imageArray)
                            ? $imageArray[0]
                            : '';
                        ?>
                        <div class="middle_five_small_block_img img-hover" style="background-image: url('<?php echo $imageSrc ?>');"></div>
                    </div>
                    <div class="middle_five_small_block_text_wrap">
                        <p class="text-hover"><?php the_title(); ?></p>
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
<div class="middle_two_big">
    <div class="container">
        <div class="section-header">
            <h2>WORLD WIDE</h2>
            <div class="main-horizontal-divider"></div>
        </div>
        <div class="row">
            <?php
            // задаем нужные нам критерии выборки данных из БД
            $args4 = array(
                'category_name' => 'travel-blog',
                'tag' => 'travel-blog',
                'numberposts' => 2,
                'posts_per_page' => 2,
                'orderby' => 'date',
            );

            $query4 = new WP_Query($args4);

            // Цикл
            if ($query4->have_posts()) {
                while ($query4->have_posts()) {
                    $query4->the_post();
            ?>
            <div class="col-12 col-lg-4 middle_two_big_block">
                <div class="middle_two_big__block_wrap">
                    <div class="middle_two_big_item">
                        <a href="http://" class="middle_two_big_item_link">
                            <div class="middle_two_big_img">
                                <div class="middle_two_big_item_img_wrap">
                                    <?php
                                    $imageArray = get_post_thumbnail_id()
                                        ? wp_get_attachment_image_src(get_post_thumbnail_id(), '325x181')
                                        : [];
                                    $imageSrc = array_key_exists(0, $imageArray)
                                        ? $imageArray[0]
                                        : '';
                                    ?>
                                    <div class="middle_two_big_item_img img-hover" id="bay" style="background-image: url('<?php echo $imageSrc ?>');"></div>
                                </div>
                            </div>
                            <div class="middle_two_big_item_text_wrap">
                                <p class="middle_two_big_cat">TRAVEL BLOG</p>
                                <h2 class="middle_two_big_item_header text-hover">
                                    <?php the_title(); ?>
                                </h2>
                                <p class="middle_two_big_item_text text-hover"><?php the_excerpt(); ?></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
                <?php
                }//конец while
                wp_reset_postdata();
            }//конец if
            ?>
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
                    <?php
                    // задаем нужные нам критерии выборки данных из БД
                    $args5 = array(
                        'tag' => 'culture',
                        'numberposts' => 4,
                        'posts_per_page' => 4,
                        'orderby' => 'date',
                    );

                    $query5 = new WP_Query($args5);
                    $ids = [];
                    // Цикл
                    if ($query5->have_posts()) {
                        while ($query5->have_posts()) {
                            $query5->the_post();
                            $ids[] = get_the_ID();
                            ?>
                    <article class="bottom_block_left_item">
                        <a class="bottom_block_left_item_wrap">
                            <div class="bottom_block_left_images_wrap">
                                <?php
                                $imageArray = get_post_thumbnail_id()
                                    ? wp_get_attachment_image_src(get_post_thumbnail_id(), '250x185')
                                    : [];
                                $imageSrc = array_key_exists(0, $imageArray)
                                    ? $imageArray[0]
                                    : '';
                                ?>
                                <div class="bottom_block_left_item_image img-hover" style="background-image: url('<?php echo $imageSrc ?>');"></div>
                            </div>
                            <div class="bottom_block_left_item_text_wrap">
                                <div class="bottom_block_left_item_header">
                                    <h2 class="text-hover"><?php the_title(); ?></h2>
                                </div>
                                <div class="bottom_block_left_item_meta">
                                    <span class="bottom_block_left_item_meta_cat">WORLD WIDE</span>
                                    <span class="bottom_block_left_item_meta_author"><?php the_author(); ?></span>
                                    <span>-</span>
                                    <span class="bottom_block_left_item_meta_date"><?php the_time('M j, Y'); ?></span>
                                </div>
                            </div>
                        </a>
                    </article>
                    <?php
                        }//конец while
                    }//конец if
                    ?>
                </div>
            </div>
            <div class="col-12 col-lg-4 bottom_block_right">
                <div class="bottom_block_right_wrap">
                    <div class="bottom_block_right_no_img">
                        <?php
                        // задаем нужные нам критерии выборки данных из БД
                        $args6 = array(
                                'tag' => 'culture',
                            'numberposts' => 3,
                            'posts_per_page' => 3,
                            'orderby' => 'date',
                            'post__not_in' => $ids
                        );

                        $query6 = new WP_Query($args6);
                        $ids2 = [];
                        // Цикл
                        if ($query6->have_posts()) {
                            while ($query6->have_posts()) {
                                $query6->the_post();
                                $ids2[] = get_the_ID();
                                ?>
                                <article class="bottom_block_right_no_img_item">
                                    <a class="bottom_block_right_no_img_item_wrap">
                                        <div class="bottom_block_right_no_img_item_text_wrap">
                                            <div class="bottom_block_right_no_img_item_header">
                                                <h2 class="text-hover"><?php the_title(); ?></h2>
                                            </div>
                                            <div class="bottom_block_right_item_meta">
                                                <span class="bottom_block_right_item_cat">TRIP IDEAS</span>
                                                <span class="bottom_block_right_item_author"><?php the_author(); ?></span>
                                                <span>-</span>
                                                <span class="bottom_block_right_item_date"><?php the_time('M j, Y'); ?></span>
                                            </div>
                                        </div>
                                    </a>
                                </article>
                                <?php
                            }//конец while
                        }//конец if
                        ?>
                    </div>
                    <div class="bottom_block_right_img">
                        <?php
                        $ids3 = [];
                        $ids3 = array_merge($ids, $ids2);
                        // задаем нужные нам критерии выборки данных из БД
                        $args7 = array(
                                'tag' => 'culture',
                            'numberposts' => 1,
                            'posts_per_page' => 1,
                            'orderby' => 'date',
                            'post__not_in' => $ids3
                        );

                        $query7 = new WP_Query($args7);

                        // Цикл
                        if ($query7->have_posts()) {
                            while ($query7->have_posts()) {
                                $query7->the_post();
                                ?>
                                <article class="bottom_block_right_item">
                                    <a class="bottom_block_right_item_wrap">
                                        <div class="bottom_block_right_item_images_wrap">
                                            <?php
                                            $imageArray = get_post_thumbnail_id()
                                                ? wp_get_attachment_image_src(get_post_thumbnail_id(), '370x339')
                                                : [];
                                            $imageSrc = array_key_exists(0, $imageArray)
                                                ? $imageArray[0]
                                                : '';
                                            ?>
                                            <div class="bottom_block_right_item_image img-hover" style="background-image: url('<?php echo $imageSrc ?>'); height: 100%;"></div>
                                        </div>
                                        <div class="bottom_block_right_item_text_wrap">
                                            <div class="bottom_block_right_item_header">
                                                <h2 class="text-hover"><?php the_title(); ?></h2>
                                            </div>
                                            <div class="bottom_block_right_item_meta">
                                                <span class="bottom_block_right_item_cat">TRAVEL BLOG</span>
                                                <span class="bottom_block_right_item_author"><?php the_author(); ?></span>
                                                <span>-</span>
                                                <span class="bottom_block_right_item_date"><?php the_time('M j, Y'); ?></span>
                                            </div>
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
        </div>
    </div>
</div>

<?php get_footer(); ?>
