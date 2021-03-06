<?php

if (!class_exists('WP_List_Table')) {
    require_once(ABSPATH . 'wp-admin/includes/class-wp-list-table.php');
}

class Orders_List extends WP_List_Table
{

    public $id_revised;

    /** Class constructor */
    public function __construct()
    {

        parent::__construct([
            'singular' => __('Order', 'sp'), //singular name of the listed records
            'plural'   => __('Orders', 'sp'), //plural name of the listed records
            'ajax'     => false //does this table support ajax?
        ]);
    }


    /**
     * Retrieve Orders data from the database
     *
     * @param int $per_page
     * @param int $page_number
     *
     * @return mixed
     */
    public static function get_Orders($per_page = 10, $page_number = 1)
    {

        global $wpdb;

        $sql = "SELECT * FROM {$wpdb->prefix}order";

        if (!empty($_REQUEST['orderby'])) {
            $sql .= ' ORDER BY ' . esc_sql($_REQUEST['orderby']);
            $sql .= !empty($_REQUEST['order']) ? ' ' . esc_sql($_REQUEST['order']) : ' ASC';
        } else {
            $sql .= ' ORDER BY id DESC';
        }

        $sql .= " LIMIT $per_page";
        $sql .= ' OFFSET ' . ($page_number - 1) * $per_page;


        $result = $wpdb->get_results($sql, 'ARRAY_A');

        return $result;
    }


    /**
     * Delete a order record.
     *
     * @param int $id order ID
     */
    public static function delete_order($id)
    {
        global $wpdb;

        $wpdb->delete(
            "{$wpdb->prefix}order",
            ['id' => $id],
            ['%d']
        );
    }


    /**
     * Returns the count of records in the database.
     *
     * @return null|string
     */
    public static function record_count()
    {
        global $wpdb;

        $sql = "SELECT COUNT(*) FROM {$wpdb->prefix}order";

        return $wpdb->get_var($sql);
    }


    /** Text displayed when no order data is available */
    public function no_items()
    {
        _e('No orders avaliable.', 'sp');
    }


    /**
     * Render a column when no column specific method exist.
     *
     * @param array $item
     * @param string $column_name
     *
     * @return mixed
     */
    public function column_default($item, $column_name)
    {
        switch ($column_name) {
            case 'id':
            case 'first_name':
            case 'last_name':
            case 'email':
            case 'phone_number':
            case 'city':
            case 'to_pay':
            case 'created_date':
                return $item[$column_name];
            default:
                return print_r($item, true); //Show the whole array for troubleshooting purposes
        }
    }

    /**
     * Render the bulk edit checkbox
     *
     * @param array $item
     *
     * @return string
     */
    function column_cb($item)
    {
        return sprintf(
            '<input type="checkbox" name="bulk-delete[]" value="%s" />',
            $item['ID']
        );
    }


    /**
     * Method for name column
     *
     * @param array $item an array of DB data
     *
     * @return string
     */
    function column_name($item)
    {

        $delete_nonce = wp_create_nonce('sp_delete_order');

        $title = '<strong>' . $item['first_name'] . '</strong>';

        $actions = [
            'delete' => sprintf('<a href="?page=%s&action=%s&order=%s&_wpnonce=%s">Delete</a>', esc_attr($_REQUEST['page']), 'delete', absint($item['ID']), $delete_nonce)
        ];

        return $title . $this->row_actions($actions);
    }


    /**
     *  Associative array of columns
     *
     * @return array
     */
    function get_columns()
    {
        $columns = [
            'cb'      => '<input type="checkbox" />',
            'id'    => __('ID', 'sp'),
            'first_name'    => __('First name', 'sp'),
            'last_name'    => __('Last name', 'sp'),
            'email'    => __('Email', 'sp'),
            'phone_number' => __('Phone number', 'sp'),
            'city'    => __('City', 'sp'),
            'to_pay'    => __('Sum (kr)', 'sp'),
            'created_date'    => __('Created date', 'sp'),
        ];
        return $columns;
    }


    /**
     * Columns to make sortable.
     *
     * @return array
     */
    public function get_sortable_columns()
    {
        $sortable_columns = array(
            'id' => array('id', true),
            'first_name' => array('first_name', true),
            'last_name' => array('last_name', true),
            'email' => array('email', false),
            'phone_number' => array('phone_number', true),
            'city' => array('city', true),
            'to_pay' => array('to_pay', false),
            'created_date' => array('created_date', false),
        );

        return $sortable_columns;
    }

