<?php

function dmgroup_contact_details_block() {
	if( function_exists('acf_register_block_type') ) {
		acf_register_block_type(array(
			'name'              => 'contact-details',
			'title'             => __('Szczegóły kontaktu'),
			'description'       => __('Blok ze szczegółami kontaktu'),
			'render_template'   => 'template-parts/blocks/contact-details/contact-details.php',
			'category'          => 'dmgroup',
			'icon'              => 'location-alt',
			'keywords'          => array( 'kontakt' ),
		));
	}
}
add_action('acf/init', 'dmgroup_contact_details_block');