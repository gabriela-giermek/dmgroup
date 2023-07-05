<?php

function dmgroup_gallery_block() {
	if( function_exists('acf_register_block_type') ) {
		acf_register_block_type(array(
			'name'              => 'gallery',
			'title'             => __('Galeria zdjęć'),
			'description'       => __('Blok tekstowy z galerią zdjęć'),
			'render_template'   => 'template-parts/blocks/gallery/gallery.php',
			'category'          => 'dmgroup',
			'icon'              => 'slides',
			'keywords'          => array( 'galeria' ),
		));
	}
}
add_action('acf/init', 'dmgroup_gallery_block');