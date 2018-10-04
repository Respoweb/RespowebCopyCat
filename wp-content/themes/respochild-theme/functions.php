<?php
/**
 * Respochild-theme Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package respochild-theme
 */

add_action( 'wp_enqueue_scripts', 'respowebwptheme_parent_theme_enqueue_styles' );

/**
 * Enqueue scripts and styles.
 */
function respowebwptheme_parent_theme_enqueue_styles() {
	wp_enqueue_style( 'respowebwptheme-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'respochild-theme-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( 'respowebwptheme-style' )
	);

}
