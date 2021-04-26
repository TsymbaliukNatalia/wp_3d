<?php

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
    // add_action('wp_ajax_nopriv_shop_ajax_search', 'shop_ajax_search');
    // add_action('wp_ajax_shop_ajax_search', 'shop_ajax_search');
    // add_action('wp_ajax_nopriv_event_ajax_search', 'event_ajax_search');
    // add_action('wp_ajax_event_ajax_search', 'event_ajax_search');
};

function test()
{
    $args = array(
        'post_type'      => 'products',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'meta_query' => array(
            'relation' => 'OR',
            array(
                'key' => 'name_of_product',
                'value' => $_POST['term'],
                'compare' => 'LIKE'
            ),
            array(
                'key' => 'brief_description_of_the_product',
                'value' => $_POST['term'],
                'compare' => 'LIKE'
            )
        )
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) { ?>
        <div class="shop-products ">
            <?php while ($query->have_posts()) {
                $query->the_post();
                $product_img = get_field('main_photo_product'); ?>
                <figure class="shop-product"> <a class="product-link" href="<?php echo get_permalink(); ?>"></a>
                    <div class="product-img-wrap"><img src="<?php echo $product_img['url'] ?>" alt="<?php the_field('name_of_product'); ?>" /></div><a class="button transparent-button product-button" href="#">Donate</a>
                    <figcaption>
                        <div class="bg-orange">
                            <h4 class="product-name"><?php the_field('name_of_product'); ?></h4><span class="price"><?php the_field('product_price'); ?>kr </span>
                        </div>
                        <p class="product-card-description"><?php the_field('brief_description_of_the_product'); ?></p>
                    </figcaption>
                </figure>
            <?php } ?>
        </div>
    <?php } else { ?>
        <br>
        <h3 style="color: red;">Ingenting funnet! Prøv en annen forespørsel!</h3>
    <?php }
    exit;
}
    