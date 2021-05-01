<?php
add_action("admin_menu", "show_order_submenu");
function show_order_submenu()
{
    add_submenu_page(
        null,
        'Show order',
        'Show order',
        'administrator',
        'show-order',
        'render_show_order_page'
    );
}



function render_show_order_page()
{
    $id = $_GET["id"];
    if (isset($id)) {
        global $wpdb;
        $sql_order = "SELECT * FROM {$wpdb->prefix}order where id={$id}";
        $order = $wpdb->get_row($sql_order, ARRAY_A);
        $sql_order_product = "SELECT * FROM {$wpdb->prefix}order_product where id_order={$id}";
        $products = $wpdb->get_results($sql_order_product, ARRAY_A);
        $wpdb->update('wp_order', array('revised'=>1), array('id'=>$id));
    }
    global $wpdb;
    $sql = "SELECT * FROM {$wpdb->prefix}order";

?>
    <h1>Order №<?php echo $id; ?></h1>
    <div style="width:50%;">
        <p style="font-size:16px;"><strong>First name :</strong> <?php echo $order['first_name']; ?></p>
        <p style="font-size:16px;"><strong>Last name :</strong> <?php echo $order['last_name']; ?></p>
        <p style="font-size:16px;"><strong>Email :</strong> <?php echo $order['email']; ?></p>
        <p style="font-size:16px;"><strong>Phone number :</strong> <?php echo $order['phone_number']; ?></p>
        <p style="font-size:16px;"><strong>City :</strong> <?php echo $order['city']; ?></p>
        <p style="font-size:16px;"><strong>Created date :</strong> <?php echo $order['created_date']; ?></p>
        <table class="wp-list-table widefat fixed striped table-view-list">
            <thead>
                <tr>
                    <td class="manage-column column-id column-primary sortable asc">Product id</td>
                    <td class="manage-column column-id column-primary sortable asc">Product image</td>
                    <td class="manage-column column-id column-primary sortable asc">Product name</td>
                    <td class="manage-column column-id column-primary sortable asc">Quantity</td>
                    <td class="manage-column column-id column-primary sortable asc">Cost</td>
                </tr>
            </thead>
            <?php foreach ($products as $product) { 
                $product_img = get_field('main_photo_product', $product['id_product']);
                ?>
                <tr>
                    <td><?php echo $product['id_order']; ?></td>
                    <td><img src="<?php echo $product_img['url'] ?>" alt="<?php the_field('name_of_product', $product['id_product']); ?>" width="100%"/></td>
                    <td><?php the_field('name_of_product', $product['id_product'] )?></td>
                    <td><?php echo $product['quantity']; ?></td>
                    <td><?php echo $product['cost']; ?>kr</td>
                </tr>
            <?php } ?>
        </table>
        <p style="font-size:16px;text-align:right;"><strong>Sum :</strong> <?php echo $order['to_pay']; ?>kr</p>

    </div>
<?php } ?>