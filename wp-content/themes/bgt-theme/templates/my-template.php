<?php
/*
Template Name: Шаблон поста
Template Post Type: post
*/

get_header();
?>
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
                        <!--<img class="wp-ad" src="< ?php bloginfo('template_url'); ?>/assets/images/Layer141.png" alt="WPTheme">-->
                    </div>
                    <?php the_content(); ?>
                    <!--<p class="article-item-text">
                        Although life behind Hollywood’s closed
                        doors might seem too good to be true,
                        even the richest and most famous figures
                        struggle with infertility. Recently, more
                        and more celebrities have been speaking
                        out about their struggles to get pregnant.
                        From Tyra Banks and Chrissy Teigen having
                        an emotional tête-à-tête about pregnancy
                        struggles, to Kim Catrall redefining the term
                        “parent”, the issue in is widespread. Here
                        are 16 celebrities who were really honest
                        about their struggles to conceive.
                    </p>
                    <div class="article-img-wrap">
                        <img class="article-img-item" src="assets/images/usafootball.png" alt="football">
                    </div>
                    <p class="article-item-text">
                        Although life behind Hollywood’s closed
                        doors might seem too good to be true,
                        even the richest and most famous figures
                        struggle with infertility. Recently, more
                        and more celebrities have been speaking
                        out about their struggles to get pregnant.
                        From Tyra Banks and Chrissy Teigen having
                        an emotional tête-à-tête about pregnancy
                        struggles, to Kim Catrall redefining the term
                        “parent”, the issue in is widespread. Here
                        are 16 celebrities who were really honest
                        about their struggles to conceive.
                    </p>-->
                </div>
            </article>
                <?php
        // задаем нужные нам критерии выборки данных из БД
        // узнаем категорию поста
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
        // Цикл
        while ($query->have_posts()) {
            $query->the_post();
//            $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
            ?>

            <?php
        }
                    // Возвращаем оригинальные данные поста. Сбрасываем $post.
                    wp_reset_postdata();
                    ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <img class="mobile-store-ad" src="<?php bloginfo('template_url'); ?>/assets/images/Layer2.png" alt="mobile-ad">
            <img class="x-ad" src="<?php bloginfo('template_url'); ?>/assets/images/x-ad.png" alt="x-ad">
            <div class="read-next">
                <div class="read-next-wrap">
                    <article class="read-next-1">
                        <a class="read-next-item-wrap">
                            <div class="read-next-item-img-wrap">
                                <div class="read-next-item-img" id="next-1"></div>
                            </div>
                            <div class="read-next-item-text-wrap">
                                <h2 class="read-next-item-header">
                                    <!--The Only Tattoo Inspiration You’ll Ever Need--></h2>
                            </div>
                        </a>
                    </article>
                    <article class="read-next-2">
                        <a class="read-next-item-wrap">
                            <div class="read-next-item-img-wrap">
                                <div class="read-next-item-img" id="next-2"></div>
                            </div>
                            <div class="read-next-item-text-wrap">
                                <h2 class="read-next-item-header">
                                    <!--The Only Tattoo Inspiration You’ll Ever Need--></h2>
                            </div>
                        </a>
                    </article>
                    <article class="read-next-3">
                        <a class="read-next-item-wrap">
                            <div class="read-next-item-img-wrap">
                                <div class="read-next-item-img" id="next-3"></div>
                            </div>
                            <div class="read-next-item-text-wrap">
                                <h2 class="read-next-item-header">
                                    <!--The Only Tattoo Inspiration You’ll Ever Need--></h2>
                            </div>
                        </a>
                    </article>
                </div>
            </div>
            <a class="next-page-button">
                <div class="next-page-button-text">NEXT PAGE</div>
            </a>
            <div class="bottom-left-ad">
                <img class="bottom-left-ad-img" src="< ?php bloginfo('template_url'); ?>/assets/images/Layer%2091.png" alt="">
            </div>
        </div>
        <div class="col-lg-4 d-none d-lg-block">
            <div class="top-right-ad">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/Layer64.png" class="top-right-ad-img" id="toyota" alt="">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/Layer50.png" class="top-right-ad-img" id="magazine-theme" alt="">
            </div>
            <div class="middle-right-articles">
                <div class="middle-right-articles-wrap">
                    <article class="middle-right-item1">
                        <a class="middle-right-item-wrap">
                            <div class="middle-right-item-img-wrap">
                                <div class="middle-right-item-img" id="woman-in-hat"></div>
                            </div>
                            <div class="middle-right-item-text-wrap">
                                <h2 class="middle-right-item-header"><!--10 Most Visited Countries In The World!--></h2>
                                <p class="middle-right-item-text"><!--All right. Well, take care yourself. I guess
                                    that’s what you’re best, presence old master? A tremor in the Force.
                                    The last time felt it was in the...--></p>
                            </div>
                        </a>
                    </article>
                    <article class="middle-right-item2">
                        <a class="middle-right-item-wrap">
                            <div class="middle-right-item-img-wrap">
                                <div class="middle-right-item-img"></div>
                            </div>
                            <div class="middle-right-item-text-wrap">
                                <h2 class="middle-right-item-header"><!--10 Most Visited Countries In The World!--></h2>
                                <p class="middle-right-item-text"><!--All right. Well, take care yourself. I guess
                                    that’s what you’re best, presence old master? A tremor in the Force.
                                    The last time felt it was in the...--></p>
                            </div>
                        </a>
                    </article>
                </div>
            </div>
            <div class="bottom-right-ad"></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
