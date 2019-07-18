<?php
/*
Template Name: Шаблон поста
Template Post Type: post
*/

get_header();
?>
<main id="main_content">
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-8">
            <?php if ( have_posts() ) : get_post();
                while (have_posts()) : the_post(); ?>
            <article class="article-item">
                <div class="article-item-wrap">
                    <h1 class=""><?php the_title(); ?></h1>
                    <div class="article-item-tag">
                        <span class="article-item-meta-author"><?php the_author(); ?></span>
                        <span>-</span>
                        <span class="article-item-meta-date"><?php the_time('M j, Y'); ?></span>
                    </div>
                    <div class="wp-ad-wrap">
                        <img class="wp-ad" src="<?php bloginfo('template_url'); ?>/assets/images/Layer141.png" alt="WPTheme">
                    </div>
                    <?php the_content(); ?>
                </div>
            </article>
                <?php
        $categories = get_the_category();
        $category_id = $categories[0]->cat_ID;
        $args = array(
            'posts_per_page' => 3,
            'post__not_in' => array($post->ID),
            'orderby' => 'date',
            'order' => 'DESC',
            'post_type' => array('post'),
            'post_status' => array('publish'),
            'category__in' => $category_id
        );
        $query = new WP_Query($args);

        while ($query->have_posts()) {
            $query->the_post();
        }

                 endwhile;
            endif;
            ?>
            <img class="mobile-store-ad" src="<?php bloginfo('template_url'); ?>/assets/images/Layer2.png" alt="mobile-ad">
            <div class="x-ad-wrap">
                <img class="x-ad" src="<?php bloginfo('template_url'); ?>/assets/images/x-ad.png" alt="x-ad">
            </div>
            <div class="read-next">
                <div class="read-next-wrap">
                    <?php
                    $query2 = new WP_Query($args);
                    // Цикл
                    if ($query2->have_posts()) {
                        while ($query2->have_posts()) {
                            $query2->the_post();
                            ?>
                            <article class="read-next-1">
                                <a class="read-next-item-wrap" href="<?php the_permalink(); ?>">
                                    <div class="read-next-item-img-wrap">
                                        <?php
                                        $imageArray = get_post_thumbnail_id()
                                            ? wp_get_attachment_image_src(get_post_thumbnail_id(), '')
                                            : [];
                                        $imageSrc = array_key_exists(0, $imageArray)
                                            ? $imageArray[0]
                                            : '';
                                        ?>
                                        <div class="read-next-item-img img-hover" id="next-1" style="background-image: url('<?php echo $imageSrc ?>');"></div>
                                    </div>
                                    <div class="read-next-item-text-wrap">
                                        <h2 class="read-next-item-header text-hover"><?php the_title(); ?></h2>
                                    </div>
                                </a>
                            </article>
                            <?php
                        }
                        wp_reset_postdata();
                    }
                    ?>
                </div>
            </div>
            <!--<div class="buttons-wrap">
                <a class="prev-page-button">
                    <div class="prev-page-button-text">PREV PAGE</div>
                </a>
                <a class="next-page-button">
                    <div class="next-page-button-text">NEXT PAGE</div>
                </a>
            </div>-->
            <div class="bottom-left-ad">
                <img class="bottom-left-ad-img" src="<?php bloginfo('template_url'); ?>/assets/images/Layer%2091.png" alt="">
            </div>
        </div>
        <div class="col-12 col-lg-4 bottom_block_right">
            <div class="bottom_block_right_wrap">
                <div class="bottom_block_right_ad">
                    <div class="bottom_block_right_item">
                        <a class="bottom_block_right_item_wrap" href="<?php the_permalink(); ?>">
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
                                <a class="bottom_block_right_item_wrap" href="<?php the_permalink(); ?>">
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
                            <div class="bottom_block_right_item_images_wrap" id="pizza-ad-wrap" href="<?php the_permalink(); ?>">
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
                                <a class="bottom_block_right_no_img_item_wrap" href="<?php the_permalink(); ?>">
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

<?php get_footer(); ?>
