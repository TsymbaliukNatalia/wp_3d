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
 27
 );

} );
