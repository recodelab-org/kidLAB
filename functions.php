<?php

/*
The first below listed way of enqueueing a parant theme's szylesheet works with some parent themes. It is more generic than the second one below. In most cases, though, you may need to choose the second way and adjust the parent theme name handle accordingly.


function my_theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( 'parenthandle' ), 
        wp_get_theme()->get('Version') // this only works if you have Version in the style header
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
*/


add_action( 'wp_enqueue_scripts', 'twentytwenty_child_enqueue_styles' );
function twentytwenty_child_enqueue_styles() {
    $parent_style = 'twentytwenty-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'twentytwenty-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        filemtime(get_stylesheet_directory() . '/style.css')
    );
}

?>

