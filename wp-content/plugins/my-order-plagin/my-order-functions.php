<?php
function sunset_load_admin_scripts(){ 
    wp_enqueue_media();
    wp_register_script('sunset-admin-script', plugins_url('my-order-plagin/js/order-script.js'), array('jquery'), '1.0.0', true);
    wp_enqueue_script('sunset-admin-script'); 
}
add_action( 'admin_enqueue_scripts', 'sunset_load_admin_scripts' );