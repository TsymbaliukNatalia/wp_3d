<?php

require_once ABSPATH . WPINC .'/registration.php';

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
    $user_id = $_POST['data'];
    echo json_encode($user_id);

    wp_die();  
}
    