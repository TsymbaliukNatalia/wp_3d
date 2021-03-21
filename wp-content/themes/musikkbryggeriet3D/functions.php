<?php

add_action('wp_enqueue_scripts', 'my_wp_head_css' );
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

function my_wp_head_css() {

	wp_enqueue_style( 'my_head_style', get_stylesheet_directory_uri() .'/assets/css/style.css', array(), null );
}

function my_scripts_method(){

    wp_enqueue_script( 'header_script', get_template_directory_uri() . '/assets/js/header.js', array(), false, 'in_footer');
    wp_enqueue_script( 'basket_script', get_template_directory_uri() . '/assets/js/basket.js', array(), false, 'in_footer');
    wp_enqueue_script( 'scripts_script', get_template_directory_uri() . '/assets/js/scripts.js', array(), false, 'in_footer');
    wp_enqueue_script( 'event_script', get_template_directory_uri() . '/assets/js/event.js', array(), false, 'in_footer');
    
}