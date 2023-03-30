<?php
/**
 * Child-Theme functions and definitions
 */
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/style.css' );
    wp_enqueue_style( 'response-style', get_stylesheet_directory_uri() . '/css/responsive.css' );
}
?>