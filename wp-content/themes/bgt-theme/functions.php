<?php
// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

function theme_name_scripts() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
    wp_enqueue_script( 'jquery', get_template_directory_uri() . 'http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/libraries/bootstrap-4.3.1-dist/css/bootstrap.css');//bootstrap
    wp_enqueue_style( 'main', get_stylesheet_uri(), array('bootstrap') );//main css
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/libraries/bootstrap-4.3.1-dist/js/bootstrap.min.js', true); //bootstrap.min.js
}

function true_id($args){
    $args['post_page_id'] = 'ID';
    return $args;
}
function true_custom($column, $id){
    if($column === 'post_page_id'){
        echo $id;
    }
}

add_filter('manage_pages_columns', 'true_id', 5);
add_action('manage_pages_custom_column', 'true_custom', 5, 2);
add_filter('manage_posts_columns', 'true_id', 5);
add_action('manage_posts_custom_column', 'true_custom', 5, 2);

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
    // file does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // file exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

add_action( 'after_setup_theme', function () {
    add_theme_support('custom-logo', array(
        'flex-width'  => true,
        'width'       => 260,
        'flex-height' => true,
        'height'      => 70
    ));

    add_theme_support('post-thumbnails', array('post', 'banner')) ;

    //add_theme_support('title-tag') ;
    //add_theme_support('menus') ;

    add_theme_support('post-formats', array('post', 'banner'));

    register_nav_menus( [
        'header-menu'     => 'top-menu',
        'footer-menu'     => 'bottom-menu',
    ] );
} );

add_filter( 'excerpt_length', function(){
    return 20;
} );

add_filter('excerpt_more', function() {
    return '...';
});

add_filter( 'language_attributes', 'filter_function_name_5686', 10, 2 );
function filter_function_name_5686( $output, $doctype ){
    // filter...

    return $output;
}

remove_filter( 'the_excerpt', 'wpautop' );

remove_filter( 'the_content', 'wpautop' );

return apply_filters( 'language_attributes', $output, $doctype );
