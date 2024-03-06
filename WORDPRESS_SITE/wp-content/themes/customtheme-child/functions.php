<?php


    function child_theme_styles() {
        wp_enqueue_style('child_theme', get_template_directory_uri() . 'style.css' );
        wp_enqueue_style( 'main_style', get_theme_file_uri('build/style-index.css') );
    }
 
    add_action( 'wp_enqueue_scripts', 'child_theme_styles' );
