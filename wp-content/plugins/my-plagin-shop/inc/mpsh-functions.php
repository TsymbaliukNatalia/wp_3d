<?php

add_action( 'admin_menu', function ()
{
 add_menu_page(
 'Orders', // Название страниц (Title)
 'Orders', // Текст ссылки в меню
 'manage_options', // Требование к возможности видеть ссылку
 'my-plagin-shop/inc/mpsh-orders-page.php', // 'slug' - файл отобразится по нажатию на ссылку
 null,
 '',
 27);
});

function wptuts_scripts_with_jquery()  
{  
    // Register the script like this for a plugin:  
    wp_register_script( 'order-script', plugins_url( '/js/order-script.js', __FILE__ ), array( 'jquery' ) );  
    // or  
    // Register the script like this for a theme:  
    wp_register_script( 'order-script', get_template_directory_uri() . '/js/order-script.js', array( 'jquery' ) );  
    // For either a plugin or a theme, you can then enqueue the script:  
    wp_enqueue_script( 'order-script' );  
}  
add_action( 'wp_enqueue_scripts', 'wptuts_scripts_with_jquery' );



