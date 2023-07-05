<?php

function dmgroup_offer_block() {
	if( function_exists('acf_register_block_type') ) {
		acf_register_block_type(array(
			'name'              => 'offer',
			'title'             => __('Oferta'),
			'description'       => __('Blok z ofertą'),
			'render_template'   => 'template-parts/blocks/offer/offer.php',
			'category'          => 'dmgroup',
			'icon'              => 'star-filled',
			'keywords'          => array( 'oferta' ),
		));
	}
}
add_action('acf/init', 'dmgroup_offer_block');