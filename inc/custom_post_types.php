<?php
/**
 * Custom post types for this theme.
 *
 * @package WP_Ogitive
 */

// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                => _x( 'News', 'Post Type General Name', 'wpog' ),
		'singular_name'       => _x( 'News', 'Post Type Singular Name', 'wpog' ),
		'menu_name'           => __( 'News', 'wpog' ),
		'parent_item_colon'   => __( 'News parent:', 'wpog' ),
		'all_items'           => __( 'All Items', 'wpog' ),
		'view_item'           => __( 'View Item', 'wpog' ),
		'add_new_item'        => __( 'Add New Item', 'wpog' ),
		'add_new'             => __( 'Add Item', 'wpog' ),
		'edit_item'           => __( 'Edit Item', 'wpog' ),
		'update_item'         => __( 'Update Item', 'wpog' ),
		'search_items'        => __( 'Search Item', 'wpog' ),
		'not_found'           => __( 'Item is not found', 'wpog' ),
		'not_found_in_trash'  => __( 'Item is not found in trash', 'wpog' ),
	);
	$args = array(
		'label'               => __( 'news', 'wpog' ),
		'description'         => __( 'Description', 'wpog' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', ),
		// 'taxonomies'          => array( 'custom_taxnomy' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 10,
		'menu_icon'           => 'dashicons-megaphone',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'news', $args );

}

// Hook into the 'init' action
add_action( 'init', 'custom_post_type', 0 );