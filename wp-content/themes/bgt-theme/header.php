<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <?php wp_head();
    wp_site_icon();
    ?>

    <title><?php bloginfo( 'name') ;
        echo " | "; bloginfo( 'description') ;?></title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bgt-nav p-0">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <span class="sr-only"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </span>
                </button>
                <div class="navbar-brand mr-0">
                    <?php the_custom_logo( $blog_id ); ?>
                </div>
            </div>
            <div class="navbar-collapse mx-xl-auto collapse" id="navbarSupportedContent">
                <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'header-menu',
                        'depth'             => 2,
                        'container'         => false,
                        'container_class'   => 'navbar-collapse mx-xl-auto collapse',
                        'container_id'      => 'navbarSupportedContent',
                        'menu_class'        => 'navbar-nav menu-block d-flex',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    ) );
                ?>
                <ul class="navbar-nav header-soc-block">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img src="<?php bloginfo ('template_url'); ?>/assets/images/social-facebook-circular-button.png"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img src="<?php bloginfo ('template_url'); ?>/assets/images/social-twitter-circular-button.png"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main id="main_content">