    public function column_id($item)
    {
        $action = array(
            'delete' => "<a href='#' class='delete_order' data-id=" . $item['id'] . ">Delete</a>"
        );
        if ($item['revised'] == 0) {
            $action['show'] = "<a  href='admin.php?page=show-order&&id=" . $item['id'] . "' class='show_order' data-revised='0' data-id=" . $item['id'] . ">Show new order</a>";
        } else {
            $action['show'] = "<a href='admin.php?page=show-order&&id=" . $item['id'] . "' class='show_order' data-id=" . $item['id'] . ">Show order</a>";
        }
        return sprintf('%1$s %2$s', $item['id'], $this->row_actions($action));
    }



    /**
     * Returns an associative array containing the bulk action
     *
     * @return array
     */
    public function get_bulk_actions()
    {
        $actions = [
            'bulk-delete' => 'Delete'
        ];

        return $actions;
    }


    /**
     * Handles data query and filter, sorting, and pagination.
     */
    public function prepare_items()
    {

        $this->_column_headers = $this->get_column_info();

        /** Process bulk action */
        $this->process_bulk_action();

        $per_page     = $this->get_items_per_page('Orders_per_page', 10);
        $current_page = $this->get_pagenum();
        $total_items  = self::record_count();

        $this->set_pagination_args([
            'total_items' => $total_items, //WE have to calculate the total number of items
            'per_page'    => $per_page //WE have to determine how many items to show on a page
        ]);

        $this->items = self::get_Orders($per_page, $current_page);
    }

    public function process_bulk_action()
    {

        //Detect when a bulk action is being triggered...
        if ('delete' === $this->current_action()) {

            // In our file that handles the request, verify the nonce.
            $nonce = esc_attr($_REQUEST['_wpnonce']);

            if (!wp_verify_nonce($nonce, 'sp_delete_order')) {
                die('Go get a life script kiddies');
            } else {
                self::delete_order(absint($_GET['order']));

                // esc_url_raw() is used to prevent converting ampersand in url to "#038;"
                // add_query_arg() return the current url
                wp_redirect(esc_url_raw(add_query_arg()));
                exit;
            }
        }

        // var $cond_classes = array();


        // If the delete bulk action is triggered
        if ((isset($_POST['action']) && $_POST['action'] == 'bulk-delete')
            || (isset($_POST['action2']) && $_POST['action2'] == 'bulk-delete')
        ) {

            $delete_ids = esc_sql($_POST['bulk-delete']);

            // loop over the array of record IDs and delete them
            foreach ($delete_ids as $id) {
                self::delete_order($id);
            }

            // esc_url_raw() is used to prevent converting ampersand in url to "#038;"
            // add_query_arg() return the current url
            wp_redirect(esc_url_raw(add_query_arg()));
            exit;
        }
    }
}


class SP_Plugin
{

    // class instance
    static $instance;

    // order WP_List_Table object
    public $orders_obj;

    // class constructor
    public function __construct()
    {
        add_filter('set-screen-option', [__CLASS__, 'set_screen'], 5, 3);
        add_action('admin_menu', [$this, 'plugin_menu']);
    }


    public static function set_screen($status, $option, $value)
    {
        return $value;
    }

    public function plugin_menu()
    {

        $hook = add_menu_page(
            'Orders',
            'Orders',
            'manage_options',
            'orders',
            [$this, 'plugin_settings_page']
        );

        add_action("load-$hook", [$this, 'screen_option']);
    }


    /**
     * Plugin settings page
     */
    public function plugin_settings_page()
    {
?>
        <div class="wrap">
            <h2>List of orders</h2>

            <div id="poststuff">
                <div id="post-body" class="metabox-holder columns-2">
                    <div id="post-body-content">
                        <div class="meta-box-sortables ui-sortable">
                            <form method="post">
                                <?php
                                $this->orders_obj->prepare_items();
                                $this->orders_obj->display(); ?>
                            </form>
                        </div>
                    </div>
                </div>
                <br class="clear">
            </div>
            <div class="b-popup" id="popup-delete-order">
                <div class="b-popup-content">
                    <div>Are you sure you want to delete the order?</div>
                    <div class="popup-button-line">
                        <button id="delete-order-yes">Yes</button>
                        <button id="delete-order-no">No</button>
                    </div>
                </div>
            </div>
        </div>
<?php
    }

    /**
     * Screen options
     */
    public function screen_option()
    {

        $option = 'per_page';
        $args   = [
            'label'   => 'Orders',
            'default' => 10,
            'option'  => 'Orders_per_page'
        ];

        add_screen_option($option, $args);

        $this->orders_obj = new Orders_List();
    }


    /** Singleton instance */
    public static function get_instance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}


add_action('plugins_loaded', function () {
    SP_Plugin::get_instance();
});
