<?php
function my_theme_enqueue_styles() {

    $parent_style = 'theme';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/assets/css/style.min.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

function my_theme_enqueue_scripts() {
	wp_register_script( 'main-script', get_stylesheet_directory_uri() . '/assets/js/script.min.js', array(), '1.0.0' );
	wp_enqueue_script( 'main-script' );
}


add_action( 'init', 'my_theme_enqueue_scripts' );
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
