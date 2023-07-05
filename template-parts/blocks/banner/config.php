<?php

function dmgroup_banner_block() {
	if( function_exists('acf_register_block_type') ) {
		acf_register_block_type(array(
			'name'              => 'banner',
			'title'             => __('Banner'),
			'description'       => __('Banner'),
			'render_template'   => 'template-parts/blocks/banner/banner.php',
			'category'          => 'dmgroup',
			'icon'              => 'layout',
			'keywords'          => array( 'banner' ),
		));
	}
}
add_action('acf/init', 'dmgroup_banner_block');