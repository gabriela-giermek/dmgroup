<?php

function dmgroup_hero_slider_block() {
	if( function_exists('acf_register_block_type') ) {
		acf_register_block_type(array(
			'name'              => 'hero-slider',
			'title'             => __('Slider'),
			'description'       => __('Slider w topie strony'),
			'render_template'   => 'template-parts/blocks/hero-slider/hero-slider.php',
			'category'          => 'dmgroup',
			'icon'              => 'slides',
			'keywords'          => array( 'slider' ),
		));
	}
}
add_action('acf/init', 'dmgroup_hero_slider_block');