<?php

function dmgroup_img_text_top_block() {
	if( function_exists('acf_register_block_type') ) {
		acf_register_block_type(array(
			'name'              => 'img-text-top',
			'title'             => __('Tekst ze zdjęciem na górze'),
			'description'       => __('Blok tekstowy ze zdjęciem na górze'),
			'render_template'   => 'template-parts/blocks/img-text-top/img-text-top.php',
			'category'          => 'dmgroup',
			'icon'              => 'align-center',
			'keywords'          => array( 'tekst', 'zdjęcie' ),
		));
	}
}
add_action('acf/init', 'dmgroup_img_text_top_block');