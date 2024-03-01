<?php


    function child_theme_styles() {
        wp_enqueue_style('child_theme', get_template_directory_uri() . 'style.css' );
        
    }
 
    add_action( 'wp_enqueue_scripts', 'child_theme_styles' );
