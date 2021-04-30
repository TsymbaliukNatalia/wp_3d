<?php
function sunset_load_admin_scripts(){ 
    wp_enqueue_media();
    wp_register_script('sunset-admin-script', plugins_url('my-order-plagin/js/order-script.js'), array('jquery'), '1.0.0', true);
    wp_enqueue_script('sunset-admin-script'); 
}
add_action( 'admin_enqueue_scripts', 'sunset_load_admin_scripts' );

if (wp_doing_ajax()) {
    // add_action('wp_ajax_nopriv_ajax_admin_delete_order', 'ajax__admin_delete_order');
    add_action('wp_ajax_ajax_admin_delete_order', 'ajax_admin_delete_order');
};

function ajax_admin_delete_order()
{
    global $wpdb;
    $delete_id = $_POST['data'];
    $res = $wpdb->delete( 'wp_order', [ 'id' => $delete_id ] );
    echo json_encode($res);
	wp_die();
	// $data = $_POST['data'];
	// $customer = $_POST['data'][0];
	// $orders = $_POST['data'][1];
	// $pay_sum = 0;

	// foreach ($orders as $order) {
	// 	$pay_sum += $order[2];
	// }
	

	// if(isset($customer) && isset($pay_sum) && isset($orders)){
	// 	$res1 = $wpdb->insert( 'wp_order', [
	// 		'first_name' => $customer[0],
	// 		'last_name' => $customer[1],
	// 		'email' => $customer[2],
	// 		'phone_number' => $customer[3],
	// 		'city' => $customer[4],
	// 		'to_pay' => $pay_sum 
	// 		] );
	// 	$last_insert_id = $wpdb->insert_id;
	// 	$res2 = true;
	// 	foreach ($orders as $order) {
	// 		$res3 = $wpdb->insert( 'wp_order_product', [
	// 			'id_order' => $last_insert_id,
	// 			'id_product' => $order[0],
	// 			'quantity' => $order[1],
	// 			'cost' => $order[2]
	// 		]);
	// 		if($res3 != true){
	// 			$res2 = false;
	// 		}
	// 	}
	// };
	// if($res1 && $res2){
	// 	echo json_encode($res1);
	// 	wp_die(); 
	// } else {
	// 	echo json_encode(false);
	// 	wp_die();
	// }
}