<?php get_header(); ?>
<main id="main_content">
<div class="bottom_block">
    <div class="container">
        <div class="section-header"><h2>CULTURE</h2></div>
        <div class="main-horizontal-divider"></div>
        <div class="row">
            <div class="col-12 col-lg-8 bottom_block_left">
                <div class="bottom_block_left_wrap">
                    <?php
                    $args5 = array(
                        'tag' => 'culture',
                        'numberposts' => 4,
                        'posts_per_page' => 4,
                        'orderby' => 'date',
                    );

                    $query5 = new WP_Query($args5);

                    if ($query5->have_posts()) {
                        while ($query5->have_posts()) {
                            $query5->the_post();
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
                        }
                    }
                    ?>
                    <div class="bottom_block_left_item ad">
                        <div class="bottom_block_left_item_wrap">
                            <div class="bottom_block_left_images_wrap" id="wp-ad-wrap">
                                <div class="bottom_block_left_item_image wp-theme-ad"></div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $args5 = array(
                        'tag' => 'culture',
                        'numberposts' => 4,
                        'posts_per_page' => 4,
                        'orderby' => 'date',
                    );

                    $query5 = new WP_Query($args5);
                    $ids = [];

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
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-12 col-lg-4 bottom_block_right">
                <div class="bottom_block_right_wrap">
                    <div class="bottom_block_right_ad">
                        <div class="bottom_block_right_item">
                            <a class="bottom_block_right_item_wrap">
                                <div class="bottom_block_right_item_images_wrap" id="wp-ad-wrap2">
                                    <div class="bottom_block_right_item_image" id="wp-theme-ad2"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="bottom_block_right_img">
                        <?php
                        $ids2 = [];

                        $args7 = array(
                            'tag' => 'culture',
                            'numberposts' => 1,
                            'posts_per_page' => 1,
                            'orderby' => 'date',
                            'post__not_in' => $ids
                        );

                        $query7 = new WP_Query($args7);


                        if ($query7->have_posts()) {
                            while ($query7->have_posts()) {
                                $query7->the_post();
                                $ids2[] = get_the_ID();
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
                                    <div class="bottom_block_right_item_image img-hover" style="background-image: url('<?php echo $imageSrc ?>');"></div>
                                </div>
                                <div class="bottom_block_right_item_text_wrap">
                                    <div class="bottom_block_right_item_header">
                                        <h2 class="text-hover"><?php  the_title(); ?></h2>
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
                            }
                            wp_reset_postdata();
                        }
                        ?>
                    </div>
                    <div class="bottom_block_right_ad">
                        <div class="bottom_block_right_item">
                            <a class="bottom_block_right_item_wrap">
                                <div class="bottom_block_right_item_images_wrap" id="pizza-ad-wrap">
                                    <div class="bottom_block_right_item_image" id="pizza-ad"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="bottom_block_right_no_img">
                        <?php

                        $ids3 = [];
                        $ids3 = array_merge($ids, $ids2);
                        $args6 = array(
                            'tag' => 'culture',
                            'numberposts' => 3,
                            'posts_per_page' => 3,
                            'orderby' => 'date',
                            'post__not_in' => $ids3
                        );

                        $query6 = new WP_Query($args6);
                        // Цикл
                        if ($query6->have_posts()) {
                        while ($query6->have_posts()) {
                        $query6->the_post();
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
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
