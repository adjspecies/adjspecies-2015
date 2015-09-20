<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style',
        get_stylesheet_directory_uri() . '/parent-style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'parent-style' ) );
    wp_enqueue_style( 'bootstrap',
        get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.min.css',
        array( 'child-style' ) );
    wp_enqueue_style( 'bootstrap-theme',
        get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap-theme.min.css',
        array( 'bootstrap' ) );

}
?>
