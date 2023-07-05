<?php

function dmgroup_inquiry_form_block_types() {
	if( function_exists('acf_register_block_type') ) {
		acf_register_block_type(array(
			'name'              => 'inquiry-form',
			'title'             => __('Zapytanie ofertowe'),
			'description'       => __('Blok z formularzem kontaktowym'),
			'render_template'   => 'template-parts/blocks/inquiry-form/inquiry-form.php',
			'category'          => 'dmgroup',
			'icon'              => 'email-alt',
			'keywords'          => array( 'formularz kontaktowy' ),
		));
	}
}
add_action('acf/init', 'dmgroup_inquiry_form_block_types');