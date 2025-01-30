<?php

    function child_theme_styles() {
        //connect main stylesheet for the wp app to process
        wp_enqueue_style('child_theme', get_template_directory_uri() . 'style.css' );
        //connect custom css for the wp app to process. the style-index.css is a product of compiling the styles/style.scss file (that is where you should write your custom scss code). To run the compiler, check the README.md file.
        wp_enqueue_style( 'main_style', get_theme_file_uri('build/style-index.css') );
    };
    
    add_action( 'wp_enqueue_scripts', 'child_theme_styles' );
