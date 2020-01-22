<?php
/**
 * JupiterWP functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage JupiterWP
 * @since 1.0
 */
function theme_scripts(){
    wp_enqueue_style( 'main-style', get_stylesheet_uri(), array(), "1.0.0");
}
add_action( 'wp_enqueue_scripts', 'jupiter_scripts');
