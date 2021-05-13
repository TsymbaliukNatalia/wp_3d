<?php

include_once('inc/function-modules/register.php');
include_once('inc/function-modules/search-functions.php');
include_once('inc/function-modules/new-order.php');

add_action('wp_enqueue_scripts', 'my_wp_head_css');
add_action('wp_enqueue_scripts', 'my_scripts_method');
add_action('init', 'register_post_types');
add_action('after_setup_theme', 'theme_register_nav_menu');


function my_wp_head_css()
{
	wp_enqueue_style('my_head_style', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), null);
	wp_enqueue_style('my_style_pagination', get_stylesheet_directory_uri() . '/assets/css/pagination.css', array(), null);
}

function my_scripts_method()
{
	wp_enqueue_script('header_script', get_template_directory_uri() . '/assets/js/header.js', array(), false, 'in_footer');
	wp_enqueue_script('forms_script', get_template_directory_uri() . '/assets/js/forms.js', array('jquery'), false, 'in_footer');
	wp_localize_script('forms_script', '_SERVER_DATA', array('ajaxurl' => admin_url('admin-ajax.php')));
	if (is_page(11)) {
		wp_enqueue_script('basket_script', get_template_directory_uri() . '/assets/js/basket.js', array(), false, 'in_footer');
		wp_enqueue_script('scripts_script', get_template_directory_uri() . '/assets/js/scripts.js', array(), false, 'in_footer');
		wp_enqueue_script('event_script', get_template_directory_uri() . '/assets/js/event.js', array(), false, 'in_footer');
	}
	if (is_page(81)) {
		wp_enqueue_script('slider_about_script', get_template_directory_uri() . '/assets/js/slider_about_us.js', array(), false, 'in_footer');
	}
	if (is_page(84) || (is_single() && get_post_type() == 'events')) {
		wp_enqueue_script('event_reg_popup', get_template_directory_uri() . '/assets/js/event_reg_popup.js', array(), false, 'in_footer');
		wp_enqueue_script('event_event_script', get_template_directory_uri() . '/assets/js/event.js', array(), false, 'in_footer');
	}
	if (is_page(86) || (is_single() && get_post_type() == 'products')) {
		wp_enqueue_script('shop_basket_script', get_template_directory_uri() . '/assets/js/basket.js', array(), false, 'in_footer');
		wp_enqueue_script('shop_script', get_template_directory_uri() . '/assets/js/shop.js', array(), false, 'in_footer');
	}
}

function register_post_types()
{

	register_post_type('events', [
		'label'  => null,
		'labels' => [
			'name'               => 'Events', // основное название для типа записи
			'singular_name'      => 'event', // название для одной записи этого типа
			'add_new'            => 'Add new event', // для добавления новой записи
			'add_new_item'       => 'Add new event', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit event', // для редактирования типа записи
			'new_item'           => 'New event', // текст новой записи
			'view_item'          => 'View event', // для просмотра записи этого типа.
			'search_items'       => 'Search event', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'parent_item_colon'  => '',
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true,
		'show_in_rest'        => null,
		'rest_base'           => null,
		'menu_position'       => null,
		'menu_icon'           => null,
		'hierarchical'        => false,
		'supports'            => ['title', 'editor', 'custom-fields'],
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	]);

	register_post_type('products', [
		'label'  => null,
		'labels' => [
			'name'               => 'Products', // основное название для типа записи
			'singular_name'      => 'product', // название для одной записи этого типа
			'add_new'            => 'Add new product', // для добавления новой записи
			'add_new_item'       => 'Add new product', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit product', // для редактирования типа записи
			'new_item'           => 'New product', // текст новой записи
			'view_item'          => 'View product', // для просмотра записи этого типа.
			'search_items'       => 'Search product', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'parent_item_colon'  => '',
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true,
		'show_in_rest'        => null,
		'rest_base'           => null,
		'menu_position'       => null,
		'menu_icon'           => null,
		'hierarchical'        => false,
		'supports'            => ['title', 'editor', 'custom-fields'],
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => array('slug' => 'shop'),
		'query_var'           => true,
	]);
	register_post_type('photo_gallery', [
		'label'  => null,
		'labels' => [
			'name'               => 'Photo gallery', // основное название для типа записи
			'singular_name'      => 'photo in photo gallery', // название для одной записи этого типа
			'add_new'            => 'Add new photo', // для добавления новой записи
			'add_new_item'       => 'Add new photo', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit photo', // для редактирования типа записи
			'new_item'           => 'New photo', // текст новой записи
			'view_item'          => 'View photo', // для просмотра записи этого типа.
			'search_items'       => 'Search photo', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'parent_item_colon'  => '',
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true,
		'show_in_rest'        => null,
		'rest_base'           => null,
		'menu_position'       => null,
		'menu_icon'           => null,
		'hierarchical'        => false,
		'supports'            => ['title', 'editor', 'custom-fields'],
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	]);
	register_post_type('video', [
		'label'  => null,
		'labels' => [
			'name'               => 'Video', // основное название для типа записи
			'singular_name'      => 'video', // название для одной записи этого типа
			'add_new'            => 'Add new video', // для добавления новой записи
			'add_new_item'       => 'Add new video', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit video', // для редактирования типа записи
			'new_item'           => 'New video', // текст новой записи
			'view_item'          => 'View video', // для просмотра записи этого типа.
			'search_items'       => 'Search video', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'parent_item_colon'  => '',
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true,
		'show_in_rest'        => null,
		'rest_base'           => null,
		'menu_position'       => null,
		'menu_icon'           => null,
		'hierarchical'        => false,
		'supports'            => ['title', 'editor', 'custom-fields'],
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	]);
}


function theme_register_nav_menu()
{
	register_nav_menu('primary', 'Primary Menu');
}

add_action('admin_enqueue_scripts', function(){
	wp_enqueue_style('admin-styles', get_stylesheet_directory_uri() . '/assets/css/admin.css');
});

function wphelp_custom_pre_get_posts($query)
{
	if ($query->is_main_query() && !$query->is_feed() && !is_admin() && is_category()) {
		$query->set('paged', str_replace('/', '', get_query_var('page')));
	}
}
