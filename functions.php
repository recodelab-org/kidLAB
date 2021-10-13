<?php


function my_child_styles() {
    // loading parent style
    wp_register_style(
      'parent-style',
      get_template_directory_uri() . '/style.css'
    );

    wp_enqueue_style( 'parent-style' );
    // loading child style
    wp_register_style(
      'child-style',
      get_stylesheet_directory_uri() . '/style.css'
    );
    wp_enqueue_style( 'child-style');
 }
add_action( 'wp_enqueue_scripts', 'my_child_styles' );


function my_localfonts() {
    wp_enqueue_style( 'inter-font', get_stylesheet_directory_uri() . '/fonts/inter/font-style.css' );
    wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/fonts/fontawesome/css/all.css' );
}
add_action( 'wp_enqueue_scripts', 'my_localfonts' );
