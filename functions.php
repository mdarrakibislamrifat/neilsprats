<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );



// Home css adding

function child_theme_enqueue_styles() {
    // Always include child theme style.css
    wp_enqueue_style('child-style', get_stylesheet_uri());

    // Luxury Page
    
        wp_enqueue_style(
            'home-css',
            get_stylesheet_directory_uri() . '/assets/css/home.css',
            array('child-style'),
            '1.0'
        );
}
add_action('wp_enqueue_scripts', 'child_theme_enqueue_styles');




//  Login page
function login_theme_enqueue_styles() {
    // Always include child theme style.css
    wp_enqueue_style('child-style', get_stylesheet_uri());

    // Luxury Page
   
        wp_enqueue_style(
            'login',
            get_stylesheet_directory_uri() . '/assets/css/login.css',
            array('child-style'),
            '1.0'
        );

}
add_action('wp_enqueue_scripts', 'login_theme_enqueue_styles');



// signup page
//  Login page
function signup_theme_enqueue_styles() {
    // Always include child theme style.css
    wp_enqueue_style('child-style', get_stylesheet_uri());
   
        wp_enqueue_style(
            'signup',
            get_stylesheet_directory_uri() . '/assets/css/signup.css',
            array('child-style'),
            '1.0'
        );
    
}
add_action('wp_enqueue_scripts', 'signup_theme_enqueue_styles');
// ====about us style=====
function aboutus_theme_enqueue_styles() {
    wp_enqueue_style('child-style', get_stylesheet_uri());

    
        wp_enqueue_style(
            'aboutStyle',
            get_stylesheet_directory_uri() . '/assets/css/aboutStyle.css',
            array('child-style'),
            '1.0'
        );
    
}
add_action('wp_enqueue_scripts', 'aboutus_theme_enqueue_styles');
