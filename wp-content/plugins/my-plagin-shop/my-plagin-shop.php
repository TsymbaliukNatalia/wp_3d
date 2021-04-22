<?php
/* 
Plugin Name: My Plagin Shop
*/

include_once ('inc/mpsh-functions.php');

// Хук события 'wp_footer', добавляем функцию 'mfp_Add_Text' к нему
add_action("wp_footer", "mfp_Add_Text");

// Определяем 'mfp_Add_Text'
 function mfp_Add_Text()
 {
echo "<p style='color: black; padding-left: 15%;'>После загрузки футера сайта добавляется мой текст!</p>"; 

 }