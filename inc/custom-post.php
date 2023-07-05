<?php

// Custom post type for offer
if (!function_exists('dmgroup_offer_post_type')) :
	function dmgroup_offer_post_type() {
		register_post_type(
			'offer',
			array(
				'labels' => array(
					'name' => 'Oferta',
					'singular_name' => 'Oferta',
				),
				'public'        => true,
				'show_ui'       => true,
				'show_in_menu'  => true,
				'supports'      => array('title', 'editor', 'custom-fields', 'revisions'),
				'hierarchical' => false,
				'has_archive' => true,
				'menu_icon' => 'dashicons-star-filled',
				'show_in_rest' => true
			)
		);

		register_taxonomy(
			'offer_category', 
			'offer', 
			array(
				'hierarchical' => true,
				'label' => 'Kategorie ofert',
				'query_var' => true,
				'show_ui'       => true,
				'show_admin_column' => true,
				'show_in_rest' => true
			)
		);
	}
	add_action('init', 'dmgroup_offer_post_type');
endif;


// Fixing pagination of offer
// function offer_per_page( $query ) {
// 	if ( $query->is_archive('offer') && !is_admin() ) {
// 		set_query_var('posts_per_page', 1);
// 	}
// }
// add_action( 'pre_get_posts', 'offer_per_page' );


// Custom post type for employees
if (!function_exists('dmgroup_employees_post_type')) :
	function dmgroup_employees_post_type() {
		register_post_type(
			'employees',
			array(
				'labels' => array(
					'name' => 'Pracownicy',
					'singular_name' => 'Pracownik',
				),
				'public'        => true,
				'show_ui'       => true,
				'show_in_menu'  => true,
				'supports'      => array('title', 'custom-fields', 'thumbnail', 'revisions'),
				'hierarchical' => false,
				'has_archive' => false,
				'menu_icon' => 'dashicons-groups',
				'show_in_rest' => true
			)
		);
	}
	add_action('init', 'dmgroup_employees_post_type');
endif;