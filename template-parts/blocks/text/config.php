<?php

function dmgroup_text_block() {
	if( function_exists('acf_register_block_type') ) {
		acf_register_block_type(array(
			'name'              => 'text',
			'title'             => __('Tekst'),
			'description'       => __('Blok tekstowy'),
			'render_template'   => 'template-parts/blocks/text/text.php',
			'category'          => 'dmgroup',
			'icon'              => 'text',
			'keywords'          => array( 'tekst' ),
		));
	}
}
add_action('acf/init', 'dmgroup_text_block');