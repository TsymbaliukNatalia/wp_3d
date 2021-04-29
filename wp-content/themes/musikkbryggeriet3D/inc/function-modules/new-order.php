<?php

// require_once ABSPATH . WPINC .'/registration.php';

function create_order_table() {
	global $wpdb;

	require_once ABSPATH . 'wp-admin/includes/upgrade.php';

	$table_name = $wpdb->get_blog_prefix() . 'order';
	$charset_collate = "DEFAULT CHARACTER SET {$wpdb->charset} COLLATE {$wpdb->collate}";

	$sql = "CREATE TABLE {$table_name} (
	id  int(11) unsigned NOT NULL auto_increment,
    first_name varchar(255) NOT NULL default '',
    last_name varchar(255) NOT NULL default '',
	email varchar(255) NOT NULL default '',
    phone_number varchar(255) NOT NULL default '',
    city varchar(255) NOT NULL default '',
	to_pay int(20) NOT NULL default 0,
	created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	revised int(1) NOT NULL default 0,
	PRIMARY KEY  (id)
	)
	{$charset_collate};";

	dbDelta($sql);
}

function create_order_product_table() {
	global $wpdb;

	require_once ABSPATH . 'wp-admin/includes/upgrade.php';

    $table_name = $wpdb->get_blog_prefix() . 'order_product';
    $order_table = $wpdb->get_blog_prefix() . 'order';
    $post_table = $wpdb->get_blog_prefix() . 'posts';
	$charset_collate = "DEFAULT CHARACTER SET {$wpdb->charset} COLLATE {$wpdb->collate}";

	$sql = "CREATE TABLE {$table_name} (
	id_order  int(11) unsigned NOT NULL,
    id_product  bigint(20) unsigned NOT NULL,
	quantity int(11) NOT NULL default 0,
	cost int(11) NOT NULL default 0,
	PRIMARY KEY  (id_order,id_product),
    FOREIGN KEY (id_order) REFERENCES $order_table(id),
    FOREIGN KEY (id_product) REFERENCES $post_table(ID)
	)
	{$charset_collate};";

	dbDelta($sql);
}

create_order_table();
create_order_product_table();

if (wp_doing_ajax()) {
    add_action('wp_ajax_nopriv_ajax_create_order', 'ajax_create_order');
    add_action('wp_ajax_ajax_create_order', 'ajax_create_order');
};

function ajax_create_order()
{
	global $wpdb;
	$data = $_POST['data'];
	$customer = $_POST['data'][0];
	$orders = $_POST['data'][1];
	$pay_sum = 0;

	foreach ($orders as $order) {
		$pay_sum += $order[2];
	}
	

	if(isset($customer) && isset($pay_sum) && isset($orders)){
		$res1 = $wpdb->insert( 'wp_order', [
			'first_name' => $customer[0],
			'last_name' => $customer[1],
			'email' => $customer[2],
			'phone_number' => $customer[3],
			'city' => $customer[4],
			'to_pay' => $pay_sum 
			] );
		$last_insert_id = $wpdb->insert_id;
		$res2 = true;
		foreach ($orders as $order) {
			$res3 = $wpdb->insert( 'wp_order_product', [
				'id_order' => $last_insert_id,
				'id_product' => $order[0],
				'quantity' => $order[1],
				'cost' => $order[2]
			]);
			if($res3 != true){
				$res2 = false;
			}
		}
	};
	if($res1 && $res2){
		echo json_encode($res1);
		wp_die(); 
	} else {
		echo json_encode(false);
		wp_die();
	}
}
    