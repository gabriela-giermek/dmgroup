<?php

function dmgroup_list_img_block() {
	if( function_exists('acf_register_block_type') ) {
		acf_register_block_type(array(
			'name'              => 'list-img',
			'title'             => __('Lista ze zdjęciem'),
			'description'       => __('Blok z listą i zdjęciem po prawej stronie'),
			'render_template'   => 'template-parts/blocks/list-img/list-img.php',
			'category'          => 'dmgroup',
			'icon'              => 'align-right',
			'keywords'          => array( 'lista' ),
		));
	}
}
add_action('acf/init', 'dmgroup_list_img_block');