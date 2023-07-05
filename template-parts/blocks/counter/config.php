<?php

function dmgroup_counter_block() {
	if( function_exists('acf_register_block_type') ) {
		acf_register_block_type(array(
			'name'              => 'counter',
			'title'             => __('Licznik'),
			'description'       => __('Blok tekstowy licznikami'),
			'render_template'   => 'template-parts/blocks/counter/counter.php',
			'category'          => 'dmgroup',
			'icon'              => 'performance',
			'keywords'          => array( 'licznik' ),
		));
	}
}
add_action('acf/init', 'dmgroup_counter_block');