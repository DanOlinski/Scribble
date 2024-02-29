<?php
function child_theme_enqueue_styles() {
    // wp_enqueue_style( 'parent-style', get_template_directory_uri() . 'style.css' );
    // wp_enqueue_style( 'parent-style', get_template_directory_uri() . 'build/index.css' );
    wp_enqueue_style( 'main-style', get_theme_file_uri('build/index.css') );

};
add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles' );