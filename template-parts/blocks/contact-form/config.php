<?php

function dmgroup_contact_form_block_types() {
	if( function_exists('acf_register_block_type') ) {
		acf_register_block_type(array(
			'name'              => 'contact-form',
			'title'             => __('Formularz kontaktowy'),
			'description'       => __('Formularz kontaktowy'),
			'render_template'   => 'template-parts/blocks/contact-form/contact-form.php',
			'category'          => 'dmgroup',
			'icon'              => 'email-alt',
			'keywords'          => array( 'formularz kontaktowy' ),
		));
	}
}
add_action('acf/init', 'dmgroup_contact_form_block_types');