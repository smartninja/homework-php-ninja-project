<?php

add_theme_support( 'post-thumbnails' );

// Skripte in CSS
function my_theme_styles() {
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_styles' );

function my_theme_js() {
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_js' );

// Navigacija
add_theme_support( 'menus' );

function register_theme_menus() {
    register_nav_menus(
        array(
            'main-menu'     => __( 'Glavni Menu' )
        )
    );
}
add_action( 'init', 'register_theme_menus' );

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');