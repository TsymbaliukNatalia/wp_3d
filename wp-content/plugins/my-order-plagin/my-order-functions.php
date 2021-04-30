<?php
function order_load_admin_scripts(){ 
    wp_enqueue_media();
    wp_register_script('order-admin-script', plugins_url('my-order-plagin/js/order-script.js'), array('jquery'), '1.0.0', true);
    wp_enqueue_script('order-admin-script'); 
}
add_action( 'admin_enqueue_scripts', 'order_load_admin_scripts' );

if (wp_doing_ajax()) {
    add_action('wp_ajax_ajax_admin_delete_order', 'ajax_admin_delete_order');
    add_action('wp_ajax_ajax_admin_bulk_delete_order', 'ajax_admin_bulk_delete_order');
};

function ajax_admin_delete_order()
{
    global $wpdb;
    $delete_id = $_POST['data'];
    $res = $wpdb->delete( 'wp_order', [ 'id' => $delete_id ] );
    echo json_encode($res);
	wp_die();

}
function ajax_admin_bulk_delete_order()
{
    global $wpdb;
    $delete_id = $_POST['data'];
    foreach($delete_id as $id){
        $wpdb->delete( 'wp_order', [ 'id' => $id ] ); 
    }
    // $res = $wpdb->delete( 'wp_order', [ 'id' => $delete_id ] );
    // echo json_encode($_POST['data']);
	wp_die();

}