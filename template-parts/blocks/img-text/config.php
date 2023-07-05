<?php

function dmgroup_img_text_block() {
	if( function_exists('acf_register_block_type') ) {
		acf_register_block_type(array(
			'name'              => 'img-text',
			'title'             => __('Tekst ze zdjęciem po lewej'),
			'description'       => __('Blok tekstowy ze zdjęciem po lewej stronie'),
			'render_template'   => 'template-parts/blocks/img-text/img-text.php',
			'category'          => 'dmgroup',
			'icon'              => 'align-left',
			'keywords'          => array( 'tekst', 'zdjęcie' ),
		));
	}
}
add_action('acf/init', 'dmgroup_img_text_block');