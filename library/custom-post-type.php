<?php

// Flush rewrite rules for custom post types
add_action( 'after_switch_theme', 'halcyon_flush_rewrite_rules' );

// Flush your rewrite rules
function halcyon_flush_rewrite_rules() {
	flush_rewrite_rules();
}

// let's create the function for the custom type
function custom_post() {
	// creating (registering) the custom type
	register_post_type( 'image_links', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Image Links', 'halcyon' ), /* This is the Title of the Group */
			'singular_name' => __( 'Image Link', 'halcyon' ), /* This is the individual type */
			'all_items' => __( 'All Image Links', 'halcyon' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'halcyon' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Image Link', 'halcyon' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'halcyon' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Image Links', 'halcyon' ), /* Edit Display Title */
			'new_item' => __( 'New Image Link', 'halcyon' ), /* New Display Title */
			'view_item' => __( 'View Image Link', 'halcyon' ), /* View Display Title */
			'search_items' => __( 'Search Image Link', 'halcyon' ), /* Search Image Link Title */
			'not_found' =>  __( 'Nothing found in the Database.', 'halcyon' ), /* This displays if there are no entries yet */
			'not_found_in_trash' => __( 'Nothing found in Trash', 'halcyon' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Create image based links that will show on the homepage grid', 'halcyon' ), /* Image Link Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'image_links', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'image_links', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'thumbnail', 'custom-fields', 'revisions', 'sticky')
		) /* end of options */
	); /* end of register post type */

	/* this adds your post categories to your custom post type */
	register_taxonomy_for_object_type( 'category', 'image_links' );
	/* this adds your post tags to your custom post type */
	register_taxonomy_for_object_type( 'post_tag', 'image_links' );

}

	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post');

	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/


?>
