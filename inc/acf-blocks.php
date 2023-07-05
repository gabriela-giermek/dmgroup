<?php

// Custom block categories
function filter_block_categories_when_post_provided( $block_categories, $editor_context ) {
	if ( ! empty( $editor_context->post ) ) {
		array_push(
			$block_categories,
			array(
				'slug'  => 'dmgroup',
				'title' => __( 'Bloki motywu', 'custom-plugin' ),
				'icon'  => null,
			)
		);
	}
	return $block_categories;
}
add_filter( 'block_categories_all', 'filter_block_categories_when_post_provided', 10, 2 );


// ACF custom blocks
$custom_blocks = glob( get_theme_file_path('/template-parts/blocks').'/**' );

foreach( $custom_blocks as $custom_block ) {
	if( file_exists( $custom_block.'/config.php' )) {
		require_once $custom_block.'/config.php';
	}
}


// Start index from 0
add_filter('acf/settings/row_index_offset', '__return_zero');