<?php
if ( ! function_exists( 'custom_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various
	 * WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme
	 * hook, which runs before the init hook. The init hook is too late
	 * for some features, such as indicating support post thumbnails.
	 */
	function custom_theme_setup() {

    /**
	 * Make theme available for translation.
	 * Translations can be placed in the /languages/ directory.
	 */
		load_theme_textdomain( 'custom_theme', get_template_directory() . '/languages' );

		/**
		 * Add default posts and comments RSS feed links to <head>.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Enable support for post thumbnails and featured images.
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Add support for two custom navigation menus.
		 */
		register_nav_menus( array(
			'primary'   => __( 'Primary Menu', 'custom_theme' ),
			'secondary' => __( 'Secondary Menu', 'custom_theme' ),
		) );

		/**
		 * Enable support for the following post formats:
		 * aside, gallery, quote, image, and video
		 */
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
	}
endif; // custom_theme_setup
add_action( 'after_setup_theme', 'custom_theme_setup' );

/*--------------------------------------------
Enqueue Styles
---------------------------------------------*/

if ( ! function_exists( 'custom_theme_styles' ) ) :

function custom_theme_styles() {
    wp_enqueue_style('custom_theme', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
	/*this is referencing the CSS file inside the build folder. The index.css file is generated automatically whenever the file base.scss is updated, however for the compiler to work you need to have it running in a terminal by running; `npm run start` from within the customtheme folder  */
    wp_enqueue_style('custom_theme_blocks', get_template_directory_uri() . '/build/index.css');
    
}
endif;
add_action( 'wp_enqueue_scripts', 'custom_theme_styles' );