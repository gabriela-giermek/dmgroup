<?php

// Admin theme settings
if( function_exists( 'acf_add_options_page' )) {
	acf_add_options_page(array(
		'page_title' 	=> 'Ustawienia motywu',
		'menu_title'	=> 'Ustawienia motywu',
		'menu_slug' 	=> 'theme-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> true
	));
  
  acf_add_options_sub_page(array(
    'page_title'  => 'Kontakt',
    'menu_title'  => 'Kontakt',
    'parent_slug' => 'theme-settings',
    'menu_slug' 	=> 'theme-contact-settings',
    'capability'	=> 'edit_posts'
  ));
  
  acf_add_options_sub_page(array(
    'page_title'  => 'Stopka',
    'menu_title'  => 'Stopka',
    'parent_slug' => 'theme-settings',
    'menu_slug' 	=> 'theme-footer-settings',
    'capability'	=> 'edit_posts'
  ));
}