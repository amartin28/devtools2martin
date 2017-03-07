<?php

function my_theme_equeue_styles(){
    
    $parent_style = 'twentyfifteen-style'; // This is twentyfifteen-style for twenty fifteen theme
   
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'child-style',
                    get_stylesheet_directory_uri() . '/style.css',
                    array( $parent_style ),
                    wp_get_theme()->get('Version')
                    );
}
add action( 'wp_enqueue_scripts', 'my_theme_equeue_styles' );
?>