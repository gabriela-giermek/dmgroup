<?php

function dmgroup_slider_logo_block() {
	if( function_exists('acf_register_block_type') ) {
		acf_register_block_type(array(
			'name'              => 'slider-logo',
			'title'             => __('Slider logo'),
			'description'       => __('Slider z logotypami producentów'),
			'render_template'   => 'template-parts/blocks/slider-logo/slider-logo.php',
			'category'          => 'dmgroup',
			'icon'              => 'slides',
			'keywords'          => array( 'slider' ),
		));
	}
}
add_action('acf/init', 'dmgroup_slider_logo_block');