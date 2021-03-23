<?php

add_action('wp_enqueue_scripts', 'my_wp_head_css' );
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

function my_wp_head_css() {

	wp_enqueue_style( 'my_head_style', get_stylesheet_directory_uri() .'/assets/css/style.css', array(), null );
}

function my_scripts_method(){

    wp_enqueue_script( 'header_script', get_template_directory_uri() . '/assets/js/header.js', array(), false, 'in_footer');
    wp_enqueue_script( 'basket_script', get_template_directory_uri() . '/assets/js/basket.js', array(), false, 'in_footer');
    wp_enqueue_script( 'scripts_script', get_template_directory_uri() . '/assets/js/scripts.js', array(), false, 'in_footer');
    wp_enqueue_script( 'event_script', get_template_directory_uri() . '/assets/js/event.js', array(), false, 'in_footer');
    
}

add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type( 'events', [
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
		'supports'            => [ 'title', 'editor', 'custom-fields'],
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}